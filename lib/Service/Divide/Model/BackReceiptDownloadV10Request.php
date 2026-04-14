<?php

namespace Yeepay\Yop\Sdk\Service\Divide\Model;


class BackReceiptDownloadV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $divideBackRequestId;
    /**
     * @var string
     */
    private $uniqueOrderNo;
    /**
     * @var string
     */
    private $ledgerNo;

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
     * @return BackReceiptDownloadV10Request
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
     * @return BackReceiptDownloadV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets divideBackRequestId
     *
     * @return string
     */
    public function getDivideBackRequestId()
    {
        return $this->divideBackRequestId;
    }

    /**
     * Sets divideBackRequestId
     *
     * @param string $divideBackRequestId
     * @return BackReceiptDownloadV10Request
     */
    public function setDivideBackRequestId($divideBackRequestId)
    {
        $this->divideBackRequestId = $divideBackRequestId;
        return $this;
    }
    /**
     * Gets uniqueOrderNo
     *
     * @return string
     */
    public function getUniqueOrderNo()
    {
        return $this->uniqueOrderNo;
    }

    /**
     * Sets uniqueOrderNo
     *
     * @param string $uniqueOrderNo
     * @return BackReceiptDownloadV10Request
     */
    public function setUniqueOrderNo($uniqueOrderNo)
    {
        $this->uniqueOrderNo = $uniqueOrderNo;
        return $this;
    }
    /**
     * Gets ledgerNo
     *
     * @return string
     */
    public function getLedgerNo()
    {
        return $this->ledgerNo;
    }

    /**
     * Sets ledgerNo
     *
     * @param string $ledgerNo
     * @return BackReceiptDownloadV10Request
     */
    public function setLedgerNo($ledgerNo)
    {
        $this->ledgerNo = $ledgerNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'back_receipt_download_v1_0';
    }


}
