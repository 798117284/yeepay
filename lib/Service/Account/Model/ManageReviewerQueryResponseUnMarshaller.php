<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ManageReviewerQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ManageReviewerQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ManageReviewerQueryResponseUnMarshaller();
    }

    /**
     * @return ManageReviewerQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ManageReviewerQueryResponse
     */
    protected function getResponseInstance()
    {
        return new ManageReviewerQueryResponse();
    }
}

ManageReviewerQueryResponseUnMarshaller::__init();
