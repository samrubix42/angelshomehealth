<?php

use App\Models\Contact;
use App\Models\HomeSlider;
use App\Models\Service;
use App\Models\Testimonial;
use Livewire\Attributes\Computed;
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

    #[Computed]
    public function sliders()
    {
        return HomeSlider::where('is_active', true)->orderBy('id', 'asc')->get();
    }

    #[Computed]
    public function services()
    {
        return Service::where('is_active', true)->get();
    }

    #[Computed]
    public function testimonials()
    {
        return Testimonial::where('is_active', true)->latest()->get();
    }

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
