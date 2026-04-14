<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model\Old;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OpenBankAccountResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OpenBankAccountResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OpenBankAccountResponseUnMarshaller();
    }

    /**
     * @return OpenBankAccountResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OpenBankAccountResponse
     */
    protected function getResponseInstance()
    {
        return new OpenBankAccountResponse();
    }
}

OpenBankAccountResponseUnMarshaller::__init();
