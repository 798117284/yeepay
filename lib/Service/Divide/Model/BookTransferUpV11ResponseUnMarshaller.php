<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BookTransferUpV11ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BookTransferUpV11ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BookTransferUpV11ResponseUnMarshaller();
    }

    /**
     * @return BookTransferUpV11ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BookTransferUpV11Response
     */
    protected function getResponseInstance()
    {
        return new BookTransferUpV11Response();
    }
}

BookTransferUpV11ResponseUnMarshaller::__init();
