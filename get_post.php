<?php
if(isset($_GET)) {
   $name = htmlentities($_GET['name']);
    echo $name;
}
// if(isset($_POST)) {
//    $name = htmlentities($_POST['name']);
//    echo $name;
//}
//if(isset($_REQUEST)) {
//    $name = htmlentities($_REQUEST['name']);
//    echo $name;
//}
echo $_SERVER['QUERY_STRING'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
    <div class="form-group">
        <label for="exampleInputEmail1">Name </label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="text" name="pw" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<ul>
    <li><a href="get_post.php?name=Brad">Brad</a></li>
    <li><a href="get_post.php?name=Stebe">Stebe</a></li>
</ul>
<?php  echo "{$name}'s Profile" ?>
</body>
</html>