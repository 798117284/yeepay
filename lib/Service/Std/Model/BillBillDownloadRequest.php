<?php

namespace Yeepay\Yop\Sdk\Service\Std\Model;


class BillBillDownloadRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $billDate;
    /**
     * @var string
     */
    private $billCode;
    /**
     * @var string
     */
    private $merchantNo;

    /**
     * Gets billDate
     *
     * @return string
     */
    public function getBillDate()
    {
        return $this->billDate;
    }

    /**
     * Sets billDate
     *
     * @param string $billDate
     * @return BillBillDownloadRequest
     */
    public function setBillDate($billDate)
    {
        $this->billDate = $billDate;
        return $this;
    }
    /**
     * Gets billCode
     *
     * @return string
     */
    public function getBillCode()
    {
        return $this->billCode;
    }

    /**
     * Sets billCode
     *
     * @param string $billCode
     * @return BillBillDownloadRequest
     */
    public function setBillCode($billCode)
    {
        $this->billCode = $billCode;
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
     * @return BillBillDownloadRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'billBillDownload';
    }


}
