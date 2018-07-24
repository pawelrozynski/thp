<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Seed the events table.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'title' => 'Zakup zagłębiarki',
            'comment' => 'Dobry zakup',
        ]);
        DB::table('events')->insert([
            'title' => 'Zakup wkrętarki',
            'comment' => 'Słaby zakup',                  
        ]);
        DB::table('events')->insert([
            'title' => 'Zakup deski elewacyjnej',
            'comment' => 'Słaby zakup',
            'realized' => true,
        ]);
    }
}
