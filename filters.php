<?php
//posted data
//if(filter_has_var(INPUT_POST, 'data')) {
//    echo 'Data found';
//} else {
//    echo 'No Data';
//}

//if(filter_has_var(INPUT_POST, 'data')) {
//    $email = $_POST['data'];
//
//    //remove illegal chars
//    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
//    echo $email . '<br>';
//
//    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
//        echo 'Email is valid';
//    } else {
//        echo 'email in not valid';
//    }
//}

//$var = 23;
//
//if(filter_var($var, FILTER_VALIDATE_INT)){
//    echo $var . ' is a number';
//} else {
//    echo $var . ' is not a number';
//}
//$var = '24325ascsafdas5353asd';

//echo var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));

//$harm = '<script>alert(1)</script>';
//
//$harm = var_dump(filter_var($harm, FILTER_SANITIZE_SPECIAL_CHARS));
//echo $harm;

//$filters = array(
//    'data' => FILTER_VALIDATE_EMAIL,
//    'data2' => array(
//        'filter' => FILTER_VALIDATE_INT,
//        'options' => array(
//            "min_range" => 1,
//            "max_range" => 100
//        )
//    )
//);
//
//print_r(filter_input_array(INPUT_POST, $filters));

$arr = array(
  'name' => 'brad travis',
  'age' => '35',
  'email' => 'brad@gmail.com'
);

$filters = array(
    'name' => array(
        'filter' => FILTER_CALLBACK,
        'options' => 'ucwords'
    ),
    'age' => array(
        'filter' => FILTER_VALIDATE_INT,
        'options' => array(
            'min_range' => 1,
            'max_range' => 128
        )
    ),
    'email' => FILTER_VALIDATE_EMAIL
);

print_r(filter_var_array($arr, $filters));
?>

<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <br>
    <button type="submit">Submit</button>
</form>
