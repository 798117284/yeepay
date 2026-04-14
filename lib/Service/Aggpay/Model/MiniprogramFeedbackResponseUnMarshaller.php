<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MiniprogramFeedbackResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MiniprogramFeedbackResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MiniprogramFeedbackResponseUnMarshaller();
    }

    /**
     * @return MiniprogramFeedbackResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MiniprogramFeedbackResponse
     */
    protected function getResponseInstance()
    {
        return new MiniprogramFeedbackResponse();
    }
}

MiniprogramFeedbackResponseUnMarshaller::__init();
