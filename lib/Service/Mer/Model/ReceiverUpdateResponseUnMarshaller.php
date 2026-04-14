<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ReceiverUpdateResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ReceiverUpdateResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ReceiverUpdateResponseUnMarshaller();
    }

    /**
     * @return ReceiverUpdateResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ReceiverUpdateResponse
     */
    protected function getResponseInstance()
    {
        return new ReceiverUpdateResponse();
    }
}

ReceiverUpdateResponseUnMarshaller::__init();
