<?php
    session_start();

    print_r($_SESSION);

    $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Not Subscribed';
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
    <h1>Hello <?php echo $name; ?></h1>
</body>
</html>