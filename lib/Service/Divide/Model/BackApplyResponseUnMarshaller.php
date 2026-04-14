<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BackApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BackApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BackApplyResponseUnMarshaller();
    }

    /**
     * @return BackApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BackApplyResponse
     */
    protected function getResponseInstance()
    {
        return new BackApplyResponse();
    }
}

BackApplyResponseUnMarshaller::__init();
