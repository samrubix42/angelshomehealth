<?php

use App\Models\Testimonial;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::admin')] #[Title('Testimonials Management | Angels Home Health Admin')] class extends Component
{
    // Form fields
    public ?int $testimonialId = null;
    public string $name = '';
    public string $designation = '';
    public string $review = '';
    public int $rating = 5;
    public bool $is_active = true;

    // Modal state controls
    public bool $showModal = false;
    public bool $isEditing = false;
    public bool $showDeleteModal = false;
    public ?int $deleteId = null;

    // Search and Filters
    public string $search = '';
    public string $statusFilter = 'All';

    // Feedback message
    public string $feedbackMessage = '';

    public function openCreateModal(): void
    {
        $this->resetValidation();
        $this->testimonialId = null;
        $this->name = '';
        $this->designation = '';
        $this->review = '';
        $this->rating = 5;
        $this->is_active = true;
        $this->isEditing = false;
        $this->showModal = true;
    }

    public function openEditModal(int $id): void
    {
        $this->resetValidation();
        $testimonial = Testimonial::findOrFail($id);
        
        $this->testimonialId = $testimonial->id;
        $this->name = $testimonial->name;
        $this->designation = $testimonial->designation;
        $this->review = $testimonial->review;
        $this->rating = $testimonial->rating;
        $this->is_active = $testimonial->is_active;
        
        $this->isEditing = true;
        $this->showModal = true;
    }

    public function closeModal(): void
    {
        $this->showModal = false;
        $this->resetValidation();
    }

    public function save(): void
    {
        $this->validate([
            'name' => 'required|string|min:2|max:255',
            'designation' => 'required|string|min:2|max:255',
            'review' => 'required|string|min:5',
            'rating' => 'required|integer|min:1|max:5',
            'is_active' => 'boolean',
        ]);

        Testimonial::updateOrCreate(
            ['id' => $this->testimonialId],
            [
                'name' => $this->name,
                'designation' => $this->designation,
                'review' => $this->review,
                'rating' => $this->rating,
                'is_active' => $this->is_active,
            ]
        );

        $this->feedbackMessage = $this->isEditing 
            ? 'Testimonial updated successfully.' 
            : 'New testimonial added successfully.';

        $this->showModal = false;
    }

    public function toggleActive(int $id): void
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->is_active = !$testimonial->is_active;
        $testimonial->save();

        $this->feedbackMessage = 'Testimonial status updated.';
    }

    public function openDeleteModal(int $id): void
    {
        $this->deleteId = $id;
        $this->showDeleteModal = true;
    }

    public function closeDeleteModal(): void
    {
        $this->showDeleteModal = false;
        $this->deleteId = null;
    }

    public function delete(): void
    {
        if ($this->deleteId) {
            Testimonial::destroy($this->deleteId);
            $this->feedbackMessage = 'Testimonial deleted successfully.';
        }

        $this->showDeleteModal = false;
        $this->deleteId = null;
    }

    public function getTestimonialsProperty()
    {
        return Testimonial::query()
            ->when($this->statusFilter === 'Active', fn($q) => $q->where('is_active', true))
            ->when($this->statusFilter === 'Hidden', fn($q) => $q->where('is_active', false))
            ->when(!empty($this->search), function($q) {
                $q->where('name', 'like', '%' . $this->search . '%')
                  ->orWhere('designation', 'like', '%' . $this->search . '%')
                  ->orWhere('review', 'like', '%' . $this->search . '%');
            })
            ->latest()
            ->get();
    }
};