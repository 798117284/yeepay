<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UpopPassivescanBindQrcodeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UpopPassivescanBindQrcodeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UpopPassivescanBindQrcodeResponseUnMarshaller();
    }

    /**
     * @return UpopPassivescanBindQrcodeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UpopPassivescanBindQrcodeResponse
     */
    protected function getResponseInstance()
    {
        return new UpopPassivescanBindQrcodeResponse();
    }
}

UpopPassivescanBindQrcodeResponseUnMarshaller::__init();
