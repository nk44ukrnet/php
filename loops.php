<?php
// LOOPS EXECUTES code set num of times


/*
 FOR
WHILE
DO WHILE
Foreach
 */

//for

//for($i = 0; $i <= 10; $i++) {
//    echo 'Number: '. $i;
//    echo '<br>';
//}

//while
//$i = 0;
//while($i < 10) {
//    echo $i;
//    echo '<br>';
//    $i++;
//}

//do while

//$i = 0;
//
//do {
//    echo $i;
//    $i++;
//    echo '<br>';
//} while ($i < 15);

$people = array('Brad' => 'fafa@i.ua', 'Jose' => 'a@s.com',
    'William' => 'code@red.ussr');

foreach ($people as $person =>$email) {
    echo $person . ': ' . $email;
    echo '<br>';
}