<?php

namespace Yeepay\Yop\Sdk\Service\Promtion\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SubsidyRefundQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SubsidyRefundQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SubsidyRefundQueryResponseUnMarshaller();
    }

    /**
     * @return SubsidyRefundQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SubsidyRefundQueryResponse
     */
    protected function getResponseInstance()
    {
        return new SubsidyRefundQueryResponse();
    }
}

SubsidyRefundQueryResponseUnMarshaller::__init();
