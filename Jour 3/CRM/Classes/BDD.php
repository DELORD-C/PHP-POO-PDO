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
        $CUST_CODE = $client->getCUST_CODE();
        $CUST_NAME = $client->getCUST_NAME();
        $CUST_CITY = $client->getCUST_CITY();
        $WORKING_AREA = $client->getWORKING_AREA();
        $CUST_COUNTRY = $client->getCUST_COUNTRY();
        $GRADE = $client->getGRADE();
        $OPENING_AMT = $client->getOPENING_AMT();
        $RECEIVE_AMT = $client->getRECEIVE_AMT();
        $PAYMENT_AMT = $client->getPAYMENT_AMT();
        $OUTSTANDING_AMT = $client->getOUTSTANDING_AMT();
        $PHONE_NO = $client->getPHONE_NO();
        $AGENT_CODE = $client->getAGENT_CODE();
        $query = $this->conn->prepare("INSERT INTO customer VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $query->bindParam(1, $CUST_CODE);
        $query->bindParam(2, $CUST_NAME);
        $query->bindParam(3, $CUST_CITY);
        $query->bindParam(4, $WORKING_AREA);
        $query->bindParam(5, $CUST_COUNTRY);
        $query->bindParam(6, $GRADE);
        $query->bindParam(7, $OPENING_AMT);
        $query->bindParam(8, $RECEIVE_AMT);
        $query->bindParam(9, $PAYMENT_AMT);
        $query->bindParam(10, $OUTSTANDING_AMT);
        $query->bindParam(11, $PHONE_NO);
        $query->bindParam(12, $AGENT_CODE);
        $query->execute();
    }
}