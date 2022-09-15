<?php

include 'init.php';

if (isset($_GET['customer']) && !empty($_GET['customer'])) {
    $client = $bdd->getCustomer($_GET['customer']);
    $renderer->customerFormEdit($client);
}