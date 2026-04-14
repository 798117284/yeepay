<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ManageAuditorAddV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ManageAuditorAddV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ManageAuditorAddV10ResponseUnMarshaller();
    }

    /**
     * @return ManageAuditorAddV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ManageAuditorAddV10Response
     */
    protected function getResponseInstance()
    {
        return new ManageAuditorAddV10Response();
    }
}

ManageAuditorAddV10ResponseUnMarshaller::__init();
