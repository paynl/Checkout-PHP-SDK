<?php

namespace PayPalCheckoutSdk\Core;

use BraintreeHttp\Environment;

abstract class PayPalEnvironment implements Environment
{
    private $clientId;
    private $clientSecret;

    public function __construct($clientId, $clientSecret)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
    }

    public function authorizationString()
    {
        return base64_encode($this->clientId . ":" . $this->clientSecret);
    }
    
    public function getClientId()
    {
        return $this->clientId;
    }
    
    public function getClientSecret()
    {
        return $this->clientSecret;
    }
}

