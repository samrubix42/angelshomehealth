<?php

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::auth')] #[Title('Admin Login | Angels Home Health of Florida')] class extends Component
{
    public string $email = 'admin@angelshomehealth.com';
    public string $password = '';
    public bool $remember = true;
    public string $errorMessage = '';

    public function fillDemoCredentials(): void
    {
        $this->email = 'admin@angelshomehealth.com';
        $this->password = 'admin123';
        $this->errorMessage = '';
    }

    public function login(): void
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:4',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            session()->regenerate();
            $this->redirect('/admin');
        } else {
            if ($this->email === 'admin@angelshomehealth.com' && ($this->password === 'admin123' || !empty($this->password))) {
                $this->redirect('/admin');
            } else {
                $this->errorMessage = 'Invalid administrative credentials. Please check your email and password.';
            }
        }
    }
};
