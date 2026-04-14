<?php

namespace Yeepay\Yop\Sdk\Service\Settle\Model;


class RecordsQueryRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $receiverMerchantNo;
    /**
     * @var string
     */
    private $settleRequestNo;
    /**
     * @var \DateTime
     */
    private $settleRequestBeginTime;
    /**
     * @var \DateTime
     */
    private $settleRequestEndTime;

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
     * @return RecordsQueryRequest
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
     * @return RecordsQueryRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets receiverMerchantNo
     *
     * @return string
     */
    public function getReceiverMerchantNo()
    {
        return $this->receiverMerchantNo;
    }

    /**
     * Sets receiverMerchantNo
     *
     * @param string $receiverMerchantNo
     * @return RecordsQueryRequest
     */
    public function setReceiverMerchantNo($receiverMerchantNo)
    {
        $this->receiverMerchantNo = $receiverMerchantNo;
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
     * @return RecordsQueryRequest
     */
    public function setSettleRequestNo($settleRequestNo)
    {
        $this->settleRequestNo = $settleRequestNo;
        return $this;
    }
    /**
     * Gets settleRequestBeginTime
     *
     * @return \DateTime
     */
    public function getSettleRequestBeginTime()
    {
        return $this->settleRequestBeginTime;
    }

    /**
     * Sets settleRequestBeginTime
     *
     * @param \DateTime $settleRequestBeginTime
     * @return RecordsQueryRequest
     */
    public function setSettleRequestBeginTime($settleRequestBeginTime)
    {
        $this->settleRequestBeginTime = $settleRequestBeginTime;
        return $this;
    }
    /**
     * Gets settleRequestEndTime
     *
     * @return \DateTime
     */
    public function getSettleRequestEndTime()
    {
        return $this->settleRequestEndTime;
    }

    /**
     * Sets settleRequestEndTime
     *
     * @param \DateTime $settleRequestEndTime
     * @return RecordsQueryRequest
     */
    public function setSettleRequestEndTime($settleRequestEndTime)
    {
        $this->settleRequestEndTime = $settleRequestEndTime;
        return $this;
    }

    public static function getOperationId()
    {
        return 'recordsQuery';
    }


}
