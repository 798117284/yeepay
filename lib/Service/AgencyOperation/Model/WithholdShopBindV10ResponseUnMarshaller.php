<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WithholdShopBindV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WithholdShopBindV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WithholdShopBindV10ResponseUnMarshaller();
    }

    /**
     * @return WithholdShopBindV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WithholdShopBindV10Response
     */
    protected function getResponseInstance()
    {
        return new WithholdShopBindV10Response();
    }
}

WithholdShopBindV10ResponseUnMarshaller::__init();
