<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\books;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        books::create(

            [

                "author" => "Hans Christian Andersen",
                "country" => "Denmark",
                "imageLink" => "images/fairy-tales.jpg",
                "language" => "Danish",
                "pages" => 784,
                "title" => "Fairy tales",
                "year" => 1836
            ]
        );
        books::create(


            [

                "author" => "Dante Alighieri",
                "country" => "Italy",
                "imageLink" => "images/the-divine-comedy.jpg",
                "language" => "Italian",
                "pages" => 928,
                "title" => "The Divine Comedy",
                "year" => 1315
            ]
        );
        books::create(


            [

                "author" => "Unknown",
                "country" => "Sumer and Akkadian Empire",
                "imageLink" => "images/the-epic-of-gilgamesh.jpg",
                "language" => "Akkadian",
                "pages" => 160,
                "title" => "The Epic Of Gilgamesh",
                "year" => -1700
            ]
        );
        books::create(

            [

                "author" => "Unknown",
                "country" => "Achaemenid Empire",
                "imageLink" => "images/the-book-of-job.jpg",
                "language" => "Hebrew",
                "pages" => 176,
                "title" => "The Book Of Job",
                "year" => -600
            ]
        );
    }
}
