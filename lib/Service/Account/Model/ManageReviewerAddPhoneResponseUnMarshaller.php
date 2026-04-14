<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ManageReviewerAddPhoneResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ManageReviewerAddPhoneResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ManageReviewerAddPhoneResponseUnMarshaller();
    }

    /**
     * @return ManageReviewerAddPhoneResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ManageReviewerAddPhoneResponse
     */
    protected function getResponseInstance()
    {
        return new ManageReviewerAddPhoneResponse();
    }
}

ManageReviewerAddPhoneResponseUnMarshaller::__init();
