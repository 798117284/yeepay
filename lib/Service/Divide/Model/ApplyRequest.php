<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;


class ApplyRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $orderId;
    /**
     * @var string
     */
    private $uniqueOrderNo;
    /**
     * @var string
     */
    private $divideRequestId;
    /**
     * @var string
     */
    private $divideDetail;
    /**
     * @var string
     */
    private $accountLinkInfo;
    /**
     * @var string
     */
    private $isUnfreezeResidualAmount;
    /**
     * @var string
     */
    private $divideAmount;
    /**
     * @var string
     */
    private $divideRule;

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
     * @return ApplyRequest
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
     * @return ApplyRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Sets orderId
     *
     * @param string $orderId
     * @return ApplyRequest
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Gets uniqueOrderNo
     *
     * @return string
     */
    public function getUniqueOrderNo()
    {
        return $this->uniqueOrderNo;
    }

    /**
     * Sets uniqueOrderNo
     *
     * @param string $uniqueOrderNo
     * @return ApplyRequest
     */
    public function setUniqueOrderNo($uniqueOrderNo)
    {
        $this->uniqueOrderNo = $uniqueOrderNo;
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
     * @return ApplyRequest
     */
    public function setDivideRequestId($divideRequestId)
    {
        $this->divideRequestId = $divideRequestId;
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
     * @return ApplyRequest
     */
    public function setDivideDetail($divideDetail)
    {
        $this->divideDetail = $divideDetail;
        return $this;
    }
    /**
     * Gets accountLinkInfo
     *
     * @return string
     */
    public function getAccountLinkInfo()
    {
        return $this->accountLinkInfo;
    }

    /**
     * Sets accountLinkInfo
     *
     * @param string $accountLinkInfo
     * @return ApplyRequest
     */
    public function setAccountLinkInfo($accountLinkInfo)
    {
        $this->accountLinkInfo = $accountLinkInfo;
        return $this;
    }
    /**
     * Gets isUnfreezeResidualAmount
     *
     * @return string
     */
    public function getIsUnfreezeResidualAmount()
    {
        return $this->isUnfreezeResidualAmount;
    }

    /**
     * Sets isUnfreezeResidualAmount
     *
     * @param string $isUnfreezeResidualAmount
     * @return ApplyRequest
     */
    public function setIsUnfreezeResidualAmount($isUnfreezeResidualAmount)
    {
        $this->isUnfreezeResidualAmount = $isUnfreezeResidualAmount;
        return $this;
    }
    /**
     * Gets divideAmount
     *
     * @return string
     */
    public function getDivideAmount()
    {
        return $this->divideAmount;
    }

    /**
     * Sets divideAmount
     *
     * @param string $divideAmount
     * @return ApplyRequest
     */
    public function setDivideAmount($divideAmount)
    {
        $this->divideAmount = $divideAmount;
        return $this;
    }
    /**
     * Gets divideRule
     *
     * @return string
     */
    public function getDivideRule()
    {
        return $this->divideRule;
    }

    /**
     * Sets divideRule
     *
     * @param string $divideRule
     * @return ApplyRequest
     */
    public function setDivideRule($divideRule)
    {
        $this->divideRule = $divideRule;
        return $this;
    }

    public static function getOperationId()
    {
        return 'apply';
    }


}
