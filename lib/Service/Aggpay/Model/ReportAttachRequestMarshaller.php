<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class ReportAttachRequestMarshaller implements RequestMarshaller
{
    /**
     * @var ReportAttachRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ReportAttachRequestMarshaller();
    }

    /**
     * @return ReportAttachRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/aggpay/report/attach';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param ReportAttachRequest $request
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
        if($request->getChannel() != null){
            $internalRequest->addParameter('channel', ObjectSerializer::sanitizeForSerialization($request->getChannel(), 'string'));
        }
        if($request->getMainChannelNo() != null){
            $internalRequest->addParameter('mainChannelNo', ObjectSerializer::sanitizeForSerialization($request->getMainChannelNo(), 'string'));
        }
        if($request->getMainReportMerchantNo() != null){
            $internalRequest->addParameter('mainReportMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getMainReportMerchantNo(), 'string'));
        }
        if($request->getAuthFileName() != null){
            $internalRequest->addParameter('authFileName', ObjectSerializer::sanitizeForSerialization($request->getAuthFileName(), 'string'));
        }
        if($request->getAuthFileUrl() != null){
            $internalRequest->addParameter('authFileUrl', ObjectSerializer::sanitizeForSerialization($request->getAuthFileUrl(), 'string'));
        }
        if($request->getGroupName() != null){
            $internalRequest->addParameter('groupName', ObjectSerializer::sanitizeForSerialization($request->getGroupName(), 'string'));
        }
        if($request->getRequestReason() != null){
            $internalRequest->addParameter('requestReason', ObjectSerializer::sanitizeForSerialization($request->getRequestReason(), 'string'));
        }
        if($request->getPayWayList() != null){
            $internalRequest->addParameter('payWayList', ObjectSerializer::sanitizeForSerialization($request->getPayWayList(), 'string'));
        }
        if($request->getNotifyUrl() != null){
            $internalRequest->addParameter('notifyUrl', ObjectSerializer::sanitizeForSerialization($request->getNotifyUrl(), 'string', 'notify-url'));
        }
        if($request->getMainMerchantNo() != null){
            $internalRequest->addParameter('mainMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getMainMerchantNo(), 'string'));
        }
        if($request->getMerchantTemplateUrl() != null){
            $internalRequest->addParameter('merchantTemplateUrl', ObjectSerializer::sanitizeForSerialization($request->getMerchantTemplateUrl(), 'string'));
        }
        if($request->getMerchantTemplateName() != null){
            $internalRequest->addParameter('merchantTemplateName', ObjectSerializer::sanitizeForSerialization($request->getMerchantTemplateName(), 'string'));
        }
        if($request->getRequestType() != null){
            $internalRequest->addParameter('requestType', ObjectSerializer::sanitizeForSerialization($request->getRequestType(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
ReportAttachRequestMarshaller::__init();
