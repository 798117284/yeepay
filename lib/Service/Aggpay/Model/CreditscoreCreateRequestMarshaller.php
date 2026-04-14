<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class CreditscoreCreateRequestMarshaller implements RequestMarshaller
{
    /**
     * @var CreditscoreCreateRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreditscoreCreateRequestMarshaller();
    }

    /**
     * @return CreditscoreCreateRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/aggpay/creditscore-create';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param CreditscoreCreateRequest $request
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
        if($request->getServiceId() != null){
            $internalRequest->addParameter('serviceId', ObjectSerializer::sanitizeForSerialization($request->getServiceId(), 'string'));
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
        if($request->getServiceSource() != null){
            $internalRequest->addParameter('serviceSource', ObjectSerializer::sanitizeForSerialization($request->getServiceSource(), 'string'));
        }
        if($request->getGoodsName() != null){
            $internalRequest->addParameter('goodsName', ObjectSerializer::sanitizeForSerialization($request->getGoodsName(), 'string'));
        }
        if($request->getPostPaymentInfos() != null){
            $internalRequest->addParameter('postPaymentInfos', ObjectSerializer::sanitizeForSerialization($request->getPostPaymentInfos(), 'string'));
        }
        if($request->getPostDiscountInfos() != null){
            $internalRequest->addParameter('postDiscountInfos', ObjectSerializer::sanitizeForSerialization($request->getPostDiscountInfos(), 'string'));
        }
        if($request->getLocationInfo() != null){
            $internalRequest->addParameter('locationInfo', ObjectSerializer::sanitizeForSerialization($request->getLocationInfo(), 'string'));
        }
        if($request->getRiskFundInfo() != null){
            $internalRequest->addParameter('riskFundInfo', ObjectSerializer::sanitizeForSerialization($request->getRiskFundInfo(), 'string'));
        }
        if($request->getTimeRange() != null){
            $internalRequest->addParameter('timeRange', ObjectSerializer::sanitizeForSerialization($request->getTimeRange(), 'string'));
        }
        if($request->getNotifyUrl() != null){
            $internalRequest->addParameter('notifyUrl', ObjectSerializer::sanitizeForSerialization($request->getNotifyUrl(), 'string', 'notify-url'));
        }
        if($request->getAlipayCreditInfo() != null){
            $internalRequest->addParameter('alipayCreditInfo', ObjectSerializer::sanitizeForSerialization($request->getAlipayCreditInfo(), 'string'));
        }
        if($request->getUserIp() != null){
            $internalRequest->addParameter('userIp', ObjectSerializer::sanitizeForSerialization($request->getUserIp(), 'string'));
        }
        if($request->getYpPromotionInfo() != null){
            $internalRequest->addParameter('ypPromotionInfo', ObjectSerializer::sanitizeForSerialization($request->getYpPromotionInfo(), 'string'));
        }
        if($request->getNeedUserConfirm() != null){
            $internalRequest->addParameter('needUserConfirm', ObjectSerializer::sanitizeForSerialization($request->getNeedUserConfirm(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
CreditscoreCreateRequestMarshaller::__init();
