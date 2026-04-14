<?php

namespace Yeepay\Yop\Sdk\Service\Std\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class VoucherAssetApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var VoucherAssetApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new VoucherAssetApplyResponseUnMarshaller();
    }

    /**
     * @return VoucherAssetApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return VoucherAssetApplyResponse
     */
    protected function getResponseInstance()
    {
        return new VoucherAssetApplyResponse();
    }
}

VoucherAssetApplyResponseUnMarshaller::__init();
