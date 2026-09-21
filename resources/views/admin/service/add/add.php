<?php

use App\Models\Service;
use Illuminate\Support\Str;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Add New Service | Admin Portal')] class extends Component {
    public string $title = '';
    public string $slug = '';
    public string $short_description = '';
    public string $description = '';
    public string $meta_title = '';
    public string $meta_description = '';
    public string $meta_keywords = '';
    public string $image = '';
    public bool $is_active = true;

    public function updatedTitle($value): void
    {
        if (empty($this->slug)) {
            $this->slug = Str::slug($value);
        }
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
            'image' => 'nullable|string|max:255',
            'is_active' => 'boolean',
        ]);

        Service::create($validated);

        session()->flash('message', "Service '{$this->title}' created successfully!");
        return redirect()->route('admin.services.index');
    }
};