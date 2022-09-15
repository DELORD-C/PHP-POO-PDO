<?php

include 'init.php';

//Vérification des variables POST et/ou GET
if (count($_POST) >= 12 && isset($_POST['CUST_CODE']) && !empty($_POST['CUST_CODE'])) {
    //Si les variables POST sont correct, on instancie un Client avec les données du formulaire
    $client = new Client(
        $_POST['CUST_CODE'],
        $_POST['CUST_NAME'],
        $_POST['CUST_CITY'],
        $_POST['WORKING_AREA'],
        $_POST['CUST_COUNTRY'],
        $_POST['GRADE'],
        $_POST['OPENING_AMT'],
        $_POST['RECEIVE_AMT'],
        $_POST['PAYMENT_AMT'],
        $_POST['OUTSTANDING_AMT'],
        $_POST['PHONE_NO'],
        $_POST['AGENT_CODE']
    );

    //On envoi le Client à la méthode insertCustomer de l'objet BDD
    $bdd->insertCustomer($client);

    //On affiche un message de confirmation
    echo "The customer has been created successfully.";
}

//On affiche le formulaire de création de Client
$renderer->customerFormInsert();