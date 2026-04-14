<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class RegisterSaasMerchantV2Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $businessRole;
    /**
     * @var string
     */
    private $parentMerchantNo;
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
    private $settlementAccountInfo;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $productInfo;
    /**
     * @var string
     */
    private $productQualificationInfo;
    /**
     * @var string
     */
    private $functionService;
    /**
     * @var string
     */
    private $functionServiceQualificationInfo;
    /**
     * @var string
     */
    private $businessScene;
    /**
     * @var string
     */
    private $directAgentNo;
    /**
     * @var string
     */
    private $merchantExtraInfo;
    /**
     * @var string
     */
    private $businessNotifyUrl;
    /**
     * @var string
     */
    private $uboInfoList;
    /**
     * @var string
     */
    private $businessConfig;
    /**
     * @var string
     */
    private $merchantAgreementInfo;
    /**
     * @var string
     */
    private $bankOpenAccountInfo;

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
     * @return RegisterSaasMerchantV2Request
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets businessRole
     *
     * @return string
     */
    public function getBusinessRole()
    {
        return $this->businessRole;
    }

    /**
     * Sets businessRole
     *
     * @param string $businessRole
     * @return RegisterSaasMerchantV2Request
     */
    public function setBusinessRole($businessRole)
    {
        $this->businessRole = $businessRole;
        return $this;
    }
    /**
     * Gets parentMerchantNo
     *
     * @return string
     */
    public function getParentMerchantNo()
    {
        return $this->parentMerchantNo;
    }

    /**
     * Sets parentMerchantNo
     *
     * @param string $parentMerchantNo
     * @return RegisterSaasMerchantV2Request
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
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
     * @return RegisterSaasMerchantV2Request
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
     * @return RegisterSaasMerchantV2Request
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
     * @return RegisterSaasMerchantV2Request
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
     * @return RegisterSaasMerchantV2Request
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
     * @return RegisterSaasMerchantV2Request
     */
    public function setBusinessAddressInfo($businessAddressInfo)
    {
        $this->businessAddressInfo = $businessAddressInfo;
        return $this;
    }
    /**
     * Gets settlementAccountInfo
     *
     * @return string
     */
    public function getSettlementAccountInfo()
    {
        return $this->settlementAccountInfo;
    }

    /**
     * Sets settlementAccountInfo
     *
     * @param string $settlementAccountInfo
     * @return RegisterSaasMerchantV2Request
     */
    public function setSettlementAccountInfo($settlementAccountInfo)
    {
        $this->settlementAccountInfo = $settlementAccountInfo;
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
     * @return RegisterSaasMerchantV2Request
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }
    /**
     * Gets productInfo
     *
     * @return string
     */
    public function getProductInfo()
    {
        return $this->productInfo;
    }

    /**
     * Sets productInfo
     *
     * @param string $productInfo
     * @return RegisterSaasMerchantV2Request
     */
    public function setProductInfo($productInfo)
    {
        $this->productInfo = $productInfo;
        return $this;
    }
    /**
     * Gets productQualificationInfo
     *
     * @return string
     */
    public function getProductQualificationInfo()
    {
        return $this->productQualificationInfo;
    }

    /**
     * Sets productQualificationInfo
     *
     * @param string $productQualificationInfo
     * @return RegisterSaasMerchantV2Request
     */
    public function setProductQualificationInfo($productQualificationInfo)
    {
        $this->productQualificationInfo = $productQualificationInfo;
        return $this;
    }
    /**
     * Gets functionService
     *
     * @return string
     */
    public function getFunctionService()
    {
        return $this->functionService;
    }

    /**
     * Sets functionService
     *
     * @param string $functionService
     * @return RegisterSaasMerchantV2Request
     */
    public function setFunctionService($functionService)
    {
        $this->functionService = $functionService;
        return $this;
    }
    /**
     * Gets functionServiceQualificationInfo
     *
     * @return string
     */
    public function getFunctionServiceQualificationInfo()
    {
        return $this->functionServiceQualificationInfo;
    }

    /**
     * Sets functionServiceQualificationInfo
     *
     * @param string $functionServiceQualificationInfo
     * @return RegisterSaasMerchantV2Request
     */
    public function setFunctionServiceQualificationInfo($functionServiceQualificationInfo)
    {
        $this->functionServiceQualificationInfo = $functionServiceQualificationInfo;
        return $this;
    }
    /**
     * Gets businessScene
     *
     * @return string
     */
    public function getBusinessScene()
    {
        return $this->businessScene;
    }

    /**
     * Sets businessScene
     *
     * @param string $businessScene
     * @return RegisterSaasMerchantV2Request
     */
    public function setBusinessScene($businessScene)
    {
        $this->businessScene = $businessScene;
        return $this;
    }
    /**
     * Gets directAgentNo
     *
     * @return string
     */
    public function getDirectAgentNo()
    {
        return $this->directAgentNo;
    }

    /**
     * Sets directAgentNo
     *
     * @param string $directAgentNo
     * @return RegisterSaasMerchantV2Request
     */
    public function setDirectAgentNo($directAgentNo)
    {
        $this->directAgentNo = $directAgentNo;
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
     * @return RegisterSaasMerchantV2Request
     */
    public function setMerchantExtraInfo($merchantExtraInfo)
    {
        $this->merchantExtraInfo = $merchantExtraInfo;
        return $this;
    }
    /**
     * Gets businessNotifyUrl
     *
     * @return string
     */
    public function getBusinessNotifyUrl()
    {
        return $this->businessNotifyUrl;
    }

    /**
     * Sets businessNotifyUrl
     *
     * @param string $businessNotifyUrl
     * @return RegisterSaasMerchantV2Request
     */
    public function setBusinessNotifyUrl($businessNotifyUrl)
    {
        $this->businessNotifyUrl = $businessNotifyUrl;
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
     * @return RegisterSaasMerchantV2Request
     */
    public function setUboInfoList($uboInfoList)
    {
        $this->uboInfoList = $uboInfoList;
        return $this;
    }
    /**
     * Gets businessConfig
     *
     * @return string
     */
    public function getBusinessConfig()
    {
        return $this->businessConfig;
    }

    /**
     * Sets businessConfig
     *
     * @param string $businessConfig
     * @return RegisterSaasMerchantV2Request
     */
    public function setBusinessConfig($businessConfig)
    {
        $this->businessConfig = $businessConfig;
        return $this;
    }
    /**
     * Gets merchantAgreementInfo
     *
     * @return string
     */
    public function getMerchantAgreementInfo()
    {
        return $this->merchantAgreementInfo;
    }

    /**
     * Sets merchantAgreementInfo
     *
     * @param string $merchantAgreementInfo
     * @return RegisterSaasMerchantV2Request
     */
    public function setMerchantAgreementInfo($merchantAgreementInfo)
    {
        $this->merchantAgreementInfo = $merchantAgreementInfo;
        return $this;
    }
    /**
     * Gets bankOpenAccountInfo
     *
     * @return string
     */
    public function getBankOpenAccountInfo()
    {
        return $this->bankOpenAccountInfo;
    }

    /**
     * Sets bankOpenAccountInfo
     *
     * @param string $bankOpenAccountInfo
     * @return RegisterSaasMerchantV2Request
     */
    public function setBankOpenAccountInfo($bankOpenAccountInfo)
    {
        $this->bankOpenAccountInfo = $bankOpenAccountInfo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'registerSaasMerchantV2';
    }


}
