<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class StatusQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var StatusQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new StatusQueryResponseUnMarshaller();
    }

    /**
     * @return StatusQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return StatusQueryResponse
     */
    protected function getResponseInstance()
    {
        return new StatusQueryResponse();
    }
}

StatusQueryResponseUnMarshaller::__init();
