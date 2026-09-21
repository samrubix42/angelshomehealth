<?php

use App\Models\Service;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Edit Service | Admin Portal')] class extends Component {
    public int $serviceId;
    public string $title = '';
    public string $slug = '';
    public string $short_description = '';
    public string $description = '';
    public string $meta_title = '';
    public string $meta_description = '';
    public string $meta_keywords = '';
    public string $image = '';
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
            'image' => 'nullable|string|max:255',
            'is_active' => 'boolean',
        ]);

        $service = Service::findOrFail($this->serviceId);
        $service->update($validated);

        session()->flash('message', "Service '{$service->title}' updated successfully!");
        return redirect()->route('admin.services.index');
    }
};