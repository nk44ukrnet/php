<?php
//message vars
$msg ='';
$msgClass = '';
// check for the submit
if(filter_has_var(INPUT_POST, 'submit')) {
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

//check required fields
    if(!empty($name) && !empty($email) && !empty($message)) {
        //passed
        //check email
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            //failed
            $msg = 'pls, use a valid email';
            $msgClass = 'alert-danger';
        } else {
            //passed
           $toEmail = 'to@email.com';
           $subject = 'Contact request from'. $name;
           $body = '
           <h2>Contact Request:</h2>
           <p>Name:' . $name . ' </p>
           <p>Email:' . $email . ' </p>
           <p>Message:' . $message . ' </p>
           ';
           $headers = 'MIME-Version: 1.0' . "\r\n";
           $headers .= 'Content-Type: text/html; carset-UTF-8' . "\r\n";
           $headers .= 'FROM: ' . $name . '<' . $email . '>' . "\r\n";
           if(mail($toEmail, $subject, $body, $headers)) {
           //email sent
               $msg = 'Your email has been sent';
               $msgClass = 'alert-success';
           } else {
               $msg = 'Your email was not sent';
               $msgClass = 'alert-danger';
           }
        }
    } else {
        //failed
        $msg = 'pls, fill in all fileds';
        $msgClass = 'alert-danger';
    }
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-default">
    <div class="navbar-header"></div>
</nav>
<?php if($msg != ''): ?>
<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
<?php endif; ?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $name : '' ?>">
    <input type="text" name="email" value="<?php echo isset($_POST['email']) ? $name : '' ?>">
    <input type="text" name="message" value="<?php echo isset($_POST['message']) ? $name : '' ?>">
    <input type="submit" name="submit">
</form>

</body>
</html>