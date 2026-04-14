<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class ShareTokenMarketQueryV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $orderId;
    /**
     * @var float
     */
    private $orderAmount;
    /**
     * @var string
     */
    private $externalUserId;
    /**
     * @var string
     */
    private $scene;

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
     * @return ShareTokenMarketQueryV10Request
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
     * @return ShareTokenMarketQueryV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Sets orderId
     *
     * @param string $orderId
     * @return ShareTokenMarketQueryV10Request
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Gets orderAmount
     *
     * @return float
     */
    public function getOrderAmount()
    {
        return $this->orderAmount;
    }

    /**
     * Sets orderAmount
     *
     * @param float $orderAmount
     * @return ShareTokenMarketQueryV10Request
     */
    public function setOrderAmount($orderAmount)
    {
        $this->orderAmount = $orderAmount;
        return $this;
    }
    /**
     * Gets externalUserId
     *
     * @return string
     */
    public function getExternalUserId()
    {
        return $this->externalUserId;
    }

    /**
     * Sets externalUserId
     *
     * @param string $externalUserId
     * @return ShareTokenMarketQueryV10Request
     */
    public function setExternalUserId($externalUserId)
    {
        $this->externalUserId = $externalUserId;
        return $this;
    }
    /**
     * Gets scene
     *
     * @return string
     */
    public function getScene()
    {
        return $this->scene;
    }

    /**
     * Sets scene
     *
     * @param string $scene
     * @return ShareTokenMarketQueryV10Request
     */
    public function setScene($scene)
    {
        $this->scene = $scene;
        return $this;
    }

    public static function getOperationId()
    {
        return 'share_token_market_query_v1_0';
    }


}
