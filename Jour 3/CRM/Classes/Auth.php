<?php

class Auth {
    function __construct()
    {
        session_start();
    }

    function login (String $email, String $password) {
        //On vérifie que l'email et mdp sont bons
        if ($email == 'admin@admin.fr' && $password == 'admin') {

            //si oui, on créé l'index 'connection' dans le tableau $_SESSION et on y stocke la valeur 'true'
            $_SESSION['connection'] = 'true';
            //puis on redirige l'utilisateur sur l'index
            header('Location: index.php');
        }
        else {

            //si non, on redirige sur le login
            header('Location: login.php');
        }
    }

    function logout () {
        session_destroy();
        header('Location: login.php');
    }

    function requireLoggedIn() {
        if (!isset($_SESSION['connection']) || $_SESSION['connection'] != 'true') {
            //si utilisateur pas connecté, redirection vers login
            header('Location: login.php');
        }
    }

    function requireLoggedOut() {
        if (isset($_SESSION['connection']) && $_SESSION['connection'] != 'true') {
            //si utilisateur connecté, redirection vers index
            header('Location: index.php');
        }
    }
}