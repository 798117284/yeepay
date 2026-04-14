<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ManageAuditorSendSmsV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ManageAuditorSendSmsV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ManageAuditorSendSmsV10ResponseUnMarshaller();
    }

    /**
     * @return ManageAuditorSendSmsV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ManageAuditorSendSmsV10Response
     */
    protected function getResponseInstance()
    {
        return new ManageAuditorSendSmsV10Response();
    }
}

ManageAuditorSendSmsV10ResponseUnMarshaller::__init();
