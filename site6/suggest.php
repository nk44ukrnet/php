<?php
$people[] = rand(0, 100);
$people[] = rand(0, 100);
$people[] = rand(0, 100);
$people[] = rand(0, 100);
$people[] = rand(0, 100);
$people[] = rand(0, 100);
$people[] = rand(0, 100);
$people[] = rand(0, 100);
$people[] = rand(0, 100);
$people[] = rand(0, 100);
$people[] = rand(0, 100);
$people[] = rand(0, 100);
$people[] = rand(0, 100);
$people[] = rand(0, 100);
$people[] = rand(0, 100);
$people[] = rand(0, 100);
$people[] = rand(0, 100);
$people[] = rand(0, 100);

//get Query string

$q = $_REQUEST['q'];

$suggestion = '';

//get suggestions
if($q !== ''){
    $q = strtolower($q);
    $len = strlen($q);
    foreach ($people as $person) {
        if(stristr($q, substr($person, 0, $len))) {
            if($suggestion === '') {
                $suggestion = $person;
            } else {
                $suggestion .= ", $person";
            }
        }
    }

    echo $suggestion === '' ? 'No suggestion' : $suggestion;
}