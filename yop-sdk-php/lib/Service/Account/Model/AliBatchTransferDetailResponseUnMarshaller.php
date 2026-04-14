<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AliBatchTransferDetailResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AliBatchTransferDetailResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AliBatchTransferDetailResponseUnMarshaller();
    }

    /**
     * @return AliBatchTransferDetailResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AliBatchTransferDetailResponse
     */
    protected function getResponseInstance()
    {
        return new AliBatchTransferDetailResponse();
    }
}

AliBatchTransferDetailResponseUnMarshaller::__init();
