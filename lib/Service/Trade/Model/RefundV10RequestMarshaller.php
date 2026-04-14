<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class RefundV10RequestMarshaller implements RequestMarshaller
{
    /**
     * @var RefundV10RequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RefundV10RequestMarshaller();
    }

    /**
     * @return RefundV10RequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Trade';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/trade/refund';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param RefundV10Request $request
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
        if($request->getRefundRequestId() != null){
            $internalRequest->addParameter('refundRequestId', ObjectSerializer::sanitizeForSerialization($request->getRefundRequestId(), 'string'));
        }
        if($request->getUniqueOrderNo() != null){
            $internalRequest->addParameter('uniqueOrderNo', ObjectSerializer::sanitizeForSerialization($request->getUniqueOrderNo(), 'string'));
        }
        if($request->getRefundAmount() != null){
            $internalRequest->addParameter('refundAmount', ObjectSerializer::sanitizeForSerialization($request->getRefundAmount(), 'string'));
        }
        if($request->getDescription() != null){
            $internalRequest->addParameter('description', ObjectSerializer::sanitizeForSerialization($request->getDescription(), 'string'));
        }
        if($request->getMemo() != null){
            $internalRequest->addParameter('memo', ObjectSerializer::sanitizeForSerialization($request->getMemo(), 'string'));
        }
        if($request->getRefundAccountType() != null){
            $internalRequest->addParameter('refundAccountType', ObjectSerializer::sanitizeForSerialization($request->getRefundAccountType(), 'string'));
        }
        if($request->getNotifyUrl() != null){
            $internalRequest->addParameter('notifyUrl', ObjectSerializer::sanitizeForSerialization($request->getNotifyUrl(), 'string'));
        }
        if($request->getDivideBackDetail() != null){
            $internalRequest->addParameter('divideBackDetail', ObjectSerializer::sanitizeForSerialization($request->getDivideBackDetail(), 'string'));
        }
        if($request->getTerminalInfo() != null){
            $internalRequest->addParameter('terminalInfo', ObjectSerializer::sanitizeForSerialization($request->getTerminalInfo(), 'string'));
        }
        if($request->getYpPromotionRefundInfo() != null){
            $internalRequest->addParameter('ypPromotionRefundInfo', ObjectSerializer::sanitizeForSerialization($request->getYpPromotionRefundInfo(), 'string'));
        }
        if($request->getBankOrderId() != null){
            $internalRequest->addParameter('bankOrderId', ObjectSerializer::sanitizeForSerialization($request->getBankOrderId(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
RefundV10RequestMarshaller::__init();
