<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountinfosQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountinfosQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountinfosQueryV10ResponseUnMarshaller();
    }

    /**
     * @return AccountinfosQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountinfosQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new AccountinfosQueryV10Response();
    }
}

AccountinfosQueryV10ResponseUnMarshaller::__init();
