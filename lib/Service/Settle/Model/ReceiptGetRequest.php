<?php

namespace Yeepay\Yop\Sdk\Service\Settle\Model;


class ReceiptGetRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $fileId;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $receiverMerchantNo;

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
     * @return ReceiptGetRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets fileId
     *
     * @return string
     */
    public function getFileId()
    {
        return $this->fileId;
    }

    /**
     * Sets fileId
     *
     * @param string $fileId
     * @return ReceiptGetRequest
     */
    public function setFileId($fileId)
    {
        $this->fileId = $fileId;
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
     * @return ReceiptGetRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets receiverMerchantNo
     *
     * @return string
     */
    public function getReceiverMerchantNo()
    {
        return $this->receiverMerchantNo;
    }

    /**
     * Sets receiverMerchantNo
     *
     * @param string $receiverMerchantNo
     * @return ReceiptGetRequest
     */
    public function setReceiverMerchantNo($receiverMerchantNo)
    {
        $this->receiverMerchantNo = $receiverMerchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'receiptGet';
    }


}
