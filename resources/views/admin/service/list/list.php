<?php

use App\Models\Service;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::admin')] #[Title('Services Management | Admin Portal')] class extends Component
{
    public string $search = '';

    public string $statusFilter = 'All';

    public ?int $deletingServiceId = null;

    public bool $showDeleteModal = false;

    public string $feedbackMessage = '';

    public function mount(): void
    {
        if (session()->has('message')) {
            $this->feedbackMessage = session('message');
        }
    }

    #[Computed]
    public function services()
    {
        return Service::query()
            ->when($this->search !== '', function ($query) {
                $query->where('title', 'like', '%'.$this->search.'%')
                    ->orWhere('short_description', 'like', '%'.$this->search.'%')
                    ->orWhere('slug', 'like', '%'.$this->search.'%');
            })
            ->when($this->statusFilter === 'Active', fn ($q) => $q->where('is_active', true))
            ->when($this->statusFilter === 'Featured', fn ($q) => $q->where('is_featured', true))
            ->when($this->statusFilter === 'Hidden', fn ($q) => $q->where('is_active', false))
            ->orderBy('id', 'desc')
            ->get();
    }

    public function toggleActive(int $id): void
    {
        $service = Service::findOrFail($id);
        $service->is_active = ! $service->is_active;
        $service->save();

        $this->dispatch('toast-show', [
            'message' => "Service '{$service->title}' status updated.",
            'type' => 'info',
            'position' => 'top-right',
        ]);
    }

    public function toggleFeatured(int $id): void
    {
        $service = Service::findOrFail($id);
        $service->is_featured = ! $service->is_featured;
        $service->save();

        $statusText = $service->is_featured ? 'featured on home page' : 'unfeatured from home page';
        $this->dispatch('toast-show', [
            'message' => "Service '{$service->title}' is now {$statusText}.",
            'type' => 'success',
            'position' => 'top-right',
        ]);
    }

    public function openDeleteModal(int $id): void
    {
        $this->deletingServiceId = $id;
        $this->showDeleteModal = true;
    }

    public function closeDeleteModal(): void
    {
        $this->deletingServiceId = null;
        $this->showDeleteModal = false;
    }

    public function delete(): void
    {
        if ($this->deletingServiceId) {
            $service = Service::findOrFail($this->deletingServiceId);
            $title = $service->title;
            $service->delete();

            $this->dispatch('toast-show', [
                'message' => "Service '{$title}' deleted successfully.",
                'type' => 'success',
                'position' => 'top-right',
            ]);
        }

        $this->closeDeleteModal();
    }
};
