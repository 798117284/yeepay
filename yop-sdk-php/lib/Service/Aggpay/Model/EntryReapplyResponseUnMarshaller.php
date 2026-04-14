<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class EntryReapplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var EntryReapplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new EntryReapplyResponseUnMarshaller();
    }

    /**
     * @return EntryReapplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return EntryReapplyResponse
     */
    protected function getResponseInstance()
    {
        return new EntryReapplyResponse();
    }
}

EntryReapplyResponseUnMarshaller::__init();
