<?php

namespace Yeepay\Yop\Sdk\Service\Auth\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PERSONALINFORMATIONAUTHResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PERSONALINFORMATIONAUTHResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PERSONALINFORMATIONAUTHResponseUnMarshaller();
    }

    /**
     * @return PERSONALINFORMATIONAUTHResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PERSONALINFORMATIONAUTHResponse
     */
    protected function getResponseInstance()
    {
        return new PERSONALINFORMATIONAUTHResponse();
    }
}

PERSONALINFORMATIONAUTHResponseUnMarshaller::__init();
