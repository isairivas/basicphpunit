<?php
require_once 'User.php';
$user = new User();
$user->setName("isai");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Test Pruebas unitarias</title>
    </head>
    <body>
        <?php echo $user->talk(); ?>
    </body>
</html>
