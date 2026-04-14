<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BookTransferApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BookTransferApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BookTransferApplyResponseUnMarshaller();
    }

    /**
     * @return BookTransferApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BookTransferApplyResponse
     */
    protected function getResponseInstance()
    {
        return new BookTransferApplyResponse();
    }
}

BookTransferApplyResponseUnMarshaller::__init();
