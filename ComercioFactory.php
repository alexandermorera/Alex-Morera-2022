<?php

namespace Database\Factories;

use App\Models\Comercio;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComercioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comercio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
            'nombre' => $faker->name(),
            'telefono' => $faker -> numberBetween(999999900000,9999999999999),
            'transaccion' => $faker -> randomElement(['aprobado','rechazado']),
            'documento' => $faker -> numberBetween(0,99000),
            'producto_id' => $faker -> numberBetween(1,30)

    ]);
        ];
    }
}
