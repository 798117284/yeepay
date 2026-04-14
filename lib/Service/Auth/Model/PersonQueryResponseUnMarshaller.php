<?php

namespace Yeepay\Yop\Sdk\Service\Auth\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PersonQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PersonQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PersonQueryResponseUnMarshaller();
    }

    /**
     * @return PersonQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PersonQueryResponse
     */
    protected function getResponseInstance()
    {
        return new PersonQueryResponse();
    }
}

PersonQueryResponseUnMarshaller::__init();
