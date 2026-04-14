<?php

namespace Yeepay\Yop\Sdk\Service\Financial\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FundRemitResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FundRemitResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FundRemitResponseUnMarshaller();
    }

    /**
     * @return FundRemitResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FundRemitResponse
     */
    protected function getResponseInstance()
    {
        return new FundRemitResponse();
    }
}

FundRemitResponseUnMarshaller::__init();
