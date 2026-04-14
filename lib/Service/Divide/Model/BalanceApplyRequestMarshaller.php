<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class BalanceApplyRequestMarshaller implements RequestMarshaller
{
    /**
     * @var BalanceApplyRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BalanceApplyRequestMarshaller();
    }

    /**
     * @return BalanceApplyRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Divide';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/divide/balance/apply';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param BalanceApplyRequest $request
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
        if($request->getDivideRequestId() != null){
            $internalRequest->addParameter('divideRequestId', ObjectSerializer::sanitizeForSerialization($request->getDivideRequestId(), 'string'));
        }
        if($request->getAccountType() != null){
            $internalRequest->addParameter('accountType', ObjectSerializer::sanitizeForSerialization($request->getAccountType(), 'string'));
        }
        if($request->getBankAccountBookNo() != null){
            $internalRequest->addParameter('bankAccountBookNo', ObjectSerializer::sanitizeForSerialization($request->getBankAccountBookNo(), 'string'));
        }
        if($request->getDivideDetail() != null){
            $internalRequest->addParameter('divideDetail', ObjectSerializer::sanitizeForSerialization($request->getDivideDetail(), 'string'));
        }
        if($request->getBatchNotifyUrl() != null){
            $internalRequest->addParameter('batchNotifyUrl', ObjectSerializer::sanitizeForSerialization($request->getBatchNotifyUrl(), 'string', 'notify-url'));
        }
        if($request->getFundType() != null){
            $internalRequest->addParameter('fundType', ObjectSerializer::sanitizeForSerialization($request->getFundType(), 'string'));
        }
        if($request->getDivideVerifyType() != null){
            $internalRequest->addParameter('divideVerifyType', ObjectSerializer::sanitizeForSerialization($request->getDivideVerifyType(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
BalanceApplyRequestMarshaller::__init();
