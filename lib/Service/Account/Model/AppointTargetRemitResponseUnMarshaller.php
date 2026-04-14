<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AppointTargetRemitResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AppointTargetRemitResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AppointTargetRemitResponseUnMarshaller();
    }

    /**
     * @return AppointTargetRemitResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AppointTargetRemitResponse
     */
    protected function getResponseInstance()
    {
        return new AppointTargetRemitResponse();
    }
}

AppointTargetRemitResponseUnMarshaller::__init();
