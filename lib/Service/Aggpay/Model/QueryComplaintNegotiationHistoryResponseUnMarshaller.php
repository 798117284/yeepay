<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryComplaintNegotiationHistoryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryComplaintNegotiationHistoryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryComplaintNegotiationHistoryResponseUnMarshaller();
    }

    /**
     * @return QueryComplaintNegotiationHistoryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryComplaintNegotiationHistoryResponse
     */
    protected function getResponseInstance()
    {
        return new QueryComplaintNegotiationHistoryResponse();
    }
}

QueryComplaintNegotiationHistoryResponseUnMarshaller::__init();
