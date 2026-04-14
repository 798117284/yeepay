<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;

use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class MerchantWechatauthApplyRequestMarshaller implements RequestMarshaller
{
    /**
     * @var MerchantWechatauthApplyRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantWechatauthApplyRequestMarshaller();
    }

    /**
     * @return MerchantWechatauthApplyRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/mer/merchant/wechatauth/apply';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param MerchantWechatauthApplyRequest $request
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
        if($request->getSubMerchantNo() != null){
            $internalRequest->addParameter('subMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getSubMerchantNo(), 'string'));
        }
        if($request->getApplicantType() != null){
            $internalRequest->addParameter('applicantType', ObjectSerializer::sanitizeForSerialization($request->getApplicantType(), 'string', 'enum'));
        }
        if($request->getApplicantName() != null){
            $internalRequest->addParameter('applicantName', ObjectSerializer::sanitizeForSerialization($request->getApplicantName(), 'string'));
        }
        if($request->getApplicantPhone() != null){
            $internalRequest->addParameter('applicantPhone', ObjectSerializer::sanitizeForSerialization($request->getApplicantPhone(), 'string'));
        }
        if($request->getApplicantIdCard() != null){
            $internalRequest->addParameter('applicantIdCard', ObjectSerializer::sanitizeForSerialization($request->getApplicantIdCard(), 'string'));
        }
        if($request->getTransactorInfo() != null){
            $internalRequest->addParameter('transactorInfo', ObjectSerializer::sanitizeForSerialization($request->getTransactorInfo(), 'string'));
        }
        if($request->getIdentificationType() != null){
            $internalRequest->addParameter('identificationType', ObjectSerializer::sanitizeForSerialization($request->getIdentificationType(), 'string', 'enum'));
        }
        if($request->getIdentificationFrontCopy() != null){
            $internalRequest->addParameter('identificationFrontCopy', ObjectSerializer::sanitizeForSerialization($request->getIdentificationFrontCopy(), 'string'));
        }
        if($request->getIdentificationBackCopy() != null){
            $internalRequest->addParameter('identificationBackCopy', ObjectSerializer::sanitizeForSerialization($request->getIdentificationBackCopy(), 'string'));
        }
        if($request->getIdentificationValidDate() != null){
            $internalRequest->addParameter('identificationValidDate', ObjectSerializer::sanitizeForSerialization($request->getIdentificationValidDate(), 'string'));
        }
        if($request->getIdentificationAddress() != null){
            $internalRequest->addParameter('identificationAddress', ObjectSerializer::sanitizeForSerialization($request->getIdentificationAddress(), 'string'));
        }
        if($request->getCertCopy() != null){
            $internalRequest->addParameter('certCopy', ObjectSerializer::sanitizeForSerialization($request->getCertCopy(), 'string'));
        }
        if($request->getCompanyAddress() != null){
            $internalRequest->addParameter('companyAddress', ObjectSerializer::sanitizeForSerialization($request->getCompanyAddress(), 'string'));
        }
        if($request->getLicenceValidDate() != null){
            $internalRequest->addParameter('licenceValidDate', ObjectSerializer::sanitizeForSerialization($request->getLicenceValidDate(), 'string'));
        }
        if($request->getIsFinanceInstitution() != null){
            $internalRequest->addParameter('isFinanceInstitution', ObjectSerializer::sanitizeForSerialization($request->getIsFinanceInstitution(), 'bool'));
        }
        if($request->getFinanceInstitutionInfo() != null){
            $internalRequest->addParameter('financeInstitutionInfo', ObjectSerializer::sanitizeForSerialization($request->getFinanceInstitutionInfo(), 'string'));
        }
        if($request->getCertType() != null){
            $internalRequest->addParameter('certType', ObjectSerializer::sanitizeForSerialization($request->getCertType(), 'string'));
        }
        if($request->getCertNumber() != null){
            $internalRequest->addParameter('certNumber', ObjectSerializer::sanitizeForSerialization($request->getCertNumber(), 'string'));
        }
        if($request->getCompanyProveCopy() != null){
            $internalRequest->addParameter('companyProveCopy', ObjectSerializer::sanitizeForSerialization($request->getCompanyProveCopy(), 'string'));
        }
        if($request->getOwner() != null){
            $internalRequest->addParameter('owner', ObjectSerializer::sanitizeForSerialization($request->getOwner(), 'bool'));
        }
        if($request->getUboInfoList() != null){
            $internalRequest->addParameter('uboInfoList', ObjectSerializer::sanitizeForSerialization($request->getUboInfoList(), 'string'));
        }
        if($request->getReportFee() != null){
            $internalRequest->addParameter('reportFee', ObjectSerializer::sanitizeForSerialization($request->getReportFee(), 'string', 'enum'));
        }
        if($request->getChannelId() != null){
            $internalRequest->addParameter('channelId', ObjectSerializer::sanitizeForSerialization($request->getChannelId(), 'string'));
        }
        if($request->getMicroBizType() != null){
            $internalRequest->addParameter('microBizType', ObjectSerializer::sanitizeForSerialization($request->getMicroBizType(), 'string', 'enum'));
        }
        if($request->getStoreName() != null){
            $internalRequest->addParameter('storeName', ObjectSerializer::sanitizeForSerialization($request->getStoreName(), 'string'));
        }
        if($request->getStoreAddressCode() != null){
            $internalRequest->addParameter('storeAddressCode', ObjectSerializer::sanitizeForSerialization($request->getStoreAddressCode(), 'string'));
        }
        if($request->getStoreHeaderCopy() != null){
            $internalRequest->addParameter('storeHeaderCopy', ObjectSerializer::sanitizeForSerialization($request->getStoreHeaderCopy(), 'string'));
        }
        if($request->getStoreIndoorCopy() != null){
            $internalRequest->addParameter('storeIndoorCopy', ObjectSerializer::sanitizeForSerialization($request->getStoreIndoorCopy(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
MerchantWechatauthApplyRequestMarshaller::__init();
