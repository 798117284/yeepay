<?php

namespace Yeepay\Yop\Sdk\Service\Nccashierapi\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindCardQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindCardQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindCardQueryResponseUnMarshaller();
    }

    /**
     * @return BindCardQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindCardQueryResponse
     */
    protected function getResponseInstance()
    {
        return new BindCardQueryResponse();
    }
}

BindCardQueryResponseUnMarshaller::__init();
