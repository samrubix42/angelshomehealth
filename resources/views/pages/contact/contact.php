<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')] #[Title('Contact Us | Angels Home Health of Florida')] class extends Component
{
    public string $name = '';

    public string $phone = '';

    public string $email = '';

    public string $service = 'Skilled Nursing & Rehabilitation';

    public string $notes = '';

    public bool $formSubmitted = false;

    public function submitContact(): void
    {
        $this->validate([
            'name' => 'required|min:2',
            'phone' => 'required|min:7',
            'email' => 'required|email',
            'service' => 'required',
        ]);

        $this->formSubmitted = true;
    }
};
