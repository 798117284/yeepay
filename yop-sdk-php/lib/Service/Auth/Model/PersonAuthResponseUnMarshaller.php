<?php

namespace Yeepay\Yop\Sdk\Service\Auth\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PersonAuthResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PersonAuthResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PersonAuthResponseUnMarshaller();
    }

    /**
     * @return PersonAuthResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PersonAuthResponse
     */
    protected function getResponseInstance()
    {
        return new PersonAuthResponse();
    }
}

PersonAuthResponseUnMarshaller::__init();
