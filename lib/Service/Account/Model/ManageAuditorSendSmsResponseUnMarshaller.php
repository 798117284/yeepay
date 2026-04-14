<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ManageAuditorSendSmsResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ManageAuditorSendSmsResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ManageAuditorSendSmsResponseUnMarshaller();
    }

    /**
     * @return ManageAuditorSendSmsResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ManageAuditorSendSmsResponse
     */
    protected function getResponseInstance()
    {
        return new ManageAuditorSendSmsResponse();
    }
}

ManageAuditorSendSmsResponseUnMarshaller::__init();
