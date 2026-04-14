<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ManageReviewerQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ManageReviewerQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ManageReviewerQueryV10ResponseUnMarshaller();
    }

    /**
     * @return ManageReviewerQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ManageReviewerQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new ManageReviewerQueryV10Response();
    }
}

ManageReviewerQueryV10ResponseUnMarshaller::__init();
