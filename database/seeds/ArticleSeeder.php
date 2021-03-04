<?php

use App\Article;

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles_list = config('articles');

        foreach ($articles_list as $article) {
            $newArticle = new Article();
            $newArticle->title = $article['title'];
            $newArticle->subtitle = $article['subtitle'];
            $newArticle->description = $article['description'];
            $newArticle->cover = $article['cover'];
            $newArticle->save();
        } 
    }
}
