<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'person_id'     => 1,
            'name'          => 'Visual Pathfinding',
            'description'   => 'This project utilizes a custom java framework to visualize the A* pathfinding algorithm',
            'picture'       => 2,
            'website'       => 'www.github.com',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
        ]);
    }
}
