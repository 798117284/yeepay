<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class ProductFeeModifyV20Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $productInfo;
    /**
     * @var string
     */
    private $productQualificationInfo;
    /**
     * @var string
     */
    private $settlementAccountInfo;
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
    private $businessNotifyUrl;
    /**
     * @var string
     */
    private $uboInfoList;
    /**
     * @var string
     */
    private $merchantCorporationInfo;
    /**
     * @var string
     */
    private $productConfigInfo;
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
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $merchantExtraInfo;

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
     * @return ProductFeeModifyV20Request
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
     * @return ProductFeeModifyV20Request
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
     * @return ProductFeeModifyV20Request
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
     * @return ProductFeeModifyV20Request
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
     * @return ProductFeeModifyV20Request
     */
    public function setProductQualificationInfo($productQualificationInfo)
    {
        $this->productQualificationInfo = $productQualificationInfo;
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
     * @return ProductFeeModifyV20Request
     */
    public function setSettlementAccountInfo($settlementAccountInfo)
    {
        $this->settlementAccountInfo = $settlementAccountInfo;
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
     * @return ProductFeeModifyV20Request
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
     * @return ProductFeeModifyV20Request
     */
    public function setFunctionServiceQualificationInfo($functionServiceQualificationInfo)
    {
        $this->functionServiceQualificationInfo = $functionServiceQualificationInfo;
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
     * @return ProductFeeModifyV20Request
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
     * @return ProductFeeModifyV20Request
     */
    public function setUboInfoList($uboInfoList)
    {
        $this->uboInfoList = $uboInfoList;
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
     * @return ProductFeeModifyV20Request
     */
    public function setMerchantCorporationInfo($merchantCorporationInfo)
    {
        $this->merchantCorporationInfo = $merchantCorporationInfo;
        return $this;
    }
    /**
     * Gets productConfigInfo
     *
     * @return string
     */
    public function getProductConfigInfo()
    {
        return $this->productConfigInfo;
    }

    /**
     * Sets productConfigInfo
     *
     * @param string $productConfigInfo
     * @return ProductFeeModifyV20Request
     */
    public function setProductConfigInfo($productConfigInfo)
    {
        $this->productConfigInfo = $productConfigInfo;
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
     * @return ProductFeeModifyV20Request
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
     * @return ProductFeeModifyV20Request
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
     * @return ProductFeeModifyV20Request
     */
    public function setBankOpenAccountInfo($bankOpenAccountInfo)
    {
        $this->bankOpenAccountInfo = $bankOpenAccountInfo;
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
     * @return ProductFeeModifyV20Request
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
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
     * @return ProductFeeModifyV20Request
     */
    public function setMerchantExtraInfo($merchantExtraInfo)
    {
        $this->merchantExtraInfo = $merchantExtraInfo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'product_fee_modify_v2_0';
    }


}
