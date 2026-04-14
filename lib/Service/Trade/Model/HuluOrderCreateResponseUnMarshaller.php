<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class HuluOrderCreateResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var HuluOrderCreateResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new HuluOrderCreateResponseUnMarshaller();
    }

    /**
     * @return HuluOrderCreateResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return HuluOrderCreateResponse
     */
    protected function getResponseInstance()
    {
        return new HuluOrderCreateResponse();
    }
}

HuluOrderCreateResponseUnMarshaller::__init();
