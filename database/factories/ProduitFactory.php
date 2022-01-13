<?php

namespace Database\Factories;

use App\Models\Magasin;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $magasin = Magasin::inRandomOrder()->first();
        return [
            'name'=> $this->faker->name(),
            'description'=>$this->faker->text(),
            'price'=>$this->faker->randomFloat(2,0,100),
            'quantity'=>$this->faker->numberBetween(1,10),
            'cover_path'=>'img/crevettes1.jpg',
            'magasins_id'=>$magasin->id,


        ];
    }
}
