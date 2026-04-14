<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class GroupAccountTransferRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $fromMerchantNo;
    /**
     * @var string
     */
    private $toMerchantNo;
    /**
     * @var string
     */
    private $orderAmount;
    /**
     * @var string
     */
    private $usage;
    /**
     * @var string
     */
    private $feeChargeSide;
    /**
     * @var string
     */
    private $notifyUrl;

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
     * @return GroupAccountTransferRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
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
     * @return GroupAccountTransferRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets fromMerchantNo
     *
     * @return string
     */
    public function getFromMerchantNo()
    {
        return $this->fromMerchantNo;
    }

    /**
     * Sets fromMerchantNo
     *
     * @param string $fromMerchantNo
     * @return GroupAccountTransferRequest
     */
    public function setFromMerchantNo($fromMerchantNo)
    {
        $this->fromMerchantNo = $fromMerchantNo;
        return $this;
    }
    /**
     * Gets toMerchantNo
     *
     * @return string
     */
    public function getToMerchantNo()
    {
        return $this->toMerchantNo;
    }

    /**
     * Sets toMerchantNo
     *
     * @param string $toMerchantNo
     * @return GroupAccountTransferRequest
     */
    public function setToMerchantNo($toMerchantNo)
    {
        $this->toMerchantNo = $toMerchantNo;
        return $this;
    }
    /**
     * Gets orderAmount
     *
     * @return string
     */
    public function getOrderAmount()
    {
        return $this->orderAmount;
    }

    /**
     * Sets orderAmount
     *
     * @param string $orderAmount
     * @return GroupAccountTransferRequest
     */
    public function setOrderAmount($orderAmount)
    {
        $this->orderAmount = $orderAmount;
        return $this;
    }
    /**
     * Gets usage
     *
     * @return string
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Sets usage
     *
     * @param string $usage
     * @return GroupAccountTransferRequest
     */
    public function setUsage($usage)
    {
        $this->usage = $usage;
        return $this;
    }
    /**
     * Gets feeChargeSide
     *
     * @return string
     */
    public function getFeeChargeSide()
    {
        return $this->feeChargeSide;
    }

    /**
     * Sets feeChargeSide
     *
     * @param string $feeChargeSide
     * @return GroupAccountTransferRequest
     */
    public function setFeeChargeSide($feeChargeSide)
    {
        $this->feeChargeSide = $feeChargeSide;
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
     * @return GroupAccountTransferRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }

    public static function getOperationId()
    {
        return 'groupAccountTransfer';
    }


}
