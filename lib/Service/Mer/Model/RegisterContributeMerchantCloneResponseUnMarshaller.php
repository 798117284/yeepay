<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RegisterContributeMerchantCloneResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RegisterContributeMerchantCloneResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RegisterContributeMerchantCloneResponseUnMarshaller();
    }

    /**
     * @return RegisterContributeMerchantCloneResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RegisterContributeMerchantCloneResponse
     */
    protected function getResponseInstance()
    {
        return new RegisterContributeMerchantCloneResponse();
    }
}

RegisterContributeMerchantCloneResponseUnMarshaller::__init();
