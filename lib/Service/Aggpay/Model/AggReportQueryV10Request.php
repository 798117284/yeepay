<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class AggReportQueryV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $channel;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $channelNo;
    /**
     * @var string
     */
    private $scene;
    /**
     * @var string
     */
    private $promotionType;
    /**
     * @var string
     */
    private $dataRange;
    /**
     * @var string
     */
    private $shopMerchantNo;

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
     * @return AggReportQueryV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets channel
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Sets channel
     *
     * @param string $channel
     * @return AggReportQueryV10Request
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
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
     * @return AggReportQueryV10Request
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets channelNo
     *
     * @return string
     */
    public function getChannelNo()
    {
        return $this->channelNo;
    }

    /**
     * Sets channelNo
     *
     * @param string $channelNo
     * @return AggReportQueryV10Request
     */
    public function setChannelNo($channelNo)
    {
        $this->channelNo = $channelNo;
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
     * @return AggReportQueryV10Request
     */
    public function setScene($scene)
    {
        $this->scene = $scene;
        return $this;
    }
    /**
     * Gets promotionType
     *
     * @return string
     */
    public function getPromotionType()
    {
        return $this->promotionType;
    }

    /**
     * Sets promotionType
     *
     * @param string $promotionType
     * @return AggReportQueryV10Request
     */
    public function setPromotionType($promotionType)
    {
        $this->promotionType = $promotionType;
        return $this;
    }
    /**
     * Gets dataRange
     *
     * @return string
     */
    public function getDataRange()
    {
        return $this->dataRange;
    }

    /**
     * Sets dataRange
     *
     * @param string $dataRange
     * @return AggReportQueryV10Request
     */
    public function setDataRange($dataRange)
    {
        $this->dataRange = $dataRange;
        return $this;
    }
    /**
     * Gets shopMerchantNo
     *
     * @return string
     */
    public function getShopMerchantNo()
    {
        return $this->shopMerchantNo;
    }

    /**
     * Sets shopMerchantNo
     *
     * @param string $shopMerchantNo
     * @return AggReportQueryV10Request
     */
    public function setShopMerchantNo($shopMerchantNo)
    {
        $this->shopMerchantNo = $shopMerchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'agg_report_query_v1_0';
    }


}
