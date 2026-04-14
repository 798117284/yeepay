<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AttachAddResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AttachAddResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AttachAddResponseUnMarshaller();
    }

    /**
     * @return AttachAddResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AttachAddResponse
     */
    protected function getResponseInstance()
    {
        return new AttachAddResponse();
    }
}

AttachAddResponseUnMarshaller::__init();
