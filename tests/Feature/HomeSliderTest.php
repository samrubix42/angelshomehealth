<?php

use App\Models\HomeSlider;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('guest is redirected to login when accessing admin homesliders', function () {
    $this->get('/admin/homesliders')
        ->assertRedirect('/login');
});

test('authenticated user can view admin homesliders page', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->get('/admin/homesliders')
        ->assertSuccessful()
        ->assertSee('Home Hero Sliders');
});

test('home page renders active sliders', function () {
    HomeSlider::create([
        'title' => 'Compassionate Home Nursing in Central Florida',
        'paragraph' => '24/7 dedicated support for seniors and post-op recovery.',
        'image' => 'https://example.com/slide.jpg',
        'btn_1' => 'Contact Us',
        'btn_1_url' => '/contact',
        'btn_2' => 'Services',
        'btn_2_url' => '/services',
        'is_active' => true,
    ]);

    $this->get('/')
        ->assertSuccessful()
        ->assertSee('Compassionate Home Nursing in Central Florida');
});
