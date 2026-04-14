<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class UnionAccountTradeAccountBookRemitRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @var string
     */
    private $merchantAccountBookNo;
    /**
     * @var string
     */
    private $ypAccountBookNo;
    /**
     * @var string
     */
    private $receiverAccountNo;
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
    private $notifyUrl;
    /**
     * @var string
     */
    private $terminalType;
    /**
     * @var string
     */
    private $comments;
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
    private $receiveType;

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
     * @return UnionAccountTradeAccountBookRemitRequest
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
     * @return UnionAccountTradeAccountBookRemitRequest
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
     * @return UnionAccountTradeAccountBookRemitRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets merchantAccountBookNo
     *
     * @return string
     */
    public function getMerchantAccountBookNo()
    {
        return $this->merchantAccountBookNo;
    }

    /**
     * Sets merchantAccountBookNo
     *
     * @param string $merchantAccountBookNo
     * @return UnionAccountTradeAccountBookRemitRequest
     */
    public function setMerchantAccountBookNo($merchantAccountBookNo)
    {
        $this->merchantAccountBookNo = $merchantAccountBookNo;
        return $this;
    }
    /**
     * Gets ypAccountBookNo
     *
     * @return string
     */
    public function getYpAccountBookNo()
    {
        return $this->ypAccountBookNo;
    }

    /**
     * Sets ypAccountBookNo
     *
     * @param string $ypAccountBookNo
     * @return UnionAccountTradeAccountBookRemitRequest
     */
    public function setYpAccountBookNo($ypAccountBookNo)
    {
        $this->ypAccountBookNo = $ypAccountBookNo;
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
     * @return UnionAccountTradeAccountBookRemitRequest
     */
    public function setReceiverAccountNo($receiverAccountNo)
    {
        $this->receiverAccountNo = $receiverAccountNo;
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
     * @return UnionAccountTradeAccountBookRemitRequest
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
     * @return UnionAccountTradeAccountBookRemitRequest
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
     * @return UnionAccountTradeAccountBookRemitRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
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
     * @return UnionAccountTradeAccountBookRemitRequest
     */
    public function setTerminalType($terminalType)
    {
        $this->terminalType = $terminalType;
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
     * @return UnionAccountTradeAccountBookRemitRequest
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
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
     * @return UnionAccountTradeAccountBookRemitRequest
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
     * @return UnionAccountTradeAccountBookRemitRequest
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
     * @return UnionAccountTradeAccountBookRemitRequest
     */
    public function setRiskInfo($riskInfo)
    {
        $this->riskInfo = $riskInfo;
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
     * @return UnionAccountTradeAccountBookRemitRequest
     */
    public function setReceiveType($receiveType)
    {
        $this->receiveType = $receiveType;
        return $this;
    }

    public static function getOperationId()
    {
        return 'union_account_trade_account_book_remit';
    }


}
