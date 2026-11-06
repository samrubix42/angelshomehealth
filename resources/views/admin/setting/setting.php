<?php

use App\Models\Setting;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::admin')] #[Title('General Settings | Angels Home Health Admin')] class extends Component
{
    // General & Contact
    public string $address = '';

    public string $email = '';

    public string $phone = '';

    public string $phone_raw = '';

    public string $whatsapp = '';

    public string $whatsapp_raw = '';

    public string $location = '';

    public string $working_hours = '';

    // Map & Location
    public string $google_map = '';

    // Social Media
    public string $facebook = '';

    public string $instagram = '';

    public string $linkedin = '';

    public string $twitter = '';

    public string $youtube = '';

    // Administrator Security & Password Update
    public string $current_password = '';

    public string $new_password = '';

    public string $new_password_confirmation = '';

    public function mount(): void
    {
        $this->address = (string) Setting::get('address', '');
        $this->email = (string) Setting::get('email', '');
        $this->phone = (string) Setting::get('phone', '');
        $this->phone_raw = (string) Setting::get('phone_raw', '');
        $this->whatsapp = (string) Setting::get('whatsapp', '');
        $this->whatsapp_raw = (string) Setting::get('whatsapp_raw', '');
        $this->location = (string) Setting::get('location', '');
        $this->working_hours = (string) Setting::get('working_hours', '');
        $this->google_map = (string) Setting::get('google_map', '');
        $this->facebook = (string) Setting::get('facebook', '');
        $this->instagram = (string) Setting::get('instagram', '');
        $this->linkedin = (string) Setting::get('linkedin', '');
        $this->twitter = (string) Setting::get('twitter', '');
        $this->youtube = (string) Setting::get('youtube', '');
    }

    public function save(): void
    {
        $this->validate([
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'phone_raw' => 'nullable|string|max:50',
            'whatsapp' => 'nullable|string|max:50',
            'whatsapp_raw' => 'nullable|string|max:50',
            'address' => 'required|string|max:500',
            'location' => 'nullable|string|max:255',
            'working_hours' => 'nullable|string|max:255',
            'google_map' => 'nullable|string',
            'facebook' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'youtube' => 'nullable|string|max:255',
        ]);

        // Always recompute raw numbers from phone and whatsapp settings
        $this->phone_raw = preg_replace('/[^0-9+]/', '', $this->phone);
        if (! empty($this->whatsapp)) {
            $this->whatsapp_raw = preg_replace('/[^0-9]/', '', $this->whatsapp);
        } else {
            $this->whatsapp_raw = $this->phone_raw;
        }

        $fields = [
            'address' => $this->address,
            'email' => $this->email,
            'phone' => $this->phone,
            'phone_raw' => $this->phone_raw,
            'whatsapp' => $this->whatsapp,
            'whatsapp_raw' => $this->whatsapp_raw,
            'location' => $this->location,
            'working_hours' => $this->working_hours,
            'google_map' => $this->google_map,
            'facebook' => $this->facebook,
            'instagram' => $this->instagram,
            'linkedin' => $this->linkedin,
            'twitter' => $this->twitter,
            'youtube' => $this->youtube,
        ];

        foreach ($fields as $key => $value) {
            Setting::set($key, $value);
        }

        $this->dispatch('toast-show', [
            'message' => 'Website settings saved successfully!',
            'type' => 'success',
            'position' => 'top-right',
        ]);
    }

    public function updatePassword(): void
    {
        $this->validate([
            'current_password' => ['required', 'current_password'],
            'new_password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'current_password.required' => 'Please enter your current administrator password.',
            'current_password.current_password' => 'The provided current password does not match our records.',
            'new_password.required' => 'Please enter a new password.',
            'new_password.min' => 'The new password must be at least 8 characters.',
            'new_password.confirmed' => 'The new password confirmation does not match.',
        ]);

        $user = auth()->user();
        $user->update([
            'password' => Hash::make($this->new_password),
        ]);

        $this->reset(['current_password', 'new_password', 'new_password_confirmation']);

        $this->dispatch('toast-show', [
            'message' => 'Administrator password updated successfully! Please use your new password next time you sign in.',
            'type' => 'success',
            'position' => 'top-right',
        ]);
    }
};
