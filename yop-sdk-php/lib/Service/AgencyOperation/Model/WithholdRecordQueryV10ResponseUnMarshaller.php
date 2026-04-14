<?php

namespace Yeepay\Yop\Sdk\Service\AgencyOperation\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WithholdRecordQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WithholdRecordQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WithholdRecordQueryV10ResponseUnMarshaller();
    }

    /**
     * @return WithholdRecordQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WithholdRecordQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new WithholdRecordQueryV10Response();
    }
}

WithholdRecordQueryV10ResponseUnMarshaller::__init();
