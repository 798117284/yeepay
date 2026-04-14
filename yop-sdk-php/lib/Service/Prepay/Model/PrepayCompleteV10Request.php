<?php

namespace Yeepay\Yop\Sdk\Service\Prepay\Model;


class PrepayCompleteV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $orderId;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $completeRequestId;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var double
     */
    private $preAuthCompleteAmount;

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
     * @return PrepayCompleteV10Request
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
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
     * @return PrepayCompleteV10Request
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets completeRequestId
     *
     * @return string
     */
    public function getCompleteRequestId()
    {
        return $this->completeRequestId;
    }

    /**
     * Sets completeRequestId
     *
     * @param string $completeRequestId
     * @return PrepayCompleteV10Request
     */
    public function setCompleteRequestId($completeRequestId)
    {
        $this->completeRequestId = $completeRequestId;
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
     * @return PrepayCompleteV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets preAuthCompleteAmount
     *
     * @return double
     */
    public function getPreAuthCompleteAmount()
    {
        return $this->preAuthCompleteAmount;
    }

    /**
     * Sets preAuthCompleteAmount
     *
     * @param double $preAuthCompleteAmount
     * @return PrepayCompleteV10Request
     */
    public function setPreAuthCompleteAmount($preAuthCompleteAmount)
    {
        $this->preAuthCompleteAmount = $preAuthCompleteAmount;
        return $this;
    }

    public static function getOperationId()
    {
        return 'prepay_complete_v1_0';
    }


}
