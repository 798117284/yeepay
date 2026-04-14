<?php

namespace Yeepay\Yop\Sdk\Service\Pos\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class UnSynBindPosTest1RequestMarshaller implements RequestMarshaller
{
    /**
     * @var UnSynBindPosTest1RequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UnSynBindPosTest1RequestMarshaller();
    }

    /**
     * @return UnSynBindPosTest1RequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Pos';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/pos/un-syn-bind-pos-test1';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param UnSynBindPosTest1Request $request
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
        if($request->getPoscati() != null){
            $internalRequest->addParameter('poscati', ObjectSerializer::sanitizeForSerialization($request->getPoscati(), 'string'));
        }
        if($request->getCustomerNumber() != null){
            $internalRequest->addParameter('customer_number', ObjectSerializer::sanitizeForSerialization($request->getCustomerNumber(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
UnSynBindPosTest1RequestMarshaller::__init();
