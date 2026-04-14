<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model\Old;


class UpdateQrCodeStatusRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $qrCodeNo;
    /**
     * @var string
     */
    private $operateType;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $merchantNo;

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
     * @return UpdateQrCodeStatusRequest
     */
    public function setQrCodeNo($qrCodeNo)
    {
        $this->qrCodeNo = $qrCodeNo;
        return $this;
    }
    /**
     * Gets operateType
     *
     * @return string
     */
    public function getOperateType()
    {
        return $this->operateType;
    }

    /**
     * Sets operateType
     *
     * @param string $operateType
     * @return UpdateQrCodeStatusRequest
     */
    public function setOperateType($operateType)
    {
        $this->operateType = $operateType;
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
     * @return UpdateQrCodeStatusRequest
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
     * @return UpdateQrCodeStatusRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'updateQrCodeStatus';
    }


}
