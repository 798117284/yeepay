<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UpdateAccountInfoResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UpdateAccountInfoResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UpdateAccountInfoResponseUnMarshaller();
    }

    /**
     * @return UpdateAccountInfoResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UpdateAccountInfoResponse
     */
    protected function getResponseInstance()
    {
        return new UpdateAccountInfoResponse();
    }
}

UpdateAccountInfoResponseUnMarshaller::__init();
