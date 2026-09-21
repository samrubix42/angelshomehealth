<?php

use App\Models\Service;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

new #[Layout('layouts::admin')] #[Title('Edit Service | Admin Portal')] class extends Component
{
    use WithFileUploads;

    public int $serviceId;

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

    public function mount(Service $service): void
    {
        $this->serviceId = $service->id;
        $this->title = $service->title;
        $this->slug = $service->slug;
        $this->short_description = $service->short_description ?? '';
        $this->description = $service->description ?? '';
        $this->meta_title = $service->meta_title ?? '';
        $this->meta_description = $service->meta_description ?? '';
        $this->meta_keywords = $service->meta_keywords ?? '';
        $this->image = $service->image ?? '';
        $this->is_active = (bool) $service->is_active;
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
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:services,slug,'.$this->serviceId,
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

        $service = Service::findOrFail($this->serviceId);
        $service->update($validated);

        session()->flash('message', "Service '{$service->title}' updated successfully!");

        return redirect()->route('admin.services.index');
    }
};
