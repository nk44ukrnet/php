<?php
include 'server-info.php';
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
<div class="container">
    <h1>Server & File Info</h1>
    <?php if($server): ?>
        <ul class="list-group">
            <?php foreach ($server as  $key => $value): ?>
                <li class="list-group-item">
                    <strong><?php echo $key ?>: </strong>
                    <?php echo $value ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <h1>Client  Info</h1>
    <?php if($client): ?>
        <ul class="list-group">
            <?php foreach ($client as  $key => $value): ?>
                <li class="list-group-item">
                    <strong><?php echo $key ?>: </strong>
                    <?php echo $value ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>
</body>
</html>