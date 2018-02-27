<?php require('includes/config.php');

//logout
$user->logout();

//logged in return to index page
header('Location: index.php');
exit;
?>

<?php
/**
 * Created by PhpStorm.
 * User: Zain Baloch
 * Date: 10/10/2017
 * Time: 4:15 PM
 */