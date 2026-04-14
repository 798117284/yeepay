<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OpenServerV1ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OpenServerV1ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OpenServerV1ResponseUnMarshaller();
    }

    /**
     * @return OpenServerV1ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OpenServerV1Response
     */
    protected function getResponseInstance()
    {
        return new OpenServerV1Response();
    }
}

OpenServerV1ResponseUnMarshaller::__init();
