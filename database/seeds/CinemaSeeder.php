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
            'cinema_image' => Str::random(10),
            'num_areas' => '123',
            'num_seats' => '2313',
            'state' => '1',
            'deleted_at' => null,
        ]);
    }
}
