<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model\Old;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindCardAuthApplyConfirmResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindCardAuthApplyConfirmResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindCardAuthApplyConfirmResponseUnMarshaller();
    }

    /**
     * @return BindCardAuthApplyConfirmResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindCardAuthApplyConfirmResponse
     */
    protected function getResponseInstance()
    {
        return new BindCardAuthApplyConfirmResponse();
    }
}

BindCardAuthApplyConfirmResponseUnMarshaller::__init();
