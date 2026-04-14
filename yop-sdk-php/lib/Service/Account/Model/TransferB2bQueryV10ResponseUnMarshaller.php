<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TransferB2bQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TransferB2bQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TransferB2bQueryV10ResponseUnMarshaller();
    }

    /**
     * @return TransferB2bQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TransferB2bQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new TransferB2bQueryV10Response();
    }
}

TransferB2bQueryV10ResponseUnMarshaller::__init();
