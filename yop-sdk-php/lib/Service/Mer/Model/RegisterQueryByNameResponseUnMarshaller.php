<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RegisterQueryByNameResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RegisterQueryByNameResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RegisterQueryByNameResponseUnMarshaller();
    }

    /**
     * @return RegisterQueryByNameResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RegisterQueryByNameResponse
     */
    protected function getResponseInstance()
    {
        return new RegisterQueryByNameResponse();
    }
}

RegisterQueryByNameResponseUnMarshaller::__init();
