<?php

namespace Yeepay\Yop\Sdk\Service\Auth\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class PersonAuthRequestMarshaller implements RequestMarshaller
{
    /**
     * @var PersonAuthRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PersonAuthRequestMarshaller();
    }

    /**
     * @return PersonAuthRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Auth';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/auth/person/auth';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param PersonAuthRequest $request
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
        if($request->getRequestNo() != null){
            $internalRequest->addParameter('requestNo', ObjectSerializer::sanitizeForSerialization($request->getRequestNo(), 'string'));
        }
        if($request->getIdCardType() != null){
            $internalRequest->addParameter('idCardType', ObjectSerializer::sanitizeForSerialization($request->getIdCardType(), 'string', 'enum'));
        }
        if($request->getIdCardNo() != null){
            $internalRequest->addParameter('idCardNo', ObjectSerializer::sanitizeForSerialization($request->getIdCardNo(), 'string'));
        }
        if($request->getName() != null){
            $internalRequest->addParameter('name', ObjectSerializer::sanitizeForSerialization($request->getName(), 'string'));
        }
        if($request->getMobile() != null){
            $internalRequest->addParameter('mobile', ObjectSerializer::sanitizeForSerialization($request->getMobile(), 'string'));
        }
        if($request->getBankCardNo() != null){
            $internalRequest->addParameter('bankCardNo', ObjectSerializer::sanitizeForSerialization($request->getBankCardNo(), 'string'));
        }
        if($request->getAccountLevel() != null){
            $internalRequest->addParameter('accountLevel', ObjectSerializer::sanitizeForSerialization($request->getAccountLevel(), 'string', 'enum'));
        }
        if($request->getAuthType() != null){
            $internalRequest->addParameter('authType', ObjectSerializer::sanitizeForSerialization($request->getAuthType(), 'string', 'enum'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
PersonAuthRequestMarshaller::__init();
