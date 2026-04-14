<?php

namespace Yeepay\Yop\Sdk\Service\Std\Model;


class VoucherDownloadRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $voucherNo;

    /**
     * Gets voucherNo
     *
     * @return string
     */
    public function getVoucherNo()
    {
        return $this->voucherNo;
    }

    /**
     * Sets voucherNo
     *
     * @param string $voucherNo
     * @return VoucherDownloadRequest
     */
    public function setVoucherNo($voucherNo)
    {
        $this->voucherNo = $voucherNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'voucherDownload';
    }


}
