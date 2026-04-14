<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryUserBookWithdrawOrderBySystemResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryUserBookWithdrawOrderBySystemResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryUserBookWithdrawOrderBySystemResponseUnMarshaller();
    }

    /**
     * @return QueryUserBookWithdrawOrderBySystemResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryUserBookWithdrawOrderBySystemResponse
     */
    protected function getResponseInstance()
    {
        return new QueryUserBookWithdrawOrderBySystemResponse();
    }
}

QueryUserBookWithdrawOrderBySystemResponseUnMarshaller::__init();
