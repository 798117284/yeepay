<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model\Old;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindCardAuthApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindCardAuthApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindCardAuthApplyResponseUnMarshaller();
    }

    /**
     * @return BindCardAuthApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindCardAuthApplyResponse
     */
    protected function getResponseInstance()
    {
        return new BindCardAuthApplyResponse();
    }
}

BindCardAuthApplyResponseUnMarshaller::__init();
