<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class TradeConfigLimitOperateV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $operateType;
    /**
     * @var string
     */
    private $limitCycleType;
    /**
     * @var string
     */
    private $limitStartDate;
    /**
     * @var float
     */
    private $limitAmount;
    /**
     * @var float
     */
    private $limitConfigId;

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
     * @return TradeConfigLimitOperateV10Request
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
     * @return TradeConfigLimitOperateV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
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
     * @return TradeConfigLimitOperateV10Request
     */
    public function setOperateType($operateType)
    {
        $this->operateType = $operateType;
        return $this;
    }
    /**
     * Gets limitCycleType
     *
     * @return string
     */
    public function getLimitCycleType()
    {
        return $this->limitCycleType;
    }

    /**
     * Sets limitCycleType
     *
     * @param string $limitCycleType
     * @return TradeConfigLimitOperateV10Request
     */
    public function setLimitCycleType($limitCycleType)
    {
        $this->limitCycleType = $limitCycleType;
        return $this;
    }
    /**
     * Gets limitStartDate
     *
     * @return string
     */
    public function getLimitStartDate()
    {
        return $this->limitStartDate;
    }

    /**
     * Sets limitStartDate
     *
     * @param string $limitStartDate
     * @return TradeConfigLimitOperateV10Request
     */
    public function setLimitStartDate($limitStartDate)
    {
        $this->limitStartDate = $limitStartDate;
        return $this;
    }
    /**
     * Gets limitAmount
     *
     * @return float
     */
    public function getLimitAmount()
    {
        return $this->limitAmount;
    }

    /**
     * Sets limitAmount
     *
     * @param float $limitAmount
     * @return TradeConfigLimitOperateV10Request
     */
    public function setLimitAmount($limitAmount)
    {
        $this->limitAmount = $limitAmount;
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
     * @return TradeConfigLimitOperateV10Request
     */
    public function setLimitConfigId($limitConfigId)
    {
        $this->limitConfigId = $limitConfigId;
        return $this;
    }

    public static function getOperationId()
    {
        return 'trade_config_limit_operate_v1_0';
    }


}
