<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class UpopPassivescanBindQrcodeRequestMarshaller implements RequestMarshaller
{
    /**
     * @var UpopPassivescanBindQrcodeRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UpopPassivescanBindQrcodeRequestMarshaller();
    }

    /**
     * @return UpopPassivescanBindQrcodeRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/frontcashier/upop/passivescan/bind/qrcode';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param UpopPassivescanBindQrcodeRequest $request
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
        if($request->getMerchantFlowId() != null){
            $internalRequest->addParameter('merchantFlowId', ObjectSerializer::sanitizeForSerialization($request->getMerchantFlowId(), 'string'));
        }
        if($request->getPinFreeAmount() != null){
            $internalRequest->addParameter('pinFreeAmount', ObjectSerializer::sanitizeForSerialization($request->getPinFreeAmount(), 'float'));
        }
        if($request->getMaxAmont() != null){
            $internalRequest->addParameter('maxAmont', ObjectSerializer::sanitizeForSerialization($request->getMaxAmont(), 'float'));
        }
        if($request->getNotifyUrl() != null){
            $internalRequest->addParameter('notifyUrl', ObjectSerializer::sanitizeForSerialization($request->getNotifyUrl(), 'string'));
        }
        if($request->getValidNotifyUrl() != null){
            $internalRequest->addParameter('validNotifyUrl', ObjectSerializer::sanitizeForSerialization($request->getValidNotifyUrl(), 'string'));
        }
        if($request->getExpireTime() != null){
            $internalRequest->addParameter('expireTime', ObjectSerializer::sanitizeForSerialization($request->getExpireTime(), 'int', 'int32'));
        }
        if($request->getBindId() != null){
            $internalRequest->addParameter('bindId', ObjectSerializer::sanitizeForSerialization($request->getBindId(), 'int', 'int64'));
        }
        if($request->getUserNo() != null){
            $internalRequest->addParameter('userNo', ObjectSerializer::sanitizeForSerialization($request->getUserNo(), 'string'));
        }
        if($request->getUserType() != null){
            $internalRequest->addParameter('userType', ObjectSerializer::sanitizeForSerialization($request->getUserType(), 'string'));
        }
        if($request->getCvv() != null){
            $internalRequest->addParameter('cvv', ObjectSerializer::sanitizeForSerialization($request->getCvv(), 'string'));
        }
        if($request->getValid() != null){
            $internalRequest->addParameter('valid', ObjectSerializer::sanitizeForSerialization($request->getValid(), 'string'));
        }
        if($request->getCouponInfo() != null){
            $internalRequest->addParameter('couponInfo', ObjectSerializer::sanitizeForSerialization($request->getCouponInfo(), 'string'));
        }
        if($request->getDeviceID() != null){
            $internalRequest->addParameter('deviceID', ObjectSerializer::sanitizeForSerialization($request->getDeviceID(), 'string'));
        }
        if($request->getDeviceType() != null){
            $internalRequest->addParameter('deviceType', ObjectSerializer::sanitizeForSerialization($request->getDeviceType(), 'string'));
        }
        if($request->getAccountIDHash() != null){
            $internalRequest->addParameter('accountIDHash', ObjectSerializer::sanitizeForSerialization($request->getAccountIDHash(), 'string'));
        }
        if($request->getSourceIP() != null){
            $internalRequest->addParameter('sourceIP', ObjectSerializer::sanitizeForSerialization($request->getSourceIP(), 'string'));
        }
        if($request->getRiskInfoMobile() != null){
            $internalRequest->addParameter('riskInfoMobile', ObjectSerializer::sanitizeForSerialization($request->getRiskInfoMobile(), 'string'));
        }
        if($request->getUsrRgstrDt() != null){
            $internalRequest->addParameter('usrRgstrDt', ObjectSerializer::sanitizeForSerialization($request->getUsrRgstrDt(), 'string'));
        }
        if($request->getAccountEmailLife() != null){
            $internalRequest->addParameter('accountEmailLife', ObjectSerializer::sanitizeForSerialization($request->getAccountEmailLife(), 'string'));
        }
        if($request->getDeviceLocation() != null){
            $internalRequest->addParameter('deviceLocation', ObjectSerializer::sanitizeForSerialization($request->getDeviceLocation(), 'string'));
        }
        if($request->getFullDeviceNumber() != null){
            $internalRequest->addParameter('fullDeviceNumber', ObjectSerializer::sanitizeForSerialization($request->getFullDeviceNumber(), 'string'));
        }
        if($request->getCaptureMethod() != null){
            $internalRequest->addParameter('captureMethod', ObjectSerializer::sanitizeForSerialization($request->getCaptureMethod(), 'string'));
        }
        if($request->getDeviceSimNumber() != null){
            $internalRequest->addParameter('deviceSimNumber', ObjectSerializer::sanitizeForSerialization($request->getDeviceSimNumber(), 'string'));
        }
        if($request->getDeviceName() != null){
            $internalRequest->addParameter('deviceName', ObjectSerializer::sanitizeForSerialization($request->getDeviceName(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
UpopPassivescanBindQrcodeRequestMarshaller::__init();
