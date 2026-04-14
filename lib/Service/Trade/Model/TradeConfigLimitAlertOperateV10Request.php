<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class TradeConfigLimitAlertOperateV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @var float
     */
    private $limitConfigId;
    /**
     * @var float
     */
    private $alertAmount;
    /**
     * @var string
     */
    private $alertNotifyUrl;

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
     * @return TradeConfigLimitAlertOperateV10Request
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
     * @return TradeConfigLimitAlertOperateV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets limitConfigId
     *
     * @return float
     */
    public function getLimitConfigId()
    {
        return $this->limitConfigId;
    }

    /**
     * Sets limitConfigId
     *
     * @param float $limitConfigId
     * @return TradeConfigLimitAlertOperateV10Request
     */
    public function setLimitConfigId($limitConfigId)
    {
        $this->limitConfigId = $limitConfigId;
        return $this;
    }
    /**
     * Gets alertAmount
     *
     * @return float
     */
    public function getAlertAmount()
    {
        return $this->alertAmount;
    }

    /**
     * Sets alertAmount
     *
     * @param float $alertAmount
     * @return TradeConfigLimitAlertOperateV10Request
     */
    public function setAlertAmount($alertAmount)
    {
        $this->alertAmount = $alertAmount;
        return $this;
    }
    /**
     * Gets alertNotifyUrl
     *
     * @return string
     */
    public function getAlertNotifyUrl()
    {
        return $this->alertNotifyUrl;
    }

    /**
     * Sets alertNotifyUrl
     *
     * @param string $alertNotifyUrl
     * @return TradeConfigLimitAlertOperateV10Request
     */
    public function setAlertNotifyUrl($alertNotifyUrl)
    {
        $this->alertNotifyUrl = $alertNotifyUrl;
        return $this;
    }

    public static function getOperationId()
    {
        return 'trade_config_limit_alert_operate_v1_0';
    }


}
