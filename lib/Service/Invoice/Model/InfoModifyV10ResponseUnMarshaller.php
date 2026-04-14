<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class InfoModifyV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var InfoModifyV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new InfoModifyV10ResponseUnMarshaller();
    }

    /**
     * @return InfoModifyV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return InfoModifyV10Response
     */
    protected function getResponseInstance()
    {
        return new InfoModifyV10Response();
    }
}

InfoModifyV10ResponseUnMarshaller::__init();
