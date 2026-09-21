<?php

use App\Models\Service;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Services Management | Admin Portal')] class extends Component {
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
            ->when($this->statusFilter === 'Hidden', fn ($q) => $q->where('is_active', false))
            ->orderBy('id', 'desc')
            ->get();
    }

    public function toggleActive(int $id): void
    {
        $service = Service::findOrFail($id);
        $service->is_active = !$service->is_active;
        $service->save();

        $this->feedbackMessage = "Service '{$service->title}' status updated.";
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

            $this->feedbackMessage = "Service '{$title}' deleted successfully.";
        }

        $this->closeDeleteModal();
    }
};