<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AccountManageBankTradeFlowQueryRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $trxStartDate;
    /**
     * @var string
     */
    private $trxEndDate;
    /**
     * @var int
     */
    private $pageSize;
    /**
     * @var int
     */
    private $pageNo;

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
     * @return AccountManageBankTradeFlowQueryRequest
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
     * @return AccountManageBankTradeFlowQueryRequest
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
     * @return AccountManageBankTradeFlowQueryRequest
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
     * @return AccountManageBankTradeFlowQueryRequest
     */
    public function setBankAccountNo($bankAccountNo)
    {
        $this->bankAccountNo = $bankAccountNo;
        return $this;
    }
    /**
     * Gets trxStartDate
     *
     * @return string
     */
    public function getTrxStartDate()
    {
        return $this->trxStartDate;
    }

    /**
     * Sets trxStartDate
     *
     * @param string $trxStartDate
     * @return AccountManageBankTradeFlowQueryRequest
     */
    public function setTrxStartDate($trxStartDate)
    {
        $this->trxStartDate = $trxStartDate;
        return $this;
    }
    /**
     * Gets trxEndDate
     *
     * @return string
     */
    public function getTrxEndDate()
    {
        return $this->trxEndDate;
    }

    /**
     * Sets trxEndDate
     *
     * @param string $trxEndDate
     * @return AccountManageBankTradeFlowQueryRequest
     */
    public function setTrxEndDate($trxEndDate)
    {
        $this->trxEndDate = $trxEndDate;
        return $this;
    }
    /**
     * Gets pageSize
     *
     * @return int
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * Sets pageSize
     *
     * @param int $pageSize
     * @return AccountManageBankTradeFlowQueryRequest
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        return $this;
    }
    /**
     * Gets pageNo
     *
     * @return int
     */
    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * Sets pageNo
     *
     * @param int $pageNo
     * @return AccountManageBankTradeFlowQueryRequest
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'account_manage_bankTradeFlow_query';
    }


}
