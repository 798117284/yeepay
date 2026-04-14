<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UpopActivescanVccResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UpopActivescanVccResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UpopActivescanVccResponseUnMarshaller();
    }

    /**
     * @return UpopActivescanVccResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UpopActivescanVccResponse
     */
    protected function getResponseInstance()
    {
        return new UpopActivescanVccResponse();
    }
}

UpopActivescanVccResponseUnMarshaller::__init();
