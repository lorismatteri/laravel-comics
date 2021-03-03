<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $comics_list = config('comics');

        foreach ($comics_list as $comic) {
            $newComic = new Comic();
            $newComic->name = $comic['name'];
            $newComic->description = $comic['description'];
            $newComic->cover = $comic['cover'];
            $newComic->price = $comic['price'];
            $newComic->available = $comic['available'];            
            $newComic->designer = $comic['designer'];
            $newComic->author = $comic['author'];
            $newComic->serie = $comic['serie'];
            $newComic->volume = $comic['volume'];
            $newComic->size = $comic['size'];
            $newComic->page_count = $comic['page_count'];
            $newComic->rating = $comic['rating'];
            $newComic->save();
        } 
    }
}
