<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Categoria;

$factory->define(Categoria::class, function (Faker $faker) {
   return [
      'codigo' => $faker->regexify('[A-Z0-9]{10}'),
      'nombre' => $faker->sentence(3),
   ];
});
