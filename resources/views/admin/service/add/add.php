<?php

use App\Models\Service;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

new #[Layout('layouts::admin')] #[Title('Add New Service | Admin Portal')] class extends Component
{
    use WithFileUploads;

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

    public function updatedTitle($value): void
    {
        if (empty($this->slug)) {
            $this->slug = Str::slug($value);
        }
    }

    public function removeImageUpload(): void
    {
        $this->imageUpload = null;
    }

    public function save()
    {
        $validated = $this->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:services,slug',
            'short_description' => 'required|string|max:500',
            'description' => 'required|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string|max:255',
            'image' => 'nullable|string|max:500',
            'imageUpload' => 'nullable|image|max:1024',
            'is_active' => 'boolean',
        ], [
            'imageUpload.max' => 'The image size must not exceed 1MB (1024 KB).',
            'imageUpload.image' => 'The file must be a valid image format.',
        ]);

        if ($this->imageUpload) {
            $path = $this->imageUpload->store('services', 'public');
            $validated['image'] = '/storage/'.$path;
        }

        unset($validated['imageUpload']);

        Service::create($validated);

        session()->flash('message', "Service '{$this->title}' created successfully!");

        return redirect()->route('admin.services.index');
    }
};
