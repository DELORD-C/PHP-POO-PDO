<?php

require('init.php');

if(isset($_GET['logout'])) {
    $auth->logout();
}

$auth->requireLoggedOut();

if (isset($_POST['email']) && isset($_POST['password'])) {
    $auth->login($_POST['email'], $_POST['password']);
}

//Afficher le formulaire de connection
$renderer->login();