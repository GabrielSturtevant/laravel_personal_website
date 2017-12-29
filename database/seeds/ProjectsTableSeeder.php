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
            'person_id' => 1,
            'name' => 'Visual Pathfinding',
            'description' => 'This project was the culminating project of my advanced data structures course at CSUN.<br /><br />This project was designed using a set of tools for the UI that were provided by the instructor. The project utilizes Java. The purpose of this project was to demonstrate a working understanding of the concepts of hash-tables, priority queues, and the A* path finding algorithm within a set of constraints provided by the teacher.<br /><br />Once the program is run, the user must select two points, the program will then visually display the A* path finding process starting from the first selected point until the second selected point is encountered. Once this occurs, the "player" will begin to move from the first point along the selected path until it either finds a map (purple indicators) to treasure (yellow indicators), at which point it will stop it\'s current path, recalculate a path to the treasure that the map leads to and will continue, disregarding additional maps it passes, until the treasure is found. Upon finding the treasure, a new path will be calculated from the current position to the originally selected final position, where the process will repeat itself until the final destination is reached.',
            'picture' => 2,
            'website' => 'http://www.github.com',
            'completion_date' => Carbon::create(2015, 05),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('projects')->insert([
            'person_id' => 1,
            'name' => 'Python Server Backend',
            'description' => 'A language agnostic interface designed to link an Android application to a remotely hosted SQLite database. My most recent project was the culminating project for my introduction to software development class at CSUN. The program is designed to listen on an open port for calls from a corresponding Android application that fellow classmates implemented. Once a call is received, the program will parse the received text and determine whether or not a command was issued. If a command was issued, the program would query an SQLite database that would be stored local relative to the server control layer. ',
            'picture' => 2,
            'website' => 'http://www.github.com',
            'completion_date' => Carbon::create(2016, 05),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
