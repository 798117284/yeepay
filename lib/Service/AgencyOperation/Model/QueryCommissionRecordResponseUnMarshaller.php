<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryCommissionRecordResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryCommissionRecordResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryCommissionRecordResponseUnMarshaller();
    }

    /**
     * @return QueryCommissionRecordResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryCommissionRecordResponse
     */
    protected function getResponseInstance()
    {
        return new QueryCommissionRecordResponse();
    }
}

QueryCommissionRecordResponseUnMarshaller::__init();
