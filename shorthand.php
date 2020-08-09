<?php

$loggedIn = true;

//if($loggedIn) {
//    echo 'YOu are logged in';
//} else {
//    echo 'You are not logged in';
//}

//echo ($loggedIn) ?   'YOu are logged in' :  'You are not logged in';

//$isRegistered = ($loggedIn == true) ? true : false;
//echo $isRegistered;
//
//$age = 10;
//$score = 5;

//echo 'YOur score is: ' . ($score > 10) ? ($age > 10 ? 'Average' : 'Exeptional') : ($age > 10 ? 'Horrible' : 'Average');


?>

<div>
    <?php if($loggedIn) { ?>
<h1>Welcome user</h1>
   <?php } else { ?>
    <h1>Welcome guest</h1>
   <?php  } ?>
</div>

<?php if($loggedIn) : ?>
<div>
<h1>yo ho ho</h1>
</div>
<?php endif; ?>

<div>
    <?php foreach ($arr as $val): ?>
    <?php echo $val ?>
    <?php endforeach; ?>
</div>