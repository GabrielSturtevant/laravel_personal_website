<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PicturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pictures')->insert([
            'person_id'         => 1,
            'original_filename' => 'gabe.jpg',
            'new_filename'      => '1.jpg',
            'path'              => 'storage/app/pictures/user_1',
            'height'            => 180,
            'width'             => 180,
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now()
        ]);
    }
}
