<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AccountBookRefundV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $merchantRefundRequestNo;
    /**
     * @var string
     */
    private $originalOrderNo;
    /**
     * @var float
     */
    private $refundAmount;
    /**
     * @var string
     */
    private $bankPostscrip;
    /**
     * @var string
     */
    private $notifyUrl;

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
     * @return AccountBookRefundV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
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
     * @return AccountBookRefundV10Request
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets merchantRefundRequestNo
     *
     * @return string
     */
    public function getMerchantRefundRequestNo()
    {
        return $this->merchantRefundRequestNo;
    }

    /**
     * Sets merchantRefundRequestNo
     *
     * @param string $merchantRefundRequestNo
     * @return AccountBookRefundV10Request
     */
    public function setMerchantRefundRequestNo($merchantRefundRequestNo)
    {
        $this->merchantRefundRequestNo = $merchantRefundRequestNo;
        return $this;
    }
    /**
     * Gets originalOrderNo
     *
     * @return string
     */
    public function getOriginalOrderNo()
    {
        return $this->originalOrderNo;
    }

    /**
     * Sets originalOrderNo
     *
     * @param string $originalOrderNo
     * @return AccountBookRefundV10Request
     */
    public function setOriginalOrderNo($originalOrderNo)
    {
        $this->originalOrderNo = $originalOrderNo;
        return $this;
    }
    /**
     * Gets refundAmount
     *
     * @return float
     */
    public function getRefundAmount()
    {
        return $this->refundAmount;
    }

    /**
     * Sets refundAmount
     *
     * @param float $refundAmount
     * @return AccountBookRefundV10Request
     */
    public function setRefundAmount($refundAmount)
    {
        $this->refundAmount = $refundAmount;
        return $this;
    }
    /**
     * Gets bankPostscrip
     *
     * @return string
     */
    public function getBankPostscrip()
    {
        return $this->bankPostscrip;
    }

    /**
     * Sets bankPostscrip
     *
     * @param string $bankPostscrip
     * @return AccountBookRefundV10Request
     */
    public function setBankPostscrip($bankPostscrip)
    {
        $this->bankPostscrip = $bankPostscrip;
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
     * @return AccountBookRefundV10Request
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }

    public static function getOperationId()
    {
        return 'account_book_refund_v1_0';
    }


}
