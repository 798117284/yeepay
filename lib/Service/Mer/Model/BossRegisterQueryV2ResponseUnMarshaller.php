<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BossRegisterQueryV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BossRegisterQueryV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BossRegisterQueryV2ResponseUnMarshaller();
    }

    /**
     * @return BossRegisterQueryV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BossRegisterQueryV2Response
     */
    protected function getResponseInstance()
    {
        return new BossRegisterQueryV2Response();
    }
}

BossRegisterQueryV2ResponseUnMarshaller::__init();
