<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BookTransferV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BookTransferV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BookTransferV10ResponseUnMarshaller();
    }

    /**
     * @return BookTransferV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BookTransferV10Response
     */
    protected function getResponseInstance()
    {
        return new BookTransferV10Response();
    }
}

BookTransferV10ResponseUnMarshaller::__init();
