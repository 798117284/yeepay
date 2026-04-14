<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AliChannelBookDeailResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AliChannelBookDeailResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AliChannelBookDeailResponseUnMarshaller();
    }

    /**
     * @return AliChannelBookDeailResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AliChannelBookDeailResponse
     */
    protected function getResponseInstance()
    {
        return new AliChannelBookDeailResponse();
    }
}

AliChannelBookDeailResponseUnMarshaller::__init();
