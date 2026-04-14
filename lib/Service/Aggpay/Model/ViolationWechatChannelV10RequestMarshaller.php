<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class ViolationWechatChannelV10RequestMarshaller implements RequestMarshaller
{
    /**
     * @var ViolationWechatChannelV10RequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ViolationWechatChannelV10RequestMarshaller();
    }

    /**
     * @return ViolationWechatChannelV10RequestMarshaller
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
    private $resourcePath = '/rest/v1.0/aggpay/violation/wechat/channel';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param ViolationWechatChannelV10Request $request
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
        if($request->getBeginTime() != null){
            $internalRequest->addParameter('beginTime', ObjectSerializer::sanitizeForSerialization($request->getBeginTime(), '\DateTime', 'date-time'));
        }
        if($request->getEndTime() != null){
            $internalRequest->addParameter('endTime', ObjectSerializer::sanitizeForSerialization($request->getEndTime(), '\DateTime', 'date-time'));
        }
        if($request->getPageNo() != null){
            $internalRequest->addParameter('pageNo', ObjectSerializer::sanitizeForSerialization($request->getPageNo(), 'int', 'int32'));
        }
        if($request->getPageSize() != null){
            $internalRequest->addParameter('pageSize', ObjectSerializer::sanitizeForSerialization($request->getPageSize(), 'int', 'int32'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
ViolationWechatChannelV10RequestMarshaller::__init();
