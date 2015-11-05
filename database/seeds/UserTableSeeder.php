<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        
        User::create(
            [
                'name' => 'Nayed',
                'email' => 'nayed@gmail.com',
                'password' => bcrypt('1234'),
                'group_id' => '1',
                'category_id' => '1',
            ]
        );
        
        User::create(
            [
                'name' => 'Kevin',
                'email' => 'kevin@gmail.com',
                'password' => bcrypt('1234'),
                'group_id' => '2',
                'category_id' => '2',
            ]
        );
        
        User::create(
            [
                'name' => 'Quentin P',
                'email' => 'quentinp@gmail.com',
                'password' => bcrypt('1234'),
                'group_id' => '1',
                'category_id' => '2',
            ]
        );
        
        User::create(
            [
                'name' => 'Quentin E',
                'email' => 'quentine@gmail.com',
                'password' => bcrypt('1234'),
                'group_id' => '2',
                'category_id' => '3',
            ]
        );
    }
}
