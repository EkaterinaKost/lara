<?php

namespace Tests\Feature\Hotels;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Testing\Concerns\AssertsStatusCodes;
use Tests\TestCase;

class HotelTest extends TestCase
{
    use RefreshDatabase;
    
    public function setUp():void
    {
        parent::setUp();
        $this->artisan('db:seed');

    }
    
    public function test_hotels_index()
    {
        $response = $this->get('/api/hotels');
        $response->assertStatus(200);
    }
  
    public function test_hotel_can_be_show()
    {
        $hotel = \App\Models\Hotel::factory()->create();
        $response = $this->get('/api/hotels/' . $hotel->getKey());
        $response->assertStatus(200);
    }

    public function test_hotel_can_be_created()
    {
        $atributes =[
            'name' => 'test hotel',
            'address'=>'test address',
        ];

        $response = $this->post('/api/hotels/', $atributes);
        $response->assertStatus(201);
        $this->assertDatabaseHas('hotel',$atributes);
    }
}
