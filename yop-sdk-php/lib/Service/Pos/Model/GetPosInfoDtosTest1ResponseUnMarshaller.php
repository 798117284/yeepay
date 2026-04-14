<?php

namespace Yeepay\Yop\Sdk\Service\Pos\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class GetPosInfoDtosTest1ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var GetPosInfoDtosTest1ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new GetPosInfoDtosTest1ResponseUnMarshaller();
    }

    /**
     * @return GetPosInfoDtosTest1ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return GetPosInfoDtosTest1Response
     */
    protected function getResponseInstance()
    {
        return new GetPosInfoDtosTest1Response();
    }
}

GetPosInfoDtosTest1ResponseUnMarshaller::__init();
