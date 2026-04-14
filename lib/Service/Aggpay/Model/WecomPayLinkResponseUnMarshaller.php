<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WecomPayLinkResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WecomPayLinkResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WecomPayLinkResponseUnMarshaller();
    }

    /**
     * @return WecomPayLinkResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WecomPayLinkResponse
     */
    protected function getResponseInstance()
    {
        return new WecomPayLinkResponse();
    }
}

WecomPayLinkResponseUnMarshaller::__init();
