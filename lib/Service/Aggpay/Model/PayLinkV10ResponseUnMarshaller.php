<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PayLinkV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PayLinkV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PayLinkV10ResponseUnMarshaller();
    }

    /**
     * @return PayLinkV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PayLinkV10Response
     */
    protected function getResponseInstance()
    {
        return new PayLinkV10Response();
    }
}

PayLinkV10ResponseUnMarshaller::__init();
