<?php

namespace Yeepay\Yop\Sdk\Service\Financial\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FundRemitQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FundRemitQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FundRemitQueryResponseUnMarshaller();
    }

    /**
     * @return FundRemitQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FundRemitQueryResponse
     */
    protected function getResponseInstance()
    {
        return new FundRemitQueryResponse();
    }
}

FundRemitQueryResponseUnMarshaller::__init();
