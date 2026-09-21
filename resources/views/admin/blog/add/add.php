<?php

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

new #[Layout('layouts::admin')] #[Title('Add New Article | Admin Portal')] class extends Component
{
    use WithFileUploads;

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

    #[Computed]
    public function categories()
    {
        return Category::where('is_activate', true)->orderBy('title')->get();
    }

    public function updatedTitle($value): void
    {

        $this->slug = Str::slug($value);

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
            'slug' => 'required|string|max:255|unique:blogs,slug',
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

        Blog::create($validated);

        session()->flash('message', "Blog article '{$this->title}' created successfully!");

        return redirect()->route('admin.blogs.index');
    }
};
