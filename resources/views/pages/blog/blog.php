<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')] #[Title('Blog & Health Insights | Angels Home Health of Florida')] class extends Component
{
    public string $selectedCategory = 'All';

    public function selectCategory(string $category): void
    {
        $this->selectedCategory = $category;
    }
};
