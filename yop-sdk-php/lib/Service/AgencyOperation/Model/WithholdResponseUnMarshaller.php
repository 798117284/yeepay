<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WithholdResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WithholdResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WithholdResponseUnMarshaller();
    }

    /**
     * @return WithholdResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WithholdResponse
     */
    protected function getResponseInstance()
    {
        return new WithholdResponse();
    }
}

WithholdResponseUnMarshaller::__init();
