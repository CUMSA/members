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
        $this->call(CollegesTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(ScholarshipsTableSeeder::class);
        $this->call(MembersTableSeeder::class);
        $this->call(EventsTableSeeder::class);
//        $this->call(AttendeesTableSeeder::class);
    }
}
