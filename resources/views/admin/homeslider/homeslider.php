<?php

use App\Models\HomeSlider;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

new #[Layout('layouts::admin')] #[Title('Home Sliders Management | Angels Home Health Admin')] class extends Component
{
    use WithFileUploads;

    public ?int $sliderId = null;

    public string $title = '';

    public string $paragraph = '';

    public string $image = '';

    public $imageUpload = null;

    public string $btn_1 = '';

    public string $btn_1_url = '';

    public string $btn_2 = '';

    public string $btn_2_url = '';

    public bool $is_active = true;

    // Modal controls
    public bool $showModal = false;

    public bool $isEditing = false;

    public bool $showDeleteModal = false;

    public ?int $deleteId = null;

    // Search and Filters
    public string $search = '';

    public string $statusFilter = 'All';

    #[Computed]
    public function sliders()
    {
        return HomeSlider::query()
            ->when($this->search !== '', function ($query) {
                $query->where('title', 'like', '%'.$this->search.'%')
                    ->orWhere('paragraph', 'like', '%'.$this->search.'%')
                    ->orWhere('btn_1', 'like', '%'.$this->search.'%')
                    ->orWhere('btn_2', 'like', '%'.$this->search.'%');
            })
            ->when($this->statusFilter === 'Active', fn ($q) => $q->where('is_active', true))
            ->when($this->statusFilter === 'Hidden', fn ($q) => $q->where('is_active', false))
            ->orderBy('id', 'desc')
            ->get();
    }

    public function openCreateModal(): void
    {
        $this->resetValidation();
        $this->sliderId = null;
        $this->title = '';
        $this->paragraph = '';
        $this->image = '';
        $this->imageUpload = null;
        $this->btn_1 = '';
        $this->btn_1_url = '';
        $this->btn_2 = '';
        $this->btn_2_url = '';
        $this->is_active = true;
        $this->isEditing = false;
        $this->showModal = true;
    }

    public function openEditModal(int $id): void
    {
        $this->resetValidation();
        $slider = HomeSlider::findOrFail($id);

        $this->sliderId = $slider->id;
        $this->title = $slider->title;
        $this->paragraph = $slider->paragraph ?? '';
        $this->image = $slider->image ?? '';
        $this->imageUpload = null;
        $this->btn_1 = $slider->btn_1 ?? '';
        $this->btn_1_url = $slider->btn_1_url ?? '';
        $this->btn_2 = $slider->btn_2 ?? '';
        $this->btn_2_url = $slider->btn_2_url ?? '';
        $this->is_active = $slider->is_active;

        $this->isEditing = true;
        $this->showModal = true;
    }

    public function closeModal(): void
    {
        $this->showModal = false;
        $this->imageUpload = null;
        $this->resetValidation();
    }

    public function removeImageUpload(): void
    {
        $this->imageUpload = null;
        $this->dispatch('toast-show', [
            'message' => 'Uploaded image cleared.',
            'type' => 'info',
            'position' => 'top-right',
        ]);
    }

    public function removeExistingImage(): void
    {
        $this->image = '';
        $this->dispatch('toast-show', [
            'message' => 'Image removed.',
            'type' => 'info',
            'position' => 'top-right',
        ]);
    }

    public function save(): void
    {
        $validated = $this->validate([
            'title' => 'required|string|max:255',
            'paragraph' => 'nullable|string|max:1000',
            'image' => 'nullable|string|max:500',
            'imageUpload' => 'nullable|image|max:1024',
            'btn_1' => 'nullable|string|max:255',
            'btn_1_url' => 'nullable|string|max:255',
            'btn_2' => 'nullable|string|max:255',
            'btn_2_url' => 'nullable|string|max:255',
            'is_active' => 'boolean',
        ], [
            'imageUpload.max' => 'The image size must not exceed 1MB (1024 KB).',
            'imageUpload.image' => 'The file must be a valid image format.',
        ]);

        if ($this->imageUpload) {
            $path = $this->imageUpload->store('sliders', 'public');
            $validated['image'] = '/storage/'.$path;
        }

        unset($validated['imageUpload']);

        HomeSlider::updateOrCreate(
            ['id' => $this->sliderId],
            $validated
        );

        $message = $this->isEditing
            ? 'Hero slide updated successfully.'
            : 'New hero slide added successfully.';

        $this->dispatch('toast-show', [
            'message' => $message,
            'type' => 'success',
            'position' => 'top-right',
        ]);

        $this->closeModal();
    }

    public function toggleActive(int $id): void
    {
        $slider = HomeSlider::findOrFail($id);
        $slider->is_active = ! $slider->is_active;
        $slider->save();

        $this->dispatch('toast-show', [
            'message' => "Slide '{$slider->title}' status updated.",
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
        $this->deleteId = null;
        $this->showDeleteModal = false;
    }

    public function delete(): void
    {
        if ($this->deleteId) {
            $slider = HomeSlider::findOrFail($this->deleteId);
            $title = $slider->title;
            $slider->delete();

            $this->dispatch('toast-show', [
                'message' => "Slide '{$title}' deleted successfully.",
                'type' => 'success',
                'position' => 'top-right',
            ]);
        }

        $this->closeDeleteModal();
    }
};
