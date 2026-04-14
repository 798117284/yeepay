<?php

namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class TradeConfigLimitQueryV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @return TradeConfigLimitQueryV10Request
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
     * @return TradeConfigLimitQueryV10Request
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
     * @return TradeConfigLimitQueryV10Request
     */
    public function setLimitConfigId($limitConfigId)
    {
        $this->limitConfigId = $limitConfigId;
        return $this;
    }

    public static function getOperationId()
    {
        return 'trade_config_limit_query_v1_0';
    }


}
