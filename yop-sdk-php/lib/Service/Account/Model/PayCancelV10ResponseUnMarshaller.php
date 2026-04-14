<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PayCancelV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PayCancelV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PayCancelV10ResponseUnMarshaller();
    }

    /**
     * @return PayCancelV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PayCancelV10Response
     */
    protected function getResponseInstance()
    {
        return new PayCancelV10Response();
    }
}

PayCancelV10ResponseUnMarshaller::__init();
