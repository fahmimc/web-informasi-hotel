<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'bio' => $this->faker->realText($maxNbChars = 50, $indexSize = 2),
            'images' => $this->faker->imageUrl($width = 320, $height = 160),
            'password' => bcrypt('12345678'), // password
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }
}
