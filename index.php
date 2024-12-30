<?php

// string learning.............................................

$my_self = "Hi, I'm Jual. Now I am learning PHP string.";

// find string lenght... [strlen()]
echo strlen($my_self); 

// word count... [str_word_count()]
echo str_word_count($my_self);

// find text... [strpos()]
echo strpos($my_self, "PHP");  

// upper case... [strtoupper()]
echo strtoupper($my_self);
// lower case 
echo strtolower($my_self);

// replacing string... [str_replace()]
echo str_replace("Jual", "Rana", $my_self);

// revers string... [strrev()]
echo strrev($my_self);

// remove whitespace (from the beginning or the end)... [trim()]
echo trim($my_self);

// conver string to array... [explode()]
print_r (explode(" ", $my_self));
var_dump (explode(" ", $my_self));

// string slicing... [substr($x, start index, end index)]
echo substr($my_self, 5, 30); // 5 no theke 30 no index porjonto show korbe
echo substr($my_self, 5, 2); // 5 no er pore 2ta index porjonto show korbe
echo substr($my_self, 5); // 5 no theke end index porjonto show korbe

// add word inner duble quotes... [\"\"]
$new_string = "Hey, how are you \"Rafi\"? What are you doing now";
echo $new_string;

// create new line... [\n]
echo "<pre>";
echo "Hey, how are you \"Rafi\"? \n What are you doing now.";
echo "</pre>";



?>