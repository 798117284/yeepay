<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class ConfigTemplateOperateRequestMarshaller implements RequestMarshaller
{
    /**
     * @var ConfigTemplateOperateRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ConfigTemplateOperateRequestMarshaller();
    }

    /**
     * @return ConfigTemplateOperateRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Trade';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/trade/config/template/operate';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param ConfigTemplateOperateRequest $request
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
        if($request->getMerchantRange() != null){
            $internalRequest->addParameter('merchantRange', ObjectSerializer::sanitizeForSerialization($request->getMerchantRange(), 'string'));
        }
        if($request->getOperateType() != null){
            $internalRequest->addParameter('operateType', ObjectSerializer::sanitizeForSerialization($request->getOperateType(), 'string'));
        }
        if($request->getDivideFlag() != null){
            $internalRequest->addParameter('divideFlag', ObjectSerializer::sanitizeForSerialization($request->getDivideFlag(), 'string'));
        }
        if($request->getPayNotifyUrl() != null){
            $internalRequest->addParameter('payNotifyUrl', ObjectSerializer::sanitizeForSerialization($request->getPayNotifyUrl(), 'string'));
        }
        if($request->getCsNotifyUrl() != null){
            $internalRequest->addParameter('csNotifyUrl', ObjectSerializer::sanitizeForSerialization($request->getCsNotifyUrl(), 'string'));
        }
        if($request->getRefundNotifyUrl() != null){
            $internalRequest->addParameter('refundNotifyUrl', ObjectSerializer::sanitizeForSerialization($request->getRefundNotifyUrl(), 'string'));
        }
        if($request->getLedgerNoNotifyUrl() != null){
            $internalRequest->addParameter('ledgerNoNotifyUrl', ObjectSerializer::sanitizeForSerialization($request->getLedgerNoNotifyUrl(), 'string'));
        }
        if($request->getFailNotify() != null){
            $internalRequest->addParameter('failNotify', ObjectSerializer::sanitizeForSerialization($request->getFailNotify(), 'string'));
        }
        if($request->getTimeOutNotify() != null){
            $internalRequest->addParameter('timeOutNotify', ObjectSerializer::sanitizeForSerialization($request->getTimeOutNotify(), 'string'));
        }
        if($request->getPreAuthProcessType() != null){
            $internalRequest->addParameter('preAuthProcessType', ObjectSerializer::sanitizeForSerialization($request->getPreAuthProcessType(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
ConfigTemplateOperateRequestMarshaller::__init();
