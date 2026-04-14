<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CertifyResultGetResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CertifyResultGetResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CertifyResultGetResponseUnMarshaller();
    }

    /**
     * @return CertifyResultGetResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CertifyResultGetResponse
     */
    protected function getResponseInstance()
    {
        return new CertifyResultGetResponse();
    }
}

CertifyResultGetResponseUnMarshaller::__init();
