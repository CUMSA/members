<?php

use Illuminate\Database\Seeder;

class AttendeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\EventAttendee::class, 1)->create()->each(function($u) {
            $u->save();
        });
    }
}
