<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class AuthStateQueryV20RequestMarshaller implements RequestMarshaller
{
    /**
     * @var AuthStateQueryV20RequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AuthStateQueryV20RequestMarshaller();
    }

    /**
     * @return AuthStateQueryV20RequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Mer';

    /**
     * @var string
     */
    private $httpMethod = 'GET';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v2.0/mer/auth/state/query';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param AuthStateQueryV20Request $request
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
        if($request->getReportMerchantNo() != null){
            $internalRequest->addParameter('reportMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getReportMerchantNo(), 'string'));
        }
        if($request->getFeeType() != null){
            $internalRequest->addParameter('feeType', ObjectSerializer::sanitizeForSerialization($request->getFeeType(), 'string', 'enum'));
        }
        if($request->getQueryStrategy() != null){
            $internalRequest->addParameter('queryStrategy', ObjectSerializer::sanitizeForSerialization($request->getQueryStrategy(), 'string'));
        }
        if($request->getPageNum() != null){
            $internalRequest->addParameter('pageNum', ObjectSerializer::sanitizeForSerialization($request->getPageNum(), 'string'));
        }
        if($request->getPageSize() != null){
            $internalRequest->addParameter('pageSize', ObjectSerializer::sanitizeForSerialization($request->getPageSize(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
AuthStateQueryV20RequestMarshaller::__init();
