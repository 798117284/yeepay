<?php

namespace Yeepay\Yop\Sdk\Service\Settle\Model;


class SelfSettleApplyRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $settleRequestNo;
    /**
     * @var string
     */
    private $operatePeriod;
    /**
     * @var \DateTime
     */
    private $endTime;
    /**
     * @var float
     */
    private $settleAmount;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $bankRemark;
    /**
     * @var string
     */
    private $extInfo;

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
     * @return SelfSettleApplyRequest
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
     * @return SelfSettleApplyRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets settleRequestNo
     *
     * @return string
     */
    public function getSettleRequestNo()
    {
        return $this->settleRequestNo;
    }

    /**
     * Sets settleRequestNo
     *
     * @param string $settleRequestNo
     * @return SelfSettleApplyRequest
     */
    public function setSettleRequestNo($settleRequestNo)
    {
        $this->settleRequestNo = $settleRequestNo;
        return $this;
    }
    /**
     * Gets operatePeriod
     *
     * @return string
     */
    public function getOperatePeriod()
    {
        return $this->operatePeriod;
    }

    /**
     * Sets operatePeriod
     *
     * @param string $operatePeriod
     * @return SelfSettleApplyRequest
     */
    public function setOperatePeriod($operatePeriod)
    {
        $this->operatePeriod = $operatePeriod;
        return $this;
    }
    /**
     * Gets endTime
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets endTime
     *
     * @param \DateTime $endTime
     * @return SelfSettleApplyRequest
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }
    /**
     * Gets settleAmount
     *
     * @return float
     */
    public function getSettleAmount()
    {
        return $this->settleAmount;
    }

    /**
     * Sets settleAmount
     *
     * @param float $settleAmount
     * @return SelfSettleApplyRequest
     */
    public function setSettleAmount($settleAmount)
    {
        $this->settleAmount = $settleAmount;
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
     * @return SelfSettleApplyRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }
    /**
     * Gets bankRemark
     *
     * @return string
     */
    public function getBankRemark()
    {
        return $this->bankRemark;
    }

    /**
     * Sets bankRemark
     *
     * @param string $bankRemark
     * @return SelfSettleApplyRequest
     */
    public function setBankRemark($bankRemark)
    {
        $this->bankRemark = $bankRemark;
        return $this;
    }
    /**
     * Gets extInfo
     *
     * @return string
     */
    public function getExtInfo()
    {
        return $this->extInfo;
    }

    /**
     * Sets extInfo
     *
     * @param string $extInfo
     * @return SelfSettleApplyRequest
     */
    public function setExtInfo($extInfo)
    {
        $this->extInfo = $extInfo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'selfSettleApply';
    }


}
