<?php

namespace Yeepay\Yop\Sdk\Service\Financial\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FundRemitRequestQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FundRemitRequestQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FundRemitRequestQueryResponseUnMarshaller();
    }

    /**
     * @return FundRemitRequestQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FundRemitRequestQueryResponse
     */
    protected function getResponseInstance()
    {
        return new FundRemitRequestQueryResponse();
    }
}

FundRemitRequestQueryResponseUnMarshaller::__init();
