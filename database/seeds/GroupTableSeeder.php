<?php

use Illuminate\Database\Seeder;
use App\Group;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->truncate();
        
        Group::create(
            ['name' => 'Teacher']
        );
        
         Group::create(
            ['name' => 'Student']
        );
    }
}
