<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindcardauthapplyconfirmResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindcardauthapplyconfirmResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindcardauthapplyconfirmResponseUnMarshaller();
    }

    /**
     * @return BindcardauthapplyconfirmResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindcardauthapplyconfirmResponse
     */
    protected function getResponseInstance()
    {
        return new BindcardauthapplyconfirmResponse();
    }
}

BindcardauthapplyconfirmResponseUnMarshaller::__init();
