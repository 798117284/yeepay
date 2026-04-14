<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PtotocolApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PtotocolApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PtotocolApplyResponseUnMarshaller();
    }

    /**
     * @return PtotocolApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PtotocolApplyResponse
     */
    protected function getResponseInstance()
    {
        return new PtotocolApplyResponse();
    }
}

PtotocolApplyResponseUnMarshaller::__init();
