<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ville;

class etudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->safeEmail,
            'birthday' => $this->faker->date,
            'ville_id' => ville::all()->random()->id //https://laracasts.com/discuss/channels/code-review/model-factory-referencing-a-foreign-key
        ];
    }
}

