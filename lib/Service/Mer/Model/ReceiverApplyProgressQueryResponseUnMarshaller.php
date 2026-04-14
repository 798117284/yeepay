<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ReceiverApplyProgressQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ReceiverApplyProgressQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ReceiverApplyProgressQueryResponseUnMarshaller();
    }

    /**
     * @return ReceiverApplyProgressQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ReceiverApplyProgressQueryResponse
     */
    protected function getResponseInstance()
    {
        return new ReceiverApplyProgressQueryResponse();
    }
}

ReceiverApplyProgressQueryResponseUnMarshaller::__init();
