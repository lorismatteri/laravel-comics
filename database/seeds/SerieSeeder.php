<?php

use App\Serie;

use Illuminate\Database\Seeder;

class SerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $series_list = config('series');

        foreach ($series_list as $serie) {
            $newSerie = new Serie();
            $newSerie->name = $serie['name'];
            $newSerie->cover = $serie['cover'];
            $newSerie->save();
        } 
    }
}
