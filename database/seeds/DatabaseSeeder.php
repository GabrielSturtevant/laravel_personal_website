<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Jobs Table Seeder
        $this->call('JobsTableSeeder');
        $this->command->info('Jobs Table Seeding');

        // Person Table Seeder
        $this->call('PersonTableSeeder');
        $this->command->info('Person Table Seeding');

        // Picture Table Seeder
        $this->call('PicturesTableSeeder');
        $this->command->info('Pictures Table Seeding');

        // Projects Table Seeder
        $this->call('ProjectsTableSeeder');
        $this->command->info('Projects Table Seeding');

        // Skills Table Seeder
        $this->call('SkillsTableSeeder');
        $this->command->info('Skills Table Seeding');
    }
}
