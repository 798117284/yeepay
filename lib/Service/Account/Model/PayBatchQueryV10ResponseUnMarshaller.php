<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PayBatchQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PayBatchQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PayBatchQueryV10ResponseUnMarshaller();
    }

    /**
     * @return PayBatchQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PayBatchQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new PayBatchQueryV10Response();
    }
}

PayBatchQueryV10ResponseUnMarshaller::__init();
