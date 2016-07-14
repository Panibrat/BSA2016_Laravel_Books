<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        /*
            $table->increments('id');
            $table->string('title');
            $table->string('author');
            $table->integer('year');
            $table->string('genre');            
            $table->integer('client_id')->nullable();            
            $table->timestamps();
        });
         *          */
        
        DB::table('books')->delete(); 
        $users = array(
            array(
                'title' => "Wild Wolf",
                'author' => "London",
                'year' => 1878,
                'genre' => 'adventure',
                'client_id' => 1               
                
            ),
            array(
                'title' => "Title#2",
                'author' => "Author#2",
                'year' => 1978,
                'genre' => 'Erotic',
                'client_id' => 4               
                
            ),
            array(
                'title' => "Title#3",
                'author' => "Author#3",
                'year' => 1978,
                'genre' => 'Fantastic#3',
                'client_id' => 2               
                
            ),
            array(
                'title' => "Title#4",
                'author' => "Author#4",
                'year' => 1948,
                'genre' => 'Erotic#4',
                'client_id' => 3               
                
            ),
            array(
                'title' => "Go away",
                'author' => "Jackson",
                'year' => 2008,
                'genre' => 'documental',
                'client_id' => 1               
                
            )
            
            
        );
        DB::table('books')->insert($users); 
    }
}
