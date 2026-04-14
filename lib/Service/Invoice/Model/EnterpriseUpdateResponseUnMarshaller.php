<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class EnterpriseUpdateResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var EnterpriseUpdateResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new EnterpriseUpdateResponseUnMarshaller();
    }

    /**
     * @return EnterpriseUpdateResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return EnterpriseUpdateResponse
     */
    protected function getResponseInstance()
    {
        return new EnterpriseUpdateResponse();
    }
}

EnterpriseUpdateResponseUnMarshaller::__init();
