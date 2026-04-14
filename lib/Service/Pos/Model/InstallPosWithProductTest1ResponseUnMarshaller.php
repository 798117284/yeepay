<?php

namespace Yeepay\Yop\Sdk\Service\Pos\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class InstallPosWithProductTest1ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var InstallPosWithProductTest1ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new InstallPosWithProductTest1ResponseUnMarshaller();
    }

    /**
     * @return InstallPosWithProductTest1ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return InstallPosWithProductTest1Response
     */
    protected function getResponseInstance()
    {
        return new InstallPosWithProductTest1Response();
    }
}

InstallPosWithProductTest1ResponseUnMarshaller::__init();
