<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UpdateRefundProgressResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UpdateRefundProgressResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UpdateRefundProgressResponseUnMarshaller();
    }

    /**
     * @return UpdateRefundProgressResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UpdateRefundProgressResponse
     */
    protected function getResponseInstance()
    {
        return new UpdateRefundProgressResponse();
    }
}

UpdateRefundProgressResponseUnMarshaller::__init();
