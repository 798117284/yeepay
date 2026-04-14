<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AttachQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AttachQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AttachQueryResponseUnMarshaller();
    }

    /**
     * @return AttachQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AttachQueryResponse
     */
    protected function getResponseInstance()
    {
        return new AttachQueryResponse();
    }
}

AttachQueryResponseUnMarshaller::__init();
