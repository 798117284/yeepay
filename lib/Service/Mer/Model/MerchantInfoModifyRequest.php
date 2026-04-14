<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class MerchantInfoModifyRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $merchantSubjectInfo;
    /**
     * @var string
     */
    private $merchantCorporationInfo;
    /**
     * @var string
     */
    private $merchantContactInfo;
    /**
     * @var string
     */
    private $industryCategoryInfo;
    /**
     * @var string
     */
    private $businessAddressInfo;
    /**
     * @var string
     */
    private $accountInfo;
    /**
     * @var string
     */
    private $bankToken;
    /**
     * @var string
     */
    private $qualificationInfo;
    /**
     * @var string
     */
    private $merchantReportConfig;
    /**
     * @var string
     */
    private $merchantExtraInfo;
    /**
     * @var string
     */
    private $settleConfig;
    /**
     * @var string
     */
    private $uboInfoList;

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
     * @return MerchantInfoModifyRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets merchantNo
     *
     * @return string
     */
    public function getMerchantNo()
    {
        return $this->merchantNo;
    }

    /**
     * Sets merchantNo
     *
     * @param string $merchantNo
     * @return MerchantInfoModifyRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets notifyUrl
     *
     * @return string
     */
    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }

    /**
     * Sets notifyUrl
     *
     * @param string $notifyUrl
     * @return MerchantInfoModifyRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }
    /**
     * Gets merchantSubjectInfo
     *
     * @return string
     */
    public function getMerchantSubjectInfo()
    {
        return $this->merchantSubjectInfo;
    }

    /**
     * Sets merchantSubjectInfo
     *
     * @param string $merchantSubjectInfo
     * @return MerchantInfoModifyRequest
     */
    public function setMerchantSubjectInfo($merchantSubjectInfo)
    {
        $this->merchantSubjectInfo = $merchantSubjectInfo;
        return $this;
    }
    /**
     * Gets merchantCorporationInfo
     *
     * @return string
     */
    public function getMerchantCorporationInfo()
    {
        return $this->merchantCorporationInfo;
    }

    /**
     * Sets merchantCorporationInfo
     *
     * @param string $merchantCorporationInfo
     * @return MerchantInfoModifyRequest
     */
    public function setMerchantCorporationInfo($merchantCorporationInfo)
    {
        $this->merchantCorporationInfo = $merchantCorporationInfo;
        return $this;
    }
    /**
     * Gets merchantContactInfo
     *
     * @return string
     */
    public function getMerchantContactInfo()
    {
        return $this->merchantContactInfo;
    }

    /**
     * Sets merchantContactInfo
     *
     * @param string $merchantContactInfo
     * @return MerchantInfoModifyRequest
     */
    public function setMerchantContactInfo($merchantContactInfo)
    {
        $this->merchantContactInfo = $merchantContactInfo;
        return $this;
    }
    /**
     * Gets industryCategoryInfo
     *
     * @return string
     */
    public function getIndustryCategoryInfo()
    {
        return $this->industryCategoryInfo;
    }

    /**
     * Sets industryCategoryInfo
     *
     * @param string $industryCategoryInfo
     * @return MerchantInfoModifyRequest
     */
    public function setIndustryCategoryInfo($industryCategoryInfo)
    {
        $this->industryCategoryInfo = $industryCategoryInfo;
        return $this;
    }
    /**
     * Gets businessAddressInfo
     *
     * @return string
     */
    public function getBusinessAddressInfo()
    {
        return $this->businessAddressInfo;
    }

    /**
     * Sets businessAddressInfo
     *
     * @param string $businessAddressInfo
     * @return MerchantInfoModifyRequest
     */
    public function setBusinessAddressInfo($businessAddressInfo)
    {
        $this->businessAddressInfo = $businessAddressInfo;
        return $this;
    }
    /**
     * Gets accountInfo
     *
     * @return string
     */
    public function getAccountInfo()
    {
        return $this->accountInfo;
    }

    /**
     * Sets accountInfo
     *
     * @param string $accountInfo
     * @return MerchantInfoModifyRequest
     */
    public function setAccountInfo($accountInfo)
    {
        $this->accountInfo = $accountInfo;
        return $this;
    }
    /**
     * Gets bankToken
     *
     * @return string
     */
    public function getBankToken()
    {
        return $this->bankToken;
    }

    /**
     * Sets bankToken
     *
     * @param string $bankToken
     * @return MerchantInfoModifyRequest
     */
    public function setBankToken($bankToken)
    {
        $this->bankToken = $bankToken;
        return $this;
    }
    /**
     * Gets qualificationInfo
     *
     * @return string
     */
    public function getQualificationInfo()
    {
        return $this->qualificationInfo;
    }

    /**
     * Sets qualificationInfo
     *
     * @param string $qualificationInfo
     * @return MerchantInfoModifyRequest
     */
    public function setQualificationInfo($qualificationInfo)
    {
        $this->qualificationInfo = $qualificationInfo;
        return $this;
    }
    /**
     * Gets merchantReportConfig
     *
     * @return string
     */
    public function getMerchantReportConfig()
    {
        return $this->merchantReportConfig;
    }

    /**
     * Sets merchantReportConfig
     *
     * @param string $merchantReportConfig
     * @return MerchantInfoModifyRequest
     */
    public function setMerchantReportConfig($merchantReportConfig)
    {
        $this->merchantReportConfig = $merchantReportConfig;
        return $this;
    }
    /**
     * Gets merchantExtraInfo
     *
     * @return string
     */
    public function getMerchantExtraInfo()
    {
        return $this->merchantExtraInfo;
    }

    /**
     * Sets merchantExtraInfo
     *
     * @param string $merchantExtraInfo
     * @return MerchantInfoModifyRequest
     */
    public function setMerchantExtraInfo($merchantExtraInfo)
    {
        $this->merchantExtraInfo = $merchantExtraInfo;
        return $this;
    }
    /**
     * Gets settleConfig
     *
     * @return string
     */
    public function getSettleConfig()
    {
        return $this->settleConfig;
    }

    /**
     * Sets settleConfig
     *
     * @param string $settleConfig
     * @return MerchantInfoModifyRequest
     */
    public function setSettleConfig($settleConfig)
    {
        $this->settleConfig = $settleConfig;
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
     * @return MerchantInfoModifyRequest
     */
    public function setUboInfoList($uboInfoList)
    {
        $this->uboInfoList = $uboInfoList;
        return $this;
    }

    public static function getOperationId()
    {
        return 'merchantInfoModify';
    }


}
