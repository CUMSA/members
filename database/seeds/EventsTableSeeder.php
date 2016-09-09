<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Event::class, 8)->create()->each(function($u) {
            $u->save();
        });
//        $event = factory(App\Event::class)->create();
//        DB::table('events')->insert($event->getAttributes());
    }
}
