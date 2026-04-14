<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class ReceiverApplyRequestMarshaller implements RequestMarshaller
{
    /**
     * @var ReceiverApplyRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ReceiverApplyRequestMarshaller();
    }

    /**
     * @return ReceiverApplyRequestMarshaller
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
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/mer/receiver/apply';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param ReceiverApplyRequest $request
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
        if($request->getRequestNo() != null){
            $internalRequest->addParameter('requestNo', ObjectSerializer::sanitizeForSerialization($request->getRequestNo(), 'string'));
        }
        if($request->getNotifyUrl() != null){
            $internalRequest->addParameter('notifyUrl', ObjectSerializer::sanitizeForSerialization($request->getNotifyUrl(), 'string', 'notify-url'));
        }
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getType() != null){
            $internalRequest->addParameter('type', ObjectSerializer::sanitizeForSerialization($request->getType(), 'string', 'enum'));
        }
        if($request->getReceiverName() != null){
            $internalRequest->addParameter('receiverName', ObjectSerializer::sanitizeForSerialization($request->getReceiverName(), 'string'));
        }
        if($request->getLabel() != null){
            $internalRequest->addParameter('label', ObjectSerializer::sanitizeForSerialization($request->getLabel(), 'string'));
        }
        if($request->getLicenceNo() != null){
            $internalRequest->addParameter('licenceNo', ObjectSerializer::sanitizeForSerialization($request->getLicenceNo(), 'string'));
        }
        if($request->getMobile() != null){
            $internalRequest->addParameter('mobile', ObjectSerializer::sanitizeForSerialization($request->getMobile(), 'string'));
        }
        if($request->getLegalName() != null){
            $internalRequest->addParameter('legalName', ObjectSerializer::sanitizeForSerialization($request->getLegalName(), 'string'));
        }
        if($request->getLegalLicenceNo() != null){
            $internalRequest->addParameter('legalLicenceNo', ObjectSerializer::sanitizeForSerialization($request->getLegalLicenceNo(), 'string'));
        }
        if($request->getBankCode() != null){
            $internalRequest->addParameter('bankCode', ObjectSerializer::sanitizeForSerialization($request->getBankCode(), 'string'));
        }
        if($request->getBankCardNo() != null){
            $internalRequest->addParameter('bankCardNo', ObjectSerializer::sanitizeForSerialization($request->getBankCardNo(), 'string'));
        }
        if($request->getSettlementProduct() != null){
            $internalRequest->addParameter('settlementProduct', ObjectSerializer::sanitizeForSerialization($request->getSettlementProduct(), 'string', 'enum'));
        }
        if($request->getSettlementDate() != null){
            $internalRequest->addParameter('settlementDate', ObjectSerializer::sanitizeForSerialization($request->getSettlementDate(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
ReceiverApplyRequestMarshaller::__init();
