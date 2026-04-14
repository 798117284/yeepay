<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UpopPassivescanVccQrcodeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UpopPassivescanVccQrcodeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UpopPassivescanVccQrcodeResponseUnMarshaller();
    }

    /**
     * @return UpopPassivescanVccQrcodeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UpopPassivescanVccQrcodeResponse
     */
    protected function getResponseInstance()
    {
        return new UpopPassivescanVccQrcodeResponse();
    }
}

UpopPassivescanVccQrcodeResponseUnMarshaller::__init();
