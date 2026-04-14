<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ManageAuditorConfirmV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ManageAuditorConfirmV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ManageAuditorConfirmV10ResponseUnMarshaller();
    }

    /**
     * @return ManageAuditorConfirmV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ManageAuditorConfirmV10Response
     */
    protected function getResponseInstance()
    {
        return new ManageAuditorConfirmV10Response();
    }
}

ManageAuditorConfirmV10ResponseUnMarshaller::__init();
