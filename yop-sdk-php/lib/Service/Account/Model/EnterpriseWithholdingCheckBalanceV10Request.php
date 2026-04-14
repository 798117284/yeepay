<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class EnterpriseWithholdingCheckBalanceV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $payerMerchantNo;
    /**
     * @var float
     */
    private $tradeAmount;

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
     * @return EnterpriseWithholdingCheckBalanceV10Request
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
     * @return EnterpriseWithholdingCheckBalanceV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets payerMerchantNo
     *
     * @return string
     */
    public function getPayerMerchantNo()
    {
        return $this->payerMerchantNo;
    }

    /**
     * Sets payerMerchantNo
     *
     * @param string $payerMerchantNo
     * @return EnterpriseWithholdingCheckBalanceV10Request
     */
    public function setPayerMerchantNo($payerMerchantNo)
    {
        $this->payerMerchantNo = $payerMerchantNo;
        return $this;
    }
    /**
     * Gets tradeAmount
     *
     * @return float
     */
    public function getTradeAmount()
    {
        return $this->tradeAmount;
    }

    /**
     * Sets tradeAmount
     *
     * @param float $tradeAmount
     * @return EnterpriseWithholdingCheckBalanceV10Request
     */
    public function setTradeAmount($tradeAmount)
    {
        $this->tradeAmount = $tradeAmount;
        return $this;
    }

    public static function getOperationId()
    {
        return 'enterprise_withholding_check_balance_v1_0';
    }


}
