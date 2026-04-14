<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class NetinH5QueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var NetinH5QueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new NetinH5QueryResponseUnMarshaller();
    }

    /**
     * @return NetinH5QueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return NetinH5QueryResponse
     */
    protected function getResponseInstance()
    {
        return new NetinH5QueryResponse();
    }
}

NetinH5QueryResponseUnMarshaller::__init();
