<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class books extends Model
{

    use HasFactory;

    protected $fillable = ['title', 'author', 'country', 'language', 'pages', 'year', 'imageLink'];

    // public  static function allBooks()
    // {
    //     return [
    //         [
    //             "id" => 1,
    //             "author" => "Chinua Achebe",
    //             "country" => "Nigeria",
    //             "imageLink" => "images/things-fall-apart.jpg",
    //             "language" => "English",
    //             "link" => "https =>//en.wikipedia.org/wiki/Things_Fall_Apart\n",
    //             "pages" => 209,
    //             "title" => "Things Fall Apart",
    //             "year" => 1958
    //         ],
    //         [
    //             "id" => 2,
    //             "author" => "Hans Christian Andersen",
    //             "country" => "Denmark",
    //             "imageLink" => "images/fairy-tales.jpg",
    //             "language" => "Danish",
    //             "link" => "https =>//en.wikipedia.org/wiki/Fairy_Tales_Told_for_Children._First_Collection.\n",
    //             "pages" => 784,
    //             "title" => "Fairy tales",
    //             "year" => 1836
    //         ],
    //         [
    //             "id" => 3,
    //             "author" => "Dante Alighieri",
    //             "country" => "Italy",
    //             "imageLink" => "images/the-divine-comedy.jpg",
    //             "language" => "Italian",
    //             "link" => "https =>//en.wikipedia.org/wiki/Divine_Comedy\n",
    //             "pages" => 928,
    //             "title" => "The Divine Comedy",
    //             "year" => 1315
    //         ],
    //         [
    //             "id" => 4,
    //             "author" => "Unknown",
    //             "country" => "Sumer and Akkadian Empire",
    //             "imageLink" => "images/the-epic-of-gilgamesh.jpg",
    //             "language" => "Akkadian",
    //             "link" => "https =>//en.wikipedia.org/wiki/Epic_of_Gilgamesh\n",
    //             "pages" => 160,
    //             "title" => "The Epic Of Gilgamesh",
    //             "year" => -1700
    //         ],
    //         [
    //             "id" => 5,
    //             "author" => "Unknown",
    //             "country" => "Achaemenid Empire",
    //             "imageLink" => "images/the-book-of-job.jpg",
    //             "language" => "Hebrew",
    //             "link" => "https =>//en.wikipedia.org/wiki/Book_of_Job\n",
    //             "pages" => 176,
    //             "title" => "The Book Of Job",
    //             "year" => -600
    //         ],
    //         [
    //             "id" => 6,
    //             "author" => "Unknown",
    //             "country" => "India/Iran/Iraq/Egypt/Tajikistan",
    //             "imageLink" => "images/one-thousand-and-one-nights.jpg",
    //             "language" => "Arabic",
    //             "link" => "https =>//en.wikipedia.org/wiki/One_Thousand_and_One_Nights\n",
    //             "pages" => 288,
    //             "title" => "One Thousand and One Nights",
    //             "year" => 1200
    //         ],
    //         [
    //             "id" => 7,
    //             "author" => "Unknown",
    //             "country" => "Iceland",
    //             "imageLink" => "images/njals-saga.jpg",
    //             "language" => "Old Norse",
    //             "link" => "https =>//en.wikipedia.org/wiki/Nj%C3%A1ls_saga\n",
    //             "pages" => 384,
    //             "title" => "Nj\u00e1l's Saga",
    //             "year" => 1350
    //         ],
    //         [
    //             "id" => 8,
    //             "author" => "Jane Austen",
    //             "country" => "United Kingdom",
    //             "imageLink" => "images/pride-and-prejudice.jpg",
    //             "language" => "English",
    //             "link" => "https =>//en.wikipedia.org/wiki/Pride_and_Prejudice\n",
    //             "pages" => 226,
    //             "title" => "Pride and Prejudice",
    //             "year" => 1813
    //         ],
    //         [
    //             "id" => 9,
    //             "author" => "Honor\u00e9 de Balzac",
    //             "country" => "France",
    //             "imageLink" => "images/le-pere-goriot.jpg",
    //             "language" => "French",
    //             "link" => "https =>//en.wikipedia.org/wiki/Le_P%C3%A8re_Goriot\n",
    //             "pages" => 443,
    //             "title" => "Le P\u00e8re Goriot",
    //             "year" => 1835
    //         ],
    //         [
    //             "id" => 10,
    //             "author" => "Samuel Beckett",
    //             "country" => "Republic of Ireland",
    //             "imageLink" => "images/molloy-malone-dies-the-unnamable.jpg",
    //             "language" => "French, English",
    //             "link" => "https =>//en.wikipedia.org/wiki/Molloy_(novel)\n",
    //             "pages" => 256,
    //             "title" => "Molloy, Malone Dies, The Unnamable, the trilogy",
    //             "year" => 1952
    //         ],
    //         [
    //             "id" => 11,
    //             "author" => "Giovanni Boccaccio",
    //             "country" => "Italy",
    //             "imageLink" => "images/the-decameron.jpg",
    //             "language" => "Italian",
    //             "link" => "https =>//en.wikipedia.org/wiki/The_Decameron\n",
    //             "pages" => 1024,
    //             "title" => "The Decameron",
    //             "year" => 1351
    //         ],
    //         [
    //             "id" => 12,
    //             "author" => "Jorge Luis Borges",
    //             "country" => "Argentina",
    //             "imageLink" => "images/ficciones.jpg",
    //             "language" => "Spanish",
    //             "link" => "https =>//en.wikipedia.org/wiki/Ficciones\n",
    //             "pages" => 224,
    //             "title" => "Ficciones",
    //             "year" => 1965
    //         ],
    //         [
    //             "id" => 13,
    //             "author" => "Emily Bront\u00eb",
    //             "country" => "United Kingdom",
    //             "imageLink" => "images/wuthering-heights.jpg",
    //             "language" => "English",
    //             "link" => "https =>//en.wikipedia.org/wiki/Wuthering_Heights\n",
    //             "pages" => 342,
    //             "title" => "Wuthering Heights",
    //             "year" => 1847
    //         ],
    //         [
    //             "id" => 14,
    //             "author" => "Albert Camus",
    //             "country" => "Algeria, French Empire",
    //             "imageLink" => "images/l-etranger.jpg",
    //             "language" => "French",
    //             "link" => "https =>//en.wikipedia.org/wiki/The_Stranger_(novel)\n",
    //             "pages" => 185,
    //             "title" => "The Stranger",
    //             "year" => 1942
    //         ],
    //         [
    //             "id" => 15,
    //             "author" => "Paul Celan",
    //             "country" => "Romania, France",
    //             "imageLink" => "images/poems-paul-celan.jpg",
    //             "language" => "German",
    //             "link" => "\n",
    //             "pages" => 320,
    //             "title" => "Poems",
    //             "year" => 1952
    //         ],
    //         [
    //             "id" => 16,
    //             "author" => "Louis-Ferdinand C\u00e9line",
    //             "country" => "France",
    //             "imageLink" => "images/voyage-au-bout-de-la-nuit.jpg",
    //             "language" => "French",
    //             "link" => "https =>//en.wikipedia.org/wiki/Journey_to_the_End_of_the_Night\n",
    //             "pages" => 505,
    //             "title" => "Journey to the End of the Night",
    //             "year" => 1932
    //         ],
    //         [
    //             "id" => 17,
    //             "author" => "Miguel de Cervantes",
    //             "country" => "Spain",
    //             "imageLink" => "images/don-quijote-de-la-mancha.jpg",
    //             "language" => "Spanish",
    //             "link" => "https =>//en.wikipedia.org/wiki/Don_Quixote\n",
    //             "pages" => 1056,
    //             "title" => "Don Quijote De La Mancha",
    //             "year" => 1610
    //         ],
    //         [
    //             "id" => 18,
    //             "author" => "Geoffrey Chaucer",
    //             "country" => "England",
    //             "imageLink" => "images/the-canterbury-tales.jpg",
    //             "language" => "English",
    //             "link" => "https =>//en.wikipedia.org/wiki/The_Canterbury_Tales\n",
    //             "pages" => 544,
    //             "title" => "The Canterbury Tales",
    //             "year" => 1450
    //         ],
    //         [
    //             "id" => 19,
    //             "author" => "Anton Chekhov",
    //             "country" => "Russia",
    //             "imageLink" => "images/stories-of-anton-chekhov.jpg",
    //             "language" => "Russian",
    //             "link" => "https =>//en.wikipedia.org/wiki/List_of_short_stories_by_Anton_Chekhov\n",
    //             "pages" => 194,
    //             "title" => "Stories",
    //             "year" => 1886
    //         ],
    //         [
    //             "id" => 20,
    //             "author" => "Joseph Conrad",
    //             "country" => "United Kingdom",
    //             "imageLink" => "images/nostromo.jpg",
    //             "language" => "English",
    //             "link" => "https =>//en.wikipedia.org/wiki/Nostromo\n",
    //             "pages" => 320,
    //             "title" => "Nostromo",
    //             "year" => 1904
    //         ],
    //         [
    //             "id" => 21,
    //             "author" => "Charles Dickens",
    //             "country" => "United Kingdom",
    //             "imageLink" => "images/great-expectations.jpg",
    //             "language" => "English",
    //             "link" => "https =>//en.wikipedia.org/wiki/Great_Expectations\n",
    //             "pages" => 194,
    //             "title" => "Great Expectations",
    //             "year" => 1861
    //         ],
    //         [
    //             "id" => 22,
    //             "author" => "Denis Diderot",
    //             "country" => "France",
    //             "imageLink" => "images/jacques-the-fatalist.jpg",
    //             "language" => "French",
    //             "link" => "https =>//en.wikipedia.org/wiki/Jacques_the_Fatalist\n",
    //             "pages" => 596,
    //             "title" => "Jacques the Fatalist",
    //             "year" => 1796
    //         ],
    //         [
    //             "id" => 23,
    //             "author" => "Alfred D\u00f6blin",
    //             "country" => "Germany",
    //             "imageLink" => "images/berlin-alexanderplatz.jpg",
    //             "language" => "German",
    //             "link" => "https =>//en.wikipedia.org/wiki/Berlin_Alexanderplatz\n",
    //             "pages" => 600,
    //             "title" => "Berlin Alexanderplatz",
    //             "year" => 1929
    //         ],
    //         [
    //             "id" => 24,
    //             "author" => "Fyodor Dostoevsky",
    //             "country" => "Russia",
    //             "imageLink" => "images/crime-and-punishment.jpg",
    //             "language" => "Russian",
    //             "link" => "https =>//en.wikipedia.org/wiki/Crime_and_Punishment\n",
    //             "pages" => 551,
    //             "title" => "Crime and Punishment",
    //             "year" => 1866
    //         ],
    //         [
    //             "id" => 25,
    //             "author" => "Fyodor Dostoevsky",
    //             "country" => "Russia",
    //             "imageLink" => "images/the-idiot.jpg",
    //             "language" => "Russian",
    //             "link" => "https =>//en.wikipedia.org/wiki/The_Idiot\n",
    //             "pages" => 656,
    //             "title" => "The Idiot",
    //             "year" => 1869
    //         ],
    //         [
    //             "id" => 26,
    //             "author" => "Fyodor Dostoevsky",
    //             "country" => "Russia",
    //             "imageLink" => "images/the-possessed.jpg",
    //             "language" => "Russian",
    //             "link" => "https =>//en.wikipedia.org/wiki/Demons_(Dostoyevsky_novel)\n",
    //             "pages" => 768,
    //             "title" => "The Possessed",
    //             "year" => 1872
    //         ],
    //         [
    //             "id" => 27,
    //             "author" => "Fyodor Dostoevsky",
    //             "country" => "Russia",
    //             "imageLink" => "images/the-brothers-karamazov.jpg",
    //             "language" => "Russian",
    //             "link" => "https =>//en.wikipedia.org/wiki/The_Brothers_Karamazov\n",
    //             "pages" => 824,
    //             "title" => "The Brothers Karamazov",
    //             "year" => 1880
    //         ],
    //         [
    //             "id" => 28,
    //             "author" => "George Eliot",
    //             "country" => "United Kingdom",
    //             "imageLink" => "images/middlemarch.jpg",
    //             "language" => "English",
    //             "link" => "https =>//en.wikipedia.org/wiki/Middlemarch\n",
    //             "pages" => 800,
    //             "title" => "Middlemarch",
    //             "year" => 1871
    //         ],
    //         [
    //             "id" => 29,
    //             "author" => "Ralph Ellison",
    //             "country" => "United States",
    //             "imageLink" => "images/invisible-man.jpg",
    //             "language" => "English",
    //             "link" => "https =>//en.wikipedia.org/wiki/Invisible_Man\n",
    //             "pages" => 581,
    //             "title" => "Invisible Man",
    //             "year" => 1952
    //         ],
    //         [
    //             "id" => 30,
    //             "author" => "Euripides",
    //             "country" => "Greece",
    //             "imageLink" => "images/medea.jpg",
    //             "language" => "Greek",
    //             "link" => "https =>//en.wikipedia.org/wiki/Medea_(play)\n",
    //             "pages" => 104,
    //             "title" => "Medea",
    //             "year" => -431
    //         ],
    //         [
    //             "id" => 31,
    //             "author" => "William Faulkner",
    //             "country" => "United States",
    //             "imageLink" => "images/absalom-absalom.jpg",
    //             "language" => "English",
    //             "link" => "https =>//en.wikipedia.org/wiki/Absalom,_Absalom!\n",
    //             "pages" => 313,
    //             "title" => "Absalom, Absalom!",
    //             "year" => 1936
    //         ],
    //         [
    //             "id" => 32,
    //             "author" => "William Faulkner",
    //             "country" => "United States",
    //             "imageLink" => "images/the-sound-and-the-fury.jpg",
    //             "language" => "English",
    //             "link" => "https =>//en.wikipedia.org/wiki/The_Sound_and_the_Fury\n",
    //             "pages" => 326,
    //             "title" => "The Sound and the Fury",
    //             "year" => 1929
    //         ],
    //         [
    //             "id" => 33,
    //             "author" => "Gustave Flaubert",
    //             "country" => "France",
    //             "imageLink" => "images/madame-bovary.jpg",
    //             "language" => "French",
    //             "link" => "https =>//en.wikipedia.org/wiki/Madame_Bovary\n",
    //             "pages" => 528,
    //             "title" => "Madame Bovary",
    //             "year" => 1857
    //         ],
    //         [
    //             "id" => 34,
    //             "author" => "Gustave Flaubert",
    //             "country" => "France",
    //             "imageLink" => "images/l-education-sentimentale.jpg",
    //             "language" => "French",
    //             "link" => "https =>//en.wikipedia.org/wiki/Sentimental_Education\n",
    //             "pages" => 606,
    //             "title" => "Sentimental Education",
    //             "year" => 1869
    //         ],
    //         [
    //             "id" => 35,
    //             "author" => "Federico Garc\u00eda Lorca",
    //             "country" => "Spain",
    //             "imageLink" => "images/gypsy-ballads.jpg",
    //             "language" => "Spanish",
    //             "link" => "https =>//en.wikipedia.org/wiki/Gypsy_Ballads\n",
    //             "pages" => 218,
    //             "title" => "Gypsy Ballads",
    //             "year" => 1928
    //         ]
    //     ];
    // }



    // public static function oneBook($id)
    // {
    //     $books = self::allBooks();
    //     foreach ($books as $book) {
    //         if ($book['id'] == $id) {
    //             return $book;
    //         }
    //     }
    // }

}
