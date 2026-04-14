<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class BankTransferPayV11RequestMarshaller implements RequestMarshaller
{
    /**
     * @var BankTransferPayV11RequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankTransferPayV11RequestMarshaller();
    }

    /**
     * @return BankTransferPayV11RequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Frontcashier';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.1/frontcashier/bank-transfer/pay';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param BankTransferPayV11Request $request
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
            $internalRequest->addParameter('orderAmount', ObjectSerializer::sanitizeForSerialization($request->getOrderAmount(), 'float'));
        }
        if($request->getExpiredTime() != null){
            $internalRequest->addParameter('expiredTime', ObjectSerializer::sanitizeForSerialization($request->getExpiredTime(), '\DateTime', 'date-time'));
        }
        if($request->getNotifyUrl() != null){
            $internalRequest->addParameter('notifyUrl', ObjectSerializer::sanitizeForSerialization($request->getNotifyUrl(), 'string', 'notify-url'));
        }
        if($request->getMemo() != null){
            $internalRequest->addParameter('memo', ObjectSerializer::sanitizeForSerialization($request->getMemo(), 'string'));
        }
        if($request->getCheckType() != null){
            $internalRequest->addParameter('checkType', ObjectSerializer::sanitizeForSerialization($request->getCheckType(), 'string'));
        }
        if($request->getGoodsName() != null){
            $internalRequest->addParameter('goodsName', ObjectSerializer::sanitizeForSerialization($request->getGoodsName(), 'string'));
        }
        if($request->getFundProcessType() != null){
            $internalRequest->addParameter('fundProcessType', ObjectSerializer::sanitizeForSerialization($request->getFundProcessType(), 'string'));
        }
        if($request->getCsUrl() != null){
            $internalRequest->addParameter('csUrl', ObjectSerializer::sanitizeForSerialization($request->getCsUrl(), 'string'));
        }
        if($request->getPayerAccountName() != null){
            $internalRequest->addParameter('payerAccountName', ObjectSerializer::sanitizeForSerialization($request->getPayerAccountName(), 'string'));
        }
        if($request->getBankAccountNo() != null){
            $internalRequest->addParameter('bankAccountNo', ObjectSerializer::sanitizeForSerialization($request->getBankAccountNo(), 'string'));
        }
        if($request->getCustomerId() != null){
            $internalRequest->addParameter('customerId', ObjectSerializer::sanitizeForSerialization($request->getCustomerId(), 'string'));
        }
        if($request->getPayerAccountNo() != null){
            $internalRequest->addParameter('payerAccountNo', ObjectSerializer::sanitizeForSerialization($request->getPayerAccountNo(), 'string'));
        }
        if($request->getAccountNotifyUrl() != null){
            $internalRequest->addParameter('accountNotifyUrl', ObjectSerializer::sanitizeForSerialization($request->getAccountNotifyUrl(), 'string', 'notify-url'));
        }
        if($request->getBusinessInfo() != null){
            $internalRequest->addParameter('businessInfo', ObjectSerializer::sanitizeForSerialization($request->getBusinessInfo(), 'string'));
        }
        if($request->getYpPromotionInfo() != null){
            $internalRequest->addParameter('ypPromotionInfo', ObjectSerializer::sanitizeForSerialization($request->getYpPromotionInfo(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
BankTransferPayV11RequestMarshaller::__init();
