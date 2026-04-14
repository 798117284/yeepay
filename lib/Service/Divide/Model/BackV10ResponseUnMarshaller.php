<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BackV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BackV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BackV10ResponseUnMarshaller();
    }

    /**
     * @return BackV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BackV10Response
     */
    protected function getResponseInstance()
    {
        return new BackV10Response();
    }
}

BackV10ResponseUnMarshaller::__init();
