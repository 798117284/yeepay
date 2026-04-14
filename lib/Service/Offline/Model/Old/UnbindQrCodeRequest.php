<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model\Old;


class UnbindQrCodeRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $qrCodeNo;
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
     * @return UnbindQrCodeRequest
     */
    public function setQrCodeNo($qrCodeNo)
    {
        $this->qrCodeNo = $qrCodeNo;
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
     * @return UnbindQrCodeRequest
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
     * @return UnbindQrCodeRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'unbindQrCode';
    }


}
