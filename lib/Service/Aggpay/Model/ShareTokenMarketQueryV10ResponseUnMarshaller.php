<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ShareTokenMarketQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ShareTokenMarketQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ShareTokenMarketQueryV10ResponseUnMarshaller();
    }

    /**
     * @return ShareTokenMarketQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ShareTokenMarketQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new ShareTokenMarketQueryV10Response();
    }
}

ShareTokenMarketQueryV10ResponseUnMarshaller::__init();
