<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BookTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testRoutes()
    {
        /* test main page */
        $this->visit('/')
            ->see('The Book App')
            ->dontSee('Error');

    }

    public function testOneItem()
    {
        /* retrive one method*/
        $this->get('api/books/1')
            ->seeJson([
                'id'=>1,
                'title'=>'Title of first book.',
                'author'=>'First author',
                'releaseYear'=>2010
            ]);
    }

    public function testSaveItem()
    {

        /* save one book*/
        $this->post('/api/books',
            [
                'title'=>'Test Book',
                'author'=>'Author',
                'releaseYear'=>2000,
                'description'=>'description of the book'
            ])->seeJson(['success'=>true]);


        $res = json_decode($this->get('/api/books')->response->content(), true);
        $res = end($res);
        $comp_array = [
            'title'=>'Test Book',
            'author'=>'Author',
            'releaseYear'=>2000,
            'description'=>'description of the book'
        ];
        foreach($comp_array as $key=>$ar){
            $this->assertEquals($ar, $res[$key]);
        }

    }

    public function testUpdateItem()
    {
        $this->put('/api/books/1',
            [
                'title'=>'Test Book',
                'author'=>'Author',
                'releaseYear'=>2000,
                'description'=>'description of the book'
            ])->seeJson(['success'=>true]);

        $res = json_decode($this->get('/api/books/1')->response->content(), true);
        $comp_array = [
            'title'=>'Test Book',
            'author'=>'Author',
            'releaseYear'=>2000,
            'description'=>'description of the book'
        ];
        foreach($comp_array as $key=>$ar){
            $this->assertEquals($ar, $res[$key]);
        }

    }

    public function testDeleteItem()
    {
        $this->delete('/api/books/1')
            ->seeJson(['success'=>true]);

        $this->get('/api/books/1')->seeJson([]);

    }

}
