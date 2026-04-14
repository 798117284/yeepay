<?php

namespace Yeepay\Yop\Sdk\Service\Settle\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RecordsPageV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RecordsPageV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RecordsPageV10ResponseUnMarshaller();
    }

    /**
     * @return RecordsPageV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RecordsPageV10Response
     */
    protected function getResponseInstance()
    {
        return new RecordsPageV10Response();
    }
}

RecordsPageV10ResponseUnMarshaller::__init();
