<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FastRedResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FastRedResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FastRedResponseUnMarshaller();
    }

    /**
     * @return FastRedResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FastRedResponse
     */
    protected function getResponseInstance()
    {
        return new FastRedResponse();
    }
}

FastRedResponseUnMarshaller::__init();
