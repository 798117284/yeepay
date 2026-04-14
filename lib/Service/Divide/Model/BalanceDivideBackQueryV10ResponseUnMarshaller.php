<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BalanceDivideBackQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BalanceDivideBackQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BalanceDivideBackQueryV10ResponseUnMarshaller();
    }

    /**
     * @return BalanceDivideBackQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BalanceDivideBackQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new BalanceDivideBackQueryV10Response();
    }
}

BalanceDivideBackQueryV10ResponseUnMarshaller::__init();
