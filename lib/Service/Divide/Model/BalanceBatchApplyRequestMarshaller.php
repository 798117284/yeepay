<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class BalanceBatchApplyRequestMarshaller implements RequestMarshaller
{
    /**
     * @var BalanceBatchApplyRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BalanceBatchApplyRequestMarshaller();
    }

    /**
     * @return BalanceBatchApplyRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/divide/balance/batch-apply';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param BalanceBatchApplyRequest $request
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
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getDivideRequestId() != null){
            $internalRequest->addParameter('divideRequestId', ObjectSerializer::sanitizeForSerialization($request->getDivideRequestId(), 'string'));
        }
        if($request->getDivideDetail() != null){
            $internalRequest->addParameter('divideDetail', ObjectSerializer::sanitizeForSerialization($request->getDivideDetail(), 'string'));
        }
        if($request->getBatchNotifyUrl() != null){
            $internalRequest->addParameter('batchNotifyUrl', ObjectSerializer::sanitizeForSerialization($request->getBatchNotifyUrl(), 'string', 'notify-url'));
        }
        if($request->getAccountType() != null){
            $internalRequest->addParameter('accountType', ObjectSerializer::sanitizeForSerialization($request->getAccountType(), 'string'));
        }
        if($request->getDivideAmountMode() != null){
            $internalRequest->addParameter('divideAmountMode', ObjectSerializer::sanitizeForSerialization($request->getDivideAmountMode(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
BalanceBatchApplyRequestMarshaller::__init();
