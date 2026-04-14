<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BookTransferQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BookTransferQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BookTransferQueryResponseUnMarshaller();
    }

    /**
     * @return BookTransferQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BookTransferQueryResponse
     */
    protected function getResponseInstance()
    {
        return new BookTransferQueryResponse();
    }
}

BookTransferQueryResponseUnMarshaller::__init();
