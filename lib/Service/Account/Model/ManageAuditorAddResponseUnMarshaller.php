<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ManageAuditorAddResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ManageAuditorAddResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ManageAuditorAddResponseUnMarshaller();
    }

    /**
     * @return ManageAuditorAddResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ManageAuditorAddResponse
     */
    protected function getResponseInstance()
    {
        return new ManageAuditorAddResponse();
    }
}

ManageAuditorAddResponseUnMarshaller::__init();
