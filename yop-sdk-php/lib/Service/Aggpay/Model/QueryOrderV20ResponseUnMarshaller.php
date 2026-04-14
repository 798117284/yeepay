<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryOrderV20ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryOrderV20ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryOrderV20ResponseUnMarshaller();
    }

    /**
     * @return QueryOrderV20ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryOrderV20Response
     */
    protected function getResponseInstance()
    {
        return new QueryOrderV20Response();
    }
}

QueryOrderV20ResponseUnMarshaller::__init();
