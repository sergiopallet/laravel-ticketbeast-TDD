<?php

namespace Tests\Feature;

use App\Models\Concert;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewConsertListingTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_user_can_view_a_cocert_listing()
    {
        $concert = Concert::make([]);
    }
}
