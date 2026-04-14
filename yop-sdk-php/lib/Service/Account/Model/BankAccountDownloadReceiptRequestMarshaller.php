<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class BankAccountDownloadReceiptRequestMarshaller implements RequestMarshaller
{
    /**
     * @var BankAccountDownloadReceiptRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountDownloadReceiptRequestMarshaller();
    }

    /**
     * @return BankAccountDownloadReceiptRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Account';

    /**
     * @var string
     */
    private $httpMethod = 'GET';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/account/bank-account/download-receipt';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param BankAccountDownloadReceiptRequest $request
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
        if($request->getBankCode() != null){
            $internalRequest->addParameter('bankCode', ObjectSerializer::sanitizeForSerialization($request->getBankCode(), 'string', 'enum'));
        }
        if($request->getBankAccountNo() != null){
            $internalRequest->addParameter('bankAccountNo', ObjectSerializer::sanitizeForSerialization($request->getBankAccountNo(), 'string'));
        }
        if($request->getBankSerialNo() != null){
            $internalRequest->addParameter('bankSerialNo', ObjectSerializer::sanitizeForSerialization($request->getBankSerialNo(), 'string'));
        }
        if($request->getTrxDateTime() != null){
            $internalRequest->addParameter('trxDateTime', ObjectSerializer::sanitizeForSerialization($request->getTrxDateTime(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
BankAccountDownloadReceiptRequestMarshaller::__init();
