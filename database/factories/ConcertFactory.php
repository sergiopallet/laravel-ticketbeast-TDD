<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConcertFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'Example Band',
            'subtitle' => 'with The Fake Openers',
            'additional_information' => 'Some sample additional information.',
            'date' => Carbon::parse('+2 weeks'),
            'venue' => 'The Example Theatre',
            'venue_address' => '123 Example Lane',
            'city' => 'Fakeville',
            'state' => 'ON',
            'zip' => '90210',
            'ticket_price' => 2000,
            'ticket_quantity' => 5,

        ];
    }
}
