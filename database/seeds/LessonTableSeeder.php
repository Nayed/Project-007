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
                'content' => "Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de text",
                'date_start' => '2015-01-25',
                'category_id' => '1',
                'user_id' => '1',
            ]
        );
        
        Lesson::create(
            [
                'name' => 'Lesson 2',
                'content' => "Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. ",
                'content' => "Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMake",
                'date_start' => '2015-04-25',
                'category_id' => '2',
                'user_id' => '1',
            ]
        );
        
        Lesson::create(
            [
                'name' => 'Lesson 3',
                'content' => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même.",
                'content' => "On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait",
                'date_start' => '2015-07-10',
                'category_id' => '3',
                'user_id' => '1',
            ]
        );
        
        
    }
}
