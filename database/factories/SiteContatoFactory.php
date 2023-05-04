<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SiteContato;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiteContato>
 */
class SiteContatoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    $factory->define(SiteContato::class, function (Faker $faker) {
        return [
            'nome' => $faker->name,
            'telefone' => $faker->tollFreePhoneNumber,
            'email' => $faker->unique()->email,
            'mensagem' => $faker->text(200)
        ];
    });
}
