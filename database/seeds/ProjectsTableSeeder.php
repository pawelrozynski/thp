<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Seed the projects table.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'name' => 'DAN',
            'active' => true,
        ]);
        DB::table('projects')->insert([
            'name' => 'TOA',
            'active' => true,
        ]);
        DB::table('projects')->insert([
            'name' => 'HEL',
            'active' => false,
        ]);
        DB::table('projects')->insert([
            'name' => 'THO',
            'active' => false,
        ]);
        DB::table('projects')->insert([
            'name' => 'YIS',
            'active' => false,
        ]);
    }
}
