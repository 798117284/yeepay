<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UpopActivescanVccPayResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UpopActivescanVccPayResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UpopActivescanVccPayResponseUnMarshaller();
    }

    /**
     * @return UpopActivescanVccPayResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UpopActivescanVccPayResponse
     */
    protected function getResponseInstance()
    {
        return new UpopActivescanVccPayResponse();
    }
}

UpopActivescanVccPayResponseUnMarshaller::__init();
