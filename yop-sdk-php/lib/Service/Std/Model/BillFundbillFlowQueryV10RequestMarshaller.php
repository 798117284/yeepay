<?php

namespace Yeepay\Yop\Sdk\Service\Std\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class BillFundbillFlowQueryV10RequestMarshaller implements RequestMarshaller
{
    /**
     * @var BillFundbillFlowQueryV10RequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BillFundbillFlowQueryV10RequestMarshaller();
    }

    /**
     * @return BillFundbillFlowQueryV10RequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Std';

    /**
     * @var string
     */
    private $httpMethod = 'GET';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/std/bill/fundbill/flow/query';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param BillFundbillFlowQueryV10Request $request
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
        if($request->getStartDate() != null){
            $internalRequest->addParameter('startDate', ObjectSerializer::sanitizeForSerialization($request->getStartDate(), 'string'));
        }
        if($request->getEndDate() != null){
            $internalRequest->addParameter('endDate', ObjectSerializer::sanitizeForSerialization($request->getEndDate(), 'string'));
        }
        if($request->getParentMerchantNo() != null){
            $internalRequest->addParameter('parentMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getParentMerchantNo(), 'string'));
        }
        if($request->getPage() != null){
            $internalRequest->addParameter('page', ObjectSerializer::sanitizeForSerialization($request->getPage(), 'int', 'int32'));
        }
        if($request->getSize() != null){
            $internalRequest->addParameter('size', ObjectSerializer::sanitizeForSerialization($request->getSize(), 'int', 'int32'));
        }
        if($request->getTrxCode() != null){
            $internalRequest->addParameter('trxCode', ObjectSerializer::sanitizeForSerialization($request->getTrxCode(), 'string'));
        }
        if($request->getAccountType() != null){
            $internalRequest->addParameter('accountType', ObjectSerializer::sanitizeForSerialization($request->getAccountType(), 'string'));
        }
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
BillFundbillFlowQueryV10RequestMarshaller::__init();
