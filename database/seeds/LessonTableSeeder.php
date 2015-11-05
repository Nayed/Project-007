<?php

use Illuminate\Database\Seeder;
use App\Lesson;

class LessonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lessons')->truncate();
        
        Lesson::create(
            [
                'name' => 'Lesson 1',
                'content' => "Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.",
                'date' => '2015-01-25',
                'category_id' => '1',
                'user_id' => '1',
            ]
        );
        
        Lesson::create(
            [
                'name' => 'Lesson 2',
                'content' => "Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. ",
                'date' => '2015-04-25',
                'category_id' => '2',
                'user_id' => '1',
            ]
        );
        
        Lesson::create(
            [
                'name' => 'Lesson 3',
                'content' => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même.",
                'date' => '2015-07-10',
                'category_id' => '3',
                'user_id' => '1',
            ]
        );
        
        
    }
}
