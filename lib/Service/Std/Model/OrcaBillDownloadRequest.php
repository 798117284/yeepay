<?php

namespace Yeepay\Yop\Sdk\Service\Std\Model;


class OrcaBillDownloadRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @return OrcaBillDownloadRequest
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
     * @return OrcaBillDownloadRequest
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
     * @return OrcaBillDownloadRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'orca_bill_download';
    }


}
