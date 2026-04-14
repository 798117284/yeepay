<?php

namespace Yeepay\Yop\Sdk\Service\Nccashierapi\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindCardRequestResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindCardRequestResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindCardRequestResponseUnMarshaller();
    }

    /**
     * @return BindCardRequestResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindCardRequestResponse
     */
    protected function getResponseInstance()
    {
        return new BindCardRequestResponse();
    }
}

BindCardRequestResponseUnMarshaller::__init();
