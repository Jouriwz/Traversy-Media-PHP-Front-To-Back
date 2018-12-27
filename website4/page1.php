<?php
/*  
    In order to work with session variables 
    you have to start a session on every page 
    you want to use that data
*/
    if (isset($_POST['submit'])) {
        session_start(); // Start the session

        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['email'] = htmlentities($_POST['email']);

        header('Location: page2.php');
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Sessions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="name" placeholder="Enter Name">
        <br>
        <input type="text" name="email" placeholder="Enter Email">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>