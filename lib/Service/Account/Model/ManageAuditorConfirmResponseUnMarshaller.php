<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ManageAuditorConfirmResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ManageAuditorConfirmResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ManageAuditorConfirmResponseUnMarshaller();
    }

    /**
     * @return ManageAuditorConfirmResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ManageAuditorConfirmResponse
     */
    protected function getResponseInstance()
    {
        return new ManageAuditorConfirmResponse();
    }
}

ManageAuditorConfirmResponseUnMarshaller::__init();
