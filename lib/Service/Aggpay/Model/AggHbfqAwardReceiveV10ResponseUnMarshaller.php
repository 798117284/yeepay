<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AggHbfqAwardReceiveV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AggHbfqAwardReceiveV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AggHbfqAwardReceiveV10ResponseUnMarshaller();
    }

    /**
     * @return AggHbfqAwardReceiveV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AggHbfqAwardReceiveV10Response
     */
    protected function getResponseInstance()
    {
        return new AggHbfqAwardReceiveV10Response();
    }
}

AggHbfqAwardReceiveV10ResponseUnMarshaller::__init();
