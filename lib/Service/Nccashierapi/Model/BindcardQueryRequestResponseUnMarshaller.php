<?php

namespace Yeepay\Yop\Sdk\Service\Nccashierapi\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindcardQueryRequestResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindcardQueryRequestResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindcardQueryRequestResponseUnMarshaller();
    }

    /**
     * @return BindcardQueryRequestResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindcardQueryRequestResponse
     */
    protected function getResponseInstance()
    {
        return new BindcardQueryRequestResponse();
    }
}

BindcardQueryRequestResponseUnMarshaller::__init();
