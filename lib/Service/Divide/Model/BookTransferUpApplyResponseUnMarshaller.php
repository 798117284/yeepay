<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BookTransferUpApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BookTransferUpApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BookTransferUpApplyResponseUnMarshaller();
    }

    /**
     * @return BookTransferUpApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BookTransferUpApplyResponse
     */
    protected function getResponseInstance()
    {
        return new BookTransferUpApplyResponse();
    }
}

BookTransferUpApplyResponseUnMarshaller::__init();
