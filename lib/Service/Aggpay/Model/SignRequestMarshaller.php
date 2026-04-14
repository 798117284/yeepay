<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class SignRequestMarshaller implements RequestMarshaller
{
    /**
     * @var SignRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SignRequestMarshaller();
    }

    /**
     * @return SignRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/aggpay/sign';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param SignRequest $request
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
        if($request->getPayWay() != null){
            $internalRequest->addParameter('payWay', ObjectSerializer::sanitizeForSerialization($request->getPayWay(), 'string'));
        }
        if($request->getChannel() != null){
            $internalRequest->addParameter('channel', ObjectSerializer::sanitizeForSerialization($request->getChannel(), 'string'));
        }
        if($request->getSignSource() != null){
            $internalRequest->addParameter('signSource', ObjectSerializer::sanitizeForSerialization($request->getSignSource(), 'string'));
        }
        if($request->getAppId() != null){
            $internalRequest->addParameter('appId', ObjectSerializer::sanitizeForSerialization($request->getAppId(), 'string'));
        }
        if($request->getPlainId() != null){
            $internalRequest->addParameter('plainId', ObjectSerializer::sanitizeForSerialization($request->getPlainId(), 'string'));
        }
        if($request->getAgreementId() != null){
            $internalRequest->addParameter('agreementId', ObjectSerializer::sanitizeForSerialization($request->getAgreementId(), 'string'));
        }
        if($request->getNotifyUrl() != null){
            $internalRequest->addParameter('notifyUrl', ObjectSerializer::sanitizeForSerialization($request->getNotifyUrl(), 'string'));
        }
        if($request->getContractDisplayAccount() != null){
            $internalRequest->addParameter('contractDisplayAccount', ObjectSerializer::sanitizeForSerialization($request->getContractDisplayAccount(), 'string'));
        }
        if($request->getReturnInfo() != null){
            $internalRequest->addParameter('returnInfo', ObjectSerializer::sanitizeForSerialization($request->getReturnInfo(), 'string'));
        }
        if($request->getExpireTime() != null){
            $internalRequest->addParameter('expireTime', ObjectSerializer::sanitizeForSerialization($request->getExpireTime(), '\DateTime', 'date-time'));
        }
        if($request->getInvokeScene() != null){
            $internalRequest->addParameter('invokeScene', ObjectSerializer::sanitizeForSerialization($request->getInvokeScene(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
SignRequestMarshaller::__init();
