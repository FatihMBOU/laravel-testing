<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_products_are_displayed_on_index_page()
    {
        $user = User::factory()->create();
        Product::factory()->count(3)->create();

        $this->actingAs($user)
            ->get('/products')
            ->assertStatus(200)
            ->assertSee(Product::first()->name);
    }

    public function test_product_can_be_added()
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->post('/products', [
                'name' => 'Test Product',
                'price' => 9.99,
            ])
            ->assertRedirect('/products');

        $this->assertDatabaseHas('products', ['name' => 'Test Product']);
    }
}
