<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Symfony\Polyfill\Uuid\Uuid;

/**
 * @extends Factory<Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userId = User::where('email', 'test@example.com')->first()->id;

        return [
            "firstname" => $this->faker->firstName(),
            "lastname" => $this->faker->lastName(),
            "email" => $this->faker->unique()->safeEmail(),
            "phone" => $this->faker->phoneNumber(),
            "address" => $this->faker->address(),
            "city" => $this->faker->city(),
            "postal_code" => $this->faker->postcode(),
            "company" => $this->faker->company(),
            "user_id" => $userId,
        ];
    }
}
