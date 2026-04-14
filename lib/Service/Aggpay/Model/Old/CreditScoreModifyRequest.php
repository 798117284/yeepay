<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model\Old;


class CreditScoreModifyRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $totalAmount;
    /**
     * @var string
     */
    private $reason;
    /**
     * @var string
     */
    private $postPaymentInfos;
    /**
     * @var string
     */
    private $postDiscountInfos;

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
     * @return CreditScoreModifyRequest
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
     * @return CreditScoreModifyRequest
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
     * @return CreditScoreModifyRequest
     */
    public function setCreditOrderId($creditOrderId)
    {
        $this->creditOrderId = $creditOrderId;
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
     * @return CreditScoreModifyRequest
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }
    /**
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets reason
     *
     * @param string $reason
     * @return CreditScoreModifyRequest
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
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
     * @return CreditScoreModifyRequest
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
     * @return CreditScoreModifyRequest
     */
    public function setPostDiscountInfos($postDiscountInfos)
    {
        $this->postDiscountInfos = $postDiscountInfos;
        return $this;
    }

    public static function getOperationId()
    {
        return 'creditScoreModify';
    }


}
