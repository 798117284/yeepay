<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AggHbfqMarketingConsultV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AggHbfqMarketingConsultV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AggHbfqMarketingConsultV10ResponseUnMarshaller();
    }

    /**
     * @return AggHbfqMarketingConsultV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AggHbfqMarketingConsultV10Response
     */
    protected function getResponseInstance()
    {
        return new AggHbfqMarketingConsultV10Response();
    }
}

AggHbfqMarketingConsultV10ResponseUnMarshaller::__init();
