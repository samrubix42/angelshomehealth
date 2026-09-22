<?php

use App\Models\Blog;
use App\Models\Category;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')] #[Title('Blog & Health Insights | Angels Home Health of Florida')] class extends Component
{
    public string $search = '';

    public string $selectedCategory = 'All';

    public function selectCategory(string $category): void
    {
        $this->selectedCategory = $category;
    }

    #[Computed]
    public function categories()
    {
        return Category::where('is_activate', true)->orderBy('title')->get();
    }

    #[Computed]
    public function featuredBlog()
    {
        return Blog::query()
            ->with('category')
            ->where('is_active', true)
            ->when($this->search !== '', function ($query) {
                $query->where(function ($q) {
                    $q->where('title', 'like', '%'.$this->search.'%')
                        ->orWhere('short_description', 'like', '%'.$this->search.'%')
                        ->orWhere('description', 'like', '%'.$this->search.'%');
                });
            })
            ->when($this->selectedCategory !== 'All', function ($query) {
                $query->whereHas('category', function ($q) {
                    $q->where('slug', $this->selectedCategory);
                });
            })
            ->latest()
            ->first();
    }

    #[Computed]
    public function blogs()
    {
        $featured = $this->featuredBlog;

        return Blog::query()
            ->with('category')
            ->where('is_active', true)
            ->when($featured, fn ($query) => $query->where('id', '!=', $featured->id))
            ->when($this->search !== '', function ($query) {
                $query->where(function ($q) {
                    $q->where('title', 'like', '%'.$this->search.'%')
                        ->orWhere('short_description', 'like', '%'.$this->search.'%')
                        ->orWhere('description', 'like', '%'.$this->search.'%');
                });
            })
            ->when($this->selectedCategory !== 'All', function ($query) {
                $query->whereHas('category', function ($q) {
                    $q->where('slug', $this->selectedCategory);
                });
            })
            ->latest()
            ->get();
    }

    public function getReadTime(?string $text): string
    {
        $wordCount = str_word_count(strip_tags($text ?? ''));
        $minutes = max(1, (int) ceil($wordCount / 200));

        return $minutes.' min read';
    }
};
