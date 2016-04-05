<?php

use Illuminate\Database\Seeder;

class CollegesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colleges')->insert([
            ['id' => 1, 'name' => 'Christ\'s College'],
            ['id' => 2, 'name' => 'Churchill College'],
            ['id' => 3, 'name' => 'Clare College'],
            ['id' => 4, 'name' => 'Clare Hall'],
            ['id' => 5, 'name' => 'Corpus Christi College'],
            ['id' => 6, 'name' => 'Darwin'],
            ['id' => 7, 'name' => 'Downing College'],
            ['id' => 8, 'name' => 'Emmanuel College'],
            ['id' => 9, 'name' => 'Fitzwilliam College'],
            ['id' => 10, 'name' => 'Girton College'],
            ['id' => 11, 'name' => 'Gonville and Caius College'],
            ['id' => 12, 'name' => 'Homerton College'],
            ['id' => 13, 'name' => 'Hughes Hall'],
            ['id' => 14, 'name' => 'Jesus College'],
            ['id' => 15, 'name' => 'King\'s College'],
            ['id' => 16, 'name' => 'Lucy Cavendish'],
            ['id' => 17, 'name' => 'Magdalene College'],
            ['id' => 18, 'name' => 'Murray Edwards College'],
            ['id' => 19, 'name' => 'Newnham College'],
            ['id' => 20, 'name' => 'Pembroke College'],
            ['id' => 21, 'name' => 'Peterhouse'],
            ['id' => 22, 'name' => 'Queens\' College'],
            ['id' => 23, 'name' => 'Robinson College'],
            ['id' => 24, 'name' => 'Selwyn College'],
            ['id' => 25, 'name' => 'Sidney Sussex College'],
            ['id' => 26, 'name' => 'St Catharine\'s College'],
            ['id' => 27, 'name' => 'St Edmund\'s College'],
            ['id' => 28, 'name' => 'St John\'s College'],
            ['id' => 29, 'name' => 'Trinity College'],
            ['id' => 30, 'name' => 'Trinity Hall'],
            ['id' => 31, 'name' => 'Wolfson College'],
            ['id' => 32, 'name' => 'None'],
        ]);
    }
}
