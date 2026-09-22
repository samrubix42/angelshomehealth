<?php

use App\Models\Contact;
use App\Models\Service;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')] #[Title('Contact Us | Angels Home Health of Florida')] class extends Component
{
    public string $name = '';

    public string $phone = '';

    public string $email = '';

    public string $service = 'Wound Care';

    public string $notes = '';

    public bool $formSubmitted = false;

    #[Computed]
    public function services()
    {
        return Service::where('is_active', true)->orderBy('id')->get();
    }

    public function submitContact(): void
    {
        $validated = $this->validate([
            'name' => 'required|min:2',
            'phone' => 'required|min:7',
            'email' => 'required|email',
            'service' => 'required',
            'notes' => 'nullable|string',
        ]);

        Contact::create([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'service' => $validated['service'],
            'notes' => $this->notes,
            'is_read' => false,
        ]);

        $this->formSubmitted = true;
    }
};
