<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ProductFeeModifyV20ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ProductFeeModifyV20ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ProductFeeModifyV20ResponseUnMarshaller();
    }

    /**
     * @return ProductFeeModifyV20ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ProductFeeModifyV20Response
     */
    protected function getResponseInstance()
    {
        return new ProductFeeModifyV20Response();
    }
}

ProductFeeModifyV20ResponseUnMarshaller::__init();
