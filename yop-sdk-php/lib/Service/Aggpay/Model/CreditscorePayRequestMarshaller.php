<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class CreditscorePayRequestMarshaller implements RequestMarshaller
{
    /**
     * @var CreditscorePayRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreditscorePayRequestMarshaller();
    }

    /**
     * @return CreditscorePayRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/aggpay/creditscore-pay';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param CreditscorePayRequest $request
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
        if($request->getOrderAmount() != null){
            $internalRequest->addParameter('orderAmount', ObjectSerializer::sanitizeForSerialization($request->getOrderAmount(), 'string'));
        }
        if($request->getExpiredTime() != null){
            $internalRequest->addParameter('expiredTime', ObjectSerializer::sanitizeForSerialization($request->getExpiredTime(), 'string'));
        }
        if($request->getNotifyUrl() != null){
            $internalRequest->addParameter('notifyUrl', ObjectSerializer::sanitizeForSerialization($request->getNotifyUrl(), 'string'));
        }
        if($request->getMemo() != null){
            $internalRequest->addParameter('memo', ObjectSerializer::sanitizeForSerialization($request->getMemo(), 'string'));
        }
        if($request->getCsUrl() != null){
            $internalRequest->addParameter('csUrl', ObjectSerializer::sanitizeForSerialization($request->getCsUrl(), 'string'));
        }
        if($request->getFeeSubsidyInfo() != null){
            $internalRequest->addParameter('feeSubsidyInfo', ObjectSerializer::sanitizeForSerialization($request->getFeeSubsidyInfo(), 'string'));
        }
        if($request->getFundProcessType() != null){
            $internalRequest->addParameter('fundProcessType', ObjectSerializer::sanitizeForSerialization($request->getFundProcessType(), 'string'));
        }
        if($request->getDivideDetail() != null){
            $internalRequest->addParameter('divideDetail', ObjectSerializer::sanitizeForSerialization($request->getDivideDetail(), 'string'));
        }
        if($request->getDivideNotifyUrl() != null){
            $internalRequest->addParameter('divideNotifyUrl', ObjectSerializer::sanitizeForSerialization($request->getDivideNotifyUrl(), 'string'));
        }
        if($request->getPayWay() != null){
            $internalRequest->addParameter('payWay', ObjectSerializer::sanitizeForSerialization($request->getPayWay(), 'string'));
        }
        if($request->getChannel() != null){
            $internalRequest->addParameter('channel', ObjectSerializer::sanitizeForSerialization($request->getChannel(), 'string'));
        }
        if($request->getScene() != null){
            $internalRequest->addParameter('scene', ObjectSerializer::sanitizeForSerialization($request->getScene(), 'string'));
        }
        if($request->getAppId() != null){
            $internalRequest->addParameter('appId', ObjectSerializer::sanitizeForSerialization($request->getAppId(), 'string'));
        }
        if($request->getUserId() != null){
            $internalRequest->addParameter('userId', ObjectSerializer::sanitizeForSerialization($request->getUserId(), 'string'));
        }
        if($request->getUserIp() != null){
            $internalRequest->addParameter('userIp', ObjectSerializer::sanitizeForSerialization($request->getUserIp(), 'string'));
        }
        if($request->getBusinessInfo() != null){
            $internalRequest->addParameter('businessInfo', ObjectSerializer::sanitizeForSerialization($request->getBusinessInfo(), 'string'));
        }
        if($request->getProductInfo() != null){
            $internalRequest->addParameter('productInfo', ObjectSerializer::sanitizeForSerialization($request->getProductInfo(), 'string'));
        }
        if($request->getYpAccountBookNo() != null){
            $internalRequest->addParameter('ypAccountBookNo', ObjectSerializer::sanitizeForSerialization($request->getYpAccountBookNo(), 'string'));
        }
        if($request->getCreditOrderId() != null){
            $internalRequest->addParameter('creditOrderId', ObjectSerializer::sanitizeForSerialization($request->getCreditOrderId(), 'string'));
        }
        if($request->getPayScene() != null){
            $internalRequest->addParameter('payScene', ObjectSerializer::sanitizeForSerialization($request->getPayScene(), 'string'));
        }
        if($request->getCreditPayType() != null){
            $internalRequest->addParameter('creditPayType', ObjectSerializer::sanitizeForSerialization($request->getCreditPayType(), 'string'));
        }
        if($request->getToken() != null){
            $internalRequest->addParameter('token', ObjectSerializer::sanitizeForSerialization($request->getToken(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
CreditscorePayRequestMarshaller::__init();
