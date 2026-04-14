<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WithholdQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WithholdQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WithholdQueryResponseUnMarshaller();
    }

    /**
     * @return WithholdQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WithholdQueryResponse
     */
    protected function getResponseInstance()
    {
        return new WithholdQueryResponse();
    }
}

WithholdQueryResponseUnMarshaller::__init();
