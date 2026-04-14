<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DigitEnterpriseUpdateResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DigitEnterpriseUpdateResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DigitEnterpriseUpdateResponseUnMarshaller();
    }

    /**
     * @return DigitEnterpriseUpdateResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DigitEnterpriseUpdateResponse
     */
    protected function getResponseInstance()
    {
        return new DigitEnterpriseUpdateResponse();
    }
}

DigitEnterpriseUpdateResponseUnMarshaller::__init();
