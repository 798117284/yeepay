<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BookTransferUpQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BookTransferUpQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BookTransferUpQueryResponseUnMarshaller();
    }

    /**
     * @return BookTransferUpQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BookTransferUpQueryResponse
     */
    protected function getResponseInstance()
    {
        return new BookTransferUpQueryResponse();
    }
}

BookTransferUpQueryResponseUnMarshaller::__init();
