<?php

use Livewire\Component;

new class extends Component
{
    public int $currentSlide = 0;
    
    // Form fields
    public string $name = '';
    public string $phone = '';
    public string $email = '';
    public string $service = 'Personal Care & Hygiene';
    public string $notes = '';
    public bool $formSubmitted = false;

    public function nextSlide(): void
    {
        $this->currentSlide = ($this->currentSlide + 1) % 3;
    }

    public function prevSlide(): void
    {
        $this->currentSlide = ($this->currentSlide - 1 + 3) % 3;
    }

    public function goToSlide(int $index): void
    {
        if ($index >= 0 && $index < 3) {
            $this->currentSlide = $index;
        }
    }

    public function submitConsultation(): void
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