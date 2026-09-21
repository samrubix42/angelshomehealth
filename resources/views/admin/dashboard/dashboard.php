<?php

use App\Models\Contact;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::admin')] #[Title('Dashboard | Angels Home Health Admin')] class extends Component
{
    public string $statusFilter = 'All'; // All, Unread, Read

    public string $search = '';

    #[Computed]
    public function inquiries()
    {
        return Contact::query()
            ->when($this->search !== '', function ($query) {
                $query->where(function ($q) {
                    $q->where('name', 'like', '%'.$this->search.'%')
                        ->orWhere('email', 'like', '%'.$this->search.'%')
                        ->orWhere('phone', 'like', '%'.$this->search.'%')
                        ->orWhere('service', 'like', '%'.$this->search.'%');
                });
            })
            ->when($this->statusFilter === 'Unread', function ($query) {
                $query->where('is_read', false);
            })
            ->when($this->statusFilter === 'Read', function ($query) {
                $query->where('is_read', true);
            })
            ->latest()
            ->take(8)
            ->get();
    }

    #[Computed]
    public function totalInquiries(): int
    {
        return Contact::count();
    }

    #[Computed]
    public function unreadInquiries(): int
    {
        return Contact::where('is_read', false)->count();
    }

    public function toggleRead(int $id): void
    {
        $contact = Contact::findOrFail($id);
        $contact->is_read = ! $contact->is_read;
        $contact->save();

        $this->dispatch('toast-show', [
            'message' => 'Inquiry status updated successfully!',
            'type' => 'success',
            'position' => 'top-right',
        ]);
    }

    public function deleteInquiry(int $id): void
    {
        Contact::destroy($id);

        $this->dispatch('toast-show', [
            'message' => 'Inquiry removed successfully!',
            'type' => 'success',
            'position' => 'top-right',
        ]);
    }
};
