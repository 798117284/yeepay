<?php

namespace Yeepay\Yop\Sdk\Service\Pos\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class InstallPosWithProductTest1RequestMarshaller implements RequestMarshaller
{
    /**
     * @var InstallPosWithProductTest1RequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new InstallPosWithProductTest1RequestMarshaller();
    }

    /**
     * @return InstallPosWithProductTest1RequestMarshaller
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
    private $resourcePath = '/rest/v1.0/pos/install-pos-with-product-test1';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param InstallPosWithProductTest1Request $request
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
        if($request->getCustomerNumber() != null){
            $internalRequest->addParameter('customer_number', ObjectSerializer::sanitizeForSerialization($request->getCustomerNumber(), 'string'));
        }
        if($request->getShopStr() != null){
            $internalRequest->addParameter('shopStr', ObjectSerializer::sanitizeForSerialization($request->getShopStr(), 'string'));
        }
        if($request->getPosStr() != null){
            $internalRequest->addParameter('posStr', ObjectSerializer::sanitizeForSerialization($request->getPosStr(), 'string'));
        }
        if($request->getProductCode() != null){
            $internalRequest->addParameter('product_code', ObjectSerializer::sanitizeForSerialization($request->getProductCode(), 'string'));
        }
        if($request->getExternalMcc() != null){
            $internalRequest->addParameter('external_mcc', ObjectSerializer::sanitizeForSerialization($request->getExternalMcc(), 'string'));
        }
        if($request->getCustomerType() != null){
            $internalRequest->addParameter('customer_type', ObjectSerializer::sanitizeForSerialization($request->getCustomerType(), 'string'));
        }
        if(!empty($request->getShopList())){
            foreach ($request->getShopList() as $value){
                $internalRequest->addParameter('shopList', ObjectSerializer::sanitizeForSerialization($value, 'string'));
            }
        }
        if(!empty($request->getPosList())){
            foreach ($request->getPosList() as $value){
                $internalRequest->addParameter('posList', ObjectSerializer::sanitizeForSerialization($value, 'string'));
            }
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
InstallPosWithProductTest1RequestMarshaller::__init();
