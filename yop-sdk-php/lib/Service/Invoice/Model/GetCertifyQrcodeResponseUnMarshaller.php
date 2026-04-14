<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class GetCertifyQrcodeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var GetCertifyQrcodeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new GetCertifyQrcodeResponseUnMarshaller();
    }

    /**
     * @return GetCertifyQrcodeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return GetCertifyQrcodeResponse
     */
    protected function getResponseInstance()
    {
        return new GetCertifyQrcodeResponse();
    }
}

GetCertifyQrcodeResponseUnMarshaller::__init();
