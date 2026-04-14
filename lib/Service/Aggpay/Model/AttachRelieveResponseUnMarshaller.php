<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AttachRelieveResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AttachRelieveResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AttachRelieveResponseUnMarshaller();
    }

    /**
     * @return AttachRelieveResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AttachRelieveResponse
     */
    protected function getResponseInstance()
    {
        return new AttachRelieveResponse();
    }
}

AttachRelieveResponseUnMarshaller::__init();
