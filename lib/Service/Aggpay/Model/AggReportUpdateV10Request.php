<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class AggReportUpdateV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $channelNo;
    /**
     * @var string
     */
    private $channel;
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
    private $reportMerchantNo;
    /**
     * @var string
     */
    private $reportMerchantName;
    /**
     * @var string
     */
    private $reportMerchantAlias;
    /**
     * @var string
     */
    private $serviceTel;
    /**
     * @var string
     */
    private $contactMobile;
    /**
     * @var string
     */
    private $contactEmail;
    /**
     * @var string
     */
    private $contactPhone;
    /**
     * @var string
     */
    private $contactName;
    /**
     * @var string
     */
    private $contactType;

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
     * @return AggReportUpdateV10Request
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
     * @return AggReportUpdateV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
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
     * @return AggReportUpdateV10Request
     */
    public function setChannelNo($channelNo)
    {
        $this->channelNo = $channelNo;
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
     * @return AggReportUpdateV10Request
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
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
     * @return AggReportUpdateV10Request
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
     * @return AggReportUpdateV10Request
     */
    public function setPromotionType($promotionType)
    {
        $this->promotionType = $promotionType;
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
     * @return AggReportUpdateV10Request
     */
    public function setReportMerchantNo($reportMerchantNo)
    {
        $this->reportMerchantNo = $reportMerchantNo;
        return $this;
    }
    /**
     * Gets reportMerchantName
     *
     * @return string
     */
    public function getReportMerchantName()
    {
        return $this->reportMerchantName;
    }

    /**
     * Sets reportMerchantName
     *
     * @param string $reportMerchantName
     * @return AggReportUpdateV10Request
     */
    public function setReportMerchantName($reportMerchantName)
    {
        $this->reportMerchantName = $reportMerchantName;
        return $this;
    }
    /**
     * Gets reportMerchantAlias
     *
     * @return string
     */
    public function getReportMerchantAlias()
    {
        return $this->reportMerchantAlias;
    }

    /**
     * Sets reportMerchantAlias
     *
     * @param string $reportMerchantAlias
     * @return AggReportUpdateV10Request
     */
    public function setReportMerchantAlias($reportMerchantAlias)
    {
        $this->reportMerchantAlias = $reportMerchantAlias;
        return $this;
    }
    /**
     * Gets serviceTel
     *
     * @return string
     */
    public function getServiceTel()
    {
        return $this->serviceTel;
    }

    /**
     * Sets serviceTel
     *
     * @param string $serviceTel
     * @return AggReportUpdateV10Request
     */
    public function setServiceTel($serviceTel)
    {
        $this->serviceTel = $serviceTel;
        return $this;
    }
    /**
     * Gets contactMobile
     *
     * @return string
     */
    public function getContactMobile()
    {
        return $this->contactMobile;
    }

    /**
     * Sets contactMobile
     *
     * @param string $contactMobile
     * @return AggReportUpdateV10Request
     */
    public function setContactMobile($contactMobile)
    {
        $this->contactMobile = $contactMobile;
        return $this;
    }
    /**
     * Gets contactEmail
     *
     * @return string
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * Sets contactEmail
     *
     * @param string $contactEmail
     * @return AggReportUpdateV10Request
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;
        return $this;
    }
    /**
     * Gets contactPhone
     *
     * @return string
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * Sets contactPhone
     *
     * @param string $contactPhone
     * @return AggReportUpdateV10Request
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;
        return $this;
    }
    /**
     * Gets contactName
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Sets contactName
     *
     * @param string $contactName
     * @return AggReportUpdateV10Request
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;
        return $this;
    }
    /**
     * Gets contactType
     *
     * @return string
     */
    public function getContactType()
    {
        return $this->contactType;
    }

    /**
     * Sets contactType
     *
     * @param string $contactType
     * @return AggReportUpdateV10Request
     */
    public function setContactType($contactType)
    {
        $this->contactType = $contactType;
        return $this;
    }

    public static function getOperationId()
    {
        return 'agg_report_update_v1_0';
    }


}
