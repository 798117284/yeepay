<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MiniprogramNegotiationHistoryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MiniprogramNegotiationHistoryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MiniprogramNegotiationHistoryResponseUnMarshaller();
    }

    /**
     * @return MiniprogramNegotiationHistoryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MiniprogramNegotiationHistoryResponse
     */
    protected function getResponseInstance()
    {
        return new MiniprogramNegotiationHistoryResponse();
    }
}

MiniprogramNegotiationHistoryResponseUnMarshaller::__init();
