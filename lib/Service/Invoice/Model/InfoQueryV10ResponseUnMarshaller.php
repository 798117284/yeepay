<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class InfoQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var InfoQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new InfoQueryV10ResponseUnMarshaller();
    }

    /**
     * @return InfoQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return InfoQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new InfoQueryV10Response();
    }
}

InfoQueryV10ResponseUnMarshaller::__init();
