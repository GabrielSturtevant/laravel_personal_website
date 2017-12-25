<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
            'person_id'         => 1,
            'company'           => 'BlackLine',
            'title'             => 'Software Development Intern',
            'website'           => 'www.blackline.com',
            'responsibilities'  => 'These are job responsibilities;currently I am using semi-colon delimiters;so I can use commas in the descriptions',
            'start_date'        => Carbon::create(2016, 6),
            'end_date'          => Carbon::create(2016, 9),
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ]);
    }
}
