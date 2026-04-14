<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;


class BalanceApplyRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $divideRequestId;
    /**
     * @var string
     */
    private $accountType;
    /**
     * @var string
     */
    private $bankAccountBookNo;
    /**
     * @var string
     */
    private $divideDetail;
    /**
     * @var string
     */
    private $batchNotifyUrl;
    /**
     * @var string
     */
    private $fundType;
    /**
     * @var string
     */
    private $divideVerifyType;

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
     * @return BalanceApplyRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
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
     * @return BalanceApplyRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets divideRequestId
     *
     * @return string
     */
    public function getDivideRequestId()
    {
        return $this->divideRequestId;
    }

    /**
     * Sets divideRequestId
     *
     * @param string $divideRequestId
     * @return BalanceApplyRequest
     */
    public function setDivideRequestId($divideRequestId)
    {
        $this->divideRequestId = $divideRequestId;
        return $this;
    }
    /**
     * Gets accountType
     *
     * @return string
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * Sets accountType
     *
     * @param string $accountType
     * @return BalanceApplyRequest
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
        return $this;
    }
    /**
     * Gets bankAccountBookNo
     *
     * @return string
     */
    public function getBankAccountBookNo()
    {
        return $this->bankAccountBookNo;
    }

    /**
     * Sets bankAccountBookNo
     *
     * @param string $bankAccountBookNo
     * @return BalanceApplyRequest
     */
    public function setBankAccountBookNo($bankAccountBookNo)
    {
        $this->bankAccountBookNo = $bankAccountBookNo;
        return $this;
    }
    /**
     * Gets divideDetail
     *
     * @return string
     */
    public function getDivideDetail()
    {
        return $this->divideDetail;
    }

    /**
     * Sets divideDetail
     *
     * @param string $divideDetail
     * @return BalanceApplyRequest
     */
    public function setDivideDetail($divideDetail)
    {
        $this->divideDetail = $divideDetail;
        return $this;
    }
    /**
     * Gets batchNotifyUrl
     *
     * @return string
     */
    public function getBatchNotifyUrl()
    {
        return $this->batchNotifyUrl;
    }

    /**
     * Sets batchNotifyUrl
     *
     * @param string $batchNotifyUrl
     * @return BalanceApplyRequest
     */
    public function setBatchNotifyUrl($batchNotifyUrl)
    {
        $this->batchNotifyUrl = $batchNotifyUrl;
        return $this;
    }
    /**
     * Gets fundType
     *
     * @return string
     */
    public function getFundType()
    {
        return $this->fundType;
    }

    /**
     * Sets fundType
     *
     * @param string $fundType
     * @return BalanceApplyRequest
     */
    public function setFundType($fundType)
    {
        $this->fundType = $fundType;
        return $this;
    }
    /**
     * Gets divideVerifyType
     *
     * @return string
     */
    public function getDivideVerifyType()
    {
        return $this->divideVerifyType;
    }

    /**
     * Sets divideVerifyType
     *
     * @param string $divideVerifyType
     * @return BalanceApplyRequest
     */
    public function setDivideVerifyType($divideVerifyType)
    {
        $this->divideVerifyType = $divideVerifyType;
        return $this;
    }

    public static function getOperationId()
    {
        return 'balanceApply';
    }


}
