<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class QueryAuxiliaryTerminalRequestMarshaller implements RequestMarshaller
{
    /**
     * @var QueryAuxiliaryTerminalRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryAuxiliaryTerminalRequestMarshaller();
    }

    /**
     * @return QueryAuxiliaryTerminalRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/offline/query-auxiliary-terminal';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param QueryAuxiliaryTerminalRequest $request
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
        if($request->getParentMerchantNo() != null){
            $internalRequest->addParameter('parentMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getParentMerchantNo(), 'string'));
        }
        if($request->getShop() != null){
            $internalRequest->addParameter('shop', ObjectSerializer::sanitizeForSerialization($request->getShop(), 'string'));
        }
        if($request->getTerminalNo() != null){
            $internalRequest->addParameter('terminalNo', ObjectSerializer::sanitizeForSerialization($request->getTerminalNo(), 'string'));
        }
        if($request->getCustomerTerminalNo() != null){
            $internalRequest->addParameter('customerTerminalNo', ObjectSerializer::sanitizeForSerialization($request->getCustomerTerminalNo(), 'string'));
        }
        if($request->getSerialNo() != null){
            $internalRequest->addParameter('serialNo', ObjectSerializer::sanitizeForSerialization($request->getSerialNo(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
QueryAuxiliaryTerminalRequestMarshaller::__init();
