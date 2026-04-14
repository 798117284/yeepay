<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class CreditscoreSyncRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $paidTime;
    /**
     * @var string
     */
    private $type;

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
     * @return CreditscoreSyncRequest
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
     * @return CreditscoreSyncRequest
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
     * @return CreditscoreSyncRequest
     */
    public function setCreditOrderId($creditOrderId)
    {
        $this->creditOrderId = $creditOrderId;
        return $this;
    }
    /**
     * Gets paidTime
     *
     * @return string
     */
    public function getPaidTime()
    {
        return $this->paidTime;
    }

    /**
     * Sets paidTime
     *
     * @param string $paidTime
     * @return CreditscoreSyncRequest
     */
    public function setPaidTime($paidTime)
    {
        $this->paidTime = $paidTime;
        return $this;
    }
    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets type
     *
     * @param string $type
     * @return CreditscoreSyncRequest
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public static function getOperationId()
    {
        return 'creditscoreSync';
    }


}
