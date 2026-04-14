<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class WechatConfigQueryV20Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $appIdType;
    /**
     * @var string
     */
    private $reportMerchantNo;

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
     * @return WechatConfigQueryV20Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
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
     * @return WechatConfigQueryV20Request
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets appIdType
     *
     * @return string
     */
    public function getAppIdType()
    {
        return $this->appIdType;
    }

    /**
     * Sets appIdType
     *
     * @param string $appIdType
     * @return WechatConfigQueryV20Request
     */
    public function setAppIdType($appIdType)
    {
        $this->appIdType = $appIdType;
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
     * @return WechatConfigQueryV20Request
     */
    public function setReportMerchantNo($reportMerchantNo)
    {
        $this->reportMerchantNo = $reportMerchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'wechat_config_query_v2_0';
    }


}
