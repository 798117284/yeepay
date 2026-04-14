<?php

namespace Yeepay\Yop\Sdk\Service\MWallet\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class AccountQueryBalanceV10RequestMarshaller implements RequestMarshaller
{
    /**
     * @var AccountQueryBalanceV10RequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountQueryBalanceV10RequestMarshaller();
    }

    /**
     * @return AccountQueryBalanceV10RequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'MWallet';

    /**
     * @var string
     */
    private $httpMethod = 'GET';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/m-wallet/account/query-balance';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param AccountQueryBalanceV10Request $request
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
        if($request->getMerchantMemberNo() != null){
            $internalRequest->addParameter('merchantMemberNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantMemberNo(), 'string'));
        }
        if($request->getParentMerchantNo() != null){
            $internalRequest->addParameter('parentMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getParentMerchantNo(), 'string'));
        }
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getAccountType() != null){
            $internalRequest->addParameter('accountType', ObjectSerializer::sanitizeForSerialization($request->getAccountType(), 'string'));
        }
        if($request->getElecAccount() != null){
            $internalRequest->addParameter('elecAccount', ObjectSerializer::sanitizeForSerialization($request->getElecAccount(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
AccountQueryBalanceV10RequestMarshaller::__init();
