<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class EnterpriseQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var EnterpriseQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new EnterpriseQueryResponseUnMarshaller();
    }

    /**
     * @return EnterpriseQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return EnterpriseQueryResponse
     */
    protected function getResponseInstance()
    {
        return new EnterpriseQueryResponse();
    }
}

EnterpriseQueryResponseUnMarshaller::__init();
