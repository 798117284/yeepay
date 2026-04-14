<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ProductIncrementSettleOpenV20ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ProductIncrementSettleOpenV20ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ProductIncrementSettleOpenV20ResponseUnMarshaller();
    }

    /**
     * @return ProductIncrementSettleOpenV20ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ProductIncrementSettleOpenV20Response
     */
    protected function getResponseInstance()
    {
        return new ProductIncrementSettleOpenV20Response();
    }
}

ProductIncrementSettleOpenV20ResponseUnMarshaller::__init();
