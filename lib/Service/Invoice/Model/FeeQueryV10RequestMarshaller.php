<?php

namespace Yeepay\Yop\Sdk\Service\Invoice\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class FeeQueryV10RequestMarshaller implements RequestMarshaller
{
    /**
     * @var FeeQueryV10RequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FeeQueryV10RequestMarshaller();
    }

    /**
     * @return FeeQueryV10RequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Invoice';

    /**
     * @var string
     */
    private $httpMethod = 'GET';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/invoice/fee/query';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param FeeQueryV10Request $request
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
        if($request->getChargingDateStart() != null){
            $internalRequest->addParameter('chargingDateStart', ObjectSerializer::sanitizeForSerialization($request->getChargingDateStart(), '\DateTime', 'date-time'));
        }
        if($request->getChargingDateEnd() != null){
            $internalRequest->addParameter('chargingDateEnd', ObjectSerializer::sanitizeForSerialization($request->getChargingDateEnd(), '\DateTime', 'date-time'));
        }
        if($request->getInvoiceMajor() != null){
            $internalRequest->addParameter('invoiceMajor', ObjectSerializer::sanitizeForSerialization($request->getInvoiceMajor(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
FeeQueryV10RequestMarshaller::__init();
