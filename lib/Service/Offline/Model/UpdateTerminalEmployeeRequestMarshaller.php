<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class UpdateTerminalEmployeeRequestMarshaller implements RequestMarshaller
{
    /**
     * @var UpdateTerminalEmployeeRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UpdateTerminalEmployeeRequestMarshaller();
    }

    /**
     * @return UpdateTerminalEmployeeRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Offline';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/offline/update-terminal-employee';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param UpdateTerminalEmployeeRequest $request
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
        if($request->getResetPassword() != null){
            $internalRequest->addParameter('resetPassword', ObjectSerializer::sanitizeForSerialization($request->getResetPassword(), 'int', 'int32'));
        }
        if($request->getPassword() != null){
            $internalRequest->addParameter('password', ObjectSerializer::sanitizeForSerialization($request->getPassword(), 'string'));
        }
        if($request->getOldPassword() != null){
            $internalRequest->addParameter('oldPassword', ObjectSerializer::sanitizeForSerialization($request->getOldPassword(), 'string'));
        }
        if($request->getEmployeeNo() != null){
            $internalRequest->addParameter('employeeNo', ObjectSerializer::sanitizeForSerialization($request->getEmployeeNo(), 'string'));
        }
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
UpdateTerminalEmployeeRequestMarshaller::__init();
