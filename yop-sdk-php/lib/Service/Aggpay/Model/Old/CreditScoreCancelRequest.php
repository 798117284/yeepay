<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model\Old;


class CreditScoreCancelRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $reason;

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
     * @return CreditScoreCancelRequest
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
     * @return CreditScoreCancelRequest
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
     * @return CreditScoreCancelRequest
     */
    public function setCreditOrderId($creditOrderId)
    {
        $this->creditOrderId = $creditOrderId;
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
     * @return CreditScoreCancelRequest
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }

    public static function getOperationId()
    {
        return 'creditScoreCancel';
    }


}
