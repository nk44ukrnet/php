<?php
setcookie('username', 'Frank', time() + (3600 * 24));

//delete coocie
//setcookie('username', 'Frank', time() - 3600);

if(count($_COOKIE) > 0) {
    echo 'there are:' . count($_COOKIE) . ' cookies saved';
} else {
    echo 'There no cookies saved';
}


if(isset($_COOKIE['username'])) {
    echo 'User '. $_COOKIE['username'] . ' is set <br>';
}
else {
    echo 'User is not set';
}