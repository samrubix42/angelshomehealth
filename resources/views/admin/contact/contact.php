<?php

use App\Models\Contact;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

new #[Layout('layouts::admin')] #[Title('Inquiries & Contacts | Angels Home Health Admin')] class extends Component
{
    use WithPagination;

    // Filters & Search
    public string $search = '';

    public string $statusFilter = 'All'; // All, Unread, Read

    // Selected Contact for Detail/Modal View
    public ?int $selectedContactId = null;

    public bool $isDetailModalOpen = false;

    // Delete Confirmation
    public ?int $deleteContactId = null;

    public bool $isDeleteModalOpen = false;

    // Create / Edit modal state
    public bool $isFormModalOpen = false;

    public bool $isEditMode = false;

    public ?int $formContactId = null;

    public string $name = '';

    public string $phone = '';

    public string $email = '';

    public string $service = '';

    public string $notes = '';

    public bool $is_read = false;

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function updatingStatusFilter(): void
    {
        $this->resetPage();
    }

    #[Computed]
    public function contacts()
    {
        return Contact::query()
            ->when($this->search !== '', function ($query) {
                $query->where(function ($q) {
                    $q->where('name', 'like', '%'.$this->search.'%')
                        ->orWhere('email', 'like', '%'.$this->search.'%')
                        ->orWhere('phone', 'like', '%'.$this->search.'%')
                        ->orWhere('service', 'like', '%'.$this->search.'%')
                        ->orWhere('notes', 'like', '%'.$this->search.'%');
                });
            })
            ->when($this->statusFilter === 'Unread', function ($query) {
                $query->where('is_read', false);
            })
            ->when($this->statusFilter === 'Read', function ($query) {
                $query->where('is_read', true);
            })
            ->latest()
            ->paginate(10);
    }

    #[Computed]
    public function selectedContact(): ?Contact
    {
        if (! $this->selectedContactId) {
            return null;
        }

        return Contact::find($this->selectedContactId);
    }

    #[Computed]
    public function totalCount(): int
    {
        return Contact::count();
    }

    #[Computed]
    public function unreadCount(): int
    {
        return Contact::where('is_read', false)->count();
    }

    #[Computed]
    public function readCount(): int
    {
        return Contact::where('is_read', true)->count();
    }

    // Toggle Read Status directly from table
    public function toggleRead(int $id): void
    {
        $contact = Contact::findOrFail($id);
        $contact->is_read = ! $contact->is_read;
        $contact->save();

        $statusText = $contact->is_read ? 'marked as read' : 'marked as unread';

        $this->dispatch('toast-show', [
            'message' => "Inquiry from {$contact->name} {$statusText}!",
            'type' => 'success',
            'position' => 'top-right',
        ]);
    }

    // Open detail modal and automatically mark as read
    public function viewDetails(int $id): void
    {
        $contact = Contact::findOrFail($id);
        $this->selectedContactId = $contact->id;

        if (! $contact->is_read) {
            $contact->is_read = true;
            $contact->save();
        }

        $this->isDetailModalOpen = true;
    }

    public function closeDetailModal(): void
    {
        $this->isDetailModalOpen = false;
        $this->selectedContactId = null;
    }

    // Create Modal
    public function openCreateModal(): void
    {
        $this->resetValidation();
        $this->isEditMode = false;
        $this->formContactId = null;
        $this->name = '';
        $this->phone = '';
        $this->email = '';
        $this->service = 'Skilled Nursing & Rehabilitation';
        $this->notes = '';
        $this->is_read = false;

        $this->isFormModalOpen = true;
    }

    // Edit Modal
    public function openEditModal(int $id): void
    {
        $this->resetValidation();
        $contact = Contact::findOrFail($id);

        $this->isEditMode = true;
        $this->formContactId = $contact->id;
        $this->name = $contact->name;
        $this->phone = $contact->phone;
        $this->email = $contact->email;
        $this->service = (string) $contact->service;
        $this->notes = (string) $contact->notes;
        $this->is_read = (bool) $contact->is_read;

        $this->isFormModalOpen = true;
    }

    public function closeFormModal(): void
    {
        $this->isFormModalOpen = false;
        $this->resetValidation();
    }

    public function saveContact(): void
    {
        $this->validate([
            'name' => 'required|min:2|max:100',
            'phone' => 'required|min:7|max:50',
            'email' => 'required|email|max:150',
            'service' => 'nullable|string|max:150',
            'notes' => 'nullable|string|max:2000',
            'is_read' => 'boolean',
        ]);

        if ($this->isEditMode && $this->formContactId) {
            $contact = Contact::findOrFail($this->formContactId);
            $contact->update([
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email,
                'service' => $this->service,
                'notes' => $this->notes,
                'is_read' => $this->is_read,
            ]);

            $this->dispatch('toast-show', [
                'message' => 'Contact inquiry updated successfully!',
                'type' => 'success',
                'position' => 'top-right',
            ]);
        } else {
            Contact::create([
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email,
                'service' => $this->service,
                'notes' => $this->notes,
                'is_read' => $this->is_read,
            ]);

            $this->dispatch('toast-show', [
                'message' => 'New contact inquiry created successfully!',
                'type' => 'success',
                'position' => 'top-right',
            ]);
        }

        $this->isFormModalOpen = false;
    }

    // Delete confirmation
    public function confirmDelete(int $id): void
    {
        $this->deleteContactId = $id;
        $this->isDeleteModalOpen = true;
    }

    public function deleteContact(): void
    {
        if ($this->deleteContactId) {
            $contact = Contact::find($this->deleteContactId);
            if ($contact) {
                $contactName = $contact->name;
                $contact->delete();

                $this->dispatch('toast-show', [
                    'message' => "Inquiry from {$contactName} deleted successfully!",
                    'type' => 'success',
                    'position' => 'top-right',
                ]);
            }
        }

        $this->isDeleteModalOpen = false;
        $this->deleteContactId = null;

        if ($this->isDetailModalOpen) {
            $this->isDetailModalOpen = false;
            $this->selectedContactId = null;
        }
    }

    public function closeDeleteModal(): void
    {
        $this->isDeleteModalOpen = false;
        $this->deleteContactId = null;
    }

    // Mark all as read
    public function markAllAsRead(): void
    {
        Contact::where('is_read', false)->update(['is_read' => true]);

        $this->dispatch('toast-show', [
            'message' => 'All inquiries marked as read!',
            'type' => 'success',
            'position' => 'top-right',
        ]);
    }
};
