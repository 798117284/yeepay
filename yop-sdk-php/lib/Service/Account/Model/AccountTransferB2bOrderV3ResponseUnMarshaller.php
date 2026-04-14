<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountTransferB2bOrderV3ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountTransferB2bOrderV3ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountTransferB2bOrderV3ResponseUnMarshaller();
    }

    /**
     * @return AccountTransferB2bOrderV3ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountTransferB2bOrderV3Response
     */
    protected function getResponseInstance()
    {
        return new AccountTransferB2bOrderV3Response();
    }
}

AccountTransferB2bOrderV3ResponseUnMarshaller::__init();
