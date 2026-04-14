<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BossRegisterSaasDivideV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BossRegisterSaasDivideV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BossRegisterSaasDivideV2ResponseUnMarshaller();
    }

    /**
     * @return BossRegisterSaasDivideV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BossRegisterSaasDivideV2Response
     */
    protected function getResponseInstance()
    {
        return new BossRegisterSaasDivideV2Response();
    }
}

BossRegisterSaasDivideV2ResponseUnMarshaller::__init();
