<?php

namespace Yeepay\Yop\Sdk\Service\Financial\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FundRemitRequestResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FundRemitRequestResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FundRemitRequestResponseUnMarshaller();
    }

    /**
     * @return FundRemitRequestResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FundRemitRequestResponse
     */
    protected function getResponseInstance()
    {
        return new FundRemitRequestResponse();
    }
}

FundRemitRequestResponseUnMarshaller::__init();
