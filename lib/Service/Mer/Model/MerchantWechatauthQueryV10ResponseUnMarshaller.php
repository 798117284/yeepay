<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantWechatauthQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantWechatauthQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantWechatauthQueryV10ResponseUnMarshaller();
    }

    /**
     * @return MerchantWechatauthQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantWechatauthQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new MerchantWechatauthQueryV10Response();
    }
}

MerchantWechatauthQueryV10ResponseUnMarshaller::__init();
