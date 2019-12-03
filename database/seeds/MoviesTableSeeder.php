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
            ['title' => 'Star Wars IV', 'director' => 'Pera Peric', 'image_url' => 'http://nesto.com', 'duration' => '50', 'release_date'=> now(), 'genre' => 'sci-fi'],
            ['title' => 'Star Wars V', 'director' => 'Pera Peric1', 'image_url' => 'http://nesto1.com', 'duration' => '50', 'release_date'=>  now()->addSeconds(15), 'genre' => 'sci-fi'],
            ['title' => 'Star Wars VI', 'director' => 'Pera Peric2', 'image_url' => 'http://nesto2.com', 'duration' => '150', 'release_date'=> now()->addSeconds(10), 'genre' => 'sci-fi'],
            ['title' => 'Star Wars I', 'director' => 'Pera Peric3', 'image_url' => 'http://nesto3.com', 'duration' => '160', 'release_date'=>  now()->addSeconds(13), 'genre' => 'comedy'],
            ['title' => 'Star Wars II', 'director' => 'Pera Peric4', 'image_url' => 'http://nesto4.com', 'duration' => '150', 'release_date'=> now()->addSeconds(19), 'genre' => 'comedy'],
            ['title' => 'Star Wars III', 'director' => 'Pera Peric', 'image_url' => 'http://nesto.com', 'duration' => '50', 'release_date'=> now()->addSeconds(12), 'genre' => 'comedy'],
            ['title' => 'Star Wars VII', 'director' => 'Pera Peric1', 'image_url' => 'http://nesto1.com', 'duration' => '50', 'release_date'=> now()->addSeconds(20), 'genre' => 'comedy'],
            ['title' => 'Star Wars VIII', 'director' => 'Pera Peric2', 'image_url' => 'http://nesto2.com', 'duration' => '150', 'release_date'=> now()->addSeconds(23), 'genre' => 'comedy'],
            ['title' => 'Star Wars IX', 'director' => 'Pera Peric3', 'image_url' => 'http://nesto3.com', 'duration' => '160', 'release_date'=> now()->addSeconds(25), 'genre' => 'comedy'],
            ['title' => 'Star Wars: Rogue One', 'director' => 'Pera Peric4', 'image_url' => 'http://nesto4.com', 'duration' => '150', 'release_date'=> now()->addSeconds(30), 'genre' => 'sci-fi'],
        ]);
    }
}
