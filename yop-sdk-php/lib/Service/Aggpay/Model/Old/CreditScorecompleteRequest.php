<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model\Old;


class CreditScorecompleteRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $creditOrderId;
    /**
     * @var string
     */
    private $postPaymentInfos;
    /**
     * @var string
     */
    private $postDiscountInfos;
    /**
     * @var string
     */
    private $riskFundInfo;
    /**
     * @var string
     */
    private $timeRange;
    /**
     * @var string
     */
    private $locationInfo;
    /**
     * @var string
     */
    private $totalAmount;
    /**
     * @var string
     */
    private $completeTime;

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
     * @return CreditScorecompleteRequest
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
     * @return CreditScorecompleteRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets creditOrderId
     *
     * @return string
     */
    public function getCreditOrderId()
    {
        return $this->creditOrderId;
    }

    /**
     * Sets creditOrderId
     *
     * @param string $creditOrderId
     * @return CreditScorecompleteRequest
     */
    public function setCreditOrderId($creditOrderId)
    {
        $this->creditOrderId = $creditOrderId;
        return $this;
    }
    /**
     * Gets postPaymentInfos
     *
     * @return string
     */
    public function getPostPaymentInfos()
    {
        return $this->postPaymentInfos;
    }

    /**
     * Sets postPaymentInfos
     *
     * @param string $postPaymentInfos
     * @return CreditScorecompleteRequest
     */
    public function setPostPaymentInfos($postPaymentInfos)
    {
        $this->postPaymentInfos = $postPaymentInfos;
        return $this;
    }
    /**
     * Gets postDiscountInfos
     *
     * @return string
     */
    public function getPostDiscountInfos()
    {
        return $this->postDiscountInfos;
    }

    /**
     * Sets postDiscountInfos
     *
     * @param string $postDiscountInfos
     * @return CreditScorecompleteRequest
     */
    public function setPostDiscountInfos($postDiscountInfos)
    {
        $this->postDiscountInfos = $postDiscountInfos;
        return $this;
    }
    /**
     * Gets riskFundInfo
     *
     * @return string
     */
    public function getRiskFundInfo()
    {
        return $this->riskFundInfo;
    }

    /**
     * Sets riskFundInfo
     *
     * @param string $riskFundInfo
     * @return CreditScorecompleteRequest
     */
    public function setRiskFundInfo($riskFundInfo)
    {
        $this->riskFundInfo = $riskFundInfo;
        return $this;
    }
    /**
     * Gets timeRange
     *
     * @return string
     */
    public function getTimeRange()
    {
        return $this->timeRange;
    }

    /**
     * Sets timeRange
     *
     * @param string $timeRange
     * @return CreditScorecompleteRequest
     */
    public function setTimeRange($timeRange)
    {
        $this->timeRange = $timeRange;
        return $this;
    }
    /**
     * Gets locationInfo
     *
     * @return string
     */
    public function getLocationInfo()
    {
        return $this->locationInfo;
    }

    /**
     * Sets locationInfo
     *
     * @param string $locationInfo
     * @return CreditScorecompleteRequest
     */
    public function setLocationInfo($locationInfo)
    {
        $this->locationInfo = $locationInfo;
        return $this;
    }
    /**
     * Gets totalAmount
     *
     * @return string
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Sets totalAmount
     *
     * @param string $totalAmount
     * @return CreditScorecompleteRequest
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }
    /**
     * Gets completeTime
     *
     * @return string
     */
    public function getCompleteTime()
    {
        return $this->completeTime;
    }

    /**
     * Sets completeTime
     *
     * @param string $completeTime
     * @return CreditScorecompleteRequest
     */
    public function setCompleteTime($completeTime)
    {
        $this->completeTime = $completeTime;
        return $this;
    }

    public static function getOperationId()
    {
        return 'creditScorecomplete';
    }


}
