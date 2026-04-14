<?php

namespace Yeepay\Yop\Sdk\Service\Std\Model;


class BillFundbillFlowQueryV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $startDate;
    /**
     * @var string
     */
    private $endDate;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var int
     */
    private $page;
    /**
     * @var int
     */
    private $size;
    /**
     * @var string
     */
    private $trxCode;
    /**
     * @var string
     */
    private $accountType;
    /**
     * @var string
     */
    private $merchantNo;

    /**
     * Gets startDate
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets startDate
     *
     * @param string $startDate
     * @return BillFundbillFlowQueryV10Request
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * Gets endDate
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets endDate
     *
     * @param string $endDate
     * @return BillFundbillFlowQueryV10Request
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
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
     * @return BillFundbillFlowQueryV10Request
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets page
     *
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Sets page
     *
     * @param int $page
     * @return BillFundbillFlowQueryV10Request
     */
    public function setPage($page)
    {
        $this->page = $page;
        return $this;
    }
    /**
     * Gets size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Sets size
     *
     * @param int $size
     * @return BillFundbillFlowQueryV10Request
     */
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }
    /**
     * Gets trxCode
     *
     * @return string
     */
    public function getTrxCode()
    {
        return $this->trxCode;
    }

    /**
     * Sets trxCode
     *
     * @param string $trxCode
     * @return BillFundbillFlowQueryV10Request
     */
    public function setTrxCode($trxCode)
    {
        $this->trxCode = $trxCode;
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
     * @return BillFundbillFlowQueryV10Request
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
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
     * @return BillFundbillFlowQueryV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'bill_fundbill_flow_query_v1_0';
    }


}
