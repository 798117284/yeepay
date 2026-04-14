<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OrderQueryV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OrderQueryV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OrderQueryV2ResponseUnMarshaller();
    }

    /**
     * @return OrderQueryV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OrderQueryV2Response
     */
    protected function getResponseInstance()
    {
        return new OrderQueryV2Response();
    }
}

OrderQueryV2ResponseUnMarshaller::__init();
