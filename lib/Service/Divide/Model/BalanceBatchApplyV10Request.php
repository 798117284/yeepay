<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;


class BalanceBatchApplyV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $divideRequestId;
    /**
     * @var string
     */
    private $divideDetail;
    /**
     * @var string
     */
    private $batchNotifyUrl;
    /**
     * @var string
     */
    private $accountType;
    /**
     * @var string
     */
    private $divideAmountMode;

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
     * @return BalanceBatchApplyV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets divideRequestId
     *
     * @return string
     */
    public function getDivideRequestId()
    {
        return $this->divideRequestId;
    }

    /**
     * Sets divideRequestId
     *
     * @param string $divideRequestId
     * @return BalanceBatchApplyV10Request
     */
    public function setDivideRequestId($divideRequestId)
    {
        $this->divideRequestId = $divideRequestId;
        return $this;
    }
    /**
     * Gets divideDetail
     *
     * @return string
     */
    public function getDivideDetail()
    {
        return $this->divideDetail;
    }

    /**
     * Sets divideDetail
     *
     * @param string $divideDetail
     * @return BalanceBatchApplyV10Request
     */
    public function setDivideDetail($divideDetail)
    {
        $this->divideDetail = $divideDetail;
        return $this;
    }
    /**
     * Gets batchNotifyUrl
     *
     * @return string
     */
    public function getBatchNotifyUrl()
    {
        return $this->batchNotifyUrl;
    }

    /**
     * Sets batchNotifyUrl
     *
     * @param string $batchNotifyUrl
     * @return BalanceBatchApplyV10Request
     */
    public function setBatchNotifyUrl($batchNotifyUrl)
    {
        $this->batchNotifyUrl = $batchNotifyUrl;
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
     * @return BalanceBatchApplyV10Request
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
        return $this;
    }
    /**
     * Gets divideAmountMode
     *
     * @return string
     */
    public function getDivideAmountMode()
    {
        return $this->divideAmountMode;
    }

    /**
     * Sets divideAmountMode
     *
     * @param string $divideAmountMode
     * @return BalanceBatchApplyV10Request
     */
    public function setDivideAmountMode($divideAmountMode)
    {
        $this->divideAmountMode = $divideAmountMode;
        return $this;
    }

    public static function getOperationId()
    {
        return 'balance_batch_apply_v1_0';
    }


}
