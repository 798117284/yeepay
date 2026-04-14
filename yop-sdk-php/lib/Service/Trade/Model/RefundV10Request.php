<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class RefundV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @var string
     */
    private $refundRequestId;
    /**
     * @var string
     */
    private $uniqueOrderNo;
    /**
     * @var string
     */
    private $refundAmount;
    /**
     * @var string
     */
    private $description;
    /**
     * @var string
     */
    private $memo;
    /**
     * @var string
     */
    private $refundAccountType;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $divideBackDetail;
    /**
     * @var string
     */
    private $terminalInfo;
    /**
     * @var string
     */
    private $ypPromotionRefundInfo;
    /**
     * @var string
     */
    private $bankOrderId;

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
     * @return RefundV10Request
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
     * @return RefundV10Request
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
     * @return RefundV10Request
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Gets refundRequestId
     *
     * @return string
     */
    public function getRefundRequestId()
    {
        return $this->refundRequestId;
    }

    /**
     * Sets refundRequestId
     *
     * @param string $refundRequestId
     * @return RefundV10Request
     */
    public function setRefundRequestId($refundRequestId)
    {
        $this->refundRequestId = $refundRequestId;
        return $this;
    }
    /**
     * Gets uniqueOrderNo
     *
     * @return string
     */
    public function getUniqueOrderNo()
    {
        return $this->uniqueOrderNo;
    }

    /**
     * Sets uniqueOrderNo
     *
     * @param string $uniqueOrderNo
     * @return RefundV10Request
     */
    public function setUniqueOrderNo($uniqueOrderNo)
    {
        $this->uniqueOrderNo = $uniqueOrderNo;
        return $this;
    }
    /**
     * Gets refundAmount
     *
     * @return string
     */
    public function getRefundAmount()
    {
        return $this->refundAmount;
    }

    /**
     * Sets refundAmount
     *
     * @param string $refundAmount
     * @return RefundV10Request
     */
    public function setRefundAmount($refundAmount)
    {
        $this->refundAmount = $refundAmount;
        return $this;
    }
    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets description
     *
     * @param string $description
     * @return RefundV10Request
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * @return RefundV10Request
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;
        return $this;
    }
    /**
     * Gets refundAccountType
     *
     * @return string
     */
    public function getRefundAccountType()
    {
        return $this->refundAccountType;
    }

    /**
     * Sets refundAccountType
     *
     * @param string $refundAccountType
     * @return RefundV10Request
     */
    public function setRefundAccountType($refundAccountType)
    {
        $this->refundAccountType = $refundAccountType;
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
     * @return RefundV10Request
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }
    /**
     * Gets divideBackDetail
     *
     * @return string
     */
    public function getDivideBackDetail()
    {
        return $this->divideBackDetail;
    }

    /**
     * Sets divideBackDetail
     *
     * @param string $divideBackDetail
     * @return RefundV10Request
     */
    public function setDivideBackDetail($divideBackDetail)
    {
        $this->divideBackDetail = $divideBackDetail;
        return $this;
    }
    /**
     * Gets terminalInfo
     *
     * @return string
     */
    public function getTerminalInfo()
    {
        return $this->terminalInfo;
    }

    /**
     * Sets terminalInfo
     *
     * @param string $terminalInfo
     * @return RefundV10Request
     */
    public function setTerminalInfo($terminalInfo)
    {
        $this->terminalInfo = $terminalInfo;
        return $this;
    }
    /**
     * Gets ypPromotionRefundInfo
     *
     * @return string
     */
    public function getYpPromotionRefundInfo()
    {
        return $this->ypPromotionRefundInfo;
    }

    /**
     * Sets ypPromotionRefundInfo
     *
     * @param string $ypPromotionRefundInfo
     * @return RefundV10Request
     */
    public function setYpPromotionRefundInfo($ypPromotionRefundInfo)
    {
        $this->ypPromotionRefundInfo = $ypPromotionRefundInfo;
        return $this;
    }
    /**
     * Gets bankOrderId
     *
     * @return string
     */
    public function getBankOrderId()
    {
        return $this->bankOrderId;
    }

    /**
     * Sets bankOrderId
     *
     * @param string $bankOrderId
     * @return RefundV10Request
     */
    public function setBankOrderId($bankOrderId)
    {
        $this->bankOrderId = $bankOrderId;
        return $this;
    }

    public static function getOperationId()
    {
        return 'refund_v1_0';
    }


}
