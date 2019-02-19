<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Public/css/home.css">
    <link rel="stylesheet" type="text/css" href="Public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

</head>
<body>
<?php if (isset($_SESSION['success']))  : ?>
    <h3>
        <?php

        echo $_SESSION['success'];
        unset($_SESSION['success'])
        ?>
    </h3>


<?php endif; ?>

<?php if (isset($_SESSION['first_name'])&& $_SESSION['type'] == 'admin'): ?>
    <p>Welcome , the admin <strong><?php echo $_SESSION['first_name']  ?> ^_^</strong></p>
    <p><a href="index.php?action=logout" style="color:red;">Logout</a></p>

<?php else : ?>
    <h1>you are not allowed litle hacker</h1>
<?php endif ?>




</body>
</html>
