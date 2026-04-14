<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AliOpenChannelBookResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AliOpenChannelBookResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AliOpenChannelBookResponseUnMarshaller();
    }

    /**
     * @return AliOpenChannelBookResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AliOpenChannelBookResponse
     */
    protected function getResponseInstance()
    {
        return new AliOpenChannelBookResponse();
    }
}

AliOpenChannelBookResponseUnMarshaller::__init();
