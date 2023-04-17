<?php

$var = 78;
print ("hello world \"$var\"");

// "$var" output:- value of $var.........'$var' output :- print $var.
// \n dosen't work on browser because browser only understand html tags.

                                                                            // here doc syntax //
echo "<br><br>here doc syntax";
$str_dataset = <<< mystring
hello 'class' "welcome" to learn php $var
mystring;

echo "<br>$str_dataset";

$str_dataset = <<< "mystring"
hello 'class' "welcome" to learn php $var
mystring;

echo "<br>$str_dataset";

                                                                            // now doc syntax //
echo "<br><br>now doc syntax";
$str_dataset = <<< 'mystring'
hello 'class' "welcome" to learn php $var
mystring;

echo "<br>$str_dataset"; 
                                                                        // extra //

//echo phpinfo(); // give php version info
//echo get_current_user(); // give the name of current user

                                                                    // PHP string function //

// 1. addcslashes()
echo "<br><br>";
echo 'addcslashes()';
$data = "hello class btech";
echo "<br>";
echo addcslashes($data, "s"); // ask where to put \ in second argument.

// 2. addslashes()
echo "<br><br>";
echo 'addslashes()';
$data = "hello' class btech";
echo "<br>";
echo addslashes($data); // add \ to predefined.

// 3. bin2hex()
echo "<br><br>";
echo 'bin2hex()';
$data = "hello class btech";
echo "<br>";
echo bin2hex("hello"); // convert string to hex.

// 4. chop()
echo "<br><br>";
echo 'chop()';
$var = "ram ";
echo "<br>";
var_dump($var);

// only remove white spaces from right end.
// can't remove white space in between the string
// always work from right to left.
// when given an second argument it fill frist check the argument, if it matches it will remove the right most element.

// 5. chr()
echo "<br><br>";
echo 'chr()';
echo "<br>";
echo chr("33"); // return character from ASCIE value

// 5. ord()
echo "<br><br>";
echo 'ord()';
echo "<br>";
echo ord("Z"); // return ASCIE from character value

// 5. chunk_split()
echo "<br><br>";
echo 'chunk_split()';
echo "<br>";
echo chunk_split("hello",2); // break into smaller parts
echo "<br>";
echo chunk_split("hello",2,",");

// 6. convert_uuencode()
echo "<br><br>";
echo 'convert_uuencode()';
echo "<br>";
echo convert_uuencode("hello"); // encode the string provided.

// 6. convert_uudecode()
echo "<br><br>";
echo 'convert_uudecode()';
echo "<br>";
echo convert_uudecode("%:&5L;&\` `"); // decode the string provided.

// 6. count_chars()
echo "<br><br>";
echo 'count_chars()';
echo "<br>";
//echo count_chars("hello"); 
?>