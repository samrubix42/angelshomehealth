<?php

use App\Models\Contact;
use App\Models\Service;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('layouts::app')] class extends Component
{
    public ?string $slug = null;

    // Quick Inquiry Form State
    public string $name = '';

    public string $phone = '';

    public string $email = '';

    public string $notes = '';

    public string $submittedName = '';

    public string $submittedPhone = '';

    public bool $formSubmitted = false;

    public function mount(?string $slug = null): void
    {
        $this->slug = $slug;

        if (! $this->service) {
            abort(404);
        }
    }

    #[Computed]
    public function service()
    {
        if (! $this->slug) {
            return Service::where('is_active', true)->first();
        }

        return Service::where('is_active', true)
            ->where('slug', $this->slug)
            ->first();
    }

    #[Computed]
    public function otherServices()
    {
        if (! $this->service) {
            return collect();
        }

        return Service::where('is_active', true)
            ->where('id', '!=', $this->service->id)
            ->inRandomOrder()
            ->take(3)
            ->get();
    }

    public function submitInquiry(): void
    {
        $validated = $this->validate([
            'name' => 'required|min:2',
            'phone' => 'required|min:7',
            'email' => 'required|email',
        ]);

        Contact::create([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'service' => $this->service->title ?? 'General Care Inquiry',
            'notes' => $this->notes,
            'is_read' => false,
        ]);

        $this->submittedName = $validated['name'];
        $this->submittedPhone = $validated['phone'];
        $this->formSubmitted = true;

        $this->reset(['name', 'phone', 'email', 'notes']);

        $this->dispatch('toast-show', [
            'message' => 'Consultation request submitted successfully!',
            'type' => 'success',
            'position' => 'top-right',
        ]);
    }
};
