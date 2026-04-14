<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model\Old;


class QueryQrCodeListRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var int
     */
    private $pageNo;
    /**
     * @var int
     */
    private $pageSize;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $qrCodeNo;
    /**
     * @var string
     */
    private $shopNo;
    /**
     * @var string
     */
    private $bindStatus;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $status;

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
     * @return QueryQrCodeListRequest
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
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
     * @return QueryQrCodeListRequest
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
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
     * @return QueryQrCodeListRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets qrCodeNo
     *
     * @return string
     */
    public function getQrCodeNo()
    {
        return $this->qrCodeNo;
    }

    /**
     * Sets qrCodeNo
     *
     * @param string $qrCodeNo
     * @return QueryQrCodeListRequest
     */
    public function setQrCodeNo($qrCodeNo)
    {
        $this->qrCodeNo = $qrCodeNo;
        return $this;
    }
    /**
     * Gets shopNo
     *
     * @return string
     */
    public function getShopNo()
    {
        return $this->shopNo;
    }

    /**
     * Sets shopNo
     *
     * @param string $shopNo
     * @return QueryQrCodeListRequest
     */
    public function setShopNo($shopNo)
    {
        $this->shopNo = $shopNo;
        return $this;
    }
    /**
     * Gets bindStatus
     *
     * @return string
     */
    public function getBindStatus()
    {
        return $this->bindStatus;
    }

    /**
     * Sets bindStatus
     *
     * @param string $bindStatus
     * @return QueryQrCodeListRequest
     */
    public function setBindStatus($bindStatus)
    {
        $this->bindStatus = $bindStatus;
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
     * @return QueryQrCodeListRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets status
     *
     * @param string $status
     * @return QueryQrCodeListRequest
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    public static function getOperationId()
    {
        return 'queryQrCodeList';
    }


}
