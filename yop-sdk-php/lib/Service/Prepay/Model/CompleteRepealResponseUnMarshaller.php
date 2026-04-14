<?php

namespace Yeepay\Yop\Sdk\Service\Prepay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CompleteRepealResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CompleteRepealResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CompleteRepealResponseUnMarshaller();
    }

    /**
     * @return CompleteRepealResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CompleteRepealResponse
     */
    protected function getResponseInstance()
    {
        return new CompleteRepealResponse();
    }
}

CompleteRepealResponseUnMarshaller::__init();
