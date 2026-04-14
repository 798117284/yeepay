<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AggRetailBatchCreateV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AggRetailBatchCreateV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AggRetailBatchCreateV10ResponseUnMarshaller();
    }

    /**
     * @return AggRetailBatchCreateV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AggRetailBatchCreateV10Response
     */
    protected function getResponseInstance()
    {
        return new AggRetailBatchCreateV10Response();
    }
}

AggRetailBatchCreateV10ResponseUnMarshaller::__init();
