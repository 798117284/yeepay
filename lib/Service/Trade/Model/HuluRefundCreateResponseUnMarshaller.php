<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class HuluRefundCreateResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var HuluRefundCreateResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new HuluRefundCreateResponseUnMarshaller();
    }

    /**
     * @return HuluRefundCreateResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return HuluRefundCreateResponse
     */
    protected function getResponseInstance()
    {
        return new HuluRefundCreateResponse();
    }
}

HuluRefundCreateResponseUnMarshaller::__init();
