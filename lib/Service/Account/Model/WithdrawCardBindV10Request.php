<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class WithdrawCardBindV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $bankCardType;
    /**
     * @var string
     */
    private $accountNo;
    /**
     * @var string
     */
    private $bankCode;
    /**
     * @var string
     */
    private $branchCode;

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
     * @return WithdrawCardBindV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets bankCardType
     *
     * @return string
     */
    public function getBankCardType()
    {
        return $this->bankCardType;
    }

    /**
     * Sets bankCardType
     *
     * @param string $bankCardType
     * @return WithdrawCardBindV10Request
     */
    public function setBankCardType($bankCardType)
    {
        $this->bankCardType = $bankCardType;
        return $this;
    }
    /**
     * Gets accountNo
     *
     * @return string
     */
    public function getAccountNo()
    {
        return $this->accountNo;
    }

    /**
     * Sets accountNo
     *
     * @param string $accountNo
     * @return WithdrawCardBindV10Request
     */
    public function setAccountNo($accountNo)
    {
        $this->accountNo = $accountNo;
        return $this;
    }
    /**
     * Gets bankCode
     *
     * @return string
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * Sets bankCode
     *
     * @param string $bankCode
     * @return WithdrawCardBindV10Request
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;
        return $this;
    }
    /**
     * Gets branchCode
     *
     * @return string
     */
    public function getBranchCode()
    {
        return $this->branchCode;
    }

    /**
     * Sets branchCode
     *
     * @param string $branchCode
     * @return WithdrawCardBindV10Request
     */
    public function setBranchCode($branchCode)
    {
        $this->branchCode = $branchCode;
        return $this;
    }

    public static function getOperationId()
    {
        return 'withdraw_card_bind_v1_0';
    }


}
