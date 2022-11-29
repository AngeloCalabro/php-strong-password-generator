<?php 
session_start();
$password =  $_SESSION['password'];

include __DIR__ .'/partials/header.php';
?>

<body class="bg-primary">
    <?php 
       include __DIR__ .'/partials/msg.php';
       ?>
</body>