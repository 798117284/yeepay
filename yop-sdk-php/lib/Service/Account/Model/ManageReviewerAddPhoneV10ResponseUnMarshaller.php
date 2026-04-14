<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ManageReviewerAddPhoneV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ManageReviewerAddPhoneV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ManageReviewerAddPhoneV10ResponseUnMarshaller();
    }

    /**
     * @return ManageReviewerAddPhoneV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ManageReviewerAddPhoneV10Response
     */
    protected function getResponseInstance()
    {
        return new ManageReviewerAddPhoneV10Response();
    }
}

ManageReviewerAddPhoneV10ResponseUnMarshaller::__init();
