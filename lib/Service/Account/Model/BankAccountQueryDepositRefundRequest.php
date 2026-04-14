<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class BankAccountQueryDepositRefundRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $refundFlowNo;

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
     * @return BankAccountQueryDepositRefundRequest
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
     * @return BankAccountQueryDepositRefundRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets refundFlowNo
     *
     * @return string
     */
    public function getRefundFlowNo()
    {
        return $this->refundFlowNo;
    }

    /**
     * Sets refundFlowNo
     *
     * @param string $refundFlowNo
     * @return BankAccountQueryDepositRefundRequest
     */
    public function setRefundFlowNo($refundFlowNo)
    {
        $this->refundFlowNo = $refundFlowNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'bank_account_query_deposit_refund';
    }


}
