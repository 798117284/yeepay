<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BookTransferUpV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BookTransferUpV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BookTransferUpV10ResponseUnMarshaller();
    }

    /**
     * @return BookTransferUpV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BookTransferUpV10Response
     */
    protected function getResponseInstance()
    {
        return new BookTransferUpV10Response();
    }
}

BookTransferUpV10ResponseUnMarshaller::__init();
