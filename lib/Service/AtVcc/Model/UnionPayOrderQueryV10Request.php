<?php

namespace Yeepay\Yop\Sdk\Service\AtVcc\Model;


class UnionPayOrderQueryV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @return UnionPayOrderQueryV10Request
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
     * @return UnionPayOrderQueryV10Request
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
     * @return UnionPayOrderQueryV10Request
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
     * @return UnionPayOrderQueryV10Request
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
     * @return UnionPayOrderQueryV10Request
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
     * @return UnionPayOrderQueryV10Request
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
     * @return UnionPayOrderQueryV10Request
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    public static function getOperationId()
    {
        return 'union_pay_order_query_v1_0';
    }


}
