<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class NetinH5IndexResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var NetinH5IndexResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new NetinH5IndexResponseUnMarshaller();
    }

    /**
     * @return NetinH5IndexResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return NetinH5IndexResponse
     */
    protected function getResponseInstance()
    {
        return new NetinH5IndexResponse();
    }
}

NetinH5IndexResponseUnMarshaller::__init();
