<?php

namespace Database\Factories;

use App\Models\usuario;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\rol;

class UsuarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = usuario::class;

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
            'username' => $this->faker->name(),
            'nombre' => $this->faker->name(),
            'correo' => $this->faker->email,
            'telefono' => $this->faker->e164PhoneNumber(),
            'direccion' => $this->faker->streetAddress,
            'contraseña' => $this->faker->password(),
            'rol_id'=> $this->faker->numberBetween(1,rol::count())
        ];
    }
}