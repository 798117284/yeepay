<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model\Old;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class QueryQrCodeListRequestMarshaller implements RequestMarshaller
{
    /**
     * @var QueryQrCodeListRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryQrCodeListRequestMarshaller();
    }

    /**
     * @return QueryQrCodeListRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Offline';

    /**
     * @var string
     */
    private $httpMethod = 'GET';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/offline/query-qrcode-list';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param QueryQrCodeListRequest $request
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
        if($request->getPageNo() != null){
            $internalRequest->addParameter('pageNo', ObjectSerializer::sanitizeForSerialization($request->getPageNo(), 'int', 'int32'));
        }
        if($request->getPageSize() != null){
            $internalRequest->addParameter('pageSize', ObjectSerializer::sanitizeForSerialization($request->getPageSize(), 'int', 'int32'));
        }
        if($request->getParentMerchantNo() != null){
            $internalRequest->addParameter('parentMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getParentMerchantNo(), 'string'));
        }
        if($request->getQrCodeNo() != null){
            $internalRequest->addParameter('qrCodeNo', ObjectSerializer::sanitizeForSerialization($request->getQrCodeNo(), 'string'));
        }
        if($request->getShopNo() != null){
            $internalRequest->addParameter('shopNo', ObjectSerializer::sanitizeForSerialization($request->getShopNo(), 'string'));
        }
        if($request->getBindStatus() != null){
            $internalRequest->addParameter('bindStatus', ObjectSerializer::sanitizeForSerialization($request->getBindStatus(), 'string'));
        }
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getStatus() != null){
            $internalRequest->addParameter('status', ObjectSerializer::sanitizeForSerialization($request->getStatus(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
QueryQrCodeListRequestMarshaller::__init();
