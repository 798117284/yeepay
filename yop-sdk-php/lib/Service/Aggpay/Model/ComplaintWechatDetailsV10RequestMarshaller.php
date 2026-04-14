<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class ComplaintWechatDetailsV10RequestMarshaller implements RequestMarshaller
{
    /**
     * @var ComplaintWechatDetailsV10RequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ComplaintWechatDetailsV10RequestMarshaller();
    }

    /**
     * @return ComplaintWechatDetailsV10RequestMarshaller
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
    private $httpMethod = 'GET';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/aggpay/complaint/wechat/details';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param ComplaintWechatDetailsV10Request $request
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
        if($request->getComplaintNo() != null){
            $internalRequest->addParameter('complaintNo', ObjectSerializer::sanitizeForSerialization($request->getComplaintNo(), 'string'));
        }
        if($request->getComplaintSource() != null){
            $internalRequest->addParameter('complaintSource', ObjectSerializer::sanitizeForSerialization($request->getComplaintSource(), 'string'));
        }
        if($request->getMerchantOrderNo() != null){
            $internalRequest->addParameter('merchantOrderNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantOrderNo(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
ComplaintWechatDetailsV10RequestMarshaller::__init();
