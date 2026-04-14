<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model;


class RelateBroadcastDeviceRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @var string
     */
    private $serialNo;

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
     * @return RelateBroadcastDeviceRequest
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
     * @return RelateBroadcastDeviceRequest
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
     * @return RelateBroadcastDeviceRequest
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
     * @return RelateBroadcastDeviceRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets serialNo
     *
     * @return string
     */
    public function getSerialNo()
    {
        return $this->serialNo;
    }

    /**
     * Sets serialNo
     *
     * @param string $serialNo
     * @return RelateBroadcastDeviceRequest
     */
    public function setSerialNo($serialNo)
    {
        $this->serialNo = $serialNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'relateBroadcastDevice';
    }


}
