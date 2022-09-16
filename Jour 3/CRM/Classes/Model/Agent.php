<?php

class Agent {
    private $AGENT_CODE;
    private $AGENT_NAME;
    private $WORKING_AREA;
    private $COMMISSION;
    private $PHONE_NO;
    private $COUNTRY;

    function __construct(
        String $AGENT_CODE,
        String $AGENT_NAME,
        String $WORKING_AREA,
        String $COMMISSION,
        String $PHONE_NO,
        String $COUNTRY
    )
    {
        $this->AGENT_CODE = $AGENT_CODE;
        $this->AGENT_NAME = $AGENT_NAME;
        $this->WORKING_AREA = $WORKING_AREA;
        $this->COMMISSION = $COMMISSION;
        $this->PHONE_NO = $PHONE_NO;
        $this->COUNTRY = $COUNTRY;
    }

    function getAGENT_NAME() {
        return $this->AGENT_NAME;
    }

    function getAGENT_CODE() {
        return $this->AGENT_CODE;
    }

    function getWORKING_AREA() {
        return $this->WORKING_AREA;
    }

    function getCOUNTRY() {
        return $this->COUNTRY;
    }

    function getPHONE_NO() {
        return $this->PHONE_NO;
    }

    function getCOMMISSION() {
        return $this->COMMISSION;
    }
}