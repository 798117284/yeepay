<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ShareTokenGenerateV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ShareTokenGenerateV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ShareTokenGenerateV10ResponseUnMarshaller();
    }

    /**
     * @return ShareTokenGenerateV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ShareTokenGenerateV10Response
     */
    protected function getResponseInstance()
    {
        return new ShareTokenGenerateV10Response();
    }
}

ShareTokenGenerateV10ResponseUnMarshaller::__init();
