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
            'phone'         => '6613415822',
            'linkedin'      => 'www.linkedin.com',
            'github'        => 'www.github.com',
            'websites'      => 'www.gabrielsturtevant.com,www.sturtevant.email',
            'description'   => 'This is the description that never ends...',
            'picture'       => 1,
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
        ]);
    }
}
