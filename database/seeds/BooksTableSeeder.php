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
        DB::table('Books')->insert([
        [
            'imagePath' => 'img/products/An Abundance of Katherines',
            'AuthorId' => 1,
            'Title' => 'An Abundance of Katherines',
            'slug' => 'abundance-of-katherines',
            'PageNum' => 229,
            'Price' => 9.99,
            'Published' => '2006-09-21' ,
            'pdfPath' => 'an-abundance-of-katherines-pdf',
            'literaryAwards' => 'Winner, 2007 Michael L. Printz Honor,
             Finalist, 2007 Los Angeles Times Book Prize',
            'criticRev' => 'Parents need to know that An Abundance of Katherines is a quirky novel by John Green 
             about teen boys who take a road trip to Tennessee, where they get jobs recording the locals\' oral histories 
             in the town of Gutshot. There\'s strong language ,while less graphic than many young adult books, 
             the book has some mature themes, including the reality of teens facing their anxieties and fears as they grow up.',
            'criticName'=> ' Matt Berman',
            'criticImagePath'=> 'img/critics/avatar',
            'Description' => 'When it comes to relationships, Colin Singleton\'s type happens to be girls named Katherine.
            And when it comes to girls named Katherine, Colin is always getting dumped. Nineteen times, to be exact.
            On a road trip miles from home, this anagram-happy, washed-up child prodigy has ten thousand dollars in his 
            pocket, a bloodthirsty feral hog on his trail, and an overweight, Judge Judy-loving best friend riding 
            shotgun--but no Katherines.
             Colin is on a mission to prove The Theorem of Underlying Katherine Predictability,
            which he hopes will predict the future of any relationship, avenge Dumpees everywhere, and finally win him the girl.
            Love, friendship, and a dead Austro-Hungarian archduke add up to surprising and heart-changing conclusions in 
            this ingeniously layered comic novel about reinventing oneself.',
        ],

        [
            'imagePath' => 'img/products/81-ACHsElFL',
            'AuthorId' => 1,
            'Title' => 'Turtles All the Way Down ',
            'slug' => 'turtles-all-the-way-down ',
            'PageNum' => 286,
            'Price' => 9.99,
            'Published' => '2017-10-10'  ,
            'pdfPath' => 'Turtles All the Way Down',
            'literaryAwards' => 'Lincoln Award Nominee (2020),Nominee for Young Adult Fiction (2017)
              Alabama Author Award for Young Adult (2020)',
            'criticRev' => 'Parents need to know that Turtles All the Way Down is best-selling author John Green\'s 
            first novel since 2012\'s runaway success, The Fault in Our Stars. While that book tackled the issue of 
            teens with cancer, this book centers on a protagonist suffering from anxiety and obsessive-compulsive thoughts
             and behavior. Green, who has publicly shared he also has OCD, based the main character\'s struggles on his 
             own lived experience. As in all of Green\'s books, the teen characters are unabashed nerds: incredibly 
             intelligent, well read, and able to discuss everything from architecture and visual art to philosophy and 
             microbiology with as much ease as they talk about Star Wars trivia and the joys of fanfiction. 
             There is nothing age-inappropriate in the book, so expect a smattering of strong language  and some brief 
             kissing scenes, but no sex. Parents who read this book with their teens should have a host of topics to 
             discuss with them, starting with the importance of adolescent mental health.',
            'criticName'=> ' Sandie Angulo Chen ',
            'criticImagePath'=> 'img/critics/Sandie Angulo Chen',
            'Description' => 'It all begins with a fugitive billionaire and the promise of a cash reward. Turtles All 
            the Way Down is about lifelong friendship, the intimacy of an unexpected reunion, Star Wars fan fiction, 
            and tuatara. But at its heart is Aza Holmes, a young woman navigating daily existence within the ever-tightening 
            spiral of her own thoughts.In his long-awaited return, John Green shares Aza\'s story with shattering, unflinching clarity',
        ],

        [
            'imagePath' => 'img/products/MV5BMjE2ODQxODMwOF5BMl5BanBnXkFtZTgwNDY5NjY3NDE@._V1_',
            'AuthorId' => 1,
            'Title' => 'Paper Towns',
            'slug' => 'paper-towns',
            'PageNum' => 305,
            'Price' => 6.28,
            'Published' => '2009-09-22' ,
            'pdfPath' => 'Paper_Towns',
            'literaryAwards' => 'Winner, The Edgar Award,
              SLJ Best Book of the Year',
            'criticRev' => 'Parents need to know that as with Green\'s other books, this one contains some edgy material:
             teens will find plenty of salty teen language and sexual references here, though nothing graphic. 
             Two kids come across the dead body of a man who killed himself, and later Q. wonders if Margo has committed suicide.
              Also, the very appealing main characters sneak out at night and conduct a series of pranks, involving 
              vandalism and misdemeanors, for which there are no consequences other than a fond and amusing memory. 
              But the characters  and the writing  are very sophisticated. ',
            'criticName'=> ' Matt Berman',
            'criticImagePath'=> 'img/critics/avatar',
            'Description' => 'It all begins with a fugitive billionaire and the promise of a cash reward. Turtles All 
            the Way Down is about lifelong friendship, the intimacy of an unexpected reunion, Star Wars fan fiction, 
            and tuatara. But at its heart is Aza Holmes, a young woman navigating daily existence within the ever-tightening 
            spiral of her own thoughts.In his long-awaited return, John Green shares Aza\'s story with shattering, unflinching clarity',
        ],




        [
            'imagePath' => 'img/products/rowell_ep_us',
            'AuthorId' => 2,
            'Title' => 'Eleanor & Park',
            'slug' => 'e&p',
            'PageNum' => 328,
            'Price' => 10.34,
            'Published' =>  '2013-02-26',
            'pdfPath' => 'Eleanor-&-Park',
            'literaryAwards' => 'Georgia Peach Book Award (2014), All About Romance (AAR) 
            Annual Reader Poll for Best Young Adult Romance (2014), Odyssey Award Nominee (2014),
             Michael L. Printz Award Nominee (2016), Pennsylvania Young Readers\' Choice Award for Young Adults (2015)',
            'criticRev' => 'Parents need to know that Eleanor & Park is a coming-of-age romance about two high-school 
            misfits in the \'80s who meet and fall in love on the school bus. There\'s strong language and mature 
            themes about poverty, domestic abuse, and emotional/financial instability. The central characters explore 
            the challenges of being "different" (in Park\'s case, because he\'s half-Korean, in Eleanor\'s because of
             her looks and family) but also the joy of falling in love for the first time. Popular culture from the \'80s
              is regularly discussed, and the protagonists share everything from holding hands to nearly having sex.',
            'criticName'=> 'Sandie Angulo Chen',
            'criticImagePath'=> 'img/critics/Sandie Angulo Chen',
            'Description' => 'Eleanor is the new girl in town, and with her chaotic family life, her mismatched clothes
             and unruly red hair, she couldn\'t stick out more if she tried.
             Park is the boy at the back of the bus. Black T-shirts, headphones, head in a book - he thinks he\'s made 
             himself invisible. But not to Eleanor... never to Eleanor.           
             Slowly, steadily, through late-night conversations and an ever-growing stack of mix tapes, Eleanor and 
             Park fall for each other. They fall in love the way you do the first time, when you\'re young, and you feel
             as if you have nothing and everything to lose.',
        ],
        [
            'imagePath' => 'img/products/35269543._SY475_',
            'AuthorId' => 2,
            'Title' => 'Almost Midnight ',
            'slug' => 'almost-midnight ',
            'PageNum' => 161,
            'Price' => 8.30,
            'Published' => '017-11-22' ,
            'literaryAwards' => '-',
            'pdfPath' => '',
            'criticRev' => 'Parents need to know that Before Midnight is a smart, talky, insightful dramedy that extends
            the love story of Jesse (Ethan Hawke) and Celine (Julie Delpy), the couple who first met and fell in love in
             Before Sunrise and got reacquainted in Before Sunset. This latest installment is an unflinching look at the 
             complications of a relationship between two very complicated people -- including how to negotiate gender 
             roles when children arrive -- and as such, may not be especially relatable for teens, though their parents 
             will probably find much that rings true. ',
            'criticName'=> ' S. Jhoanna Robledo',
            'criticImagePath'=> 'img/critics/crit',
            'Description' => 'Midnights is the story of Noel and Mags, who meet at the same New Year\'s Eve party every 
            year and fall a little more in love each time . . .
            Kindred  Spirits is about Elena, who decides to queue to see the new Star Wars movie and meets Gabe, a fellow fan.
            Midnights was previously published as part of the My True Love Gave to Me anthology, edited by Stephanie Perkins and 
            Kindred Spirits was previously published as a World Book Day title.',
        ],
        [
            'imagePath' => 'img/products/81DiRewS5WL',
            'AuthorId' => 2,
            'Title' => 'Landline: A Novel',
            'slug' => 'landline-novel',
            'PageNum' => 310,
            'Price' => 13.19,
            'Published' => '2009-09-22' ,
            'pdfPath' => 'Landline-Rainbow-Rowell',
            'literaryAwards' => ' Premio El Templo de las Mil Puertas Nominee for Mejor novela extranjera independiente
             (2015)',
            'criticRev' => 'I\'m deeply conflicted about how to review this book. On the one hand, I literally laughed 
            and cried from one page to the next and devoured the whole in a brief sitting.On the other hand, I\'ve also 
            read Rainbow Rowell\'s other books, and this one pales in comparison.So I could review it straightforwardly 
            and say that it\'s funny, clever, charming, endearing, and all that would be true — but I could also review 
            it and say that in some ways it\'s the least of the books of hers I\'ve read so far, and that would also be true.
            Which I suppose is appropriate, given that this is largely a book about conflicting and equivalent truths.
            I loved this book for exploring the intricacies of a difficult marriage that isn\'t abusive — a marriage that
             has friction and tension that stems from good people trying their best, rubbing their rough edges smooth 
             against each other. I loved it for not questioning the fact that a woman can be a good mother and have a 
             successful career, that a man can be a good father by working in the home, and that their problems stem not 
             from gender roles but from personality conflicts. I loved the frequent sharp insights and succinct turns of 
             phrase that pinned a feeling in place, and that are so characteristic of Rowell\'s writing.',
            'criticName'=> 'Amal El-Mohtar',
            'criticImagePath'=> 'img/critics/Amal El-Mohtar',
            'Description' => 'From New York Times bestselling author of Eleanor & Park, Rainbow Rowell, 
             comes a hilarious, heart-wrenching take on love, marriage, and magic phones.Georgie McCool knows her marriage 
             is in trouble. That it\'s been in trouble for a long time. She still loves her husband, Neal, and Neal still
             loves her, deeply-but that almost seems beside the point now.Maybe that was always beside the point.',
        ],


        [
            'imagePath' => 'img/products/91cmJpQQUGL',
            'AuthorId' => 3,
            'Title' => 'Everything, Everything',
            'slug' => 'everything-everything',
            'PageNum' => 306,
            'Price' => 8.02,
            'Published' => '2017-05-19' ,
            'pdfPath' => '16758_everything_-everything-nicola-yoonnicola-yoon',
            'literaryAwards' => 'South Carolina Book Award for Young Adult (2018),
             Pennsylvania Young Readers\' Choice Award Nominee for Young Adults (2017), Rhode Island Teen Book Award (2017),
              Evergreen Teen Book Award (2018), Soaring Eagle Book Award (2016)',
            'criticRev' => 'Thankfully, this isn\'t just another "sick teen" novel but a compelling romance and coming-of-age
             story told from Madeline\'s point of view, and she has a fun, engaging voice. She\'s kind, smart, and pragmatic
              about how she has to live due to her illness. When she breaks free of her "bubble girl" environment, she 
              experiences the world\'s joy and wonder the average person takes for granted. Author Nicola Yoon uses 
              Madeline\'s illness to good effect this way. The story has a big plot twist that comes of out of the blue 
              and with few clues. It seemed like a twist for the sake of having one or a device to easily wrap things up. 
              There are a few other hard-to-believe scenarios in the book, and a light resolution that seems like 
              something out of a run-of-the-mill romantic comedy. Even so, with a little suspension of disbelief, 
              Everything, Everything is an engaging ride. ',
            'criticName'=> 'Mary Cosola ',
            'criticImagePath'=> 'img/critics/Mary Cosola',
            'Description' => 'Risk everything . . . for love.
            What if you couldn’t touch anything in the outside world? Never breathe in the fresh air, 
            feel the sun warm your face . . . or kiss the boy next door? In Everything, Everything, 
           Maddy is a girl who’s literally allergic to the outside world, and Olly is the boy who moves in next door . . .
            and becomes the greatest risk she’s ever taken. 
            Everything, Everything will make you laugh, cry, and feel everything in between. It\'s an innovative,  
            inspiring, and heartbreakingly romantic debut novel that unfolds via vignettes, diary entries, illustrations, and more.',
        ],
        [
            'imagePath' => 'img/products/919dIbcOVsL',
            'AuthorId' => 3,
            'Title' => 'The Sun Is Also a Star ',
            'slug' => 'sun-also-star ',
            'PageNum' => 384,
            'Price' => 8.99,
            'Published' => '2019-05-17' ,
            'pdfPath' => 'oceanofpdf-com_the-sun-is-also-a-star',
            'literaryAwards' => '\'California Book Award for Young Adult (Gold) (2016), Michael L. Printz Award Nominee (2017), 
            South Carolina Book Award Nominee for Young Adult (2019), Rhode Island Teen Book Award Nominee for Honorable 
            Mention (2018), John Steptoe New Talent Award for Author (2017)',
            'criticRev' => 'This touching love story about two teens who fall for each other during 12 intense hours 
            together in New York City is a beautifully written, unforgettable romance.The odds are stacked against our 
            central couple due to their fundamental differences -- not only their cultural ones but their personalities. 
            She\'s a realist; he\'s a dreamer. She thinks love is just a series of chemicals that create temporary feelings
             of arousal and intimacy, while he believes in fate and soulmates and two people them, in particular being 
             "meant to be." What else but fate, he suggests, could\'ve led to their meet-cute and subsequent coincidences 
             that brought them together?They find something in each other that sparks a sense of safety, happiness, 
             and ultimately love -- even if their future together is uncertain. ',
            'criticName'=> ' Sandie Angulo Chen',
            'criticImagePath'=> 'img/critics/Sandie Angulo Chen',
            'Description' => 'Natasha: I’m a girl who believes in science and facts. Not fate. Not destiny. Or dreams 
             that will never come true. I’m definitely not the kind of girl who meets a cute boy on a crowded New York
             City street and falls in love with him. Not when my family is twelve hours away from being deported to Jamaica. 
             Falling in love with him won’t be my story.
             Daniel: I’ve always been the good son, the good student, living up to my parents’ high expectations. Never the poet.
             Or the dreamer. But when I see her, I forget about all that. Something about Natasha makes me think that fate 
             has something much more extraordinary in store—for both of us.
             The Universe: Every moment in our lives has brought us to this single moment. A million futures lie before us. 
             Which one will come true? ',
        ],



        [
            'imagePath' => 'img/products/81DAXxpOLtL',
            'AuthorId' => 4,
            'Title' => 'Love & Gelato',
            'slug' => 'L&G',
            'PageNum' => 389,
            'Price' => 10.34,
            'Published' => '2016-05-03' ,
            'pdfPath' => 'Jenna_Evans_Welch_-_Love_amp_amp_Gelato',
            'literaryAwards' => 'Rhode Island Teen Book Award Nominee for Honorable Mention (2018)',
            'criticRev' => 'This light, fun, fast-paced romance is a charmer. While still processing her grief over her 
            mother\'s death, Lina Emerson is sent to Italy to live with an old friend of her mother\'s for the summer. In
             her first few weeks in Tuscany, she learns a lot about herself, her mother, and love. Author Jenna Evans 
             Welch has a good ear for teen dialogue, and it\'s easy to fall into Lina\'s relationships and feelings. The 
             mystery over who Lina\'s real father is is well written and adds a suspenseful element to the book. Lina\'s 
             romantic struggles are cute and not too intense or heavy. In fact, the characters and romantic relationships 
             could have had more depth and explanation. It\'s hard to believe that so much can happen to a person in a 
             couple of weeks, but sometimes it\'s fun to suspend disbelief and go with it. ',
            'criticName'=> 'Mary Cosola',
            'criticImagePath'=> 'img/critics/Mary Cosola',
            'Description' => 'A summer in Italy turns into a road trip across Tuscany in this sweeping debut novel filled 
            with romance, mystery, and adventure.Lina is spending the summer in Tuscany, but she isn’t in the mood for 
            Italy’s famous sunshine and fairy-tale landscape. She’s only there because it was her mother’s dying wish 
            that she get to know her father.But then Lina is given a journal that her mom had kept when she lived in Italy. 
            Suddenly Lina’s uncovering a magical world of secret romances, art, and hidden bakeries.
            A world that inspires Lina to follow in her mother’s footsteps and 
            unearth a secret that has been kept from Lina for far too long.
            People come to Italy for love and gelato, someone tells her, but sometimes they discover much more.',
        ],
        [
            'imagePath' => 'img/products/love-luck-9781534401013_hr',
            'AuthorId' => 4,
            'Title' => 'Love & Luck ',
            'slug' => 'L&L',
            'PageNum' => 303,
            'Price' => 11.77,
            'Published' => '2018-05-08' ,
            'literaryAwards' => '-',
            'pdfPath' => '',
            'criticRev' => 'The Irish scenery is the highlight of this cute but often irritating story of two feuding 
            teens stuck in close quarters on a road trip. Love & Luck tries for feisty fun, but it lacks the charm of 
            author Jenna Evans Welch\'s previous book Love & Gelato.Welch does a good job of showing the pain of trying 
            to live up to others\' expectations and how you can be close to someone but still not fully understand all 
            that that person is going through. The story features excerpts from a fictitious Irish guidebook for the 
            brokenhearted. Unfortunately, Welch\'s guidebook\'s passages are written in an overly quirky and saccharine 
            style that grates after a few pages. The Irish sites, history, and legends the kids discover on their trip 
            are beautifully delivered and fun to read. And charming, sweet secondary character Rowan almost steals the show.',
            'criticName'=> 'Mary Cosola',
            'criticImagePath'=> 'img/critics/Mary Cosola',
            'Description' => 'From the author of the New York Times best-selling Love & Gelato comes a heartwarming 
            tale of a road trip through Ireland filled with love, adventure, and the true meaning behind the word family.
            Addie is visiting Ireland for her aunt’s over-the-top destination wedding and hoping she can stop thinking 
            about the one horrible thing she did that left her miserable and heartbroken - and threatens her future. 
            But when Addie discovers an unusual guidebook, Ireland for the Heartbroken, hidden in the dusty shelves of 
            the hotel library, she’s able to finally escape her anxious mind and her brother criticism.',
        ],
        [
            'imagePath' => 'img/products/81TZVq1CdjL',
            'AuthorId' => 4,
            'Title' => 'Love & Olives',
            'slug' => 'L&O',
            'PageNum' => 352,
            'Price' => 18.99,
            'Published' => '2020-11-10' ,
            'literaryAwards' => '',
            'criticRev' => '',
            'criticName'=> '',
            'criticImagePath'=> '',
            'pdfPath' => '',
            'Description' => 'A tale about a teen girl finding romance while trying to connect with her absent father 
            in Santorini, Greece.Liv Varanakis doesn’t have a lot of fond memories of her father, which makes sense—he 
            fled to Greece when she was only eight. What Liv does remember, though, is their shared love for Greek myths 
            and the lost city of Atlantis. So when Liv suddenly receives a postcard from her father explaining that 
            National Geographic is funding a documentary about his theories on Atlantis—and will she fly out to Greece 
            and help?—Liv jumps at the opportunity.But not everything on the Greek island is as perfect as it seems.',
        ],


        [
            'imagePath' => 'img/products/91L-W4RPJ1L',
            'AuthorId' => 5,
            'Title' => 'How I Live Now',
            'slug' => 'how-i-live-now',
            'PageNum' => 194,
            'Price' => 7.00,
            'Published' => '2004-11-30' ,
            'pdfPath' => '',
            'literaryAwards' => 'Orange Prize Nominee for New Writers (2005), Guardian Children\'s Fiction Prize (2004), 
            Michael L. Printz Award (2005), Deutscher Jugendliteraturpreis Nominee for Jugendbuch (2006), Branford Boase Award (2005)',
            'criticRev' => 'This is a book that teens will quickly devour and then spend a long time thinking about. 
            There\'s much to consider, from what they would do in Daisy\'s place to the portrayal of modern war to what 
            they think will happen to the survivors in the post-war world. Some readers may find the jump to six years 
            later a bit jarring and others will no doubt be troubled by the sexual relationship between Daisy and her 
            cousin but most teens will find this a powerful, moving tale about kids caught in a war beyond their control 
            and the ways it scars them, and bonds them forever',
            'criticName'=> 'Matt Berman',
            'criticImagePath'=> 'img/critics/avatar',
            'Description' => 'Every war has turning points and every person too.”Fifteen-year-old Daisy is sent from 
            Manhattan to England to visit her aunt and cousins she’s never met: three boys near her age, and their 
            little sister. Her aunt goes away on business soon after Daisy arrives. The next day bombs go off as London 
            is attacked and occupied by an unnamed enemy.As power fails, and systems fail, the farm becomes more isolated. 
            Despite the war, it’s a kind of Eden, with no adults in charge and no rules, a place where Daisy’s uncanny 
            bond with her cousins grows into something rare and extraordinary.',
        ],
        [
            'imagePath' => 'img/products/819z2BnmqPL',
            'AuthorId' => 5,
            'Title' => 'Picture Me Gone',
            'slug' => 'picture-me-gone',
            'PageNum' => 256,
            'Price' => 8.99,
            'Published' => '2013-10-03' ,
            'pdfPath' => '',
            'literaryAwards' => 'Keystone to Reading Book Award Nominee for High School (2015), 
            Milwaukee County Teen Book Award Nominee (2015), Gouden Lijst Nominee for vertaald boek (2017), 
            National Book Award Finalist for Young People\'s Literature (2013)',
            'criticRev' => 'The heart of the plot of PICTURE ME GONE is pretty adult; in fact, the book\'s set more in the 
            the world of adults than that of children. Even so, there are so many rich and wonderful details here that make 
            it a good choice for sophisticated teens. For example, Mila\'s dad is a translator who says that, to do his job,
             "It is not necessary to sympathize with the writer, to agree with what he\'s written...it is necessary to 
             walk alongside and stay in step." This parallels his ability to stand by his friend, even when he doesn\'t 
             understand his hurtful actions.The mystery around the missing man\'s story will keep readers engaged, but it\'s 
             really Mila, her neat family, and the keen observations about people and life gleaned by the girl who\'s 
             "good at solving puzzles" that make up the most memorable pieces.',
            'criticName'=> 'Kate Pavao',
            'criticImagePath'=> 'img/critics/Kate Pavao',
            'Description' => 'Printz Award-winning author Meg Rosoff\'s latest novel is a gorgeous and unforgettable 
            page-turner about the relationship between parents and children, love and loss. Mila has an exceptional talent 
            for reading a room—sensing hidden facts and unspoken emotions from clues that others overlook. So when her 
            father’s best friend, Matthew, goes missing from his upstate New York home, Mila and her beloved father travel 
            from London to find him.But just when she’s closest to solving the mystery, a shocking betrayal calls into question her 
            trust in the one person she thought she could read best. ',
        ],
        [
            'imagePath' => 'img/products/What I Was',
            'AuthorId' => 5,
            'Title' => 'What I Was',
            'slug' => 'what-was',
            'PageNum' => 209,
            'Price' => 6.65,
            'Published' => '2008-01-24' ,
            'pdfPath' => '',
            'literaryAwards' => 'Goldener Lufti (2010), Carnegie Medal Nominee (2008)',
            'criticRev' => ' ',
            'criticName'=> ' ',
            'criticImagePath'=> '',
            'Description' => 'An unusual coming-of-age story that examines the fluidity of identity and the ways in 
            which people consciously redefine themselves in the face of love.
            Sailing the eastern coast of England with his godson, one-hundred-year-old H remembers his privileged 
            teenage exploits at the side of unlikely childhood companion Finn, whose significantly different lifestyle 
            enchants H before the pair is shattered by a painful scandal.',
        ],



        [
            'imagePath' => 'img/products/33158561',
            'AuthorId' => 6,
            'Title' => 'Wild Beauty',
            'slug' => 'wild-beauty',
            'PageNum' => 340,
            'Price' => 8.12,
            'Published' => '2017-10-03' ,
            'literaryAwards' => '-',
            'pdfPath' => '',
            'criticRev' => 'A gorgeously written tale of family curses, feminism, and true love, this is an ideal choice 
            for fans of magical realism and romance. Estrella and her cousins are stuck in their ancestral home, tending 
            a sunken garden and making sure they don\'t fall in love lest that person disappear forever.
            McLemore\'s books aren\'t easy page-turners, because they demand to be savored and enjoyed. The language is 
            so rich and lyrical, you need time to process the words, not just speed-read to find out what happens. Reid 
            is a compelling nemesis greedy and uninterested in the Nomeolvides women as anything but servants or playthings
             he can use, whereas Bay (a "bastard Briar") deeply loves and understands them. But Wild Beauty isn\'t 
             the Briars\' story, it\'s a Nomeolvides tale, and like their name, it\'s not one you shall forget.',
            'criticName'=> 'Sandie Angulo Chen',
            'criticImagePath'=> 'img/critics/Sandie Angulo Chen',
            'Description' => '=For nearly a century, the Nomeolvides women have tended the grounds of La Pradera, 
            the lush estate gardens that enchant guests from around the world. They’ve also hidden a tragic legacy: 
            if they fall in love too deeply, their lovers vanish. But then, after generations of vanishings, a strange 
            boy appears in the gardens.=The boy is a mystery to Estrella, the Nomeolvides girl who finds him, and to her 
            family, but he’s even more a mystery to himself; he knows nothing more about who he is or where he came from 
            than his first name. As Estrella tries to help Fel piece together his unknown past, La Pradera leads them to 
            secrets as dangerous as they are magical in this stunning exploration of love, loss, and family.',
        ],
        [
            'imagePath' => 'img/products/20734002',
            'AuthorId' => 6,
            'Title' => 'The Weight of Feathers',
            'slug' => 'feathers',
            'PageNum' => 320,
            'Price' => 10.21,
            'Published' => '2015-09-15' ,
            'pdfPath' => '',
            'literaryAwards' => 'William C. Morris YA Debut Award Nominee (2016)',
            'criticRev' => 'The book walks the line between reality and magical realism: for instance, “Cluck” and his 
            family have actual feathers growing from the backs of their necks, while Lace and her family have scales 
            growing on certain parts of their bodies. The raining of feathers that happens throughout the novel can 
            sometimes be explained by the events in the story and sometimes defies logical explanation.My main complaint 
            about the novel is that the last twenty or so pages seem to shift into more of a “telling” rather than “showing,” 
            where a lot is explained by getting us directly into the thoughts of characters. The lack of subtlety was a 
            bit disappointing given the rest of the story.',
            'criticName'=> 'Val',
            'criticImagePath'=> 'img/critics/avatar',
            'Description' => 'For twenty years, the Palomas and the Corbeaus have been rivals and enemies, 
            locked in an escalating feud for over a generation. Both families make their living as traveling performers 
            in competing shows-the Palomas swimming in mermaid exhibitions, the Corbeaus, former tightrope walkers, 
            performing in the tallest trees they can find.',
        ],



        [
            'imagePath' => 'img/products/814XG3ckbpL',
            'AuthorId' => 7,
            'Title' => 'An Ember in the Ashes',
            'slug' => 'ember-ashes',
            'PageNum' => 446,
            'Price' => 9.95,
            'Published' => '2016-02-09' ,
            'pdfPath' => 'an-ember-in-the-ashes',
            'literaryAwards' => 'Pennsylvania Young Readers\' Choice Award Nominee for Young Adults (2017),
             Rhode Island Teen Book Award Nominee (2017), Evergreen Teen Book Award Nominee (2018), 
             Milwaukee County Teen Book Award Nominee (2016), Dioraphte Jongerenliteratuurprijs Nominee for Vertaald boek (2016) ',
            'criticRev' => 'Despite some derivative aspects and a slow-going start, An Ember in the Ashes has a compelling 
            story line and fascinating, well-rounded supporting characters.Readers who prefer fantasies with a heavy dose 
            of romance will cheer at all the longing looks and tender feelings described in the story.The novel is a treatise on the importance of standing up to oppression and the difference that individuals can make when they work together toward a better future. Unanswered questions leave readers want more, which they\'ll find in Book 2.',
            'criticName'=> 'Sandie Angulo Chen',
            'criticImagePath'=> 'img/critics/Sandie Angulo Chen',
            'Description' => 'Laia is a slave. Elias is a soldier. Neither is free.Under the Martial Empire, defiance is 
            met with death. Those who do not vow their blood and bodies to the Emperor risk the execution of their loved 
            ones and the destruction of all they hold dear.It is in this brutal world, inspired by ancient Rome, that 
            Laia lives with her grandparents and older brother. The family ekes out an existence in the Empire’s 
            impoverished backstreets. They do not challenge the Empire. They’ve seen what happens to those who do.',
        ],
        [
            'imagePath' => 'img/products/51rr3yggYxL',
            'AuthorId' => 7,
            'Title' => 'A Torch Against the Night',
            'slug' => 'torch-night',
            'PageNum' => 452,
            'Price' => 11.39,
            'Published' => '2016-08-30' ,
            'pdfPath' => 'A Torch Against the Night',
            'literaryAwards' => 'Goodreads Choice Award Nominee for Young Adult Fantasy & Science Fiction (2016)',
            'criticRev' => 'The rare sequel that improves on the original, Sabaa Tahir\'s second Ember installment deepens
             the character development, introduces new forms of magic, and sets the stage for epic books to come.All 
             readers will benefit from the fierceness of the female characters and Tahir\'s ability to thoughtfully insert issues of class, race, and injustice in this unputdownable series.',
            'criticName'=> 'Sandie Angulo Chen',
            'criticImagePath'=> 'img/critics/Sandie Angulo Chen',
            'Description' => '=Set in a rich, high-fantasy world inspired by ancient Rome, Sabaa Tahir\'s AN EMBER IN THE 
            ASHES told the story of Laia, a slave fighting for her family, and Elias, a young soldier 
            fighting for his freedom.=>Elias and Laia are running for their lives. After the events of the Fourth Trial, Martial 
            soldiers hunt the two fugitives as they flee the city of Serra and undertake a perilous journey through the 
            heart of the Empire.',
        ],
        [
            'imagePath' => 'img/products/81kcTorngAL',
            'AuthorId' => 7,
            'Title' => 'A Reaper at the Gates',
            'slug' => 'reaper-gates',
            'PageNum' => 464,
            'Price' => 13.19,
            'Published' => '2018-06-12' ,
            'literaryAwards' => '-',
            'pdfPath' => 'A Reaper at the Gates',
            'criticRev' => 'It starts off slower than the first two installments, but this third book broadens the story\'s 
            scope, answers several key questions, humanizes unlikable characters, and brings former rivals together. 
            There\'s a lot going on in this last book before the fourth and final one. It\'s harder to get through
             with lots of new and returning characters, backstories, and allegiances for readers to sort, classify, 
             and keep track of at first. But at about the halfway point, the 
            pieces come together, and the action takes off to where it\'s once again difficult to stop reading.
             Give this one time to build and it will reward you with some epic battle sequences and alliances that are 
             sure to eventually defeat the big bad villain in the final book.',
            'criticName'=> 'Sandie Angulo Chen',
            'criticImagePath'=> 'img/critics/Sandie Angulo Chen',
            'Description' => 'The highly anticipated third book in #1 New York Times bestselling author Sabaa Tahir\'s 
            EMBER QUARTET.Beyond the Martial Empire and within it, the threat of war looms ever larger.
            Helene Aquilla, the Blood Shrike, is desperate to protect her sister\'s life and the lives of everyone 
            in the Empire. But she knows that danger lurks on all sides: Emperor Marcus, haunted by his past, grows 
            increasingly unstable and violent, while Keris Veturia, the ruthless Commandant, capitalizes on the Emperor\'s 
            volatility to grow her own power--regardless of the carnage she leaves in her path.',
        ],



        [
            'imagePath' => 'img/products/81q1AybR-ZL',
            'AuthorId' => 8,
            'Title' => 'A Game of Thrones',
            'slug' => 'Game-of-Thrones',
            'PageNum' => 835,
            'Price' => 16.23,
            'Published' => '2005-07-12' ,
            'pdfPath' => 'A Game of Thrones',
            'literaryAwards' => 'Nebula Award Nominee for Best Novel (1997), Locus Award for Best Fantasy Novel (1997),
             World Fantasy Award Nominee for Best Novel (1997), Premio Ignotus for Novela extranjera (2003)',
            'criticRev' => '“George R.R. Martin’s new novel, A Game of Thrones, is the first in an epic series about a 
            land in which the seasons shift between periods of seemingly endless summer and seemingly endless winter. 
            The story begins with the kingdom of Winterfell facing both external and internal dangers. Beyond her borders, 
            the cold is returning, a dragon prince is scheming to win back his lost kingdom, and the eggs of supposedly 
            long extinct dragons are beginning to hatch. Within Winterfell itself, war soon erupts when the king is 
            murdered by a family grasping for unlawful power.Many fans of sword-and-sorcery will enjoy the epic scope of 
            this book, something of a change of pace for Martin, who has spent the last decade working for television 
            and who has long been honored for his award-winning stories (e.g., ‘Sandkings’). Still, to my mind, this 
            opening installment suffers from one-dimensional characters and less than memorable imagery.”',
            'criticName'=> ' John H. Riskind,',
            'criticImagePath'=> 'img/critics/John_Riskind',
            'Description' => 'Here is the first volume in George R. R. Martin’s magnificent cycle of novels that includes 
            A Clash of Kings and A Storm of Swords. As a whole, this series comprises a genuine masterpiece of modern 
            fantasy, bringing together the best the genre has to offer. Magic, mystery, intrigue, romance, and adventure 
            fill these pages and transport us to a world unlike any we have ever experienced. Already hailed as a classic, 
            George R. R. Martin’s stunning series is destined to stand as one of the great achievements of imaginative fiction.',
        ],
        [
            'imagePath' => 'img/products/A Clash of Kings',
            'AuthorId' => 8,
            'Title' => 'A Clash of Kings',
            'slug' => 'Clash-of-Kings',
            'PageNum' => 969,
            'Price' => 15.88,
            'Published' => '2002-05-28' ,
            'pdfPath' => 'A Clash of Kings',
            'literaryAwards' => 'Nebula Award Nominee for Best Novel (1999), Locus Award for Best Fantasy Novel (1999), 
            Premio Ignotus for Novela extranjera (2004)',
            'criticRev' => 'Martin is a genius, there seems to be no doubt about that. His gift with words and storytelling 
            combine to craft a tale that will one day rival Tolkien’s as a fantasy tale for England.I knew before I 
            read this book that it was very highly rated by a lot of people and it was with real anticipation that I read 
            the first pages. However, I did not enjoy it as much as I\'d hoped. The characters are good and storyline 
            itself cannot be faulted but I felt that it was overly long and more than a bit confusing in places. 
            There are a lot of characters to deal with and at times it was overwhelming, difficult in places to keep 
            track with who is who and what their role in the story was.',
            'criticName'=> 'Joshua S Hill',
            'criticImagePath'=> 'img/critics/Joshua S Hill',
            'Description' => 'A comet the color of blood and flame cuts across the sky. Two great leaders—Lord Eddard Stark 
            and Robert Baratheon—who hold sway over an age of enforced peace are dead, victims of royal treachery. 
            Now, from the ancient citadel of Dragonstone to the forbidding shores of Winterfell, chaos reigns. 
            Six factions struggle for control of a divided land and the Iron Throne of the Seven Kingdoms, preparing to 
            stake their claims through tempest, turmoil, and war.If you have read Game of Thrones and want more of the same 
            then this will not disappoint but unfortunately I was rather looking forward to finishing the book and not 
            for all the right reasons. A good book but too long.',
        ],
        [
            'imagePath' => 'img/products/storm-swords-2',
            'AuthorId' => 8,
            'Title' => 'A Storm of Swords',
            'slug' => 'Storm-of-Swords',
            'PageNum' => 1177,
            'Price' => 19.47,
            'Published' => '2003-03-04 ' ,
            'pdfPath' => 'A-Storm-of-Swords',
            'literaryAwards' => 'Hugo Award Nominee for Best Novel (2001), Nebula Award Nominee for Best Novel (2001), 
            Locus Award for Best Fantasy Novel (2001), Geffen Award for Best Translated Fantasy Book (2002), 
            Premio Ignotus (2006) ',
            'criticRev' => 'Since it\'s book three in the series, the story is in full swing for everyone involved. 
            It got my attention right from the Prologue, and as the things progressed there was a perfect balance of 
            political scheming and personal story lines. The last third of the book had me up way too late at night, 
            and every time I thought I read the last major event, I got hit with another one a chapter or two later.
             There is a lot of character development for almost everyone in A Storm of Swords, but something that you 
             may not expect is changing your mind about a few people.George R.R. Martin\'s writing is great, the characters
              are fascinating, and the story is captivating. My interest in the series is definitely at its highest 
              point at the moment, and this is easily one of the best books I have ever read. ',
            'criticName'=> 'Tomas Wagner',
            'criticImagePath'=> 'img/critics/avatar',
            'Description' => 'Of the five contenders for power, one is dead, another in disfavor, and still the wars rage 
            as alliances are made and broken. Joffrey sits on the Iron Throne, the uneasy ruler of the Seven Kingdoms. 
            His most bitter rival, Lord Stannis, stands defeated and disgraced, victim of the sorceress who holds him in 
            her thrall. Young Robb still rules the North from the fortress of Riverrun. Meanwhile, making her way across 
            a blood-drenched continent is the exiled queen, Daenerys, mistress of the only three dragons still left in 
            the world.As the future of the land hangs in the balance, no one will rest until the Seven Kingdoms have 
            exploded in a veritable storm of swords.',
        ],




        [
            'imagePath' => 'img/products/red-queen',
            'AuthorId' => 9,
            'Title' => 'Red Queen',
            'slug' => 'Red-Queen',
            'PageNum' => 383,
            'Price' => 12.61,
            'Published' => '2015-02-10' ,
            'pdfPath' => 'Victoria_Aveyard_-_Red_Queen',
            'literaryAwards' => 'Buxtehuder Bulle (2015), South Carolina Book Award for Young Adult (2017), 
            California Young Readers Medal for Young Adult (2017), Lincoln Award (2017), Missouri Truman Readers Award Nominee (2018)',
            'criticRev' => 'Aveyard packs a lot into a first novel: world building, court intrigue, caste divisions, 
            superpowers, and a main character with multiple possible love interests.While Aveyard\'s world-building 
            starts off slow, it grows more complicated as the book continues. Aveyard\'s pacing starts off reflective, 
            as young Mare discovers everything about the Silver court for the first time. By the last third of the book, 
            the story is so compelling you can\'t stop reading. Don\'t bother trying to figure out the end game; Aveyard 
            is a crafty writer who sneaks in twists and makes readers care, despite a few niggling plot holes and the 
            occasionally exasperating shifts in Mare\'s romantic feelings.',
            'criticName'=> ' Sandie Angulo Chen',
            'criticImagePath'=> 'img/critics/ Sandie Angulo Chen',
            'Description' => 'Graceling meets The Selection in debut novelist Victoria Aveyard\'s sweeping tale of 
            seventeen-year-old Mare, a common girl whose once-latent magical power draws her into the dangerous intrigue 
            of the king\'s palace. Will her power save her or condemn her? 
            Mare Barrow\'s world is divided by blood--those with common, 
            Red blood serve the Silver- blooded elite, who are gifted with superhuman abilities. Mare is a Red, scraping .
            by as a thief in a poor, rural village, until a twist of fate throws her in front of the Silver court. Before 
            the king, princes, and all the nobles, she discovers she has an ability of her own.One wrong move can lead 
            to her death, but in the dangerous game she plays, the only certainty is betrayal.',
        ],
        [
            'imagePath' => 'Glass-Sword',
            'AuthorId' => 9,
            'Title' => 'Glass Sword',
            'slug' => 'Glass-Sword',
            'PageNum' => 444,
            'Price' => 12.78,
            'Published' => '2016-10-04' ,
            'pdfPath' => 'Glass Sword by Victoria Aveyard',
            'literaryAwards' => 'Goodreads Choice Award Nominee for Young Adult Fantasy & Science Fiction (2016)',
            'criticRev' => 'First-person stories rely on the protagonist evolving, just as sequels must balance action 
            and plot, and on both counts this installment fails to live up to its predecessor. Mare, now fully aware of 
            her powers, is extremely unlikable in this installment. She\'s egotistical, 
            angry, and cruel, calling her best friend "nothing" and constantly ruminating about her superiority as the
             "lightning girl." She immaturely swings from suspicious to hateful to disappointed in everyone and lives by the oft-repeated motto, "Anyone can betray anyone." The romance continues to move at a glacial pace, and Cal emerges as one of the few characters to elicit empathy from readers. For a Big Bad villain, Mare\'s presence is barely felt, but at least the last 100 pages ramp up the action, proving the author\'s strength is closing a story with fireworks. Otherwise, readers will feel betrayed by this rushed and uninspired second book. ',
            'criticName'=> ' Sandie Angulo Chen',
            'criticImagePath'=> 'img/critics/ Sandie Angulo Chen',
            'Description' => 'Mare Barrow’s blood is red—the color of common folk—but her Silver ability, the power to 
            control lightning, has turned her into a weapon that the royal court tries to control.The crown calls her an 
            impossibility, a fake, but as she makes her escape from Maven, the prince—the friend—who betrayed her, 
            Mare uncovers something startling: she is not the only one of her kind.',
        ],
        [
            'imagePath' => 'King\'s Cage',
            'AuthorId' => 9,
            'Title' => 'King\'s Cage',
            'slug' => 'King-Cage',
            'PageNum' => 528,
            'Price' => 14.21,
            'Published' => '2017-02-07' ,
            'pdfPath' => 'King\'s Cage by Victoria Aveyard',
            'literaryAwards' => 'William C. Morris YA Debut Award Nominee (2016)',
            'criticRev' => 'After Aveyard\'s disappointing second book, this installment is just what Red Queen fans need: genuine growth and character development, more romance, and more end game in sight for Mare Barrow. Even skeptics who put the series down after the lackluster Glass Sword should consider resuming it now that the author has once again found her groove, and her main character is no longer as excruciating to follow.At more than 500 pages, it\'s unsurprising that the pacing is uneven: Some parts fly by, and others feel overlong. Given that the book starts with a quote from Hillary Rodham Clinton, that\'s clearly on purpose, and discerning readers can see how girls will eventually rule in this world.',
            'criticName'=> ' Sandie Angulo Chen',
            'criticImagePath'=> 'img/critics/ Sandie Angulo Chen',
            'Description' => 'In this breathless third installment to Victoria Aveyard’s bestselling Red Queen series, 
            allegiances are tested on every side. And when the Lightning Girl\'s spark is gone, who will light the way 
            for the rebellion?When blood turns on blood, and ability on ability, there may be no one left to put out 
            the fire—leaving Norta as Mare knows it to burn all the way down.',
        ],




        [
            'imagePath' => 'Eragon',
            'AuthorId' => 10,
            'Title' => 'Eragon',
            'slug' => 'eragon',
            'PageNum' => 503,
            'Price' => 10.00,
            'Published' => '2005-04-10 ' ,
            'pdfPath' => 'Eragon',
            'literaryAwards' => 'Book Sense Book of the Year Award for Children\'s Literature (2004), 
            Books I Loved Best Yearly (BILBY) Awards for Older Readers (2007), South Carolina Book Award for Young Adult Book (2006), 
            Grand Canyon Reader Award for Teen Book (2006), Nene Award (2006) .',
            'criticRev' => 'That young first-time author Christopher Paolini is a major talent in the making seems certain -- but he\'s not quite there yet. Paolini (he was 15 when he wrote this book) has gotten quite a bit of publicity for ERAGON, the first of a planned trilogy called Inheritance, and it\'s easy to see why. The story is large in size (around 500 pages), epic in scope, and very engrossing. For a generation of young fantasy fans who love long, monumental, high fantasy, a teen author is icing on the cake.That this is a great achievement for one so young is undeniable, and many children will love it. It certainly ranks right up there with other overblown fantasies written by adults, such as Terry Brooks\'s Sword of Shannara series. ',
            'criticName'=> ' Matt Berman',
            'criticImagePath'=> 'img/critics/avatar',
            'Description' => 'One boy...
            One dragon...
            A world of adventure.
            When Eragon finds a polished blue stone in the forest, he thinks it is the lucky discovery of a poor farm 
            boy; perhaps it will buy his family meat for the winter. But when the stone brings a dragon hatchling, 
            Eragon soon realizes he has stumbled upon a legacy nearly as old as the Empire itself.Can Eragon take up the 
            mantle of the legendary Dragon Riders? The fate of the Empire may rest in his hands.',
        ],
        [
            'imagePath' => 'eldest',
            'AuthorId' => 10,
            'Title' => 'Eldest',
            'slug' => 'eldest',
            'PageNum' => 704,
            'Price' => 9.24,
            'Published' => '2007-03-13 ' ,
            'pdfPath' => 'Eragon - 2 -Eldest',
            'literaryAwards' => 'William C. Morris YA Debut Award Nominee (2016)',
            'criticRev' => 'ELDEST is considerably longer and more dense than its predecessor, Eragon, but it\'s exciting, dark, suspenseful, and imaginative. This is a considerable step forward in Christopher Paolini\'s development as a writer. Eragon and Roran are compelling characters, and the relationship between Eragon and Saphira can be touching.

            It may take some of the younger fans quite a bit of plowing through to finish it, but Paolini\'s writing is, like his main character, growing more fluid and sure here, with almost none of the embarrassing clunkers that marred the first book. His dialogue, though still the stilted, formal speech beloved by authors of high fantasy, is less hackneyed and clichéd. This is the work of a growing young writer who is learning as he goes and gradually but surely getting a firmer grip on his considerable talent, like an inexperienced charioteer with a frisky team.',
            'criticName'=> ' Matt Berman',
            'criticImagePath'=> 'img/critics/avatar',
            'Description' => 'Darkness falls… 
            Despair abounds…  
            Evil reigns…
            Eragon and his dragon, Saphira, have just saved the rebel state from destruction by the mighty forces of King Galbatorix, 
            cruel ruler of the Empire. Now Eragon must travel to Ellesmera, land of the elves, for further training in the skills of 
            the Dragon Rider: magic and swordsmanship. Soon he is on the journey of a lifetime, his eyes open to awe-inspring new 
            places and people, his days filled with fresh adventure. But chaos and betrayal plague him at every turn, and nothing is 
            what it seems. Before long, Eragon doesn’t know whom he can trust.',
        ],
        [
            'imagePath' => 'Brisingr',
            'AuthorId' => 10,
            'Title' => 'Brisingr',
            'slug' => 'brisingr',
            'PageNum' =>748,
            'Price' => 11.75,
            'Published' => '2008-09-20' ,
            'literaryAwards' => '-',
            'pdfPath' => 'brisingr',
            'criticRev' => 'oung author Christopher Paolini continues to grow as a writer, and his story has an ability to capture and hold his readers\' attentions even over the far-too-long expanse of his longest novel yet. His characters, settings, and action set-pieces are vivid and continue to thrill, and there is no doubt that this third book in what is now planned to be a four-book series will sell well and please many of his fans.Paolini is a very good writer, and has the talent to be a great one  all he needs is the discipline.',
            'criticName'=> ' Matt Berman',
            'criticImagePath'=> 'img/critics/avatar',
            'Description' => 'Oaths sworn . . .
            Loyalties tested . . .
            Forces collide.
            Following the colossal battle against the Empire’s warriors on the Burning Plains, Eragon and his dragon, Saphira, 
            have narrowly escaped with their lives. Still there is more at hand for the Rider and his dragon, as Eragon finds himself 
            bound by a tangle of promises he may not be able to keep.',
        ],



        [
            'imagePath' => 'Wild',
            'AuthorId' => 11,
            'Title' => 'Wild: From Lost to Found on the Pacific Crest Trail',
            'slug' => 'from-lost',
            'PageNum' => 315,
            'Price' => 9.85,
            'Published' => '2012-03-20' ,
            'pdfPath' => 'Wild__From_Lost_to_Found_on_the_Pacific_Crest_Trail',
            'literaryAwards' => 'Oregon Book Award Nominee for Creative Nonfiction (Finalist) (2013), 
            Indies Choice Book Award for Adult Nonfiction (2013), Puddly Award for Nonfiction (2013), Goodreads Choice Award for Memoir & Autobiography (2012)',
            'criticRev' => 'In this hugely entertaining book, Cheryl Strayed takes the redemptive nature of travel – a theme as old as literature itself – and makes it her own. For three months she hiked 1,100 miles alone along the Pacific Crest Trail, a continuous wilderness undulating from Mexico to Canada over nine mountain ranges – the Laguna to the Cascades. She did it, she says, "in order to save myself".
             Wild tracks the physical changes as a body gets turned inside out in three months, and more interestingly, the prose reveals Strayed\'s return to sanity.
             Towards the end of Wild, approaching journey\'s end at the Bridge of the Gods over the benighted Columbia River, the author writes: "I felt fierce and humble and gathered up inside, like I was safe in the world now." Lucky her.',
            'criticName'=> 'Dwight Garner',
            'criticImagePath'=> 'img/critics/avatar',
            'Description' => 'A powerful, blazingly honest memoir: the story of an eleven-hundred-mile solo hike that 
            broke down a young woman reeling from catastrophe—and built her back up again.Strayed faces down rattlesnakes 
            and black bears, intense heat and record snowfalls, and both the beauty and loneliness of the trail. Told with 
            great suspense and style, sparkling with warmth and humor, Wild vividly captures the terrors and pleasures of 
            one young woman forging ahead against all odds on a journey that maddened, strengthened, and ultimately healed her.',
        ],
        [
            'imagePath' => 'Brave Enough',
            'AuthorId' => 11,
            'Title' => 'Brave Enough',
            'slug' => 'Brave-Enough',
            'PageNum' => 160,
            'Price' => 22.95,
            'Published' => '2015-09-27 ' ,
            'literaryAwards' => '-',
            'criticRev' => ' ',
            'criticName'=> ' ',
            'criticImagePath'=> '',
            'pdfPath' => '',
            'Description' => 'Be brave enough to break your own heart.
            You can\'t ride to the fair unless you get on the pony.
            Keep walking.   
            Acceptance is a small, quiet room.
            Romantic love is not a competitive sport.
            Forward is the direction of real life.
            Brave Enough gathers more than 100 of these “mini-instruction manuals for the soul,” urging us toward the 
            incredible capacity for love, compassion, forgiveness, and endurance that is within us all.',
        ],





        [
            'imagePath' => 'In the Heart of the Sea',
            'AuthorId' => 12,
            'Title' => 'In the Heart of the Sea: The Tragedy of the Whaleship Essex',
            'slug' => 'the-heart-sea',
            'PageNum' => 302,
            'Price' => 8.37,
            'Published' => '2001-03-01' ,
            'pdfPath' => '',
            'literaryAwards' => 'National Book Award for Nonfiction (2000), Ambassador Book Award for American Studies (2001), 
            Massachusetts Book Award Nominee for Nonfiction (2001), ALA Alex Award (2001)',
            'criticRev' => 'The story arc follows the tragic two year journey of the whaleship Essex led by Captain Pollard and his arrogant First Mate, Owen Chase. The latter being one of the surviving accounts that this novel is based off. As this particular interpretation of the event is often biased towards those in charge, the second account of the cabin boy, 14 year old Thomas Nickerson, balances the perspectives on board. Giving a voice to the men in the lower ranks of the ship’s crew.
            The historical information is delivered just when it is needed in order to explain the foreign viewpoints and actions of the sailors, preventing any boredom that is often associated with these kinds of novels. The creative technique used by Philbrick to explain technical whaling jargon was one of the best aspects of the novel. Meaning the information given is delivered to provide some of the most graphic imagery in the whole novel.
            Despite being slow to begin with, In the Heart of the Sea was a fascinating read that not only gave me great knowledge about whaling, but also finally allowed me to understand the language of Moby Dick.',
            'criticName'=> 'Ebony Bell',
            'criticImagePath'=> 'img/critics/avatar',
            'Description' => 'Winner of the National Book Award, Nathaniel Philbrick\'s book is a fantastic saga of 
            survival and adventure, steeped in the lore of whaling, with deep resonance in American literature and history.
            In 1820, the whaleship Essex was rammed and sunk by an angry whale, leaving the desperate crew to 
            drift for more than ninety days in three tiny boats. Nathaniel Philbrick uses little-known documents and 
            vivid details about the Nantucket whaling tradition to reveal the chilling facts of this infamous maritime disaster. 
            In the Heart of the Sea, recently adapted into a major feature film starring Chris Hemsworth, is a book for the ages.',
        ],
        [
            'imagePath' => 'The Last Stand',
            'AuthorId' => 12,
            'Title' => 'The Last Stand: Custer, Sitting Bull, and the Battle of the Little Bighorn',
            'slug' => 'The-Last-Stand',
            'PageNum' =>466,
            'Price' => 9.50,
            'Published' => '2010-03-04' ,
            'pdfPath' => '',
            'literaryAwards' => 'Montana Book Award Nominee (2010), Goodreads Choice Award Nominee for History and Biography (2010)',
            'criticRev' => 'For many young and impressionable readers in the 1960s, there was an incisive and hilarious book, Thomas Berger’s “Little Big Man,” that did more than any other to replace the outdated narrative of the Old West as a contest between cowboys (good guys) and Indians (bad guys) with a reversal of roles, portraying European Americans as swashbuckling clods who committed genocide on the good-hearted natives.
            “The Last Stand” is an engrossing, thoughtfully researched and tautly written account of a critical chapter in American history. With strong narrative skill, offering broad context and narrow detail, Philbrick recounts a story and, in the process, dismantles old myths piece by piece. Custer’s military action at Little Bighorn was certainly not the last stand of the white man, who soon succeeded in decimating the Indian population. 
            There was not even a last stand by the hapless soldiers who followed Custer into what was clearly an ill-considered military action against a Sioux village on June 25, 1876, in what is now Montana. Instead, Custer’s final battle was messy, conflicted and confused. It did not signify anything heroic or deranged. Militarily, it was a blunder. To a historian, it was a telling incident that reveals much about the time.',
            'criticName'=> 'SETH FAISON',
            'criticImagePath'=> 'img/critics/seth-faison',
            'Description' => 'Little Bighorn and Custer are names synonymous in the American imagination with unmatched 
            bravery and spectacular defeat. Mythologized as Custer\'s Last Stand, the June 1876 battle has been equated 
            with other famous last stands, from the Spartans\' defeat at Thermopylae to Davy Crockett at the Alamo.
            In his tightly structured narrative, Nathaniel Philbrick brilliantly sketches the two larger-than-life 
            antagonists: Sitting Bull, whose charisma and political savvy earned him the position of leader of the Plains 
            Indians, and George Armstrong Custer, one of the Union\'s greatest cavalry officers and a man with a reputation 
            for fearless and often reckless courage.',
        ],


        [
            'imagePath' => 'Jungle',
            'AuthorId' => 13,
            'Title' => 'Jungle: A Harrowing True Story of Survival',
            'slug' => 'Jungle',
            'PageNum' => 441,
            'Price' => 11.22,
            'Published' => '2005-08-01' ,
            'literaryAwards' => '-',
            'pdfPath' => '',
            'criticRev' => 'Simply breathtaking. Yossi s story of survival haunted me for weeks. --Bryce Courtenay, author of The Power of One
            A powerful story of self-discovery, survival in the wild. --The Los Angeles Times
            Told simply and yet with a novelist s eye for structure and drama, the story unfolds like a nightmare movie. --Sun Herald

            A powerful story of self-discovery, survival in the wild. --The Los Angeles Times

            Told simply and yet with a novelist\'s eye for structure and drama, the story unfolds like a nightmare movie. --Sun Herald',
            'criticName'=> '',
            'criticImagePath'=> '',
            'Description' => 'Four travelers meet in Bolivia and set off into the heart of the Amazon rainforest, but what 
            begins as a dream adventure quickly deteriorates into a dangerous nightmare, and after weeks of wandering in 
            the dense undergrowth, the four backpackers split up into two groups. But when a terrible rafting accident 
            separates him from his partner, Yossi is forced to survive for weeks alone against one of the wildest backdrops 
            on the planet. Stranded without a knife, map, or survival training, he must improvise shelter and forage for 
            wild fruit to survive. As his feet begin to rot during raging storms, as he loses all sense of direction, 
            and as he begins to lose all hope, he wonders whether he will make it out of the jungle alive.The basis of an 
            upcoming motion picture, Jungle is the story of friendship and the teachings of nature, and a terrifying 
            true account that you won’t be able to put down. ',
        ],
        [
            'imagePath' => '51931',
            'AuthorId' => 13,
            'Title' => 'Laws of the Jungle: Jaguars Don\'t Need Self-Help Books',
            'slug' => 'Laws-Jungle',
            'PageNum' =>166,
            'Price' => 8.15,
            'Published' => '2006-11-01 ' ,
            'pdfPath' => '',
            'literaryAwards' => '',
            'criticRev' => ' ',
            'criticName'=> ' ',
            'criticImagePath'=> '',
            'Description' => 'Alone, with no food, supplies, or weapons, Yossi Ghinsberg was lost in the Amazon for 
            twenty-eight days. Against all odds, he survived, and his story became the international best-seller Jungle. 
            And here, Ghinsberg shares the profound truths the treacherous Amazon taught him.',
        ],



        [
            'imagePath' => 'Twenty Thousand Leagues Under the Sea',
            'AuthorId' => 14,
            'Title' => 'Twenty Thousand Leagues Under the Sea',
            'slug' => ' Thousand-Leagues',
            'PageNum' => 394,
            'Price' => 12.88,
            'Published' => '2002-04-01' ,
            'pdfPath' => 'twenty-thousand-leagues-under-the-sea',
            'literaryAwards' => '',
            'criticRev' => ' ',
            'criticName'=> ' ',
            'criticImagePath'=> '',
            'Description' => 'One of the great masters of science fiction, Jules Verne\'s boundless imagination took 
            his readers into the center of the Earth and to the far reaches of the galaxy years before such travels .
            could actually be attempted.',
        ],
        [
            'imagePath' => '71IJDMb5YQL',
            'AuthorId' => 14,
            'Title' => 'Around the World in Eighty Days',
            'slug' => 'Around-the-World',
            'PageNum' =>252,
            'Price' => 9.75,
            'Published' => '2004-02-26 ' ,
            'pdfPath' => 'around-the-world-in-80-days',
            'literaryAwards' => 'Selected Audiobooks for Young Adults',
            'criticRev' => 'When you step into the world of Jules Verne, you step into a world of possibilities and endless adventures. You also meet unforgettable characters.
            
            No matter what delays occurred on this journey, every single problem was solved by money. Need a ride? Buy an elephant. Need a steamboat? Buy it from the captain. Need to get there fast? Bribe the engineers. Even in the late 1870s, money could still solve all your problems. Interesting to note that today’s society still has the same ideology. 

            Will Phileas Fogg make it in time? What happened to Aouda? And Fix? Find out when you go around the world in eighty days.',
            'criticName'=> 'Shayla Raquel',
            'criticImagePath'=> 'img/critics/Shayla Raquel',
            'Description' => 'One night in the reform club, Phileas Fogg bets his companions that he can travel across 
            the globe in just eighty days. Breaking the well-established routine of his daily life, he immediately sets 
            off for Dover with his astonished valet Passepartout. Passing through exotic lands and dangerous locations, 
            they seize whatever transportation is at hand—whether train or elephant—overcoming set-backs and always racing against the clock. ',
        ],
        [
            'imagePath' => '7cf8e1d886b7ad2d8afa8b9fe4bcb62e',
            'AuthorId' => 14,
            'Title' => 'Journey to the Center of the Earth',
            'slug' => 'Journey to the Center of the Earth',
            'PageNum' => 240,
            'Price' => 5.18,
            'Published' => ' 2006-04-25 ' ,
            'pdfPath' => 'jules_verne_-_a_journey_to_the_center_of_the_earth',
            'literaryAwards' => 'William C. Morris YA Debut Award Nominee (2016)',
            'criticRev' => 'Jules Verne is probably known to most of you through his famous novel, Around the World in 80 Days. The staggering success of this novel though, meant that his other works are not as well known. Indeed, most of us waited for the film to be introduced to Journey to the Centre of the Earth. In this novel, instead of going around the world, we are now going into it!

            Though most adventures and action books these days rely on shoot outs and car chases to keep the reader interested, Jules Verne manages to grip us using old fashioned mystery and suspense.
            This book takes a little while to get going, but when it does, it becomes one you cannot put down. It has advanced vocabulary, many scientific theories and overall may be a little hard to understand or read for children below 12 or 13.',
            'criticName'=> ' Matt Berman',
            'criticImagePath'=> 'img/critics/avatar',
            'Description' => 'The intrepid Professor Liedenbrock embarks upon the strangest expedition of the nineteenth 
            century: a journey down an extinct Icelandic volcano to the Earth\'s very core.
            In his quest to penetrate the 
            planet\'s primordial secrets, the geologist--together with his quaking nephew Axel and their devoted guide, 
            Hans--discovers an astonishing subterranean menagerie of prehistoric proportions. Verne\'s imaginative tale
             is at once the ultimate science fiction adventure and a reflection on the perfectibility of human understanding 
             and the psychology of the questor.>',
        ],
        ]);

    }
}
