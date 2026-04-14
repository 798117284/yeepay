<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class CreditscoreCompleteRequestMarshaller implements RequestMarshaller
{
    /**
     * @var CreditscoreCompleteRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreditscoreCompleteRequestMarshaller();
    }

    /**
     * @return CreditscoreCompleteRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/aggpay/creditscore-complete';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param CreditscoreCompleteRequest $request
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
        if($request->getCreditOrderId() != null){
            $internalRequest->addParameter('creditOrderId', ObjectSerializer::sanitizeForSerialization($request->getCreditOrderId(), 'string'));
        }
        if($request->getPostPaymentInfos() != null){
            $internalRequest->addParameter('postPaymentInfos', ObjectSerializer::sanitizeForSerialization($request->getPostPaymentInfos(), 'string'));
        }
        if($request->getPostDiscountInfos() != null){
            $internalRequest->addParameter('postDiscountInfos', ObjectSerializer::sanitizeForSerialization($request->getPostDiscountInfos(), 'string'));
        }
        if($request->getRiskFundInfo() != null){
            $internalRequest->addParameter('riskFundInfo', ObjectSerializer::sanitizeForSerialization($request->getRiskFundInfo(), 'string'));
        }
        if($request->getTimeRange() != null){
            $internalRequest->addParameter('timeRange', ObjectSerializer::sanitizeForSerialization($request->getTimeRange(), 'string'));
        }
        if($request->getLocationInfo() != null){
            $internalRequest->addParameter('locationInfo', ObjectSerializer::sanitizeForSerialization($request->getLocationInfo(), 'string'));
        }
        if($request->getTotalAmount() != null){
            $internalRequest->addParameter('totalAmount', ObjectSerializer::sanitizeForSerialization($request->getTotalAmount(), 'string'));
        }
        if($request->getCompleteTime() != null){
            $internalRequest->addParameter('completeTime', ObjectSerializer::sanitizeForSerialization($request->getCompleteTime(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
CreditscoreCompleteRequestMarshaller::__init();
