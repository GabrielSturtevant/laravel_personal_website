<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('person')->insert([
            'first_name'    => 'Gabriel',
            'last_name'     => 'Sturtevant',
            'display_name'  => 'Gabriel Sturtevant',
            'email'         => 'Gabriel@GabrielSturtevant.com',
            'phone'         => '(661) 532-8176',
            'linkedin'      => 'http://www.linkedin.com',
            'github'        => 'http://www.github.com',
            'websites'      => 'http://www.gabrielsturtevant.com,http://www.sturtevant.email',
            'description'   => 'I am an upcoming computer science graduate at California State University, Northridge. I have a deep passion for technology and open source software. Technology isn\'t just work for me, it is my pastime and my favorite hobby.',
            'picture_id'    => 1,
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
        ]);
    }
}
