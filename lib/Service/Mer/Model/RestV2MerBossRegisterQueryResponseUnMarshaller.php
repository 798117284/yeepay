<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RestV2MerBossRegisterQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RestV2MerBossRegisterQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RestV2MerBossRegisterQueryResponseUnMarshaller();
    }

    /**
     * @return RestV2MerBossRegisterQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RestV2MerBossRegisterQueryResponse
     */
    protected function getResponseInstance()
    {
        return new RestV2MerBossRegisterQueryResponse();
    }
}

RestV2MerBossRegisterQueryResponseUnMarshaller::__init();
