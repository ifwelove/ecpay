<?php

namespace Ifwelove\Ecpay;

class Ecpay
{

    private $instance = null;

    public function __construct()
    {
        $this->instance = new \ECPay_AllInOne();

        $this->instance->ServiceURL = config('payment.driver.ecpay.config.ServiceURL');
        $this->instance->HashKey    = config('payment.driver.ecpay.config.HashKey');
        $this->instance->HashIV     = config('payment.driver.ecpay.config.HashIV');
        $this->instance->MerchantID = config('payment.driver.ecpay.config.MerchantID');
    }

    public function instance()
    {
        return $this->instance;
    }

    public function i()
    {
        return $this->instance;
    }

}
