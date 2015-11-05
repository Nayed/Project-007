<?php

use Illuminate\Database\Seeder;
use App\Info;

class InfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infos')->truncate();
        
        Info::create(
            [
                'title' => 'DS dev',
                'content' => "Réviser le modèle MVC",
                'week' => '10',
            ]
        );
    }
}
