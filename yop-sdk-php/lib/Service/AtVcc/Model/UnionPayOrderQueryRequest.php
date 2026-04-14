<?php

namespace Yeepay\Yop\Sdk\Service\AtVcc\Model;


class UnionPayOrderQueryRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $customerNo;
    /**
     * @var array|string
     */
    private $transactionTypeList;
    /**
     * @var int
     */
    private $pageNum;
    /**
     * @var int
     */
    private $pageSize;
    /**
     * @var string
     */
    private $startTime;
    /**
     * @var string
     */
    private $endTime;

    /**
     * Gets requestNo
     *
     * @return string
     */
    public function getRequestNo()
    {
        return $this->requestNo;
    }

    /**
     * Sets requestNo
     *
     * @param string $requestNo
     * @return UnionPayOrderQueryRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets customerNo
     *
     * @return string
     */
    public function getCustomerNo()
    {
        return $this->customerNo;
    }

    /**
     * Sets customerNo
     *
     * @param string $customerNo
     * @return UnionPayOrderQueryRequest
     */
    public function setCustomerNo($customerNo)
    {
        $this->customerNo = $customerNo;
        return $this;
    }
    /**
     * Gets transactionTypeList
     *
     * @return array|string
     */
    public function getTransactionTypeList()
    {
        return $this->transactionTypeList;
    }

    /**
     * Sets transactionTypeList
     *
     * @param array|string $transactionTypeList
     * @return UnionPayOrderQueryRequest
     */
    public function setTransactionTypeList($transactionTypeList)
    {
        $this->transactionTypeList = $transactionTypeList;
        return $this;
    }
    /**
     * Gets pageNum
     *
     * @return int
     */
    public function getPageNum()
    {
        return $this->pageNum;
    }

    /**
     * Sets pageNum
     *
     * @param int $pageNum
     * @return UnionPayOrderQueryRequest
     */
    public function setPageNum($pageNum)
    {
        $this->pageNum = $pageNum;
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
     * @return UnionPayOrderQueryRequest
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        return $this;
    }
    /**
     * Gets startTime
     *
     * @return string
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets startTime
     *
     * @param string $startTime
     * @return UnionPayOrderQueryRequest
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }
    /**
     * Gets endTime
     *
     * @return string
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets endTime
     *
     * @param string $endTime
     * @return UnionPayOrderQueryRequest
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    public static function getOperationId()
    {
        return 'unionPayOrderQuery';
    }


}
