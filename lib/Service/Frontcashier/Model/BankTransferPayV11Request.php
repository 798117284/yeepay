<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


class BankTransferPayV11Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @var float
     */
    private $orderAmount;
    /**
     * @var \DateTime
     */
    private $expiredTime;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $memo;
    /**
     * @var string
     */
    private $checkType;
    /**
     * @var string
     */
    private $goodsName;
    /**
     * @var string
     */
    private $fundProcessType;
    /**
     * @var string
     */
    private $csUrl;
    /**
     * @var string
     */
    private $payerAccountName;
    /**
     * @var string
     */
    private $bankAccountNo;
    /**
     * @var string
     */
    private $customerId;
    /**
     * @var string
     */
    private $payerAccountNo;
    /**
     * @var string
     */
    private $accountNotifyUrl;
    /**
     * @var string
     */
    private $businessInfo;
    /**
     * @var string
     */
    private $ypPromotionInfo;

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
     * @return BankTransferPayV11Request
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
     * @return BankTransferPayV11Request
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
     * @return BankTransferPayV11Request
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Gets orderAmount
     *
     * @return float
     */
    public function getOrderAmount()
    {
        return $this->orderAmount;
    }

    /**
     * Sets orderAmount
     *
     * @param float $orderAmount
     * @return BankTransferPayV11Request
     */
    public function setOrderAmount($orderAmount)
    {
        $this->orderAmount = $orderAmount;
        return $this;
    }
    /**
     * Gets expiredTime
     *
     * @return \DateTime
     */
    public function getExpiredTime()
    {
        return $this->expiredTime;
    }

    /**
     * Sets expiredTime
     *
     * @param \DateTime $expiredTime
     * @return BankTransferPayV11Request
     */
    public function setExpiredTime($expiredTime)
    {
        $this->expiredTime = $expiredTime;
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
     * @return BankTransferPayV11Request
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }
    /**
     * Gets memo
     *
     * @return string
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Sets memo
     *
     * @param string $memo
     * @return BankTransferPayV11Request
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;
        return $this;
    }
    /**
     * Gets checkType
     *
     * @return string
     */
    public function getCheckType()
    {
        return $this->checkType;
    }

    /**
     * Sets checkType
     *
     * @param string $checkType
     * @return BankTransferPayV11Request
     */
    public function setCheckType($checkType)
    {
        $this->checkType = $checkType;
        return $this;
    }
    /**
     * Gets goodsName
     *
     * @return string
     */
    public function getGoodsName()
    {
        return $this->goodsName;
    }

    /**
     * Sets goodsName
     *
     * @param string $goodsName
     * @return BankTransferPayV11Request
     */
    public function setGoodsName($goodsName)
    {
        $this->goodsName = $goodsName;
        return $this;
    }
    /**
     * Gets fundProcessType
     *
     * @return string
     */
    public function getFundProcessType()
    {
        return $this->fundProcessType;
    }

    /**
     * Sets fundProcessType
     *
     * @param string $fundProcessType
     * @return BankTransferPayV11Request
     */
    public function setFundProcessType($fundProcessType)
    {
        $this->fundProcessType = $fundProcessType;
        return $this;
    }
    /**
     * Gets csUrl
     *
     * @return string
     */
    public function getCsUrl()
    {
        return $this->csUrl;
    }

    /**
     * Sets csUrl
     *
     * @param string $csUrl
     * @return BankTransferPayV11Request
     */
    public function setCsUrl($csUrl)
    {
        $this->csUrl = $csUrl;
        return $this;
    }
    /**
     * Gets payerAccountName
     *
     * @return string
     */
    public function getPayerAccountName()
    {
        return $this->payerAccountName;
    }

    /**
     * Sets payerAccountName
     *
     * @param string $payerAccountName
     * @return BankTransferPayV11Request
     */
    public function setPayerAccountName($payerAccountName)
    {
        $this->payerAccountName = $payerAccountName;
        return $this;
    }
    /**
     * Gets bankAccountNo
     *
     * @return string
     */
    public function getBankAccountNo()
    {
        return $this->bankAccountNo;
    }

    /**
     * Sets bankAccountNo
     *
     * @param string $bankAccountNo
     * @return BankTransferPayV11Request
     */
    public function setBankAccountNo($bankAccountNo)
    {
        $this->bankAccountNo = $bankAccountNo;
        return $this;
    }
    /**
     * Gets customerId
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Sets customerId
     *
     * @param string $customerId
     * @return BankTransferPayV11Request
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
        return $this;
    }
    /**
     * Gets payerAccountNo
     *
     * @return string
     */
    public function getPayerAccountNo()
    {
        return $this->payerAccountNo;
    }

    /**
     * Sets payerAccountNo
     *
     * @param string $payerAccountNo
     * @return BankTransferPayV11Request
     */
    public function setPayerAccountNo($payerAccountNo)
    {
        $this->payerAccountNo = $payerAccountNo;
        return $this;
    }
    /**
     * Gets accountNotifyUrl
     *
     * @return string
     */
    public function getAccountNotifyUrl()
    {
        return $this->accountNotifyUrl;
    }

    /**
     * Sets accountNotifyUrl
     *
     * @param string $accountNotifyUrl
     * @return BankTransferPayV11Request
     */
    public function setAccountNotifyUrl($accountNotifyUrl)
    {
        $this->accountNotifyUrl = $accountNotifyUrl;
        return $this;
    }
    /**
     * Gets businessInfo
     *
     * @return string
     */
    public function getBusinessInfo()
    {
        return $this->businessInfo;
    }

    /**
     * Sets businessInfo
     *
     * @param string $businessInfo
     * @return BankTransferPayV11Request
     */
    public function setBusinessInfo($businessInfo)
    {
        $this->businessInfo = $businessInfo;
        return $this;
    }
    /**
     * Gets ypPromotionInfo
     *
     * @return string
     */
    public function getYpPromotionInfo()
    {
        return $this->ypPromotionInfo;
    }

    /**
     * Sets ypPromotionInfo
     *
     * @param string $ypPromotionInfo
     * @return BankTransferPayV11Request
     */
    public function setYpPromotionInfo($ypPromotionInfo)
    {
        $this->ypPromotionInfo = $ypPromotionInfo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'bank_transfer_pay_v1_1';
    }


}
