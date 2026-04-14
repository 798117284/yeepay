<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BackQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BackQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BackQueryV10ResponseUnMarshaller();
    }

    /**
     * @return BackQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BackQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new BackQueryV10Response();
    }
}

BackQueryV10ResponseUnMarshaller::__init();
