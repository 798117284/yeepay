<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RechargeBatchQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RechargeBatchQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RechargeBatchQueryV10ResponseUnMarshaller();
    }

    /**
     * @return RechargeBatchQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RechargeBatchQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new RechargeBatchQueryV10Response();
    }
}

RechargeBatchQueryV10ResponseUnMarshaller::__init();
