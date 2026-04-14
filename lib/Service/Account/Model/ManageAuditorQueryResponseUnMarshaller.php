<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ManageAuditorQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ManageAuditorQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ManageAuditorQueryResponseUnMarshaller();
    }

    /**
     * @return ManageAuditorQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ManageAuditorQueryResponse
     */
    protected function getResponseInstance()
    {
        return new ManageAuditorQueryResponse();
    }
}

ManageAuditorQueryResponseUnMarshaller::__init();
