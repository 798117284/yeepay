<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class WithdrawOrderV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $merchantNo;
    /**
     * @var string
     */
    private $cardSelectModel;
    /**
     * @var string
     */
    private $cardRouteModel;
    /**
     * @var string
     */
    private $bankCardId;
    /**
     * @var string
     */
    private $bankAccountNo;
    /**
     * @var string
     */
    private $receiveType;
    /**
     * @var float
     */
    private $orderAmount;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $remark;
    /**
     * @var string
     */
    private $terminalType;
    /**
     * @var string
     */
    private $feeDeductType;
    /**
     * @var string
     */
    private $accountType;
    /**
     * @var string
     */
    private $macAddress;
    /**
     * @var string
     */
    private $withdrawModel;
    /**
     * @var string
     */
    private $debitBankAccountBookNo;
    /**
     * @var string
     */
    private $verifyType;
    /**
     * @var string
     */
    private $verifyValue;

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
     * @return WithdrawOrderV10Request
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
     * @return WithdrawOrderV10Request
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
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
     * @return WithdrawOrderV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets cardSelectModel
     *
     * @return string
     */
    public function getCardSelectModel()
    {
        return $this->cardSelectModel;
    }

    /**
     * Sets cardSelectModel
     *
     * @param string $cardSelectModel
     * @return WithdrawOrderV10Request
     */
    public function setCardSelectModel($cardSelectModel)
    {
        $this->cardSelectModel = $cardSelectModel;
        return $this;
    }
    /**
     * Gets cardRouteModel
     *
     * @return string
     */
    public function getCardRouteModel()
    {
        return $this->cardRouteModel;
    }

    /**
     * Sets cardRouteModel
     *
     * @param string $cardRouteModel
     * @return WithdrawOrderV10Request
     */
    public function setCardRouteModel($cardRouteModel)
    {
        $this->cardRouteModel = $cardRouteModel;
        return $this;
    }
    /**
     * Gets bankCardId
     *
     * @return string
     */
    public function getBankCardId()
    {
        return $this->bankCardId;
    }

    /**
     * Sets bankCardId
     *
     * @param string $bankCardId
     * @return WithdrawOrderV10Request
     */
    public function setBankCardId($bankCardId)
    {
        $this->bankCardId = $bankCardId;
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
     * @return WithdrawOrderV10Request
     */
    public function setBankAccountNo($bankAccountNo)
    {
        $this->bankAccountNo = $bankAccountNo;
        return $this;
    }
    /**
     * Gets receiveType
     *
     * @return string
     */
    public function getReceiveType()
    {
        return $this->receiveType;
    }

    /**
     * Sets receiveType
     *
     * @param string $receiveType
     * @return WithdrawOrderV10Request
     */
    public function setReceiveType($receiveType)
    {
        $this->receiveType = $receiveType;
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
     * @return WithdrawOrderV10Request
     */
    public function setOrderAmount($orderAmount)
    {
        $this->orderAmount = $orderAmount;
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
     * @return WithdrawOrderV10Request
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }
    /**
     * Gets remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets remark
     *
     * @param string $remark
     * @return WithdrawOrderV10Request
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
        return $this;
    }
    /**
     * Gets terminalType
     *
     * @return string
     */
    public function getTerminalType()
    {
        return $this->terminalType;
    }

    /**
     * Sets terminalType
     *
     * @param string $terminalType
     * @return WithdrawOrderV10Request
     */
    public function setTerminalType($terminalType)
    {
        $this->terminalType = $terminalType;
        return $this;
    }
    /**
     * Gets feeDeductType
     *
     * @return string
     */
    public function getFeeDeductType()
    {
        return $this->feeDeductType;
    }

    /**
     * Sets feeDeductType
     *
     * @param string $feeDeductType
     * @return WithdrawOrderV10Request
     */
    public function setFeeDeductType($feeDeductType)
    {
        $this->feeDeductType = $feeDeductType;
        return $this;
    }
    /**
     * Gets accountType
     *
     * @return string
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * Sets accountType
     *
     * @param string $accountType
     * @return WithdrawOrderV10Request
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
        return $this;
    }
    /**
     * Gets macAddress
     *
     * @return string
     */
    public function getMacAddress()
    {
        return $this->macAddress;
    }

    /**
     * Sets macAddress
     *
     * @param string $macAddress
     * @return WithdrawOrderV10Request
     */
    public function setMacAddress($macAddress)
    {
        $this->macAddress = $macAddress;
        return $this;
    }
    /**
     * Gets withdrawModel
     *
     * @return string
     */
    public function getWithdrawModel()
    {
        return $this->withdrawModel;
    }

    /**
     * Sets withdrawModel
     *
     * @param string $withdrawModel
     * @return WithdrawOrderV10Request
     */
    public function setWithdrawModel($withdrawModel)
    {
        $this->withdrawModel = $withdrawModel;
        return $this;
    }
    /**
     * Gets debitBankAccountBookNo
     *
     * @return string
     */
    public function getDebitBankAccountBookNo()
    {
        return $this->debitBankAccountBookNo;
    }

    /**
     * Sets debitBankAccountBookNo
     *
     * @param string $debitBankAccountBookNo
     * @return WithdrawOrderV10Request
     */
    public function setDebitBankAccountBookNo($debitBankAccountBookNo)
    {
        $this->debitBankAccountBookNo = $debitBankAccountBookNo;
        return $this;
    }
    /**
     * Gets verifyType
     *
     * @return string
     */
    public function getVerifyType()
    {
        return $this->verifyType;
    }

    /**
     * Sets verifyType
     *
     * @param string $verifyType
     * @return WithdrawOrderV10Request
     */
    public function setVerifyType($verifyType)
    {
        $this->verifyType = $verifyType;
        return $this;
    }
    /**
     * Gets verifyValue
     *
     * @return string
     */
    public function getVerifyValue()
    {
        return $this->verifyValue;
    }

    /**
     * Sets verifyValue
     *
     * @param string $verifyValue
     * @return WithdrawOrderV10Request
     */
    public function setVerifyValue($verifyValue)
    {
        $this->verifyValue = $verifyValue;
        return $this;
    }

    public static function getOperationId()
    {
        return 'withdraw_order_v1_0';
    }


}
