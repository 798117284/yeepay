<?php

namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class InstallmentPayRequestV11ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var InstallmentPayRequestV11ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new InstallmentPayRequestV11ResponseUnMarshaller();
    }

    /**
     * @return InstallmentPayRequestV11ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return InstallmentPayRequestV11Response
     */
    protected function getResponseInstance()
    {
        return new InstallmentPayRequestV11Response();
    }
}

InstallmentPayRequestV11ResponseUnMarshaller::__init();
