<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ComplaintWechatDownloadPicV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ComplaintWechatDownloadPicV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ComplaintWechatDownloadPicV10ResponseUnMarshaller();
    }

    /**
     * @return ComplaintWechatDownloadPicV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ComplaintWechatDownloadPicV10Response
     */
    protected function getResponseInstance()
    {
        return new ComplaintWechatDownloadPicV10Response();
    }
}

ComplaintWechatDownloadPicV10ResponseUnMarshaller::__init();
