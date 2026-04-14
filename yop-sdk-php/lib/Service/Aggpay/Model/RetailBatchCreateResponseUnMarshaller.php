<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RetailBatchCreateResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RetailBatchCreateResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RetailBatchCreateResponseUnMarshaller();
    }

    /**
     * @return RetailBatchCreateResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RetailBatchCreateResponse
     */
    protected function getResponseInstance()
    {
        return new RetailBatchCreateResponse();
    }
}

RetailBatchCreateResponseUnMarshaller::__init();
