<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ComplaintWechatListV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ComplaintWechatListV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ComplaintWechatListV10ResponseUnMarshaller();
    }

    /**
     * @return ComplaintWechatListV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ComplaintWechatListV10Response
     */
    protected function getResponseInstance()
    {
        return new ComplaintWechatListV10Response();
    }
}

ComplaintWechatListV10ResponseUnMarshaller::__init();
