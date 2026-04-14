<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class CreditscoreModifyRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @return CreditscoreModifyRequest
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
     * @return CreditscoreModifyRequest
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
     * @return CreditscoreModifyRequest
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
     * @return CreditscoreModifyRequest
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
     * @return CreditscoreModifyRequest
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
     * @return CreditscoreModifyRequest
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
     * @return CreditscoreModifyRequest
     */
    public function setPostDiscountInfos($postDiscountInfos)
    {
        $this->postDiscountInfos = $postDiscountInfos;
        return $this;
    }

    public static function getOperationId()
    {
        return 'creditscoreModify';
    }


}
