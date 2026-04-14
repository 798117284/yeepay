<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model;


class DownloadQrcodeRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @return DownloadQrcodeRequest
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
     * @return DownloadQrcodeRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'downloadQrcode';
    }


}
