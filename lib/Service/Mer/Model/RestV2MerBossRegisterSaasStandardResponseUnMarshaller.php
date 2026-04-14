<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RestV2MerBossRegisterSaasStandardResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RestV2MerBossRegisterSaasStandardResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RestV2MerBossRegisterSaasStandardResponseUnMarshaller();
    }

    /**
     * @return RestV2MerBossRegisterSaasStandardResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RestV2MerBossRegisterSaasStandardResponse
     */
    protected function getResponseInstance()
    {
        return new RestV2MerBossRegisterSaasStandardResponse();
    }
}

RestV2MerBossRegisterSaasStandardResponseUnMarshaller::__init();
