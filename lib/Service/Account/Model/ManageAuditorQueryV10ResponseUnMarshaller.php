<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ManageAuditorQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ManageAuditorQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ManageAuditorQueryV10ResponseUnMarshaller();
    }

    /**
     * @return ManageAuditorQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ManageAuditorQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new ManageAuditorQueryV10Response();
    }
}

ManageAuditorQueryV10ResponseUnMarshaller::__init();
