<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindcardRequestV21ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindcardRequestV21ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindcardRequestV21ResponseUnMarshaller();
    }

    /**
     * @return BindcardRequestV21ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindcardRequestV21Response
     */
    protected function getResponseInstance()
    {
        return new BindcardRequestV21Response();
    }
}

BindcardRequestV21ResponseUnMarshaller::__init();
