<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AgentrefundV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AgentrefundV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AgentrefundV10ResponseUnMarshaller();
    }

    /**
     * @return AgentrefundV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AgentrefundV10Response
     */
    protected function getResponseInstance()
    {
        return new AgentrefundV10Response();
    }
}

AgentrefundV10ResponseUnMarshaller::__init();
