<?php

class Client {
    private $CUST_CODE;
    private $CUST_NAME;
    private $CUST_CITY;
    private $WORKING_AREA;
    private $CUST_COUNTRY;
    private $GRADE;
    private $OPENING_AMT;
    private $RECEIVE_AMT;
    private $PAYMENT_AMT;
    private $OUTSTANDING_AMT;
    private $PHONE_NO;
    private $AGENT_CODE;

    function __construct(
        String $CUST_CODE,
        String $CUST_NAME,
        String $CUST_CITY,
        String $WORKING_AREA,
        String $CUST_COUNTRY,
        String $GRADE,
        String $OPENING_AMT,
        String $RECEIVE_AMT,
        String $PAYMENT_AMT,
        String $OUTSTANDING_AMT,
        String $PHONE_NO,
        String $AGENT_CODE
    )
    {
        $this->CUST_CODE = $CUST_CODE;
        $this->CUST_NAME = $CUST_NAME;
        $this->CUST_CITY = $CUST_CITY;
        $this->WORKING_AREA = $WORKING_AREA;
        $this->CUST_COUNTRY = $CUST_COUNTRY;
        $this->GRADE = $GRADE;
        $this->OPENING_AMT = $OPENING_AMT;
        $this->RECEIVE_AMT = $RECEIVE_AMT;
        $this->PAYMENT_AMT = $PAYMENT_AMT;
        $this->OUTSTANDING_AMT = $OUTSTANDING_AMT;
        $this->PHONE_NO = $PHONE_NO;
        $this->AGENT_CODE = $AGENT_CODE;
    }

    function getCUST_NAME() {
        return $this->CUST_NAME;
    }

    function getCUST_CODE() {
        return $this->CUST_CODE;
    }

    function getWORKING_AREA() {
        return $this->WORKING_AREA;
    }

    function getCUST_CITY() {
        return $this->CUST_CITY;
    }

    function getCUST_COUNTRY() {
        return $this->CUST_COUNTRY;
    }

    function getGRADE() {
        return $this->GRADE;
    }

    function getOPENING_AMT() {
        return $this->OPENING_AMT;
    }

    function getRECEIVE_AMT() {
        return $this->RECEIVE_AMT;
    }

    function getPAYMENT_AMT() {
        return $this->PAYMENT_AMT;
    }

    function getOUTSTANDING_AMT() {
        return $this->OUTSTANDING_AMT;
    }

    function getPHONE_NO() {
        return $this->PHONE_NO;
    }

    function getAGENT_CODE() {
        return $this->AGENT_CODE;
    }
}