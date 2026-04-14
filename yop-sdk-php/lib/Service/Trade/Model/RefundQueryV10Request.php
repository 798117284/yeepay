<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class RefundQueryV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
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
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $uniqueRefundNo;

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
     * @return RefundQueryV10Request
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
     * @return RefundQueryV10Request
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
     * @return RefundQueryV10Request
     */
    public function setRefundRequestId($refundRequestId)
    {
        $this->refundRequestId = $refundRequestId;
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
     * @return RefundQueryV10Request
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets uniqueRefundNo
     *
     * @return string
     */
    public function getUniqueRefundNo()
    {
        return $this->uniqueRefundNo;
    }

    /**
     * Sets uniqueRefundNo
     *
     * @param string $uniqueRefundNo
     * @return RefundQueryV10Request
     */
    public function setUniqueRefundNo($uniqueRefundNo)
    {
        $this->uniqueRefundNo = $uniqueRefundNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'refund_query_v1_0';
    }


}
