<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CreateQrcodeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CreateQrcodeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreateQrcodeResponseUnMarshaller();
    }

    /**
     * @return CreateQrcodeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CreateQrcodeResponse
     */
    protected function getResponseInstance()
    {
        return new CreateQrcodeResponse();
    }
}

CreateQrcodeResponseUnMarshaller::__init();
