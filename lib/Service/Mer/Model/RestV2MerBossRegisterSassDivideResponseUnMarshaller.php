<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RestV2MerBossRegisterSassDivideResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RestV2MerBossRegisterSassDivideResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RestV2MerBossRegisterSassDivideResponseUnMarshaller();
    }

    /**
     * @return RestV2MerBossRegisterSassDivideResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RestV2MerBossRegisterSassDivideResponse
     */
    protected function getResponseInstance()
    {
        return new RestV2MerBossRegisterSassDivideResponse();
    }
}

RestV2MerBossRegisterSassDivideResponseUnMarshaller::__init();
