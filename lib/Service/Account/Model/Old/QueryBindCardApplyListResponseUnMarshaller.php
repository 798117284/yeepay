<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model\Old;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryBindCardApplyListResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryBindCardApplyListResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryBindCardApplyListResponseUnMarshaller();
    }

    /**
     * @return QueryBindCardApplyListResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryBindCardApplyListResponse
     */
    protected function getResponseInstance()
    {
        return new QueryBindCardApplyListResponse();
    }
}

QueryBindCardApplyListResponseUnMarshaller::__init();
