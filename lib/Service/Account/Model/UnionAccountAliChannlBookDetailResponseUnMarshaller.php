<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UnionAccountAliChannlBookDetailResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UnionAccountAliChannlBookDetailResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UnionAccountAliChannlBookDetailResponseUnMarshaller();
    }

    /**
     * @return UnionAccountAliChannlBookDetailResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UnionAccountAliChannlBookDetailResponse
     */
    protected function getResponseInstance()
    {
        return new UnionAccountAliChannlBookDetailResponse();
    }
}

UnionAccountAliChannlBookDetailResponseUnMarshaller::__init();
