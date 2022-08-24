<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventory>
 */
class InventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'item_barcode' => $this->faker->isbn13(),
            'item_name' => $this->faker->title(),
            'item_quantity' => $this->faker->randomNumber(),
            'item_size' => $this->faker->randomNumber(),
            'item_price' => $this->faker->randomFloat(),
            'item_procprice' => $this->faker->randomFloat(),
            'item_description' => $this->faker->sentence(),
            'item_discount' => $this->faker->randomFloat(),
            'expire_date' => $this->faker->date(),

        ];
    }
}
