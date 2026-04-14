<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class BankAccountDownloadReceiptRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $bankCode;
    /**
     * @var string
     */
    private $bankAccountNo;
    /**
     * @var string
     */
    private $bankSerialNo;
    /**
     * @var string
     */
    private $trxDateTime;

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
     * @return BankAccountDownloadReceiptRequest
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
     * @return BankAccountDownloadReceiptRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
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
     * @return BankAccountDownloadReceiptRequest
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
     * @return BankAccountDownloadReceiptRequest
     */
    public function setBankAccountNo($bankAccountNo)
    {
        $this->bankAccountNo = $bankAccountNo;
        return $this;
    }
    /**
     * Gets bankSerialNo
     *
     * @return string
     */
    public function getBankSerialNo()
    {
        return $this->bankSerialNo;
    }

    /**
     * Sets bankSerialNo
     *
     * @param string $bankSerialNo
     * @return BankAccountDownloadReceiptRequest
     */
    public function setBankSerialNo($bankSerialNo)
    {
        $this->bankSerialNo = $bankSerialNo;
        return $this;
    }
    /**
     * Gets trxDateTime
     *
     * @return string
     */
    public function getTrxDateTime()
    {
        return $this->trxDateTime;
    }

    /**
     * Sets trxDateTime
     *
     * @param string $trxDateTime
     * @return BankAccountDownloadReceiptRequest
     */
    public function setTrxDateTime($trxDateTime)
    {
        $this->trxDateTime = $trxDateTime;
        return $this;
    }

    public static function getOperationId()
    {
        return 'bank_account_download_receipt';
    }


}
