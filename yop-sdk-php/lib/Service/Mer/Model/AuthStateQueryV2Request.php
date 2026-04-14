<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class AuthStateQueryV2Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $reportMerchantNo;
    /**
     * @var string
     */
    private $feeType;
    /**
     * @var string
     */
    private $queryStrategy;
    /**
     * @var string
     */
    private $pageNum;
    /**
     * @var string
     */
    private $pageSize;

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
     * @return AuthStateQueryV2Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
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
     * @return AuthStateQueryV2Request
     */
    public function setReportMerchantNo($reportMerchantNo)
    {
        $this->reportMerchantNo = $reportMerchantNo;
        return $this;
    }
    /**
     * Gets feeType
     *
     * @return string
     */
    public function getFeeType()
    {
        return $this->feeType;
    }

    /**
     * Sets feeType
     *
     * @param string $feeType
     * @return AuthStateQueryV2Request
     */
    public function setFeeType($feeType)
    {
        $this->feeType = $feeType;
        return $this;
    }
    /**
     * Gets queryStrategy
     *
     * @return string
     */
    public function getQueryStrategy()
    {
        return $this->queryStrategy;
    }

    /**
     * Sets queryStrategy
     *
     * @param string $queryStrategy
     * @return AuthStateQueryV2Request
     */
    public function setQueryStrategy($queryStrategy)
    {
        $this->queryStrategy = $queryStrategy;
        return $this;
    }
    /**
     * Gets pageNum
     *
     * @return string
     */
    public function getPageNum()
    {
        return $this->pageNum;
    }

    /**
     * Sets pageNum
     *
     * @param string $pageNum
     * @return AuthStateQueryV2Request
     */
    public function setPageNum($pageNum)
    {
        $this->pageNum = $pageNum;
        return $this;
    }
    /**
     * Gets pageSize
     *
     * @return string
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * Sets pageSize
     *
     * @param string $pageSize
     * @return AuthStateQueryV2Request
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    public static function getOperationId()
    {
        return 'authStateQueryV2';
    }


}
