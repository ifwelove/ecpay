<?php

namespace Ifwelove\Ecpay;

class Ecpay
{

    private $instance = null;

    public function __construct()
    {
        $this->instance = new \ECPay_AllInOne();

        $this->instance->ServiceURL = config('payment.ecpay.config.ServiceURL');
        $this->instance->HashKey    = config('payment.ecpay.config.HashKey');
        $this->instance->HashIV     = config('payment.ecpay.config.HashIV');
        $this->instance->MerchantID = config('payment.ecpay.config.MerchantID');
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
