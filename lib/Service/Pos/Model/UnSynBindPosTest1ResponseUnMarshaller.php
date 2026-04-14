<?php

namespace Yeepay\Yop\Sdk\Service\Pos\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UnSynBindPosTest1ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UnSynBindPosTest1ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UnSynBindPosTest1ResponseUnMarshaller();
    }

    /**
     * @return UnSynBindPosTest1ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UnSynBindPosTest1Response
     */
    protected function getResponseInstance()
    {
        return new UnSynBindPosTest1Response();
    }
}

UnSynBindPosTest1ResponseUnMarshaller::__init();
