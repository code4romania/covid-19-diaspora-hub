<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Entity;
use Illuminate\Database\Eloquent\Factories\Factory;

class EntityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Entity::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'           => $this->faker->company(),
            'description'    => $this->faker->realText(500),
            'email'          => $this->faker->safeEmail(),
            'phone'          => $this->faker->phoneNumber(),
            'url'            => $this->faker->url(),
            'address_line_1' => $this->faker->streetAddress(),
            'country'        => $this->faker->countryCode(),
            'city'           => $this->faker->city(),
            'county'         => $this->faker->county(),
            'postal_code'    => $this->faker->postcode(),
            'latitude'       => $this->faker->latitude(),
            'longitude'      => $this->faker->longitude(),
        ];
    }
}
