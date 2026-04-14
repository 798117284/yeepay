<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model\Old;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CreditScorecompleteResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CreditScorecompleteResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreditScorecompleteResponseUnMarshaller();
    }

    /**
     * @return CreditScorecompleteResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CreditScorecompleteResponse
     */
    protected function getResponseInstance()
    {
        return new CreditScorecompleteResponse();
    }
}

CreditScorecompleteResponseUnMarshaller::__init();
