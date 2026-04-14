<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AgentrefundResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AgentrefundResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AgentrefundResponseUnMarshaller();
    }

    /**
     * @return AgentrefundResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AgentrefundResponse
     */
    protected function getResponseInstance()
    {
        return new AgentrefundResponse();
    }
}

AgentrefundResponseUnMarshaller::__init();
