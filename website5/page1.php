<?php
    if (isset($_POST['submit'])) {
        $username = htmlentities($_POST['username']);

        setcookie('username', $username, time()+3600);
        // Set cookie 1 hour

        header('Location: page2.php');
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Cookies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="username" placeholder="Enter Username">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>