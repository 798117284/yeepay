<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryApplyChannelNoResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryApplyChannelNoResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryApplyChannelNoResponseUnMarshaller();
    }

    /**
     * @return QueryApplyChannelNoResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryApplyChannelNoResponse
     */
    protected function getResponseInstance()
    {
        return new QueryApplyChannelNoResponse();
    }
}

QueryApplyChannelNoResponseUnMarshaller::__init();
