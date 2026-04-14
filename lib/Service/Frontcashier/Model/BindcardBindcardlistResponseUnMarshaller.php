<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindcardBindcardlistResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindcardBindcardlistResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindcardBindcardlistResponseUnMarshaller();
    }

    /**
     * @return BindcardBindcardlistResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindcardBindcardlistResponse
     */
    protected function getResponseInstance()
    {
        return new BindcardBindcardlistResponse();
    }
}

BindcardBindcardlistResponseUnMarshaller::__init();
