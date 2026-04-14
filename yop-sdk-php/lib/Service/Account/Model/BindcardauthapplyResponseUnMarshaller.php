<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindcardauthapplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindcardauthapplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindcardauthapplyResponseUnMarshaller();
    }

    /**
     * @return BindcardauthapplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindcardauthapplyResponse
     */
    protected function getResponseInstance()
    {
        return new BindcardauthapplyResponse();
    }
}

BindcardauthapplyResponseUnMarshaller::__init();
