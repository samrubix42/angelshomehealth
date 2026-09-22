<?php

use App\Models\Blog;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('layouts::app')] class extends Component
{
    public ?string $slug = null;

    public bool $isSaved = false;

    public function mount(?string $slug = null): void
    {
        $this->slug = $slug;

        if (! $this->blog) {
            abort(404);
        }
    }

    public function toggleSave(): void
    {
        $this->isSaved = ! $this->isSaved;
    }

    #[Computed]
    public function blog()
    {
        if (! $this->slug) {
            return Blog::with('category')->where('is_active', true)->latest()->first();
        }

        return Blog::with('category')
            ->where('is_active', true)
            ->where('slug', $this->slug)
            ->first();
    }

    #[Computed]
    public function relatedBlogs()
    {
        if (! $this->blog) {
            return collect();
        }

        $related = Blog::with('category')
            ->where('is_active', true)
            ->where('id', '!=', $this->blog->id)
            ->when($this->blog->category_id, function ($q) {
                $q->where('category_id', $this->blog->category_id);
            })
            ->latest()
            ->take(3)
            ->get();

        if ($related->count() < 3) {
            $existingIds = $related->pluck('id')->push($this->blog->id)->toArray();
            $additional = Blog::with('category')
                ->where('is_active', true)
                ->whereNotIn('id', $existingIds)
                ->latest()
                ->take(3 - $related->count())
                ->get();

            $related = $related->merge($additional);
        }

        return $related;
    }

    public function getReadTime(?string $text): string
    {
        $wordCount = str_word_count(strip_tags($text ?? ''));
        $minutes = max(1, (int) ceil($wordCount / 200));

        return $minutes.' min read';
    }

    public function getTagsProperty(): array
    {
        if (! $this->blog || empty($this->blog->meta_keywords)) {
            return [];
        }

        return array_map('trim', explode(',', $this->blog->meta_keywords));
    }
};
