<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class UpdateAccountInfoRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $applicationNo;
    /**
     * @var string
     */
    private $reportMerchantNo;
    /**
     * @var string
     */
    private $channel;
    /**
     * @var string
     */
    private $scene;
    /**
     * @var string
     */
    private $accountNo;
    /**
     * @var string
     */
    private $accountName;
    /**
     * @var string
     */
    private $accountBank;
    /**
     * @var string
     */
    private $accountBankNo;
    /**
     * @var string
     */
    private $accountBankName;
    /**
     * @var string
     */
    private $accountBankDistinctCode;
    /**
     * @var string
     */
    private $accountBankType;

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
     * @return UpdateAccountInfoRequest
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
     * @return UpdateAccountInfoRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets applicationNo
     *
     * @return string
     */
    public function getApplicationNo()
    {
        return $this->applicationNo;
    }

    /**
     * Sets applicationNo
     *
     * @param string $applicationNo
     * @return UpdateAccountInfoRequest
     */
    public function setApplicationNo($applicationNo)
    {
        $this->applicationNo = $applicationNo;
        return $this;
    }
    /**
     * Gets reportMerchantNo
     *
     * @return string
     */
    public function getReportMerchantNo()
    {
        return $this->reportMerchantNo;
    }

    /**
     * Sets reportMerchantNo
     *
     * @param string $reportMerchantNo
     * @return UpdateAccountInfoRequest
     */
    public function setReportMerchantNo($reportMerchantNo)
    {
        $this->reportMerchantNo = $reportMerchantNo;
        return $this;
    }
    /**
     * Gets channel
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Sets channel
     *
     * @param string $channel
     * @return UpdateAccountInfoRequest
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
        return $this;
    }
    /**
     * Gets scene
     *
     * @return string
     */
    public function getScene()
    {
        return $this->scene;
    }

    /**
     * Sets scene
     *
     * @param string $scene
     * @return UpdateAccountInfoRequest
     */
    public function setScene($scene)
    {
        $this->scene = $scene;
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
     * @return UpdateAccountInfoRequest
     */
    public function setAccountNo($accountNo)
    {
        $this->accountNo = $accountNo;
        return $this;
    }
    /**
     * Gets accountName
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * Sets accountName
     *
     * @param string $accountName
     * @return UpdateAccountInfoRequest
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
        return $this;
    }
    /**
     * Gets accountBank
     *
     * @return string
     */
    public function getAccountBank()
    {
        return $this->accountBank;
    }

    /**
     * Sets accountBank
     *
     * @param string $accountBank
     * @return UpdateAccountInfoRequest
     */
    public function setAccountBank($accountBank)
    {
        $this->accountBank = $accountBank;
        return $this;
    }
    /**
     * Gets accountBankNo
     *
     * @return string
     */
    public function getAccountBankNo()
    {
        return $this->accountBankNo;
    }

    /**
     * Sets accountBankNo
     *
     * @param string $accountBankNo
     * @return UpdateAccountInfoRequest
     */
    public function setAccountBankNo($accountBankNo)
    {
        $this->accountBankNo = $accountBankNo;
        return $this;
    }
    /**
     * Gets accountBankName
     *
     * @return string
     */
    public function getAccountBankName()
    {
        return $this->accountBankName;
    }

    /**
     * Sets accountBankName
     *
     * @param string $accountBankName
     * @return UpdateAccountInfoRequest
     */
    public function setAccountBankName($accountBankName)
    {
        $this->accountBankName = $accountBankName;
        return $this;
    }
    /**
     * Gets accountBankDistinctCode
     *
     * @return string
     */
    public function getAccountBankDistinctCode()
    {
        return $this->accountBankDistinctCode;
    }

    /**
     * Sets accountBankDistinctCode
     *
     * @param string $accountBankDistinctCode
     * @return UpdateAccountInfoRequest
     */
    public function setAccountBankDistinctCode($accountBankDistinctCode)
    {
        $this->accountBankDistinctCode = $accountBankDistinctCode;
        return $this;
    }
    /**
     * Gets accountBankType
     *
     * @return string
     */
    public function getAccountBankType()
    {
        return $this->accountBankType;
    }

    /**
     * Sets accountBankType
     *
     * @param string $accountBankType
     * @return UpdateAccountInfoRequest
     */
    public function setAccountBankType($accountBankType)
    {
        $this->accountBankType = $accountBankType;
        return $this;
    }

    public static function getOperationId()
    {
        return 'updateAccountInfo';
    }


}
