<?php

use App\Book;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'Title' => 'An Abundance of Katherines',
            'slug' => 'abundance-of-katherines',
            'PageNum' => 229,
            'Price' => 9.99,
            'Published' => 'September 21, 2006' ,
            'Description' => '<p>When it comes to relationships, Colin Singleton\'s type happens to be girls named Katherine.
            And when it comes to girls named Katherine, Colin is always getting dumped. Nineteen times, to be exact.
            On a road trip miles from home, this anagram-happy, washed-up child prodigy has ten thousand dollars in his 
            pocket, a bloodthirsty feral hog on his trail, and an overweight, Judge Judy-loving best friend riding 
            shotgun--but no Katherines.</p>
             <p>Colin is on a mission to prove The Theorem of Underlying Katherine Predictability,
            which he hopes will predict the future of any relationship, avenge Dumpees everywhere, and finally win him the girl.
            Love, friendship, and a dead Austro-Hungarian archduke add up to surprising and heart-changing conclusions in 
            this ingeniously layered comic novel about reinventing oneself.</p>>',
        ]);
        Book::create([
            'Title' => 'Turtles All the Way Down ',
            'slug' => 'turtles-all-the-way-down ',
            'PageNum' => 286,
            'Price' => 9.99,
            'Published' => 'October 10, 2017' ,
            'Description' => '<p>It all begins with a fugitive billionaire and the promise of a cash reward. Turtles All 
            the Way Down is about lifelong friendship, the intimacy of an unexpected reunion, Star Wars fan fiction, 
            and tuatara. But at its heart is Aza Holmes, a young woman navigating daily existence within the ever-tightening 
            spiral of her own thoughts.In his long-awaited return, John Green shares Aza\'s story with shattering, unflinching clarity</p>',
        ]);
        Book::create([
            'Title' => 'Paper Towns',
            'slug' => 'paper-towns',
            'PageNum' => 305,
            'Price' => 6.28,
            'Published' => 'September 22, 2009' ,
            'Description' => '<p>It all begins with a fugitive billionaire and the promise of a cash reward. Turtles All 
            the Way Down is about lifelong friendship, the intimacy of an unexpected reunion, Star Wars fan fiction, 
            and tuatara. But at its heart is Aza Holmes, a young woman navigating daily existence within the ever-tightening 
            spiral of her own thoughts.In his long-awaited return, John Green shares Aza\'s story with shattering, unflinching clarity</p>',
        ]);




        Book::create([
            'Title' => 'Eleanor & Park',
            'slug' => 'e&p',
            'PageNum' => 328,
            'Price' => 10.34,
            'Published' => 'February 26, 2013' ,
            'Description' => '<p>Eleanor is the new girl in town, and with her chaotic family life, her mismatched clothes
             and unruly red hair, she couldn\'t stick out more if she tried.</p>
             <p>Park is the boy at the back of the bus. Black T-shirts, headphones, head in a book - he thinks he\'s made 
             himself invisible. But not to Eleanor... never to Eleanor.</p>            
             <p>Slowly, steadily, through late-night conversations and an ever-growing stack of mix tapes, Eleanor and 
             Park fall for each other. They fall in love the way you do the first time, when you\'re young, and you feel
             as if you have nothing and everything to lose.</p>',
        ]);
        Book::create([
            'Title' => 'Almost Midnight ',
            'slug' => 'almost-midnight ',
            'PageNum' => 161,
            'Price' => 8.30,
            'Published' => 'November 2nd 2017' ,
            'Description' => '<p>Midnights is the story of Noel and Mags, who meet at the same New Year\'s Eve party every 
            year and fall a little more in love each time . . .</p>
            <p>Kindred  Spirits is about Elena, who decides to queue to see the new Star Wars movie and meets Gabe, a fellow fan.
            Midnights was previously published as part of the My True Love Gave to Me anthology, edited by Stephanie Perkins and 
            Kindred Spirits was previously published as a World Book Day title.</p>',
        ]);
        Book::create([
            'Title' => 'Landline: A Novel',
            'slug' => 'landline-novel',
            'PageNum' => 310,
            'Price' => 13.19,
            'Published' => 'September 22, 2009' ,
            'Description' => '<p>From New York Times bestselling author of Eleanor & Park, Rainbow Rowell, 
             comes a hilarious, heart-wrenching take on love, marriage, and magic phones.Georgie McCool knows her marriage 
             is in trouble. That it\'s been in trouble for a long time. She still loves her husband, Neal, and Neal still
             loves her, deeply-but that almost seems beside the point now.Maybe that was always beside the point.</p>',
        ]);


        Book::create([
            'Title' => 'Everything, Everything',
            'slug' => 'everything-everything',
            'PageNum' => 306,
            'Price' => 8.02,
            'Published' => 'May 19, 2017' ,
            'Description' => '<p>Risk everything . . . for love.</p>
            <p>What if you couldn’t touch anything in the outside world? Never breathe in the fresh air, 
            feel the sun warm your face . . . or kiss the boy next door? In Everything, Everything, </p>
           <p> Maddy is a girl who’s literally allergic to the outside world, and Olly is the boy who moves in next door . . .
            and becomes the greatest risk she’s ever taken. </p>
            <p>Everything, Everything will make you laugh, cry, and feel everything in between. It\'s an innovative,  
            inspiring, and heartbreakingly romantic debut novel that unfolds via vignettes, diary entries, illustrations, and more.</p>',
        ]);
        Book::create([
            'Title' => 'The Sun Is Also a Star ',
            'slug' => 'sun-also-star ',
            'PageNum' => 384,
            'Price' => 8.99,
            'Published' => 'May 17, 2019' ,
            'Description' => '<p>Natasha: I’m a girl who believes in science and facts. Not fate. Not destiny. Or dreams 
             that will never come true. I’m definitely not the kind of girl who meets a cute boy on a crowded New York
             City street and falls in love with him. Not when my family is twelve hours away from being deported to Jamaica. 
             Falling in love with him won’t be my story.</p>
             <p>Daniel: I’ve always been the good son, the good student, living up to my parents’ high expectations. Never the poet.
             Or the dreamer. But when I see her, I forget about all that. Something about Natasha makes me think that fate 
             has something much more extraordinary in store—for both of us.
             The Universe: Every moment in our lives has brought us to this single moment. A million futures lie before us. 
             Which one will come true? </p>',
        ]);



        Book::create([
            'Title' => 'Love & Gelato',
            'slug' => 'L&G',
            'PageNum' => 389,
            'Price' => 10.34,
            'Published' => 'May 3, 2016' ,
            'Description' => '<p>A summer in Italy turns into a road trip across Tuscany in this sweeping debut novel filled 
            with romance, mystery, and adventure.</p><p>Lina is spending the summer in Tuscany, but she isn’t in the mood for 
            Italy’s famous sunshine and fairy-tale landscape. She’s only there because it was her mother’s dying wish 
            that she get to know her father.But then Lina is given a journal that her mom had kept when she lived in Italy. 
            Suddenly Lina’s uncovering a magical world of secret romances, art, and hidden bakeries.</p> 
            <p>A world that inspires Lina to follow in her mother’s footsteps and 
            unearth a secret that has been kept from Lina for far too long.
            People come to Italy for love and gelato, someone tells her, but sometimes they discover much more.</p>',
        ]);
        Book::create([
            'Title' => 'Love & Luck ',
            'slug' => 'L&L',
            'PageNum' => 303,
            'Price' => 11.77,
            'Published' => 'May 8th 2018' ,
            'Description' => '<p>From the author of the New York Times best-selling Love & Gelato comes a heartwarming 
            tale of a road trip through Ireland filled with love, adventure, and the true meaning behind the word family.</p>
            <p>Addie is visiting Ireland for her aunt’s over-the-top destination wedding and hoping she can stop thinking 
            about the one horrible thing she did that left her miserable and heartbroken - and threatens her future. 
            But when Addie discovers an unusual guidebook, Ireland for the Heartbroken, hidden in the dusty shelves of 
            the hotel library, she’s able to finally escape her anxious mind and her brother criticism.</p>',
        ]);
        Book::create([
            'Title' => 'Love & Olives',
            'slug' => 'L&O',
            'PageNum' => 352,
            'Price' => 18.99,
            'Published' => 'November 10th 2020' ,
            'Description' => '<p>A tale about a teen girl finding romance while trying to connect with her absent father 
            in Santorini, Greece.</p><p>Liv Varanakis doesn’t have a lot of fond memories of her father, which makes sense—he 
            fled to Greece when she was only eight. What Liv does remember, though, is their shared love for Greek myths 
            and the lost city of Atlantis. So when Liv suddenly receives a postcard from her father explaining that 
            National Geographic is funding a documentary about his theories on Atlantis—and will she fly out to Greece 
            and help?—Liv jumps at the opportunity.But not everything on the Greek island is as perfect as it seems.</p>',
        ]);


        Book::create([
            'Title' => 'How I Live Now',
            'slug' => 'how-i-live-now',
            'PageNum' => 194,
            'Price' => 7.00,
            'Published' => 'November 30th 2004' ,
            'Description' => '<p>Every war has turning points and every person too.”Fifteen-year-old Daisy is sent from 
            Manhattan to England to visit her aunt and cousins she’s never met: three boys near her age, and their 
            little sister. Her aunt goes away on business soon after Daisy arrives. The next day bombs go off as London 
            is attacked and occupied by an unnamed enemy.As power fails, and systems fail, the farm becomes more isolated. 
            Despite the war, it’s a kind of Eden, with no adults in charge and no rules, a place where Daisy’s uncanny 
            bond with her cousins grows into something rare and extraordinary.</p>',
        ]);
        Book::create([
            'Title' => 'Picture Me Gone',
            'slug' => 'picture-me-gone',
            'PageNum' => 256,
            'Price' => 8.99,
            'Published' => 'October 3rd 2013' ,
            'Description' => '<p>Printz Award-winning author Meg Rosoff\'s latest novel is a gorgeous and unforgettable 
            page-turner about the relationship between parents and children, love and loss.</p><p>Mila has an exceptional talent 
            for reading a room—sensing hidden facts and unspoken emotions from clues that others overlook. So when her 
            father’s best friend, Matthew, goes missing from his upstate New York home, Mila and her beloved father travel 
            from London to find him.But just when she’s closest to solving the mystery, a shocking betrayal calls into question her 
            trust in the one person she thought she could read best.</p> ',
        ]);
        Book::create([
            'Title' => 'What I Was',
            'slug' => 'what-was',
            'PageNum' => 209,
            'Price' => 6.65,
            'Published' => 'January 24th 2008' ,
            'Description' => '<p>An unusual coming-of-age story that examines the fluidity of identity and the ways in 
            which people consciously redefine themselves in the face of love.</p>
            <p>Sailing the eastern coast of England with his godson, one-hundred-year-old H remembers his privileged 
            teenage exploits at the side of unlikely childhood companion Finn, whose significantly different lifestyle 
            enchants H before the pair is shattered by a painful scandal.</p>',
        ]);



        Book::create([
            'Title' => 'Wild Beauty',
            'slug' => 'wild-beauty',
            'PageNum' => 340,
            'Price' => 8.12,
            'Published' => 'October 3rd 2017' ,
            'Description' => '<p>For nearly a century, the Nomeolvides women have tended the grounds of La Pradera, 
            the lush estate gardens that enchant guests from around the world. They’ve also hidden a tragic legacy: 
            if they fall in love too deeply, their lovers vanish. But then, after generations of vanishings, a strange 
            boy appears in the gardens.</p><p>The boy is a mystery to Estrella, the Nomeolvides girl who finds him, and to her 
            family, but he’s even more a mystery to himself; he knows nothing more about who he is or where he came from 
            than his first name. As Estrella tries to help Fel piece together his unknown past, La Pradera leads them to 
            secrets as dangerous as they are magical in this stunning exploration of love, loss, and family.</p>',
        ]);
        Book::create([
            'Title' => 'When the Moon Was Ours',
            'slug' => 'moon-was-urs',
            'PageNum' => 273,
            'Price' => 9.79,
            'Published' => 'October 4th 2016' ,
            'Description' => '<p> To everyone who knows them, best friends Miel and Sam are as strange as 
            they are inseparable. Roses grow out of Miel’s wrist, and rumors say that she spilled out of a water tower 
            when she was five. Sam is known for the moons he paints and hangs in the trees, and for how little anyone 
            knows about his life before he and his mother moved to town.</p><p>Atmospheric, dynamic, and packed with gorgeous 
            prose, When the Moon was Ours is another winner from this talented author.</p>',
        ]);
        Book::create([
            'Title' => 'The Weight of Feathers',
            'slug' => 'feathers',
            'PageNum' => 320,
            'Price' => 10.21,
            'Published' => 'September 15th 2015' ,
            'Description' => '<p>For twenty years, the Palomas and the Corbeaus have been rivals and enemies, 
            locked in an escalating feud for over a generation. Both families make their living as traveling performers 
            in competing shows-the Palomas swimming in mermaid exhibitions, the Corbeaus, former tightrope walkers, 
            performing in the tallest trees they can find.</p>',
        ]);



        Book::create([
            'Title' => 'An Ember in the Ashes',
            'slug' => 'ember-ashes',
            'PageNum' => 446,
            'Price' => 9.95,
            'Published' => 'February 9th 2016' ,
            'Description' => '<p>Laia is a slave. Elias is a soldier. Neither is free.</p><p>Under the Martial Empire, defiance is 
            met with death. Those who do not vow their blood and bodies to the Emperor risk the execution of their loved 
            ones and the destruction of all they hold dear.It is in this brutal world, inspired by ancient Rome, that 
            Laia lives with her grandparents and older brother. The family ekes out an existence in the Empire’s 
            impoverished backstreets. They do not challenge the Empire. They’ve seen what happens to those who do.</p>',
        ]);
        Book::create([
            'Title' => 'A Torch Against the Night',
            'slug' => 'torch-night',
            'PageNum' => 452,
            'Price' => 11.39,
            'Published' => 'August 30th 2016' ,
            'Description' => '<p>Set in a rich, high-fantasy world inspired by ancient Rome, Sabaa Tahir\'s AN EMBER IN THE 
            ASHES told the story of Laia, a slave fighting for her family, and Elias, a young soldier 
            fighting for his freedom.</p><p>Elias and Laia are running for their lives. After the events of the Fourth Trial, Martial 
            soldiers hunt the two fugitives as they flee the city of Serra and undertake a perilous journey through the 
            heart of the Empire.</p>',
        ]);
        Book::create([
            'Title' => 'A Reaper at the Gates',
            'slug' => 'reaper-gates',
            'PageNum' => 464,
            'Price' => 13.19,
            'Published' => 'June 12th 2018' ,
            'Description' => '<p>The highly anticipated third book in #1 New York Times bestselling author Sabaa Tahir\'s 
            EMBER QUARTET.Beyond the Martial Empire and within it, the threat of war looms ever larger.</p><p>
            Helene Aquilla, the Blood Shrike, is desperate to protect her sister\'s life and the lives of everyone 
            in the Empire. But she knows that danger lurks on all sides: Emperor Marcus, haunted by his past, grows 
            increasingly unstable and violent, while Keris Veturia, the ruthless Commandant, capitalizes on the Emperor\'s 
            volatility to grow her own power--regardless of the carnage she leaves in her path.</p>',
        ]);



        Book::create([
            'Title' => 'A Game of Thrones',
            'slug' => 'Game-of-Thrones',
            'PageNum' => 835,
            'Price' => 16.23,
            'Published' => 'August 2005' ,
            'Description' => '<p>Here is the first volume in George R. R. Martin’s magnificent cycle of novels that includes 
            A Clash of Kings and A Storm of Swords. As a whole, this series comprises a genuine masterpiece of modern 
            fantasy, bringing together the best the genre has to offer. Magic, mystery, intrigue, romance, and adventure 
            fill these pages and transport us to a world unlike any we have ever experienced. Already hailed as a classic, 
            George R. R. Martin’s stunning series is destined to stand as one of the great achievements of imaginative fiction.</p>',
        ]);
        Book::create([
            'Title' => 'A Clash of Kings',
            'slug' => 'Clash-of-Kings',
            'PageNum' => 969,
            'Price' => 15.88,
            'Published' => 'May 28th 2002' ,
            'Description' => '<p>A comet the color of blood and flame cuts across the sky. Two great leaders—Lord Eddard Stark 
            and Robert Baratheon—who hold sway over an age of enforced peace are dead, victims of royal treachery. 
            Now, from the ancient citadel of Dragonstone to the forbidding shores of Winterfell, chaos reigns. 
            Six factions struggle for control of a divided land and the Iron Throne of the Seven Kingdoms, preparing to 
            stake their claims through tempest, turmoil, and war.</p>',
        ]);
        Book::create([
            'Title' => 'A Storm of Swords',
            'slug' => 'Storm-of-Swords',
            'PageNum' => 1177,
            'Price' => 19.47,
            'Published' => 'March 4th 2003 ' ,
            'Description' => '<p>Of the five contenders for power, one is dead, another in disfavor, and still the wars rage 
            as alliances are made and broken.</p><p> Joffrey sits on the Iron Throne, the uneasy ruler of the Seven Kingdoms. 
            His most bitter rival, Lord Stannis, stands defeated and disgraced, victim of the sorceress who holds him in 
            her thrall. Young Robb still rules the North from the fortress of Riverrun. Meanwhile, making her way across 
            a blood-drenched continent is the exiled queen, Daenerys, mistress of the only three dragons still left in 
            the world.As the future of the land hangs in the balance, no one will rest until the Seven Kingdoms have 
            exploded in a veritable storm of swords.</p>',
        ]);




        Book::create([
            'Title' => 'Red Queen',
            'slug' => 'Red-Queen',
            'PageNum' => 383,
            'Price' => 12.61,
            'Published' => 'February 10th 2015' ,
            'Description' => '<p>Graceling meets The Selection in debut novelist Victoria Aveyard\'s sweeping tale of 
            seventeen-year-old Mare, a common girl whose once-latent magical power draws her into the dangerous intrigue 
            of the king\'s palace. Will her power save her or condemn her?</p><p>Mare Barrow\'s world is divided by blood--those with common, 
            Red blood serve the Silver- blooded elite, who are gifted with superhuman abilities. Mare is a Red, scraping .
            by as a thief in a poor, rural village, until a twist of fate throws her in front of the Silver court. Before 
            the king, princes, and all the nobles, she discovers she has an ability of her own.One wrong move can lead 
            to her death, but in the dangerous game she plays, the only certainty is betrayal.</p>',
        ]);
        Book::create([
            'Title' => 'Glass Sword',
            'slug' => 'Glass-Sword',
            'PageNum' => 444,
            'Price' => 12.78,
            'Published' => 'October 4th 2016' ,
            'Description' => '<p>Mare Barrow’s blood is red—the color of common folk—but her Silver ability, the power to 
            control lightning, has turned her into a weapon that the royal court tries to control.The crown calls her an 
            impossibility, a fake, but as she makes her escape from Maven, the prince—the friend—who betrayed her, 
            Mare uncovers something startling: she is not the only one of her kind.</p>',
        ]);
        Book::create([
            'Title' => 'King\'s Cage',
            'slug' => 'King-Cage',
            'PageNum' => 528,
            'Price' => 14.21,
            'Published' => 'February 7th 2017' ,
            'Description' => '<p>In this breathless third installment to Victoria Aveyard’s bestselling Red Queen series, 
            allegiances are tested on every side. And when the Lightning Girl\'s spark is gone, who will light the way 
            for the rebellion?When blood turns on blood, and ability on ability, there may be no one left to put out 
            the fire—leaving Norta as Mare knows it to burn all the way down. </p>',
        ]);




        Book::create([
            'Title' => 'Eragon',
            'slug' => 'Eragon',
            'PageNum' => 503,
            'Price' => 10.00,
            'Published' => 'April 2005 ' ,
            'Description' => '<p>One boy...</p>
            <p>One dragon...</p>
            <p>A world of adventure.</p>
            <p>When Eragon finds a polished blue stone in the forest, he thinks it is the lucky discovery of a poor farm 
            boy; perhaps it will buy his family meat for the winter. But when the stone brings a dragon hatchling, 
            Eragon soon realizes he has stumbled upon a legacy nearly as old as the Empire itself.Can Eragon take up the 
            mantle of the legendary Dragon Riders? The fate of the Empire may rest in his hands.</p>',
        ]);
        Book::create([
            'Title' => 'Eldest',
            'slug' => 'Eldest',
            'PageNum' => 704,
            'Price' => 9.24,
            'Published' => 'March 13th 2007 ' ,
            'Description' => '<p>Darkness falls…</p><p> Despair abounds…</p><p>Evil reigns…</p>
            <p>Eragon and his dragon, Saphira, have just saved the rebel state from destruction by the mighty forces of King Galbatorix, 
            cruel ruler of the Empire. Now Eragon must travel to Ellesmera, land of the elves, for further training in the skills of 
            the Dragon Rider: magic and swordsmanship. Soon he is on the journey of a lifetime, his eyes open to awe-inspring new 
            places and people, his days filled with fresh adventure. But chaos and betrayal plague him at every turn, and nothing is 
            what it seems. Before long, Eragon doesn’t know whom he can trust.</p>',
        ]);
        Book::create([
            'Title' => 'Brisingr',
            'slug' => 'Brisingr',
            'PageNum' =>748,
            'Price' => 11.75,
            'Published' => 'September 20th 2008' ,
            'Description' => '<p>Oaths sworn . . .</p><p>Loyalties tested . . .</p><p>Forces collide.</p>
            <p>Following the colossal battle against the Empire’s warriors on the Burning Plains, Eragon and his dragon, Saphira, 
            have narrowly escaped with their lives. Still there is more at hand for the Rider and his dragon, as Eragon finds himself 
            bound by a tangle of promises he may not be able to keep.</p>',
        ]);



        Book::create([
            'Title' => 'Wild: From Lost to Found on the Pacific Crest Trail',
            'slug' => 'Wild',
            'PageNum' => 315,
            'Price' => 9.85,
            'Published' => 'March 20th 2012' ,
            'Description' => '<p>A powerful, blazingly honest memoir: the story of an eleven-hundred-mile solo hike that 
            broke down a young woman reeling from catastrophe—and built her back up again.Strayed faces down rattlesnakes 
            and black bears, intense heat and record snowfalls, and both the beauty and loneliness of the trail. Told with 
            great suspense and style, sparkling with warmth and humor, Wild vividly captures the terrors and pleasures of 
            one young woman forging ahead against all odds on a journey that maddened, strengthened, and ultimately healed her.</p>',
        ]);
        Book::create([
            'Title' => 'Brave Enough',
            'slug' => 'Brave-Enough',
            'PageNum' => 160,
            'Price' => 22.95,
            'Published' => 'October 27th 2015 ' ,
            'Description' => '<p>Be brave enough to break your own heart.</p>
            <p>You can\'t ride to the fair unless you get on the pony.</p>
            <p>Keep walking.</p>
            <p>Acceptance is a small, quiet room.</p>
            <p>Romantic love is not a competitive sport.</p>
            <p>Forward is the direction of real life.</p>
            <p>Brave Enough gathers more than 100 of these “mini-instruction manuals for the soul,” urging us toward the 
            incredible capacity for love, compassion, forgiveness, and endurance that is within us all.</p>',
        ]);




        Book::create([
            'Title' => 'In the Heart of the Sea: The Tragedy of the Whaleship Essex',
            'slug' => 'the-heart-sea',
            'PageNum' => 302,
            'Price' => 8.37,
            'Published' => ' May 1st 2001' ,
            'Description' => '<p>Winner of the National Book Award, Nathaniel Philbrick\'s book is a fantastic saga of 
            survival and adventure, steeped in the lore of whaling, with deep resonance in American literature and history.</p>
            <p>In 1820, the whaleship Essex was rammed and sunk by an angry whale, leaving the desperate crew to 
            drift for more than ninety days in three tiny boats. Nathaniel Philbrick uses little-known documents and 
            vivid details about the Nantucket whaling tradition to reveal the chilling facts of this infamous maritime disaster. 
            In the Heart of the Sea, recently adapted into a major feature film starring Chris Hemsworth, is a book for the ages.</p>',
        ]);
        Book::create([
            'Title' => 'The Last Stand: Custer, Sitting Bull, and the Battle of the Little Bighorn',
            'slug' => 'The-Last-Stand',
            'PageNum' =>466,
            'Price' => 9.50,
            'Published' => 'May 4th 2010' ,
            'Description' => '<p>Little Bighorn and Custer are names synonymous in the American imagination with unmatched 
            bravery and spectacular defeat. Mythologized as Custer\'s Last Stand, the June 1876 battle has been equated 
            with other famous last stands, from the Spartans\' defeat at Thermopylae to Davy Crockett at the Alamo.
            In his tightly structured narrative, Nathaniel Philbrick brilliantly sketches the two larger-than-life 
            antagonists: Sitting Bull, whose charisma and political savvy earned him the position of leader of the Plains 
            Indians, and George Armstrong Custer, one of the Union\'s greatest cavalry officers and a man with a reputation 
            for fearless and often reckless courage.</p>',
        ]);


        Book::create([
            'Title' => 'Jungle: A Harrowing True Story of Survival',
            'slug' => 'Jungle',
            'PageNum' => 441,
            'Price' => 11.22,
            'Published' => 'September 1st 2005' ,
            'Description' => '<p>Four travelers meet in Bolivia and set off into the heart of the Amazon rainforest, but what 
            begins as a dream adventure quickly deteriorates into a dangerous nightmare, and after weeks of wandering in 
            the dense undergrowth, the four backpackers split up into two groups.</p><p> But when a terrible rafting accident 
            separates him from his partner, Yossi is forced to survive for weeks alone against one of the wildest backdrops 
            on the planet. Stranded without a knife, map, or survival training, he must improvise shelter and forage for 
            wild fruit to survive. As his feet begin to rot during raging storms, as he loses all sense of direction, 
            and as he begins to lose all hope, he wonders whether he will make it out of the jungle alive.</p><p>The basis of an 
            upcoming motion picture, Jungle is the story of friendship and the teachings of nature, and a terrifying 
            true account that you won’t be able to put down.</p> ',
        ]);
        Book::create([
            'Title' => 'Laws of the Jungle: Jaguars Don\'t Need Self-Help Books',
            'slug' => 'Laws-Jungle',
            'PageNum' =>166,
            'Price' => 8.15,
            'Published' => 'November 1st 2006 ' ,
            'Description' => '<p>Alone, with no food, supplies, or weapons, Yossi Ghinsberg was lost in the Amazon for 
            twenty-eight days. Against all odds, he survived, and his story became the international best-seller Jungle. 
            And here, Ghinsberg shares the profound truths the treacherous Amazon taught him.</p>',
        ]);



        Book::create([
            'Title' => 'Twenty Thousand Leagues Under the Sea',
            'slug' => ' Thousand-Leagues',
            'PageNum' => 394,
            'Price' => 12.88,
            'Published' => 'April 1st 2002' ,
            'Description' => '<p>One of the great masters of science fiction, Jules Verne\'s boundless imagination took 
            his readers into the center of the Earth and to the far reaches of the galaxy years before such travels .
            could actually be attempted.</p>',
        ]);
        Book::create([
            'Title' => 'Around the World in Eighty Days',
            'slug' => 'Around-the-World',
            'PageNum' =>252,
            'Price' => 9.75,
            'Published' => ' February 26th 2004 ' ,
            'Description' => '<p>One night in the reform club, Phileas Fogg bets his companions that he can travel across 
            the globe in just eighty days. Breaking the well-established routine of his daily life, he immediately sets 
            off for Dover with his astonished valet Passepartout. Passing through exotic lands and dangerous locations, 
            they seize whatever transportation is at hand—whether train or elephant—overcoming set-backs and always racing against the clock. </p>',
        ]);
        Book::create([
            'Title' => 'Journey to the Center of the Earth',
            'slug' => 'Journey to the Center of the Earth',
            'PageNum' => 240,
            'Price' => 5.18,
            'Published' => ' April 25th 2006 ' ,
            'Description' => '<p>The intrepid Professor Liedenbrock embarks upon the strangest expedition of the nineteenth 
            century: a journey down an extinct Icelandic volcano to the Earth\'s very core.</p><p> In his quest to penetrate the 
            planet\'s primordial secrets, the geologist--together with his quaking nephew Axel and their devoted guide, 
            Hans--discovers an astonishing subterranean menagerie of prehistoric proportions. Verne\'s imaginative tale
             is at once the ultimate science fiction adventure and a reflection on the perfectibility of human understanding 
             and the psychology of the questor.</p>',
        ]);
    }
}
