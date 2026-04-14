<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UpdateReceiverResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UpdateReceiverResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UpdateReceiverResponseUnMarshaller();
    }

    /**
     * @return UpdateReceiverResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UpdateReceiverResponse
     */
    protected function getResponseInstance()
    {
        return new UpdateReceiverResponse();
    }
}

UpdateReceiverResponseUnMarshaller::__init();
