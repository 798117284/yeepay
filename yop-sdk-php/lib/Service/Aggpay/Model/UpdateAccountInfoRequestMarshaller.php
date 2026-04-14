<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class UpdateAccountInfoRequestMarshaller implements RequestMarshaller
{
    /**
     * @var UpdateAccountInfoRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UpdateAccountInfoRequestMarshaller();
    }

    /**
     * @return UpdateAccountInfoRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/aggpay/update-account-info';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param UpdateAccountInfoRequest $request
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
        if($request->getApplicationNo() != null){
            $internalRequest->addParameter('applicationNo', ObjectSerializer::sanitizeForSerialization($request->getApplicationNo(), 'string'));
        }
        if($request->getReportMerchantNo() != null){
            $internalRequest->addParameter('reportMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getReportMerchantNo(), 'string'));
        }
        if($request->getChannel() != null){
            $internalRequest->addParameter('channel', ObjectSerializer::sanitizeForSerialization($request->getChannel(), 'string'));
        }
        if($request->getScene() != null){
            $internalRequest->addParameter('scene', ObjectSerializer::sanitizeForSerialization($request->getScene(), 'string'));
        }
        if($request->getAccountNo() != null){
            $internalRequest->addParameter('accountNo', ObjectSerializer::sanitizeForSerialization($request->getAccountNo(), 'string'));
        }
        if($request->getAccountName() != null){
            $internalRequest->addParameter('accountName', ObjectSerializer::sanitizeForSerialization($request->getAccountName(), 'string'));
        }
        if($request->getAccountBank() != null){
            $internalRequest->addParameter('accountBank', ObjectSerializer::sanitizeForSerialization($request->getAccountBank(), 'string'));
        }
        if($request->getAccountBankNo() != null){
            $internalRequest->addParameter('accountBankNo', ObjectSerializer::sanitizeForSerialization($request->getAccountBankNo(), 'string'));
        }
        if($request->getAccountBankName() != null){
            $internalRequest->addParameter('accountBankName', ObjectSerializer::sanitizeForSerialization($request->getAccountBankName(), 'string'));
        }
        if($request->getAccountBankDistinctCode() != null){
            $internalRequest->addParameter('accountBankDistinctCode', ObjectSerializer::sanitizeForSerialization($request->getAccountBankDistinctCode(), 'string'));
        }
        if($request->getAccountBankType() != null){
            $internalRequest->addParameter('accountBankType', ObjectSerializer::sanitizeForSerialization($request->getAccountBankType(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
UpdateAccountInfoRequestMarshaller::__init();
