<html>
<head>
<title>Blastar Paraphrase</title>
</head>
<body>
Blastar Paraphase:<p>
<?php
// Blastar Paraphrase 0.00001
// Copyleft GPL 2.0 by Orion Blastar orionblastar@gmail.com @OrionBlastar
// All rights reserved use at your own risk
// Alpha test, does not keep white space nor HTML tags and other stuff yet
// It will have to be rewritten to use a different method to pick out words
// from text and then preserve white space and HTML tags and symbols.
// Only use it with English, I doubt it can handle anything else.
// This script needs the Moby Thesaurus located here: 
// http://code.google.com/p/moby-thesaurus/
// You need to install the MySQL database using the custom SQL file
// Load mysql --username=yourusername --password=yourpassword
// Inside of Mysql type:
// source db_moby_thesaurus.sql
// Wait a long while and it will generate the tables for you.
// On the connect string of this script change the foo and bar to your user name and password
if( isset($_POST['submit']) )
{
    //be sure to validate and clean your variables
    //$data = htmlentities($_POST['data'], ENT_QUOTES);
   $data =$_POST['data'];
    $pieces = explode(" ", $data);
 
}
?>
Here is your original text:<p>
<?php>
printf($data);
?>
<p>
Here is your text paraphrased:<p>
<?php 
 // Connects to your Database 
 mysql_connect("localhost", "foo", "bar"); 
 mysql_select_db("moby_thesaurus"); 
for ($i = 0; $i < count($pieces); ++$i) {
        $word = $pieces[$i];
       //$word = "fun";
        $result = mysql_query("SELECT synonyms.* FROM words LEFT JOIN synonyms ON synonyms.word_id = words.word_id WHERE word = '$word' ORDER BY RAND() LIMIT 1;"); 
         If (mysql_num_rows($result) == 0 ) {
                        printf(" %s", $word);  
                                             }
      while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
       printf(" %s", $row[2]);  
                                                                                                                              }
}

 ?> 
<p>
</body>
</html>
