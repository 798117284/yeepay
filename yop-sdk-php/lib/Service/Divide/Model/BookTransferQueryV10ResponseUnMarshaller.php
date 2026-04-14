<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BookTransferQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BookTransferQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BookTransferQueryV10ResponseUnMarshaller();
    }

    /**
     * @return BookTransferQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BookTransferQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new BookTransferQueryV10Response();
    }
}

BookTransferQueryV10ResponseUnMarshaller::__init();
