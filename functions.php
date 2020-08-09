<?php

# function is a block of code that can be repeatedly called

function simpleFunction(){
    echo 'hello world';
}
//simpleFunction();


function sayHello($name = "WOrld"){
    echo "Hello $name<br>";
}

//sayHello("TIM");

function addNumber($num1, $num2) {
    return $num1 + $num2;
}
addNumber(1,2);