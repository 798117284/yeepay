<?php

namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class OverseasPayRequestV10RequestMarshaller implements RequestMarshaller
{
    /**
     * @var OverseasPayRequestV10RequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OverseasPayRequestV10RequestMarshaller();
    }

    /**
     * @return OverseasPayRequestV10RequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Cnppay';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/cnppay/overseas/pay/request';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param OverseasPayRequestV10Request $request
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
        if($request->getOrderId() != null){
            $internalRequest->addParameter('orderId', ObjectSerializer::sanitizeForSerialization($request->getOrderId(), 'string'));
        }
        if($request->getRequestId() != null){
            $internalRequest->addParameter('requestId', ObjectSerializer::sanitizeForSerialization($request->getRequestId(), 'string'));
        }
        if($request->getBankCardNo() != null){
            $internalRequest->addParameter('bankCardNo', ObjectSerializer::sanitizeForSerialization($request->getBankCardNo(), 'string'));
        }
        if($request->getBankId() != null){
            $internalRequest->addParameter('bankId', ObjectSerializer::sanitizeForSerialization($request->getBankId(), 'string'));
        }
        if($request->getCardFirstName() != null){
            $internalRequest->addParameter('cardFirstName', ObjectSerializer::sanitizeForSerialization($request->getCardFirstName(), 'string'));
        }
        if($request->getCardLastName() != null){
            $internalRequest->addParameter('cardLastName', ObjectSerializer::sanitizeForSerialization($request->getCardLastName(), 'string'));
        }
        if($request->getMobilePhoneNo() != null){
            $internalRequest->addParameter('mobilePhoneNo', ObjectSerializer::sanitizeForSerialization($request->getMobilePhoneNo(), 'string'));
        }
        if($request->getValidDate() != null){
            $internalRequest->addParameter('validDate', ObjectSerializer::sanitizeForSerialization($request->getValidDate(), 'string'));
        }
        if($request->getBillCountryCode() != null){
            $internalRequest->addParameter('billCountryCode', ObjectSerializer::sanitizeForSerialization($request->getBillCountryCode(), 'string'));
        }
        if($request->getBillProvinceCode() != null){
            $internalRequest->addParameter('billProvinceCode', ObjectSerializer::sanitizeForSerialization($request->getBillProvinceCode(), 'string'));
        }
        if($request->getBillCity() != null){
            $internalRequest->addParameter('billCity', ObjectSerializer::sanitizeForSerialization($request->getBillCity(), 'string'));
        }
        if($request->getBillAddress() != null){
            $internalRequest->addParameter('billAddress', ObjectSerializer::sanitizeForSerialization($request->getBillAddress(), 'string'));
        }
        if($request->getBillPostalCode() != null){
            $internalRequest->addParameter('billPostalCode', ObjectSerializer::sanitizeForSerialization($request->getBillPostalCode(), 'string'));
        }
        if($request->getBillEmail() != null){
            $internalRequest->addParameter('billEmail', ObjectSerializer::sanitizeForSerialization($request->getBillEmail(), 'string'));
        }
        if($request->getFrontendCallbackUrl() != null){
            $internalRequest->addParameter('frontendCallbackUrl', ObjectSerializer::sanitizeForSerialization($request->getFrontendCallbackUrl(), 'string'));
        }
        if($request->getDeviceInfo() != null){
            $internalRequest->addParameter('deviceInfo', ObjectSerializer::sanitizeForSerialization($request->getDeviceInfo(), 'string'));
        }
        if($request->getCvv() != null){
            $internalRequest->addParameter('cvv', ObjectSerializer::sanitizeForSerialization($request->getCvv(), 'string'));
        }
        if($request->getPayPlatform() != null){
            $internalRequest->addParameter('payPlatform', ObjectSerializer::sanitizeForSerialization($request->getPayPlatform(), 'string'));
        }
        if($request->getWorkPhone() != null){
            $internalRequest->addParameter('workPhone', ObjectSerializer::sanitizeForSerialization($request->getWorkPhone(), 'string'));
        }
        if($request->getOrderType() != null){
            $internalRequest->addParameter('orderType', ObjectSerializer::sanitizeForSerialization($request->getOrderType(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
OverseasPayRequestV10RequestMarshaller::__init();
