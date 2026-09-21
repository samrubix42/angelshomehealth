<?php

use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::admin')] #[Title('Category Management | Admin Portal')] class extends Component
{
    // Form fields
    public ?int $categoryId = null;

    public string $title = '';

    public string $slug = '';

    public bool $is_activate = true;

    // Modal state controls
    public bool $showModal = false;

    public bool $isEditing = false;

    public bool $showDeleteModal = false;

    public ?int $deleteId = null;

    // Search and Filters
    public string $search = '';

    public string $statusFilter = 'All';

    // Feedback message
    public string $feedbackMessage = '';

    public function updatedTitle($value): void
    {
        if (! $this->isEditing || empty($this->slug)) {
            $this->slug = Str::slug($value);
        }
    }

    public function openCreateModal(): void
    {
        $this->resetValidation();
        $this->categoryId = null;
        $this->title = '';
        $this->slug = '';
        $this->is_activate = true;
        $this->isEditing = false;
        $this->showModal = true;
    }

    public function openEditModal(int $id): void
    {
        $this->resetValidation();
        $category = Category::findOrFail($id);

        $this->categoryId = $category->id;
        $this->title = $category->title;
        $this->slug = $category->slug;
        $this->is_activate = (bool) $category->is_activate;

        $this->isEditing = true;
        $this->showModal = true;
    }

    public function closeModal(): void
    {
        $this->showModal = false;
        $this->resetValidation();
    }

    public function save(): void
    {
        $rules = [
            'title' => 'required|string|min:2|max:255',
            'slug' => 'required|string|min:2|max:255|unique:categories,slug,'.($this->categoryId ?? 'NULL'),
            'is_activate' => 'boolean',
        ];

        $validated = $this->validate($rules);

        Category::updateOrCreate(
            ['id' => $this->categoryId],
            [
                'title' => $this->title,
                'slug' => $this->slug,
                'is_activate' => $this->is_activate,
            ]
        );

        $message = $this->isEditing
            ? "Category '{$this->title}' updated successfully."
            : "New category '{$this->title}' created successfully.";

        $this->dispatch('toast-show', [
            'message' => $message,
            'type' => 'success',
            'position' => 'top-right',
        ]);

        $this->showModal = false;
    }

    public function toggleActivate(int $id): void
    {
        $category = Category::findOrFail($id);
        $category->is_activate = ! $category->is_activate;
        $category->save();

        $this->dispatch('toast-show', [
            'message' => "Category '{$category->title}' status updated.",
            'type' => 'info',
            'position' => 'top-right',
        ]);
    }

    public function openDeleteModal(int $id): void
    {
        $this->deleteId = $id;
        $this->showDeleteModal = true;
    }

    public function closeDeleteModal(): void
    {
        $this->showDeleteModal = false;
        $this->deleteId = null;
    }

    public function delete(): void
    {
        if ($this->deleteId) {
            $category = Category::find($this->deleteId);
            if ($category) {
                $category->delete();
                $this->dispatch('toast-show', [
                    'message' => "Category '{$category->title}' deleted successfully.",
                    'type' => 'success',
                    'position' => 'top-right',
                ]);
            }
        }

        $this->showDeleteModal = false;
        $this->deleteId = null;
    }

    #[Computed]
    public function categories()
    {
        return Category::query()
            ->when($this->statusFilter === 'Active', fn ($q) => $q->where('is_activate', true))
            ->when($this->statusFilter === 'Disabled', fn ($q) => $q->where('is_activate', false))
            ->when(! empty($this->search), function ($q) {
                $q->where('title', 'like', '%'.$this->search.'%')
                    ->orWhere('slug', 'like', '%'.$this->search.'%');
            })
            ->latest()
            ->get();
    }
};
