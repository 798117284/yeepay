<?php

namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class AccountQueryBalanceV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantMemberNo;
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
    private $accountType;
    /**
     * @var string
     */
    private $elecAccount;

    /**
     * Gets merchantMemberNo
     *
     * @return string
     */
    public function getMerchantMemberNo()
    {
        return $this->merchantMemberNo;
    }

    /**
     * Sets merchantMemberNo
     *
     * @param string $merchantMemberNo
     * @return AccountQueryBalanceV10Request
     */
    public function setMerchantMemberNo($merchantMemberNo)
    {
        $this->merchantMemberNo = $merchantMemberNo;
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
     * @return AccountQueryBalanceV10Request
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
     * @return AccountQueryBalanceV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
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
     * @return AccountQueryBalanceV10Request
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
        return $this;
    }
    /**
     * Gets elecAccount
     *
     * @return string
     */
    public function getElecAccount()
    {
        return $this->elecAccount;
    }

    /**
     * Sets elecAccount
     *
     * @param string $elecAccount
     * @return AccountQueryBalanceV10Request
     */
    public function setElecAccount($elecAccount)
    {
        $this->elecAccount = $elecAccount;
        return $this;
    }

    public static function getOperationId()
    {
        return 'account_query_balance_v1_0';
    }


}
