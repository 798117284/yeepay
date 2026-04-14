<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UnionAccountAliOpenChannelBookResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UnionAccountAliOpenChannelBookResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UnionAccountAliOpenChannelBookResponseUnMarshaller();
    }

    /**
     * @return UnionAccountAliOpenChannelBookResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UnionAccountAliOpenChannelBookResponse
     */
    protected function getResponseInstance()
    {
        return new UnionAccountAliOpenChannelBookResponse();
    }
}

UnionAccountAliOpenChannelBookResponseUnMarshaller::__init();
