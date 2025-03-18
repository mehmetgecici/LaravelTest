<?php

namespace Tests\Feature;

use App\Models\Car;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CarTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_lists_all_cars()
    {
        Car::factory()->count(3)->create();
        $response = $this->getJson('/api/cars');

        $response->assertStatus(200);
        $response->assertJsonCount(3);
    }

    public function test_it_creates_a_car()
    {
        $response = $this->postJson('/api/cars', [
            'brand' => 'Toyota',
            'model' => 'Corolla',
            'year' => 2022
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('cars', ['brand' => 'Toyota']);
    }

    public function test_it_updates_a_car()
    {
        $car = Car::factory()->create(['brand' => 'OldBrand']);

        $response = $this->putJson("/api/cars/{$car->id}", ['brand' => 'NewBrand']);

        $response->assertStatus(200);
        $this->assertDatabaseHas('cars', ['brand' => 'NewBrand']);
    }

    public function test_it_deletes_a_car()
    {
        $car = Car::factory()->create();

        $response = $this->deleteJson("/api/cars/{$car->id}");

        $response->assertStatus(200);
        $this->assertDatabaseMissing('cars', ['id' => $car->id]);
    }
}