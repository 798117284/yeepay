<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WithholdShopBindQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WithholdShopBindQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WithholdShopBindQueryV10ResponseUnMarshaller();
    }

    /**
     * @return WithholdShopBindQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WithholdShopBindQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new WithholdShopBindQueryV10Response();
    }
}

WithholdShopBindQueryV10ResponseUnMarshaller::__init();
