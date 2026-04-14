<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AggRetailGetInfoV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AggRetailGetInfoV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AggRetailGetInfoV10ResponseUnMarshaller();
    }

    /**
     * @return AggRetailGetInfoV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AggRetailGetInfoV10Response
     */
    protected function getResponseInstance()
    {
        return new AggRetailGetInfoV10Response();
    }
}

AggRetailGetInfoV10ResponseUnMarshaller::__init();
