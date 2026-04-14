<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PayOrderV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PayOrderV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PayOrderV2ResponseUnMarshaller();
    }

    /**
     * @return PayOrderV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PayOrderV2Response
     */
    protected function getResponseInstance()
    {
        return new PayOrderV2Response();
    }
}

PayOrderV2ResponseUnMarshaller::__init();
