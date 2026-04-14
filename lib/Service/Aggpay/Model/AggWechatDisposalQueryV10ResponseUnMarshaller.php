<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AggWechatDisposalQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AggWechatDisposalQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AggWechatDisposalQueryV10ResponseUnMarshaller();
    }

    /**
     * @return AggWechatDisposalQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AggWechatDisposalQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new AggWechatDisposalQueryV10Response();
    }
}

AggWechatDisposalQueryV10ResponseUnMarshaller::__init();
