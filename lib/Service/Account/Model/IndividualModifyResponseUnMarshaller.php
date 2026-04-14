<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class IndividualModifyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var IndividualModifyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new IndividualModifyResponseUnMarshaller();
    }

    /**
     * @return IndividualModifyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return IndividualModifyResponse
     */
    protected function getResponseInstance()
    {
        return new IndividualModifyResponse();
    }
}

IndividualModifyResponseUnMarshaller::__init();
