<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QuerySingleTransferDetailResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QuerySingleTransferDetailResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QuerySingleTransferDetailResponseUnMarshaller();
    }

    /**
     * @return QuerySingleTransferDetailResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QuerySingleTransferDetailResponse
     */
    protected function getResponseInstance()
    {
        return new QuerySingleTransferDetailResponse();
    }
}

QuerySingleTransferDetailResponseUnMarshaller::__init();
