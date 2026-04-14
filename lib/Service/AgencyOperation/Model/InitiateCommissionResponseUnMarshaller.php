<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class InitiateCommissionResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var InitiateCommissionResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new InitiateCommissionResponseUnMarshaller();
    }

    /**
     * @return InitiateCommissionResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return InitiateCommissionResponse
     */
    protected function getResponseInstance()
    {
        return new InitiateCommissionResponse();
    }
}

InitiateCommissionResponseUnMarshaller::__init();
