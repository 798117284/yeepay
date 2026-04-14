<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class BankAccountQuerySubAccountRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $merchantAccountUid;
    /**
     * @var string
     */
    private $bankCode;
    /**
     * @var string
     */
    private $bankAccountNo;

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
     * @return BankAccountQuerySubAccountRequest
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
     * @return BankAccountQuerySubAccountRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets merchantAccountUid
     *
     * @return string
     */
    public function getMerchantAccountUid()
    {
        return $this->merchantAccountUid;
    }

    /**
     * Sets merchantAccountUid
     *
     * @param string $merchantAccountUid
     * @return BankAccountQuerySubAccountRequest
     */
    public function setMerchantAccountUid($merchantAccountUid)
    {
        $this->merchantAccountUid = $merchantAccountUid;
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
     * @return BankAccountQuerySubAccountRequest
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;
        return $this;
    }
    /**
     * Gets bankAccountNo
     *
     * @return string
     */
    public function getBankAccountNo()
    {
        return $this->bankAccountNo;
    }

    /**
     * Sets bankAccountNo
     *
     * @param string $bankAccountNo
     * @return BankAccountQuerySubAccountRequest
     */
    public function setBankAccountNo($bankAccountNo)
    {
        $this->bankAccountNo = $bankAccountNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'bank_account_query_sub_account';
    }


}
