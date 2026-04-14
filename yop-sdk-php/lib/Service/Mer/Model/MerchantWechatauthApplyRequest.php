<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class MerchantWechatauthApplyRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $subMerchantNo;
    /**
     * @var string
     */
    private $applicantType;
    /**
     * @var string
     */
    private $applicantName;
    /**
     * @var string
     */
    private $applicantPhone;
    /**
     * @var string
     */
    private $applicantIdCard;
    /**
     * @var string
     */
    private $transactorInfo;
    /**
     * @var string
     */
    private $identificationType;
    /**
     * @var string
     */
    private $identificationFrontCopy;
    /**
     * @var string
     */
    private $identificationBackCopy;
    /**
     * @var string
     */
    private $identificationValidDate;
    /**
     * @var string
     */
    private $identificationAddress;
    /**
     * @var string
     */
    private $certCopy;
    /**
     * @var string
     */
    private $companyAddress;
    /**
     * @var string
     */
    private $licenceValidDate;
    /**
     * @var bool
     */
    private $isFinanceInstitution;
    /**
     * @var string
     */
    private $financeInstitutionInfo;
    /**
     * @var string
     */
    private $certType;
    /**
     * @var string
     */
    private $certNumber;
    /**
     * @var string
     */
    private $companyProveCopy;
    /**
     * @var bool
     */
    private $owner;
    /**
     * @var string
     */
    private $uboInfoList;
    /**
     * @var string
     */
    private $reportFee;
    /**
     * @var string
     */
    private $channelId;
    /**
     * @var string
     */
    private $microBizType;
    /**
     * @var string
     */
    private $storeName;
    /**
     * @var string
     */
    private $storeAddressCode;
    /**
     * @var string
     */
    private $storeHeaderCopy;
    /**
     * @var string
     */
    private $storeIndoorCopy;

    /**
     * Gets requestNo
     *
     * @return string
     */
    public function getRequestNo()
    {
        return $this->requestNo;
    }

    /**
     * Sets requestNo
     *
     * @param string $requestNo
     * @return MerchantWechatauthApplyRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets subMerchantNo
     *
     * @return string
     */
    public function getSubMerchantNo()
    {
        return $this->subMerchantNo;
    }

    /**
     * Sets subMerchantNo
     *
     * @param string $subMerchantNo
     * @return MerchantWechatauthApplyRequest
     */
    public function setSubMerchantNo($subMerchantNo)
    {
        $this->subMerchantNo = $subMerchantNo;
        return $this;
    }
    /**
     * Gets applicantType
     *
     * @return string
     */
    public function getApplicantType()
    {
        return $this->applicantType;
    }

    /**
     * Sets applicantType
     *
     * @param string $applicantType
     * @return MerchantWechatauthApplyRequest
     */
    public function setApplicantType($applicantType)
    {
        $this->applicantType = $applicantType;
        return $this;
    }
    /**
     * Gets applicantName
     *
     * @return string
     */
    public function getApplicantName()
    {
        return $this->applicantName;
    }

    /**
     * Sets applicantName
     *
     * @param string $applicantName
     * @return MerchantWechatauthApplyRequest
     */
    public function setApplicantName($applicantName)
    {
        $this->applicantName = $applicantName;
        return $this;
    }
    /**
     * Gets applicantPhone
     *
     * @return string
     */
    public function getApplicantPhone()
    {
        return $this->applicantPhone;
    }

    /**
     * Sets applicantPhone
     *
     * @param string $applicantPhone
     * @return MerchantWechatauthApplyRequest
     */
    public function setApplicantPhone($applicantPhone)
    {
        $this->applicantPhone = $applicantPhone;
        return $this;
    }
    /**
     * Gets applicantIdCard
     *
     * @return string
     */
    public function getApplicantIdCard()
    {
        return $this->applicantIdCard;
    }

    /**
     * Sets applicantIdCard
     *
     * @param string $applicantIdCard
     * @return MerchantWechatauthApplyRequest
     */
    public function setApplicantIdCard($applicantIdCard)
    {
        $this->applicantIdCard = $applicantIdCard;
        return $this;
    }
    /**
     * Gets transactorInfo
     *
     * @return string
     */
    public function getTransactorInfo()
    {
        return $this->transactorInfo;
    }

    /**
     * Sets transactorInfo
     *
     * @param string $transactorInfo
     * @return MerchantWechatauthApplyRequest
     */
    public function setTransactorInfo($transactorInfo)
    {
        $this->transactorInfo = $transactorInfo;
        return $this;
    }
    /**
     * Gets identificationType
     *
     * @return string
     */
    public function getIdentificationType()
    {
        return $this->identificationType;
    }

    /**
     * Sets identificationType
     *
     * @param string $identificationType
     * @return MerchantWechatauthApplyRequest
     */
    public function setIdentificationType($identificationType)
    {
        $this->identificationType = $identificationType;
        return $this;
    }
    /**
     * Gets identificationFrontCopy
     *
     * @return string
     */
    public function getIdentificationFrontCopy()
    {
        return $this->identificationFrontCopy;
    }

    /**
     * Sets identificationFrontCopy
     *
     * @param string $identificationFrontCopy
     * @return MerchantWechatauthApplyRequest
     */
    public function setIdentificationFrontCopy($identificationFrontCopy)
    {
        $this->identificationFrontCopy = $identificationFrontCopy;
        return $this;
    }
    /**
     * Gets identificationBackCopy
     *
     * @return string
     */
    public function getIdentificationBackCopy()
    {
        return $this->identificationBackCopy;
    }

    /**
     * Sets identificationBackCopy
     *
     * @param string $identificationBackCopy
     * @return MerchantWechatauthApplyRequest
     */
    public function setIdentificationBackCopy($identificationBackCopy)
    {
        $this->identificationBackCopy = $identificationBackCopy;
        return $this;
    }
    /**
     * Gets identificationValidDate
     *
     * @return string
     */
    public function getIdentificationValidDate()
    {
        return $this->identificationValidDate;
    }

    /**
     * Sets identificationValidDate
     *
     * @param string $identificationValidDate
     * @return MerchantWechatauthApplyRequest
     */
    public function setIdentificationValidDate($identificationValidDate)
    {
        $this->identificationValidDate = $identificationValidDate;
        return $this;
    }
    /**
     * Gets identificationAddress
     *
     * @return string
     */
    public function getIdentificationAddress()
    {
        return $this->identificationAddress;
    }

    /**
     * Sets identificationAddress
     *
     * @param string $identificationAddress
     * @return MerchantWechatauthApplyRequest
     */
    public function setIdentificationAddress($identificationAddress)
    {
        $this->identificationAddress = $identificationAddress;
        return $this;
    }
    /**
     * Gets certCopy
     *
     * @return string
     */
    public function getCertCopy()
    {
        return $this->certCopy;
    }

    /**
     * Sets certCopy
     *
     * @param string $certCopy
     * @return MerchantWechatauthApplyRequest
     */
    public function setCertCopy($certCopy)
    {
        $this->certCopy = $certCopy;
        return $this;
    }
    /**
     * Gets companyAddress
     *
     * @return string
     */
    public function getCompanyAddress()
    {
        return $this->companyAddress;
    }

    /**
     * Sets companyAddress
     *
     * @param string $companyAddress
     * @return MerchantWechatauthApplyRequest
     */
    public function setCompanyAddress($companyAddress)
    {
        $this->companyAddress = $companyAddress;
        return $this;
    }
    /**
     * Gets licenceValidDate
     *
     * @return string
     */
    public function getLicenceValidDate()
    {
        return $this->licenceValidDate;
    }

    /**
     * Sets licenceValidDate
     *
     * @param string $licenceValidDate
     * @return MerchantWechatauthApplyRequest
     */
    public function setLicenceValidDate($licenceValidDate)
    {
        $this->licenceValidDate = $licenceValidDate;
        return $this;
    }
    /**
     * Gets isFinanceInstitution
     *
     * @return bool
     */
    public function getIsFinanceInstitution()
    {
        return $this->isFinanceInstitution;
    }

    /**
     * Sets isFinanceInstitution
     *
     * @param bool $isFinanceInstitution
     * @return MerchantWechatauthApplyRequest
     */
    public function setIsFinanceInstitution($isFinanceInstitution)
    {
        $this->isFinanceInstitution = $isFinanceInstitution;
        return $this;
    }
    /**
     * Gets financeInstitutionInfo
     *
     * @return string
     */
    public function getFinanceInstitutionInfo()
    {
        return $this->financeInstitutionInfo;
    }

    /**
     * Sets financeInstitutionInfo
     *
     * @param string $financeInstitutionInfo
     * @return MerchantWechatauthApplyRequest
     */
    public function setFinanceInstitutionInfo($financeInstitutionInfo)
    {
        $this->financeInstitutionInfo = $financeInstitutionInfo;
        return $this;
    }
    /**
     * Gets certType
     *
     * @return string
     */
    public function getCertType()
    {
        return $this->certType;
    }

    /**
     * Sets certType
     *
     * @param string $certType
     * @return MerchantWechatauthApplyRequest
     */
    public function setCertType($certType)
    {
        $this->certType = $certType;
        return $this;
    }
    /**
     * Gets certNumber
     *
     * @return string
     */
    public function getCertNumber()
    {
        return $this->certNumber;
    }

    /**
     * Sets certNumber
     *
     * @param string $certNumber
     * @return MerchantWechatauthApplyRequest
     */
    public function setCertNumber($certNumber)
    {
        $this->certNumber = $certNumber;
        return $this;
    }
    /**
     * Gets companyProveCopy
     *
     * @return string
     */
    public function getCompanyProveCopy()
    {
        return $this->companyProveCopy;
    }

    /**
     * Sets companyProveCopy
     *
     * @param string $companyProveCopy
     * @return MerchantWechatauthApplyRequest
     */
    public function setCompanyProveCopy($companyProveCopy)
    {
        $this->companyProveCopy = $companyProveCopy;
        return $this;
    }
    /**
     * Gets owner
     *
     * @return bool
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Sets owner
     *
     * @param bool $owner
     * @return MerchantWechatauthApplyRequest
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
        return $this;
    }
    /**
     * Gets uboInfoList
     *
     * @return string
     */
    public function getUboInfoList()
    {
        return $this->uboInfoList;
    }

    /**
     * Sets uboInfoList
     *
     * @param string $uboInfoList
     * @return MerchantWechatauthApplyRequest
     */
    public function setUboInfoList($uboInfoList)
    {
        $this->uboInfoList = $uboInfoList;
        return $this;
    }
    /**
     * Gets reportFee
     *
     * @return string
     */
    public function getReportFee()
    {
        return $this->reportFee;
    }

    /**
     * Sets reportFee
     *
     * @param string $reportFee
     * @return MerchantWechatauthApplyRequest
     */
    public function setReportFee($reportFee)
    {
        $this->reportFee = $reportFee;
        return $this;
    }
    /**
     * Gets channelId
     *
     * @return string
     */
    public function getChannelId()
    {
        return $this->channelId;
    }

    /**
     * Sets channelId
     *
     * @param string $channelId
     * @return MerchantWechatauthApplyRequest
     */
    public function setChannelId($channelId)
    {
        $this->channelId = $channelId;
        return $this;
    }
    /**
     * Gets microBizType
     *
     * @return string
     */
    public function getMicroBizType()
    {
        return $this->microBizType;
    }

    /**
     * Sets microBizType
     *
     * @param string $microBizType
     * @return MerchantWechatauthApplyRequest
     */
    public function setMicroBizType($microBizType)
    {
        $this->microBizType = $microBizType;
        return $this;
    }
    /**
     * Gets storeName
     *
     * @return string
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * Sets storeName
     *
     * @param string $storeName
     * @return MerchantWechatauthApplyRequest
     */
    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;
        return $this;
    }
    /**
     * Gets storeAddressCode
     *
     * @return string
     */
    public function getStoreAddressCode()
    {
        return $this->storeAddressCode;
    }

    /**
     * Sets storeAddressCode
     *
     * @param string $storeAddressCode
     * @return MerchantWechatauthApplyRequest
     */
    public function setStoreAddressCode($storeAddressCode)
    {
        $this->storeAddressCode = $storeAddressCode;
        return $this;
    }
    /**
     * Gets storeHeaderCopy
     *
     * @return string
     */
    public function getStoreHeaderCopy()
    {
        return $this->storeHeaderCopy;
    }

    /**
     * Sets storeHeaderCopy
     *
     * @param string $storeHeaderCopy
     * @return MerchantWechatauthApplyRequest
     */
    public function setStoreHeaderCopy($storeHeaderCopy)
    {
        $this->storeHeaderCopy = $storeHeaderCopy;
        return $this;
    }
    /**
     * Gets storeIndoorCopy
     *
     * @return string
     */
    public function getStoreIndoorCopy()
    {
        return $this->storeIndoorCopy;
    }

    /**
     * Sets storeIndoorCopy
     *
     * @param string $storeIndoorCopy
     * @return MerchantWechatauthApplyRequest
     */
    public function setStoreIndoorCopy($storeIndoorCopy)
    {
        $this->storeIndoorCopy = $storeIndoorCopy;
        return $this;
    }

    public static function getOperationId()
    {
        return 'merchantWechatauthApply';
    }


}
