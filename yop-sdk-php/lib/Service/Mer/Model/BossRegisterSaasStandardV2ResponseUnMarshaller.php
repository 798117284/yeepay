<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BossRegisterSaasStandardV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BossRegisterSaasStandardV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BossRegisterSaasStandardV2ResponseUnMarshaller();
    }

    /**
     * @return BossRegisterSaasStandardV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BossRegisterSaasStandardV2Response
     */
    protected function getResponseInstance()
    {
        return new BossRegisterSaasStandardV2Response();
    }
}

BossRegisterSaasStandardV2ResponseUnMarshaller::__init();
