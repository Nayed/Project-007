<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        
        Category::create(
            [
                'name' => 'Developpment',
            ]
        );
        
        Category::create(
            [
                'name' => 'Reseau',
            ]
        );
        
        Category::create(
            [
                'name' => 'Graphisme',
            ]
        );
        //
    }
}