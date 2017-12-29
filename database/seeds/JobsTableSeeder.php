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
            'website'           => 'http://www.blackline.com',
            'responsibilities'  => 'Assist with the Analysis, Design, Development, Testing and Documentation of new software solutions;Development of improvements to our existing solutions;Configure software development tools per company specifications;Assist in the estimation of tasks, identify possible obstacles and propose appropriate solutions;Follow company software data protection and security guidelines in developing software;Detect and predict code defects by peer reviewing code.',
            'start_date'        => Carbon::create(2016, 6),
            'end_date'          => Carbon::create(2016, 9),
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ]);
        DB::table('jobs')->insert([
            'person_id'         => 1,
            'company'           => 'CSUN META+LAB',
            'title'             => 'PHP Backend Developer',
            'website'           => 'http://metalab.csun.edu',
            'responsibilities'  => 'These are job responsibilities;currently I am using semi-colon delimiters;so I can use commas in the descriptions',
            'start_date'        => Carbon::create(2017, 1),
            'end_date'          => Carbon::create(2017, 10, 31),
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ]);

    }
}
