<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CinemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cinemas')->insert([
            [
            'movie_name' => Str::random(10),
            'description' => Str::random(100),
            'cinema_image' => Str::random(10),
            'type_of_movie' => Str::random(10),
            'screening_date' => '01.01.2021',
            'num_seats' => '22',
            'state' => '1',
            'deleted_at' => null,
            ],
            [
                'movie_name' => Str::random(10),
                'description' => Str::random(100),
                'cinema_image' => Str::random(10),
                'type_of_movie' => Str::random(10),
                'screening_date' => '02.02.2022',
                'num_seats' => '20',
                'state' => '0',
                'deleted_at' => null,
                ],
        ]);
    }
}
