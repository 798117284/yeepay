<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class TradeConfigLimitAlertOperateV10RequestMarshaller implements RequestMarshaller
{
    /**
     * @var TradeConfigLimitAlertOperateV10RequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TradeConfigLimitAlertOperateV10RequestMarshaller();
    }

    /**
     * @return TradeConfigLimitAlertOperateV10RequestMarshaller
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
    private $resourcePath = '/rest/v1.0/trade/config/limit/alert/operate';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param TradeConfigLimitAlertOperateV10Request $request
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
        if($request->getLimitConfigId() != null){
            $internalRequest->addParameter('limitConfigId', ObjectSerializer::sanitizeForSerialization($request->getLimitConfigId(), 'float'));
        }
        if($request->getAlertAmount() != null){
            $internalRequest->addParameter('alertAmount', ObjectSerializer::sanitizeForSerialization($request->getAlertAmount(), 'float'));
        }
        if($request->getAlertNotifyUrl() != null){
            $internalRequest->addParameter('alertNotifyUrl', ObjectSerializer::sanitizeForSerialization($request->getAlertNotifyUrl(), 'string', 'notify-url'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
TradeConfigLimitAlertOperateV10RequestMarshaller::__init();
