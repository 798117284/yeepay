<?php

namespace Yeepay\Yop\Sdk\Service\Promtion\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SubsidyVerifyQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SubsidyVerifyQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SubsidyVerifyQueryResponseUnMarshaller();
    }

    /**
     * @return SubsidyVerifyQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SubsidyVerifyQueryResponse
     */
    protected function getResponseInstance()
    {
        return new SubsidyVerifyQueryResponse();
    }
}

SubsidyVerifyQueryResponseUnMarshaller::__init();
