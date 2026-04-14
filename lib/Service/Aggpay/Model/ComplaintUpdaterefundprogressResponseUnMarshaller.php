<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ComplaintUpdaterefundprogressResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ComplaintUpdaterefundprogressResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ComplaintUpdaterefundprogressResponseUnMarshaller();
    }

    /**
     * @return ComplaintUpdaterefundprogressResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ComplaintUpdaterefundprogressResponse
     */
    protected function getResponseInstance()
    {
        return new ComplaintUpdaterefundprogressResponse();
    }
}

ComplaintUpdaterefundprogressResponseUnMarshaller::__init();
