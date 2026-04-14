<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ReceiverApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ReceiverApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ReceiverApplyResponseUnMarshaller();
    }

    /**
     * @return ReceiverApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ReceiverApplyResponse
     */
    protected function getResponseInstance()
    {
        return new ReceiverApplyResponse();
    }
}

ReceiverApplyResponseUnMarshaller::__init();
