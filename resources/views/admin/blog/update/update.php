<?php

use App\Models\Blog;
use App\Models\Category;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

new #[Layout('layouts::admin')] #[Title('Edit Article | Admin Portal')] class extends Component
{
    use WithFileUploads;

    public int $blogId;

    public ?int $category_id = null;

    public string $title = '';

    public string $slug = '';

    public string $short_description = '';

    public string $description = '';

    public string $meta_title = '';

    public string $meta_description = '';

    public string $meta_keywords = '';

    public string $image = '';

    public $imageUpload = null;

    public bool $is_active = true;

    public function mount(Blog $blog): void
    {
        $this->blogId = $blog->id;
        $this->category_id = $blog->category_id;
        $this->title = $blog->title;
        $this->slug = $blog->slug;
        $this->short_description = $blog->short_description ?? '';
        $this->description = $blog->description ?? '';
        $this->meta_title = $blog->meta_title ?? '';
        $this->meta_description = $blog->meta_description ?? '';
        $this->meta_keywords = $blog->meta_keywords ?? '';
        $this->image = $blog->image ?? '';
        $this->is_active = (bool) $blog->is_active;
    }

    #[Computed]
    public function categories()
    {
        return Category::where('is_activate', true)->orderBy('title')->get();
    }

    public function removeImageUpload(): void
    {
        $this->imageUpload = null;
        $this->dispatch('toast-show', [
            'message' => 'Image removed successfully!',
            'type' => 'success',
            'position' => 'top-right',
        ]);
    }

    public function save()
    {
        $validated = $this->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:blogs,slug,'.$this->blogId,
            'short_description' => 'nullable|string|max:500',
            'description' => 'required|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string|max:255',
            'image' => 'nullable|string|max:500',
            'imageUpload' => 'nullable|image|max:1024',
            'is_active' => 'boolean',
        ], [
            'category_id.required' => 'Please select a category for this article.',
            'imageUpload.max' => 'The image size must not exceed 1MB (1024 KB).',
            'imageUpload.image' => 'The file must be a valid image format.',
        ]);

        if ($this->imageUpload) {
            $path = $this->imageUpload->store('blogs', 'public');
            $validated['image'] = '/storage/'.$path;
        }

        unset($validated['imageUpload']);

        $blog = Blog::findOrFail($this->blogId);
        $blog->update($validated);

        session()->flash('message', "Blog article '{$blog->title}' updated successfully!");

        return redirect()->route('admin.blogs.index');
    }
};
