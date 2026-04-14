<?php

namespace Yeepay\Yop\Sdk\Service\Promtion\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PromtionBankCancelApplicationV1ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PromtionBankCancelApplicationV1ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PromtionBankCancelApplicationV1ResponseUnMarshaller();
    }

    /**
     * @return PromtionBankCancelApplicationV1ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PromtionBankCancelApplicationV1Response
     */
    protected function getResponseInstance()
    {
        return new PromtionBankCancelApplicationV1Response();
    }
}

PromtionBankCancelApplicationV1ResponseUnMarshaller::__init();
