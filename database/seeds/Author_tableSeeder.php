<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Author_tableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('author')->insert([
            [
                'slug' => 'john-green',
                'Authorname' => 'John Green',
                'Address' => 'http://www.rainbowrowell.com',
                'BookNumber' => 3,
                'Description' => 'In 2007, John and his brother Hank were the hosts of a popular internet blog, Brotherhood 2.0,
             where they discussed their lives, books and current events every day for a year except for weekends and holidays.
             They still keep a video blog,now called The Vlog Brothers, which can be found on the Nerdfighters website,
             or a direct link here. ',
                'imagePath'=>'',
            ],

            [
                'slug' => 'rainbow-rowell',
                'Authorname' => 'Rainbow Rowell',
                'Address' => 'http://www.johngreenbooks.com',
                'BookNumber' => 3,
                'Description' => 'Rainbow Rowell writes books. Sometimes she writes about adults (ATTACHMENTS and LANDLINE).
             Sometimes she writes about teenagers (ELEANOR & PARK, FANGIRL and THE SIMON SNOW BOOKS.). But she always 
             writes about people who talk a lot. And people who feel like they\'re screwing up. And people who fall in love.',
                'imagePath'=>'',
            ],

            [
                'slug' => 'nicola-yoon',
                'Authorname' => 'Nicola Yoon',
                'Address' => 'http://www.NicolaYoon.com',
                'BookNumber' => 2,
                'Description' => 'Nicola Yoon grew up in Jamaica (the island) and Brooklyn (part of Long Island). 
            She currently resides in Los Angeles, CA with her husband and daughter, both of whom she loves beyond all reason.
             Everything, Everything is her first novel.',
                'imagePath'=>'',
            ],

            [
                'slug' => 'jenna-evans-welch',
                'Authorname' => 'Jenna Evans Welch',
                'Address' => 'http://www.jennaevanswelch.com',
                'BookNumber' => 3,
                'Description' => 'Jenna Evans Welch was the kind of insatiable child reader who had no choice but to grow up
             to become a writer. She is the New York Times Bestselling author of LOVE & GELATO and the upcoming LOVE & LUCK.
             When she isn’t writing girl abroad stories, Jenna can be found chasing her children or making elaborate 
             messes in the kitchen. ',
                'imagePath'=>'',
            ],

            [
                'slug' => 'meg-rosoff',
                'Authorname' => 'Meg Rosoff',
                'Address' => 'http://www.megrosoff.co.uk',
                'BookNumber' => 3,
                'Description' => '
            Meg Rosoff was born in Boston and had three or four careers in publishing and advertising before she moved to London in 
            1989, where she lives now with her husband and daughter. Formerly a Young Adult author, Meg has earned numerous prizes 
            including the highest American and British honors for YA fiction: the Michael L. Printz Award and the Carnegie Medal. ',
                'imagePath'=>'',
            ],

            [
                'slug' => 'anna-marie-mcLemore',
                'Authorname' => 'Anna-Marie McLemore',
                'Address' => 'http://author.annamariemclemore.com/',
                'BookNumber' => 2,
                'Description' => 'Anna-Marie McLemore was born in the foothills of the San Gabriel Mountains and taught by 
            their family to hear la llorona in the Santa Ana winds. ',
                'imagePath'=>'',
            ],

            [
                'slug' => 'sabaa-tahir',
                'Authorname' => 'Sabaa Tahir',
                'Address' => 'http://www.sabaatahir.com',
                'BookNumber' => 3,
                'Description' => 'Sabaa Tahir grew up in Californias Mojave Desert at her familys 18-room motel. There, 
            she spent her time devouring fantasy novels, raiding her brothers comic book stash and playing guitar badly.
             She began writing An Ember in the Ashes while working nights as a newspaper editor. She likes thunderous 
             indie rock, garish socks and all things nerd. Sabaa currently lives in the San Francisco Bay Area with her family. ',
                'imagePath'=>'',
            ],

            [
                'slug' => 'george-R.R-martin',
                'Authorname' => 'George R.R. Martin',
                'Address' => 'http://www.georgerrmartin.com/',
                'BookNumber' => 3,
                'Description' => 'George R.R. Martin was born September 20, 1948, in Bayonne, New Jersey. His father was Raymond 
            Collins Martin, a longshoreman, and his mother was Margaret Brady Martin. He has two sisters, Darleen Martin 
            Lapinski and Janet Martin Patten.
            Martin attended Mary Jane Donohoe School and Marist High School. He began writing very young, selling 
            monster stories to other neighborhood children for pennies, dramatic readings included. Later he became a 
            comic book fan and collector in high school, and began to write fiction for comic fanzines 
            (amateur fan magazines). Martin\'s first professional sale was made in 1970 at age 21: "The Hero," 
            sold to Galaxy, published in February, 1971 issue. Other sales followed.',
                'imagePath'=>'',
            ],

            [
                'slug' => 'victoria-aveyard',
                'Authorname' => 'Victoria Aveyard',
                'Address' => 'http://www.victoriaaveyard.com',
                'BookNumber' => 3,
                'Description' => 'I\'m a screenwriter/YA author who likes books and lists. This site is the nexus of my universe.
             My book RED QUEEN will be published Winter 2015 from HarperTeen at HarperCollins. I\'m repped by the
             incomparable Suzie Townsend at New Leaf Literary & Media, Inc.',
                'imagePath'=>'',
            ],




            [
                'slug' => 'christopher-paolini',
                'Authorname' => 'Christopher Paolini',
                'Address' => 'http://www.paolini.net/',
                'BookNumber' => 3,
                'Description' => 'Christopher Paolini was born on November 17, 1983 in Southern California. He has lived 
             most of his life in Paradise Valley, Montana with his parents and younger sister, Angela. The tall, jagged
             Beartooth Mountains rise on one side of Paradise Valley. Snowcapped most of the year, they inspired the 
             fantastic scenery in the Inheritance Cycle.
             Christopher is grateful to all his readers. He is especially heartened to hear that his books have inspired 
             young people to read and to write stories of their own. Although Christopher will one day return to 
             Alagaësia, he is currently working on a science fiction novel. ',
                'imagePath'=>'',
            ],

            [
                'slug' => 'cheryl-strayed',
                'Authorname' => 'Cheryl Strayed',
                'Address' => 'http://www.cherylstrayed.com',
                'BookNumber' => 2,
                'Description' => 'Cheryl Strayed is the author of books: Tiny Beautiful Things, Torch, Brave Enough,
             and the #1 New York Times bestseller, Wild. She also co-hosts the hit podcast Dear Sugar Radio. You can 
             find a listing of her events and answers to FAQ on her web site.',
                'imagePath'=>'',
            ],

            [
                'slug' => 'nathaniel-philbrick',
                'Authorname' => 'Nathaniel Philbrick',
                'Address' => 'http://www.nathanielphilbrick.com/',
                'BookNumber' => 2,
                'Description' => 'Philbrick was Brown’s first Intercollegiate All-American sailor in 1978; that year he 
             won the Sunfish North Americans in Barrington, RI; today he and his wife Melissa sail their Beetle Cat Clio
             and their Tiffany Jane 34 Marie-J in the waters surrounding Nantucket Island.
             After grad school, Philbrick worked for four years at Sailing World magazine; was a freelancer for a 
             number of years, during which time he wrote/edited several sailing books.',
                'imagePath'=>'',
            ],

            [
                'slug' => 'yossi-ghinsberg',
                'Authorname' => 'Yossi Ghinsberg',
                'Address' => 'https://ghinsberg.com/',
                'BookNumber' => 2,
                'Description' => 'Yossi Ghinsberg is an Israeli adventurer, author, entrepreneur, humanitarian, and 
            motivational speaker based in Australia.Ghinsberg is most known for his survival story of when he was
             stranded in an uncharted part of the Bolivian Amazon jungle for three weeks in 1981',
                'imagePath'=>'',
            ],

            [
                'slug' => 'jules-verne',
                'Authorname' => 'Jules Verne',
                'Address' => '-',
                'BookNumber' => 3,
                'Description' => 'Jules Gabriel Verne was a French author who pioneered the genre of science-fiction.
             He is best known for his novels Journey to the Center of the Earth (1864), Twenty Thousand Leagues Under
             the Sea (1870), and Around the World in Eighty Days (1873).Verne wrote about space, air, and underwater 
             travel before navigable aircraft and practical submarines were invented, and before any means of space 
             travel had been devised. He is the third most translated author of all time, behind Disney Productions 
             and Agatha Christie. His prominent novels have been made into films. ',
                'imagePath'=>'',
            ],
        ]);


    }
}
