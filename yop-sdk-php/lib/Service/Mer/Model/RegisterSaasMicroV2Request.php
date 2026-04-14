<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class RegisterSaasMicroV2Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $businessConfig;
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
     * @return RegisterSaasMicroV2Request
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
     * @return RegisterSaasMicroV2Request
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
     * @return RegisterSaasMicroV2Request
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
     * @return RegisterSaasMicroV2Request
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
     * @return RegisterSaasMicroV2Request
     */
    public function setMerchantCorporationInfo($merchantCorporationInfo)
    {
        $this->merchantCorporationInfo = $merchantCorporationInfo;
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
     * @return RegisterSaasMicroV2Request
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
     * @return RegisterSaasMicroV2Request
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
     * @return RegisterSaasMicroV2Request
     */
    public function setAccountInfo($accountInfo)
    {
        $this->accountInfo = $accountInfo;
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
     * @return RegisterSaasMicroV2Request
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
     * @return RegisterSaasMicroV2Request
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
     * @return RegisterSaasMicroV2Request
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
     * @return RegisterSaasMicroV2Request
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
     * @return RegisterSaasMicroV2Request
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
     * @return RegisterSaasMicroV2Request
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
     * @return RegisterSaasMicroV2Request
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
     * @return RegisterSaasMicroV2Request
     */
    public function setMerchantExtraInfo($merchantExtraInfo)
    {
        $this->merchantExtraInfo = $merchantExtraInfo;
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
     * @return RegisterSaasMicroV2Request
     */
    public function setBusinessConfig($businessConfig)
    {
        $this->businessConfig = $businessConfig;
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
     * @return RegisterSaasMicroV2Request
     */
    public function setBankOpenAccountInfo($bankOpenAccountInfo)
    {
        $this->bankOpenAccountInfo = $bankOpenAccountInfo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'registerSaasMicroV2';
    }


}
