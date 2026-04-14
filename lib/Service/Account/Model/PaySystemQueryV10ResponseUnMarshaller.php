<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PaySystemQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PaySystemQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PaySystemQueryV10ResponseUnMarshaller();
    }

    /**
     * @return PaySystemQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PaySystemQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new PaySystemQueryV10Response();
    }
}

PaySystemQueryV10ResponseUnMarshaller::__init();
