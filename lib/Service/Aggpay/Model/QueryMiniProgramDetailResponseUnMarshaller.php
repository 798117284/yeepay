<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryMiniProgramDetailResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryMiniProgramDetailResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryMiniProgramDetailResponseUnMarshaller();
    }

    /**
     * @return QueryMiniProgramDetailResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryMiniProgramDetailResponse
     */
    protected function getResponseInstance()
    {
        return new QueryMiniProgramDetailResponse();
    }
}

QueryMiniProgramDetailResponseUnMarshaller::__init();
