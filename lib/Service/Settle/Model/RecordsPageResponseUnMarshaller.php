<?php

namespace Yeepay\Yop\Sdk\Service\Settle\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RecordsPageResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RecordsPageResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RecordsPageResponseUnMarshaller();
    }

    /**
     * @return RecordsPageResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RecordsPageResponse
     */
    protected function getResponseInstance()
    {
        return new RecordsPageResponse();
    }
}

RecordsPageResponseUnMarshaller::__init();
