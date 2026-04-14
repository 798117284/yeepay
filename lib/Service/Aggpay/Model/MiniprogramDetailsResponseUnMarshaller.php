<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MiniprogramDetailsResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MiniprogramDetailsResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MiniprogramDetailsResponseUnMarshaller();
    }

    /**
     * @return MiniprogramDetailsResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MiniprogramDetailsResponse
     */
    protected function getResponseInstance()
    {
        return new MiniprogramDetailsResponse();
    }
}

MiniprogramDetailsResponseUnMarshaller::__init();
