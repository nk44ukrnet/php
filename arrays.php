<?php

#array - var that holds miltiple values
/*
    -indexed
    -Assossiated
    -Multi demensional
 */

//indexed
$people = array('Kevin', 'Jeremy', 'Sara');
$ids = array(23,55,12);
$cars = ['Honda', 'Toyota', 'Ford'];
$cars[3] = 'Chevy';
$cars[] = 'BMW';

//echo count($cars); // print num of cars
//print_r($cars); // like echo
//var_dump($cars); //show type and all items, indexes and data type
//echo $people[3];
//echo $ids[2];
//echo $cars[1];

// ASSOSIACE ARRAYS:
$people = array('Brad' => 35, 'Jose' => 32, 'Willia' => 37);
$ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];
//echo $people['Brad'];
//echo $ids[22];

//Multy demensional

$cars = array(
    array('Honda', 20, 10),
    array('Toyota', 30, 20),
    array('Ford', 23, 12),
);

echo $cars[1][2];