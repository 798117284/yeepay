<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ManageBankSupplementResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ManageBankSupplementResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ManageBankSupplementResponseUnMarshaller();
    }

    /**
     * @return ManageBankSupplementResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ManageBankSupplementResponse
     */
    protected function getResponseInstance()
    {
        return new ManageBankSupplementResponse();
    }
}

ManageBankSupplementResponseUnMarshaller::__init();
