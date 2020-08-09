<?php
if(isset($_POST['submit'])) {
    $username = htmlentities($_POST['name']);
    setcookie('username', $username, time()+3600);
    header('location: page2.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="page1.php" method="post">
    <input type="text" name="name"> <br>
    <input type="submit" name="submit">
</form>

</body>
</html>