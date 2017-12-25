<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'person_id'     => 1,
            'skill'         => 'Linux',
            'proficiency'   => 100,
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ]);

        DB::table('skills')->insert([
            'person_id'     => 1,
            'skill'         => 'Python',
            'proficiency'   => 42,
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ]);
    }
}
