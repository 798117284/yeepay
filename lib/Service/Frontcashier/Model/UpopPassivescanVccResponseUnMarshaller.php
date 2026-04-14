<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UpopPassivescanVccResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UpopPassivescanVccResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UpopPassivescanVccResponseUnMarshaller();
    }

    /**
     * @return UpopPassivescanVccResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UpopPassivescanVccResponse
     */
    protected function getResponseInstance()
    {
        return new UpopPassivescanVccResponse();
    }
}

UpopPassivescanVccResponseUnMarshaller::__init();
