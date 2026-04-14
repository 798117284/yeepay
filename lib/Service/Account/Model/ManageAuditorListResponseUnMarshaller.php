<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ManageAuditorListResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ManageAuditorListResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ManageAuditorListResponseUnMarshaller();
    }

    /**
     * @return ManageAuditorListResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ManageAuditorListResponse
     */
    protected function getResponseInstance()
    {
        return new ManageAuditorListResponse();
    }
}

ManageAuditorListResponseUnMarshaller::__init();
