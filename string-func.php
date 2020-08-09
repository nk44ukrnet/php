<?php
//$output = substr('hello', 1);
//echo $output;
//$output = 'Hello world';
//echo strlen($output);

# strpos() - like indexOf() in js


//find from lefto to right char (and first occurance)
//$output = strpos('Hello World', 'j');
//echo $output;
#strpos - from right to left (and first occurance)

//$test = ' HELLO WORLDS  ';
//
//$trimmed = trim($test);
//
//echo $trimmed;


//$some = 'Some text';
//echo strtoupper($some);
//echo strtolower($some);

//$output = ucwords('hello world'); #capital letter every word
//echo $output;

#str_replace - REPLACES EVERYWHERE

//$text = 'Hellow world world';
//$output = str_replace('world', 'hey', $text);
//echo $output;

#is_string

//$val = 'Hello';
//$output = is_string($val);
//echo $output;

//$values = array(true, false, null, 'abc', 33, '33'. 22.4, ' ');
//
//foreach ($values as $value) {
//    if(is_string($value)) {
//        echo "{$value} is a string <br>";
//    }
//}

#gzcompress();

$str = 'loremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremlorem';

$compressed = gzcompress($str);

echo $compressed;

$original = gzuncompress($compressed);

echo $original;