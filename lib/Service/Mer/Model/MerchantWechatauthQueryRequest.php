<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class MerchantWechatauthQueryRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $applymentId;
    /**
     * @var string
     */
    private $subMerchantNo;
    /**
     * @var string
     */
    private $reportFee;
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var bool
     */
    private $customQrcode;
    /**
     * @var string
     */
    private $channelId;

    /**
     * Gets applymentId
     *
     * @return string
     */
    public function getApplymentId()
    {
        return $this->applymentId;
    }

    /**
     * Sets applymentId
     *
     * @param string $applymentId
     * @return MerchantWechatauthQueryRequest
     */
    public function setApplymentId($applymentId)
    {
        $this->applymentId = $applymentId;
        return $this;
    }
    /**
     * Gets subMerchantNo
     *
     * @return string
     */
    public function getSubMerchantNo()
    {
        return $this->subMerchantNo;
    }

    /**
     * Sets subMerchantNo
     *
     * @param string $subMerchantNo
     * @return MerchantWechatauthQueryRequest
     */
    public function setSubMerchantNo($subMerchantNo)
    {
        $this->subMerchantNo = $subMerchantNo;
        return $this;
    }
    /**
     * Gets reportFee
     *
     * @return string
     */
    public function getReportFee()
    {
        return $this->reportFee;
    }

    /**
     * Sets reportFee
     *
     * @param string $reportFee
     * @return MerchantWechatauthQueryRequest
     */
    public function setReportFee($reportFee)
    {
        $this->reportFee = $reportFee;
        return $this;
    }
    /**
     * Gets requestNo
     *
     * @return string
     */
    public function getRequestNo()
    {
        return $this->requestNo;
    }

    /**
     * Sets requestNo
     *
     * @param string $requestNo
     * @return MerchantWechatauthQueryRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets customQrcode
     *
     * @return bool
     */
    public function getCustomQrcode()
    {
        return $this->customQrcode;
    }

    /**
     * Sets customQrcode
     *
     * @param bool $customQrcode
     * @return MerchantWechatauthQueryRequest
     */
    public function setCustomQrcode($customQrcode)
    {
        $this->customQrcode = $customQrcode;
        return $this;
    }
    /**
     * Gets channelId
     *
     * @return string
     */
    public function getChannelId()
    {
        return $this->channelId;
    }

    /**
     * Sets channelId
     *
     * @param string $channelId
     * @return MerchantWechatauthQueryRequest
     */
    public function setChannelId($channelId)
    {
        $this->channelId = $channelId;
        return $this;
    }

    public static function getOperationId()
    {
        return 'merchantWechatauthQuery';
    }


}
