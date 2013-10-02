blastarparaphrase
=================

Blastar Paraphrase, word switcher, word salad, proof of concept, needs Moby Thesaurus MYSQL database to work

Welcome to Blastar Paraphase 0.00001 Alpha

This is like the dumbest PHP script I ever wrote, it makes word salads based on text you give it.

You need the MySQL Moby Thesaurus found here:
http://code.google.com/p/moby-thesaurus/

Without it the script won't work. Make sure you know how MySQL databases work before you even attempt to use this script!

Copyleft GPL 2.0 by Orion Blastar orionblastar@gmail.com @OrionBlastar
All rights reserved use at your own risk
Alpha test, does not keep white space nor HTML tags and other stuff yet
It will have to be rewritten to use a different method to pick out words
from text and then preserve white space and HTML tags and symbols.
Only use it with English, I doubt it can handle anything else.
This script needs the Moby Thesaurus located here: 
http://code.google.com/p/moby-thesaurus/
You need to install the MySQL database using the custom SQL file
Load mysql --username=yourusername --password=yourpassword
Inside of Mysql type:
source db_moby_thesaurus.sql
Wait a long while and it will generate the tables for you.
On the connect string of the paraphase.php script change the foo and bar to your user name and password


Output example based on Internet MEME text:

 Blastar Paraphase:

Here is your original text:

I put on my robe and wizard hat

Here is your text paraphrased:

atom option pertinent to my cover and dandy hard hat 



As you can see it uses synonyms at random to replace words if they exist in the MySQL database.

Since it is just an alpha it is a proof of concept. You won't get anything that makes any sense or follows any logic.

I figure it can be used by trolls to make nonsense, or maybe a forum software can use this to punish trolls by turning
their messages into random word salads so they look foolish. I suppose Black Hat SEOS who want to autogenerate content
based on someone else's writings but don't want to use the same words might find it helpful. 

If you find this useful send donations to orionblastar@gmail.com via Paypal or whatever. :) If not then delete this
script and don't use it, because it is next to useless and a complete and total waste of time.

Edit: My sister Eris noted that this is not Artifical Genuine Intelligence, but Artifical General Intelligence 
which does next to nothing and will not pass a Turing test. The goal of this project is to make it so it paraphrases
text using Artifical Genuine Intelligence and then be able to pass a Turning test. My apologies to people who thought
it was at the level were it uses artifical genuine intelligence. That is the goal and it is just at the alpha test
right now. Just random word replacement, that is how simple it is right now.
