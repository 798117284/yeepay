<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class NetInProgressQueryByNameResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var NetInProgressQueryByNameResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new NetInProgressQueryByNameResponseUnMarshaller();
    }

    /**
     * @return NetInProgressQueryByNameResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return NetInProgressQueryByNameResponse
     */
    protected function getResponseInstance()
    {
        return new NetInProgressQueryByNameResponse();
    }
}

NetInProgressQueryByNameResponseUnMarshaller::__init();
