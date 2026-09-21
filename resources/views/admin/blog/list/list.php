<?php

use App\Models\Blog;
use App\Models\Category;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::admin')] #[Title('Blogs Management | Admin Portal')] class extends Component
{
    public string $search = '';

    public string $statusFilter = 'All';

    public string $categoryFilter = 'All';

    public ?int $deletingBlogId = null;

    public bool $showDeleteModal = false;

    #[Computed]
    public function blogs()
    {
        return Blog::query()
            ->with('category')
            ->when($this->search !== '', function ($query) {
                $query->where('title', 'like', '%'.$this->search.'%')
                    ->orWhere('short_description', 'like', '%'.$this->search.'%')
                    ->orWhere('slug', 'like', '%'.$this->search.'%');
            })
            ->when($this->statusFilter === 'Active', fn ($q) => $q->where('is_active', true))
            ->when($this->statusFilter === 'Hidden', fn ($q) => $q->where('is_active', false))
            ->when($this->categoryFilter !== 'All', fn ($q) => $q->where('category_id', $this->categoryFilter))
            ->orderBy('id', 'desc')
            ->get();
    }

    #[Computed]
    public function categories()
    {
        return Category::orderBy('title')->get();
    }

    public function toggleActive(int $id): void
    {
        $blog = Blog::findOrFail($id);
        $blog->is_active = ! $blog->is_active;
        $blog->save();

        $this->dispatch('toast-show', [
            'message' => "Blog post '{$blog->title}' status updated.",
            'type' => 'info',
            'position' => 'top-right',
        ]);
    }

    public function openDeleteModal(int $id): void
    {
        $this->deletingBlogId = $id;
        $this->showDeleteModal = true;
    }

    public function closeDeleteModal(): void
    {
        $this->deletingBlogId = null;
        $this->showDeleteModal = false;
    }

    public function delete(): void
    {
        if ($this->deletingBlogId) {
            $blog = Blog::findOrFail($this->deletingBlogId);
            $title = $blog->title;
            $blog->delete();

            $this->dispatch('toast-show', [
                'message' => "Blog post '{$title}' deleted successfully.",
                'type' => 'success',
                'position' => 'top-right',
            ]);
        }

        $this->closeDeleteModal();
    }
};
