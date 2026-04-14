<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WithholdV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WithholdV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WithholdV10ResponseUnMarshaller();
    }

    /**
     * @return WithholdV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WithholdV10Response
     */
    protected function getResponseInstance()
    {
        return new WithholdV10Response();
    }
}

WithholdV10ResponseUnMarshaller::__init();
