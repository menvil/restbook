<?php

use Illuminate\Database\Seeder;
use App\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->truncate();

        Book::create(array(
            'title' => 'Title of first book.',
            'author' => 'First author',
            'releaseYear' => '2010',
            'description' => 'detective'
        ));

        Book::create(array(
            'title' => 'Title of second book.',
            'author' => 'Second author',
            'releaseYear' => '2011',
            'description' => 'detective'
        ));


        Book::create(array(
            'title' => 'Title of third book.',
            'author' => 'Third author',
            'releaseYear' => '2011',
            'description' => 'detective'
        ));
    }
}
