<?php

namespace Yeepay\Yop\Sdk\Service\AtVcc\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UnionPayOrderQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UnionPayOrderQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UnionPayOrderQueryV10ResponseUnMarshaller();
    }

    /**
     * @return UnionPayOrderQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UnionPayOrderQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new UnionPayOrderQueryV10Response();
    }
}

UnionPayOrderQueryV10ResponseUnMarshaller::__init();
