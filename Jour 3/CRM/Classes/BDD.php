<?php

class BDD {
    private $conn;

    function __construct(string $string, string $user, string $password)
    {
        $this->conn = new PDO($string, $user, $password);
    }

    function getAllCustomers() {
        //on utilise notre objet PDO stocké dans l'attribut $this->conn pour prépare la requète
        $query = $this->conn->prepare("SELECT * FROM customer");
        //on execute la requète
        $query->execute();
        //on récupère les résultats et on les stocke dans $results
        $results = $query->fetchAll();


        $customers = [];

        foreach ($results as $result) {
            $customer = new Client (
                $result['CUST_CODE'],
                $result['CUST_NAME'],
                $result['CUST_CITY'],
                $result['WORKING_AREA'],
                $result['CUST_COUNTRY'],
                $result['GRADE'],
                $result['OPENING_AMT'],
                $result['RECEIVE_AMT'],
                $result['PAYMENT_AMT'],
                $result['OUTSTANDING_AMT'],
                $result['PHONE_NO'],
                $result['AGENT_CODE']
            );
            array_push($customers, $customer);
        }
        return $customers;
    }

    function insertCustomer(Client $client) {
        
    }
}