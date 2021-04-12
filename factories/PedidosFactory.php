<?php

namespace Database\Factories;

use App\Models\pedidos;
use App\Models\usuario;
use App\Models\formaspagos;
use Illuminate\Database\Eloquent\Factories\Factory;

class PedidosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = pedidos::class;

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
            'fecha' => $this->faker-> date('Y-m-d'),
            'precio_total' => $this->faker->randomfloat(2,1000,5000),
            'usuarios_id'=> $this->faker->numberBetween(1,usuario::count()),
            'formas_pago_id'=> $this->faker->numberBetween(1,formaspagos::count())
        ];
    }
}