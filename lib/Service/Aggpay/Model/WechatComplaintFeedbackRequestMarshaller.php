<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class WechatComplaintFeedbackRequestMarshaller implements RequestMarshaller
{
    /**
     * @var WechatComplaintFeedbackRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WechatComplaintFeedbackRequestMarshaller();
    }

    /**
     * @return WechatComplaintFeedbackRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Aggpay';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/aggpay/miniprogram-feedback';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param WechatComplaintFeedbackRequest $request
     * @return Request
     */
    public function marshal($request)
    {
        $internalRequest = new DefaultRequest($this->serviceName);
        $internalRequest->setResourcePath($this->resourcePath);
        $internalRequest->setHttpMethod($this->httpMethod);
        if (!empty($request->getRequestConfig()) && !empty($request->getRequestConfig()->getCustomRequestHeaders())) {
            foreach ($request->getRequestConfig()->getCustomRequestHeaders() as $name => $value) {
                $internalRequest->addHeader($name, $value);
            }
        }
        if (!isset($internalRequest->getHeaders()[Headers::YOP_REQUEST_ID])) {
            $internalRequest->addHeader(Headers::YOP_REQUEST_ID, UUIDUtils::uuid());
        }
        if($request->getFeedbackContent() != null){
            $internalRequest->addParameter('feedbackContent', ObjectSerializer::sanitizeForSerialization($request->getFeedbackContent(), 'string'));
        }
        if($request->getOperateType() != null){
            $internalRequest->addParameter('operateType', ObjectSerializer::sanitizeForSerialization($request->getOperateType(), 'string'));
        }
        if($request->getAcceptReturn() != null){
            $internalRequest->addParameter('acceptReturn', ObjectSerializer::sanitizeForSerialization($request->getAcceptReturn(), 'string'));
        }
        if($request->getReturnId() != null){
            $internalRequest->addParameter('returnId', ObjectSerializer::sanitizeForSerialization($request->getReturnId(), 'string'));
        }
        if($request->getBussiHandle() != null){
            $internalRequest->addParameter('bussiHandle', ObjectSerializer::sanitizeForSerialization($request->getBussiHandle(), 'int', 'int32'));
        }
        if($request->getType() != null){
            $internalRequest->addParameter('type', ObjectSerializer::sanitizeForSerialization($request->getType(), 'string'));
        }
        if($request->getImageList() != null){
            $internalRequest->addParameter('imageList', ObjectSerializer::sanitizeForSerialization($request->getImageList(), 'string'));
        }
        if($request->getComplaintNo() != null){
            $internalRequest->addParameter('complaintNo', ObjectSerializer::sanitizeForSerialization($request->getComplaintNo(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
WechatComplaintFeedbackRequestMarshaller::__init();
