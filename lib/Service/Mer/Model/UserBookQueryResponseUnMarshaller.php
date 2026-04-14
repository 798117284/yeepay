<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UserBookQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UserBookQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UserBookQueryResponseUnMarshaller();
    }

    /**
     * @return UserBookQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UserBookQueryResponse
     */
    protected function getResponseInstance()
    {
        return new UserBookQueryResponse();
    }
}

UserBookQueryResponseUnMarshaller::__init();
