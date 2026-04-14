<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class HbfqMarketingConsultResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var HbfqMarketingConsultResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new HbfqMarketingConsultResponseUnMarshaller();
    }

    /**
     * @return HbfqMarketingConsultResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return HbfqMarketingConsultResponse
     */
    protected function getResponseInstance()
    {
        return new HbfqMarketingConsultResponse();
    }
}

HbfqMarketingConsultResponseUnMarshaller::__init();
