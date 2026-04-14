<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class NotifyRepeatV20ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var NotifyRepeatV20ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new NotifyRepeatV20ResponseUnMarshaller();
    }

    /**
     * @return NotifyRepeatV20ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return NotifyRepeatV20Response
     */
    protected function getResponseInstance()
    {
        return new NotifyRepeatV20Response();
    }
}

NotifyRepeatV20ResponseUnMarshaller::__init();
