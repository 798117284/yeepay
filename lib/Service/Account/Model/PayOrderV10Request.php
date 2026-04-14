<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class PayOrderV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $requestNo;
    /**
     * @var float
     */
    private $orderAmount;
    /**
     * @var string
     */
    private $feeChargeSide;
    /**
     * @var string
     */
    private $receiveType;
    /**
     * @var string
     */
    private $receiverAccountNo;
    /**
     * @var string
     */
    private $receiverAccountName;
    /**
     * @var string
     */
    private $receiverBankCode;
    /**
     * @var string
     */
    private $bankAccountType;
    /**
     * @var string
     */
    private $branchBankCode;
    /**
     * @var string
     */
    private $comments;
    /**
     * @var string
     */
    private $terminalType;
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
    private $receiptComments;
    /**
     * @var string
     */
    private $riskInfo;
    /**
     * @var string
     */
    private $macAddress;

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
     * @return PayOrderV10Request
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
     * @return PayOrderV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
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
     * @return PayOrderV10Request
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
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
     * @return PayOrderV10Request
     */
    public function setOrderAmount($orderAmount)
    {
        $this->orderAmount = $orderAmount;
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
     * @return PayOrderV10Request
     */
    public function setFeeChargeSide($feeChargeSide)
    {
        $this->feeChargeSide = $feeChargeSide;
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
     * @return PayOrderV10Request
     */
    public function setReceiveType($receiveType)
    {
        $this->receiveType = $receiveType;
        return $this;
    }
    /**
     * Gets receiverAccountNo
     *
     * @return string
     */
    public function getReceiverAccountNo()
    {
        return $this->receiverAccountNo;
    }

    /**
     * Sets receiverAccountNo
     *
     * @param string $receiverAccountNo
     * @return PayOrderV10Request
     */
    public function setReceiverAccountNo($receiverAccountNo)
    {
        $this->receiverAccountNo = $receiverAccountNo;
        return $this;
    }
    /**
     * Gets receiverAccountName
     *
     * @return string
     */
    public function getReceiverAccountName()
    {
        return $this->receiverAccountName;
    }

    /**
     * Sets receiverAccountName
     *
     * @param string $receiverAccountName
     * @return PayOrderV10Request
     */
    public function setReceiverAccountName($receiverAccountName)
    {
        $this->receiverAccountName = $receiverAccountName;
        return $this;
    }
    /**
     * Gets receiverBankCode
     *
     * @return string
     */
    public function getReceiverBankCode()
    {
        return $this->receiverBankCode;
    }

    /**
     * Sets receiverBankCode
     *
     * @param string $receiverBankCode
     * @return PayOrderV10Request
     */
    public function setReceiverBankCode($receiverBankCode)
    {
        $this->receiverBankCode = $receiverBankCode;
        return $this;
    }
    /**
     * Gets bankAccountType
     *
     * @return string
     */
    public function getBankAccountType()
    {
        return $this->bankAccountType;
    }

    /**
     * Sets bankAccountType
     *
     * @param string $bankAccountType
     * @return PayOrderV10Request
     */
    public function setBankAccountType($bankAccountType)
    {
        $this->bankAccountType = $bankAccountType;
        return $this;
    }
    /**
     * Gets branchBankCode
     *
     * @return string
     */
    public function getBranchBankCode()
    {
        return $this->branchBankCode;
    }

    /**
     * Sets branchBankCode
     *
     * @param string $branchBankCode
     * @return PayOrderV10Request
     */
    public function setBranchBankCode($branchBankCode)
    {
        $this->branchBankCode = $branchBankCode;
        return $this;
    }
    /**
     * Gets comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets comments
     *
     * @param string $comments
     * @return PayOrderV10Request
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
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
     * @return PayOrderV10Request
     */
    public function setTerminalType($terminalType)
    {
        $this->terminalType = $terminalType;
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
     * @return PayOrderV10Request
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
     * @return PayOrderV10Request
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
        return $this;
    }
    /**
     * Gets receiptComments
     *
     * @return string
     */
    public function getReceiptComments()
    {
        return $this->receiptComments;
    }

    /**
     * Sets receiptComments
     *
     * @param string $receiptComments
     * @return PayOrderV10Request
     */
    public function setReceiptComments($receiptComments)
    {
        $this->receiptComments = $receiptComments;
        return $this;
    }
    /**
     * Gets riskInfo
     *
     * @return string
     */
    public function getRiskInfo()
    {
        return $this->riskInfo;
    }

    /**
     * Sets riskInfo
     *
     * @param string $riskInfo
     * @return PayOrderV10Request
     */
    public function setRiskInfo($riskInfo)
    {
        $this->riskInfo = $riskInfo;
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
     * @return PayOrderV10Request
     */
    public function setMacAddress($macAddress)
    {
        $this->macAddress = $macAddress;
        return $this;
    }

    public static function getOperationId()
    {
        return 'pay_order_v1_0';
    }


}
