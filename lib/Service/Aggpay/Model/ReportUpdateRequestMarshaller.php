<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class ReportUpdateRequestMarshaller implements RequestMarshaller
{
    /**
     * @var ReportUpdateRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ReportUpdateRequestMarshaller();
    }

    /**
     * @return ReportUpdateRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/aggpay/report/update';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param ReportUpdateRequest $request
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
        if($request->getParentMerchantNo() != null){
            $internalRequest->addParameter('parentMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getParentMerchantNo(), 'string'));
        }
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getChannelNo() != null){
            $internalRequest->addParameter('channelNo', ObjectSerializer::sanitizeForSerialization($request->getChannelNo(), 'string'));
        }
        if($request->getChannel() != null){
            $internalRequest->addParameter('channel', ObjectSerializer::sanitizeForSerialization($request->getChannel(), 'string'));
        }
        if($request->getScene() != null){
            $internalRequest->addParameter('scene', ObjectSerializer::sanitizeForSerialization($request->getScene(), 'string'));
        }
        if($request->getPromotionType() != null){
            $internalRequest->addParameter('promotionType', ObjectSerializer::sanitizeForSerialization($request->getPromotionType(), 'string'));
        }
        if($request->getReportMerchantNo() != null){
            $internalRequest->addParameter('reportMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getReportMerchantNo(), 'string'));
        }
        if($request->getReportMerchantName() != null){
            $internalRequest->addParameter('reportMerchantName', ObjectSerializer::sanitizeForSerialization($request->getReportMerchantName(), 'string'));
        }
        if($request->getReportMerchantAlias() != null){
            $internalRequest->addParameter('reportMerchantAlias', ObjectSerializer::sanitizeForSerialization($request->getReportMerchantAlias(), 'string'));
        }
        if($request->getServiceTel() != null){
            $internalRequest->addParameter('serviceTel', ObjectSerializer::sanitizeForSerialization($request->getServiceTel(), 'string'));
        }
        if($request->getContactMobile() != null){
            $internalRequest->addParameter('contactMobile', ObjectSerializer::sanitizeForSerialization($request->getContactMobile(), 'string'));
        }
        if($request->getContactEmail() != null){
            $internalRequest->addParameter('contactEmail', ObjectSerializer::sanitizeForSerialization($request->getContactEmail(), 'string'));
        }
        if($request->getContactPhone() != null){
            $internalRequest->addParameter('contactPhone', ObjectSerializer::sanitizeForSerialization($request->getContactPhone(), 'string'));
        }
        if($request->getContactName() != null){
            $internalRequest->addParameter('contactName', ObjectSerializer::sanitizeForSerialization($request->getContactName(), 'string'));
        }
        if($request->getContactType() != null){
            $internalRequest->addParameter('contactType', ObjectSerializer::sanitizeForSerialization($request->getContactType(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
ReportUpdateRequestMarshaller::__init();
