<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->seed();
});

test('homepage is accessible and displays products', function () {
    $response = $this->get('/');
    $response->assertStatus(200);
    $response->assertSee('UMA DYE CHEM');
    $response->assertSee('Ammonium Bisulphite');
});

test('products index page loads', function () {
    $response = $this->get('/products');
    $response->assertStatus(200);
    $response->assertSee('Ammonium Bisulphite - 70%');
});

test('product detail page loads for all 10 products', function () {
    $products = \App\Models\Product::all();
    expect($products->count())->toBe(10);

    foreach ($products as $product) {
        $response = $this->get('/products/' . $product->slug);
        $response->assertStatus(200);
        $response->assertSee($product->name);
    }
});

test('about, industries, quality, export, contact pages load', function () {
    $this->get('/about')->assertStatus(200);
    $this->get('/industries')->assertStatus(200);
    $this->get('/quality-standards')->assertStatus(200);
    $this->get('/export-network')->assertStatus(200);
    $this->get('/contact')->assertStatus(200);
});

test('contact form submission stores inquiry in database', function () {
    $product = \App\Models\Product::first();

    $response = $this->post('/contact', [
        'name' => 'Test Chemical Buyer',
        'email' => 'buyer@example.com',
        'phone' => '+91 9999999999',
        'company' => 'Global Water Solutions',
        'subject' => 'Quote for Ammonium Bisulphite',
        'product_id' => $product->id,
        'message' => 'Please provide quotation for 2 x 20ft FCL in 1000L IBCs.',
    ]);

    $response->assertSessionHas('success');
    expect(\App\Models\Inquiry::where('email', 'buyer@example.com')->exists())->toBeTrue();
});

test('admin login page loads and authentication works', function () {
    $this->get('/admin/login')->assertStatus(200)->assertSee('admin@umadyechem.com');

    $response = $this->post('/admin/login', [
        'email' => 'admin@umadyechem.com',
        'password' => 'admin123',
    ]);

    $response->assertRedirect('/admin');
    $this->assertAuthenticated();
});

test('authenticated admin can access dashboard and product manager', function () {
    $user = \App\Models\User::where('email', 'admin@umadyechem.com')->first();
    $this->actingAs($user);

    $this->get('/admin')->assertStatus(200)->assertSee('Dashboard Overview');
    $this->get('/admin/products')->assertStatus(200)->assertSee('Chemical Products Catalog');
    $this->get('/admin/inquiries')->assertStatus(200)->assertSee('Customer Inquiries');
    $this->get('/admin/settings')->assertStatus(200)->assertSee('Company Profile & SEO');
});
