<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        \App\Models\review::factory(100)->create();
    }
}
