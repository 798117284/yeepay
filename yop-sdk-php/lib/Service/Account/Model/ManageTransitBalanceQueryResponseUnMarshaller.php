<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ManageTransitBalanceQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ManageTransitBalanceQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ManageTransitBalanceQueryResponseUnMarshaller();
    }

    /**
     * @return ManageTransitBalanceQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ManageTransitBalanceQueryResponse
     */
    protected function getResponseInstance()
    {
        return new ManageTransitBalanceQueryResponse();
    }
}

ManageTransitBalanceQueryResponseUnMarshaller::__init();
