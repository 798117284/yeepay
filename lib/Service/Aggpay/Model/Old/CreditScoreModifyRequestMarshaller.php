<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model\Old;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class CreditScoreModifyRequestMarshaller implements RequestMarshaller
{
    /**
     * @var CreditScoreModifyRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreditScoreModifyRequestMarshaller();
    }

    /**
     * @return CreditScoreModifyRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/aggpay/creditscore-modify';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param CreditScoreModifyRequest $request
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
        if($request->getTotalAmount() != null){
            $internalRequest->addParameter('totalAmount', ObjectSerializer::sanitizeForSerialization($request->getTotalAmount(), 'string'));
        }
        if($request->getReason() != null){
            $internalRequest->addParameter('reason', ObjectSerializer::sanitizeForSerialization($request->getReason(), 'string'));
        }
        if($request->getPostPaymentInfos() != null){
            $internalRequest->addParameter('postPaymentInfos', ObjectSerializer::sanitizeForSerialization($request->getPostPaymentInfos(), 'string'));
        }
        if($request->getPostDiscountInfos() != null){
            $internalRequest->addParameter('postDiscountInfos', ObjectSerializer::sanitizeForSerialization($request->getPostDiscountInfos(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
CreditScoreModifyRequestMarshaller::__init();
