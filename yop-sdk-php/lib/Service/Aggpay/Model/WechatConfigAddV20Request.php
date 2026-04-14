<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class WechatConfigAddV20Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $tradeAuthDirList;
    /**
     * @var string
     */
    private $appIdList;
    /**
     * @var string
     */
    private $reportMerchantNo;

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
     * @return WechatConfigAddV20Request
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
     * @return WechatConfigAddV20Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets tradeAuthDirList
     *
     * @return string
     */
    public function getTradeAuthDirList()
    {
        return $this->tradeAuthDirList;
    }

    /**
     * Sets tradeAuthDirList
     *
     * @param string $tradeAuthDirList
     * @return WechatConfigAddV20Request
     */
    public function setTradeAuthDirList($tradeAuthDirList)
    {
        $this->tradeAuthDirList = $tradeAuthDirList;
        return $this;
    }
    /**
     * Gets appIdList
     *
     * @return string
     */
    public function getAppIdList()
    {
        return $this->appIdList;
    }

    /**
     * Sets appIdList
     *
     * @param string $appIdList
     * @return WechatConfigAddV20Request
     */
    public function setAppIdList($appIdList)
    {
        $this->appIdList = $appIdList;
        return $this;
    }
    /**
     * Gets reportMerchantNo
     *
     * @return string
     */
    public function getReportMerchantNo()
    {
        return $this->reportMerchantNo;
    }

    /**
     * Sets reportMerchantNo
     *
     * @param string $reportMerchantNo
     * @return WechatConfigAddV20Request
     */
    public function setReportMerchantNo($reportMerchantNo)
    {
        $this->reportMerchantNo = $reportMerchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'wechat_config_add_v2_0';
    }


}
