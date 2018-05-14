<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        //resetea los datos en la tabla
        DB::table('users')->truncate();

        //generar 3 dummy data
        $faker = Factory::create();
        DB::table('users')->insert([
            [
                'name' => 'Felipe Guzman',
                'slug' => 'felipe-guzman',
                'email' => '68felipe@hotmail.es',
                'password' => bcrypt('abc123'),
                'bio' => $faker->text(rand(250,300)),
            ],
            [
                'name' => 'Zenyan Aguilar',
                'slug' => 'zenyan-aguilar',
                'email' => 'zenaguilar@hotmail.es',
                'password' => bcrypt('abc123'),
                'bio' => $faker->text(rand(250,300)),
            ],
            [
                'name' => 'Sairam Victor',
                'slug' => 'sairam-victor',
                'email' => 'sarita@hotmail.es',
                'password' => bcrypt('abc123'),
                'bio' => $faker->text(rand(250,300)),
            ],
        ]);
    }
}
