<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindcardRequestV22ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindcardRequestV22ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindcardRequestV22ResponseUnMarshaller();
    }

    /**
     * @return BindcardRequestV22ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindcardRequestV22Response
     */
    protected function getResponseInstance()
    {
        return new BindcardRequestV22Response();
    }
}

BindcardRequestV22ResponseUnMarshaller::__init();
