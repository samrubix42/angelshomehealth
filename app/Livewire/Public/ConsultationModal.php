<?php

namespace App\Livewire\Public;

use App\Models\Contact;
use App\Models\Service;
use Livewire\Attributes\On;
use Livewire\Component;

class ConsultationModal extends Component
{
    public bool $open = false;

    public string $name = '';

    public string $phone = '';

    public string $email = '';

    public string $service = '';

    public string $notes = '';

    public bool $formSubmitted = false;

    public function mount(): void
    {
        $firstService = Service::where('is_active', true)->first();
        if ($firstService) {
            $this->service = $firstService->title;
        }
    }

    #[On('open-consultation-modal')]
    public function openModal($service = null): void
    {
        $this->resetValidation();
        $this->formSubmitted = false;
        $this->name = '';
        $this->phone = '';
        $this->email = '';
        $this->notes = '';

        if ($service && is_string($service)) {
            $this->service = $service;
        } else {
            $firstService = Service::where('is_active', true)->first();
            if ($firstService) {
                $this->service = $firstService->title;
            }
        }

        $this->open = true;
    }

    public function closeModal(): void
    {
        $this->open = false;
        $this->formSubmitted = false;
    }

    public function submitConsultation(): void
    {
        $validated = $this->validate([
            'name' => 'required|string|min:2|max:255',
            'phone' => 'required|string|min:7|max:50',
            'email' => 'required|email|max:255',
            'service' => 'required|string|max:255',
            'notes' => 'nullable|string|max:1000',
        ], [
            'name.required' => 'Please provide your full name.',
            'phone.required' => 'Please provide a valid phone number.',
            'email.required' => 'Please enter a valid email address.',
            'service.required' => 'Please select a care service.',
        ]);

        Contact::create([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'service' => $validated['service'],
            'notes' => $validated['notes'] ?? '',
            'is_read' => false,
        ]);

        $this->formSubmitted = true;
    }

    public function render()
    {
        $servicesList = Service::where('is_active', true)->orderBy('title')->get();

        return view('livewire.public.consultation-modal', [
            'servicesList' => $servicesList,
        ]);
    }
}
