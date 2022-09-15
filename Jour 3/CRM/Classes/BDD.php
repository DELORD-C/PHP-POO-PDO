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

    function deleteCustomer(String $code) {
        $query = $this->conn->prepare("DELETE FROM customer WHERE CUST_CODE = ?");
        $query->bindParam(1, $code);
        $query->execute();
    }

    function getCustomer(String $code) {
        //on prépare la requête
        $query = $this->conn->prepare("SELECT * FROM customer WHERE CUST_CODE = ?");

        //On remplace le ? par $code
        $query->bindParam(1, $code);

        //On execute la requête
        $query->execute();

        //on transforme les données en tableau qu'on stocke dans $result
        $result = $query->fetch();

        if ($result) {
            //on instancie un Client avec les données de $result puis on le retourne
            return new Client (
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
        }
        return false;
    }

    function updateCustomer(String $code, Array $data) {
        $query = $this->conn->prepare("UPDATE customer SET CUST_NAME = ?, CUST_CITY = ?, WORKING_AREA = ?, CUST_COUNTRY = ?, GRADE = ?, OPENING_AMT = ?, RECEIVE_AMT = ?, PAYMENT_AMT = ?, OUTSTANDING_AMT = ?, PHONE_NO = ?, AGENT_CODE = ? WHERE CUST_CODE = ?");
        $query->bindParam(1, $data['CUST_NAME']);
        $query->bindParam(2, $data['CUST_CITY']);
        $query->bindParam(3, $data['WORKING_AREA']);
        $query->bindParam(4, $data['CUST_COUNTRY']);
        $query->bindParam(5, $data['GRADE']);
        $query->bindParam(6, $data['OPENING_AMT']);
        $query->bindParam(7, $data['RECEIVE_AMT']);
        $query->bindParam(8, $data['PAYMENT_AMT']);
        $query->bindParam(9, $data['OUTSTANDING_AMT']);
        $query->bindParam(10, $data['PHONE_NO']);
        $query->bindParam(11, $data['AGENT_CODE']);
        $query->bindParam(12, $code);
        $query->execute();
    }
}