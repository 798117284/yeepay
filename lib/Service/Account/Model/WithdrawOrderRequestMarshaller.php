<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class WithdrawOrderRequestMarshaller implements RequestMarshaller
{
    /**
     * @var WithdrawOrderRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WithdrawOrderRequestMarshaller();
    }

    /**
     * @return WithdrawOrderRequestMarshaller
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
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/account/withdraw/order';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param WithdrawOrderRequest $request
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
        if($request->getRequestNo() != null){
            $internalRequest->addParameter('requestNo', ObjectSerializer::sanitizeForSerialization($request->getRequestNo(), 'string'));
        }
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getCardSelectModel() != null){
            $internalRequest->addParameter('cardSelectModel', ObjectSerializer::sanitizeForSerialization($request->getCardSelectModel(), 'string', 'enum'));
        }
        if($request->getCardRouteModel() != null){
            $internalRequest->addParameter('cardRouteModel', ObjectSerializer::sanitizeForSerialization($request->getCardRouteModel(), 'string', 'enum'));
        }
        if($request->getBankCardId() != null){
            $internalRequest->addParameter('bankCardId', ObjectSerializer::sanitizeForSerialization($request->getBankCardId(), 'string'));
        }
        if($request->getBankAccountNo() != null){
            $internalRequest->addParameter('bankAccountNo', ObjectSerializer::sanitizeForSerialization($request->getBankAccountNo(), 'string'));
        }
        if($request->getReceiveType() != null){
            $internalRequest->addParameter('receiveType', ObjectSerializer::sanitizeForSerialization($request->getReceiveType(), 'string', 'enum'));
        }
        if($request->getOrderAmount() != null){
            $internalRequest->addParameter('orderAmount', ObjectSerializer::sanitizeForSerialization($request->getOrderAmount(), 'float'));
        }
        if($request->getNotifyUrl() != null){
            $internalRequest->addParameter('notifyUrl', ObjectSerializer::sanitizeForSerialization($request->getNotifyUrl(), 'string', 'notify-url'));
        }
        if($request->getRemark() != null){
            $internalRequest->addParameter('remark', ObjectSerializer::sanitizeForSerialization($request->getRemark(), 'string'));
        }
        if($request->getTerminalType() != null){
            $internalRequest->addParameter('terminalType', ObjectSerializer::sanitizeForSerialization($request->getTerminalType(), 'string'));
        }
        if($request->getFeeDeductType() != null){
            $internalRequest->addParameter('feeDeductType', ObjectSerializer::sanitizeForSerialization($request->getFeeDeductType(), 'string', 'enum'));
        }
        if($request->getAccountType() != null){
            $internalRequest->addParameter('accountType', ObjectSerializer::sanitizeForSerialization($request->getAccountType(), 'string', 'enum'));
        }
        if($request->getMacAddress() != null){
            $internalRequest->addParameter('macAddress', ObjectSerializer::sanitizeForSerialization($request->getMacAddress(), 'string'));
        }
        if($request->getWithdrawModel() != null){
            $internalRequest->addParameter('withdrawModel', ObjectSerializer::sanitizeForSerialization($request->getWithdrawModel(), 'string'));
        }
        if($request->getDebitBankAccountBookNo() != null){
            $internalRequest->addParameter('debitBankAccountBookNo', ObjectSerializer::sanitizeForSerialization($request->getDebitBankAccountBookNo(), 'string'));
        }
        if($request->getVerifyType() != null){
            $internalRequest->addParameter('verifyType', ObjectSerializer::sanitizeForSerialization($request->getVerifyType(), 'string'));
        }
        if($request->getVerifyValue() != null){
            $internalRequest->addParameter('verifyValue', ObjectSerializer::sanitizeForSerialization($request->getVerifyValue(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
WithdrawOrderRequestMarshaller::__init();
