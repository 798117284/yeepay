<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankclearbindcardResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankclearbindcardResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankclearbindcardResponseUnMarshaller();
    }

    /**
     * @return BankclearbindcardResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankclearbindcardResponse
     */
    protected function getResponseInstance()
    {
        return new BankclearbindcardResponse();
    }
}

BankclearbindcardResponseUnMarshaller::__init();
