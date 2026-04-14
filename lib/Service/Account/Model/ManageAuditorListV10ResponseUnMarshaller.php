<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ManageAuditorListV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ManageAuditorListV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ManageAuditorListV10ResponseUnMarshaller();
    }

    /**
     * @return ManageAuditorListV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ManageAuditorListV10Response
     */
    protected function getResponseInstance()
    {
        return new ManageAuditorListV10Response();
    }
}

ManageAuditorListV10ResponseUnMarshaller::__init();
