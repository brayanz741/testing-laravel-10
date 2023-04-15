<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Client::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'document_type_id' => $this->faker->randomElement([1, 2, 3]),
            'document' => $this->faker->randomNumber(8, true),
            'check_digit' => $this->faker->randomElement(['1', '5', '9', 'k']),
            'address' => $this->faker->address(),
            'phone' => $this->faker->e164PhoneNumber()
        ];
    }
}
