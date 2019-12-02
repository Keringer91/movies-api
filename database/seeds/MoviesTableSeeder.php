<?php

use Illuminate\Database\Seeder;
use App\Movie;
class MoviesTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Movie::insert ([
            ['title' => 'Maratonci', 'director' => 'Pera Peric', 'image_url' => 'http://nesto.com', 'duration' => '50', 'release_date'=> now(), 'genre' => 'comedy'],
            ['title' => 'Ko to tamo peva', 'director' => 'Pera Peric1', 'image_url' => 'http://nesto1.com', 'duration' => '50', 'release_date'=> now(), 'genre' => 'comedy'],
            ['title' => 'Nema veze', 'director' => 'Pera Peric2', 'image_url' => 'http://nesto2.com', 'duration' => '150', 'release_date'=> now(), 'genre' => 'comedy'],
            ['title' => 'Maratonci123', 'director' => 'Pera Peric3', 'image_url' => 'http://nesto3.com', 'duration' => '160', 'release_date'=> now(), 'genre' => 'comedy'],
            ['title' => 'Maratonci44', 'director' => 'Pera Peric4', 'image_url' => 'http://nesto4.com', 'duration' => '150', 'release_date'=> now(), 'genre' => 'comedy'],
        ]);
    }
}
