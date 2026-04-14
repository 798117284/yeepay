<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AutoTitleQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AutoTitleQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AutoTitleQueryResponseUnMarshaller();
    }

    /**
     * @return AutoTitleQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AutoTitleQueryResponse
     */
    protected function getResponseInstance()
    {
        return new AutoTitleQueryResponse();
    }
}

AutoTitleQueryResponseUnMarshaller::__init();
