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
        $CUST_CODE,
        $CUST_NAME,
        $CUST_CITY,
        $WORKING_AREA,
        $CUST_COUNTRY,
        $GRADE,
        $OPENING_AMT,
        $RECEIVE_AMT,
        $PAYMENT_AMT,
        $OUTSTANDING_AMT,
        $PHONE_NO,
        $AGENT_CODE
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

    function getCUST_CITY() {
        return $this->CUST_CITY;
    }

    function getCUST_COUNTRY() {
        return $this->CUST_COUNTRY;
    }

    function getOUTSTANDING_AMT() {
        return $this->OUTSTANDING_AMT;
    }
}