<?php

use App\Models\Service;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')] #[Title('Our Services | Angels Home Health of Florida')] class extends Component
{
    #[Computed]
    public function services()
    {
        return Service::where('is_active', true)->orderBy('id')->get();
    }
};
