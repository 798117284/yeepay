<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ActivityQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ActivityQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ActivityQueryResponseUnMarshaller();
    }

    /**
     * @return ActivityQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ActivityQueryResponse
     */
    protected function getResponseInstance()
    {
        return new ActivityQueryResponse();
    }
}

ActivityQueryResponseUnMarshaller::__init();
