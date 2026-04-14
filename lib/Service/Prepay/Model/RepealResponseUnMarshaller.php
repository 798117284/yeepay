<?php

namespace Yeepay\Yop\Sdk\Service\Prepay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RepealResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RepealResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RepealResponseUnMarshaller();
    }

    /**
     * @return RepealResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RepealResponse
     */
    protected function getResponseInstance()
    {
        return new RepealResponse();
    }
}

RepealResponseUnMarshaller::__init();
