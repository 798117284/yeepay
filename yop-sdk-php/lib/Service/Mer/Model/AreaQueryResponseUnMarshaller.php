<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AreaQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AreaQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AreaQueryResponseUnMarshaller();
    }

    /**
     * @return AreaQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AreaQueryResponse
     */
    protected function getResponseInstance()
    {
        return new AreaQueryResponse();
    }
}

AreaQueryResponseUnMarshaller::__init();
