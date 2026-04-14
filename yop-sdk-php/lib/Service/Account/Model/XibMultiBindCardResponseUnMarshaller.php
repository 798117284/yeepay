<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class XibMultiBindCardResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var XibMultiBindCardResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new XibMultiBindCardResponseUnMarshaller();
    }

    /**
     * @return XibMultiBindCardResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return XibMultiBindCardResponse
     */
    protected function getResponseInstance()
    {
        return new XibMultiBindCardResponse();
    }
}

XibMultiBindCardResponseUnMarshaller::__init();
