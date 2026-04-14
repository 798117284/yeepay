<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class DigitEnterpriseQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var DigitEnterpriseQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new DigitEnterpriseQueryResponseUnMarshaller();
    }

    /**
     * @return DigitEnterpriseQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return DigitEnterpriseQueryResponse
     */
    protected function getResponseInstance()
    {
        return new DigitEnterpriseQueryResponse();
    }
}

DigitEnterpriseQueryResponseUnMarshaller::__init();
