<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class AggAttachReportV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $channel;
    /**
     * @var string
     */
    private $mainChannelNo;
    /**
     * @var string
     */
    private $mainReportMerchantNo;
    /**
     * @var string
     */
    private $authFileName;
    /**
     * @var string
     */
    private $authFileUrl;
    /**
     * @var string
     */
    private $groupName;
    /**
     * @var string
     */
    private $requestReason;
    /**
     * @var string
     */
    private $payWayList;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $mainMerchantNo;
    /**
     * @var string
     */
    private $merchantTemplateUrl;
    /**
     * @var string
     */
    private $merchantTemplateName;
    /**
     * @var string
     */
    private $requestType;

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
     * @return AggAttachReportV10Request
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
        return $this;
    }
    /**
     * Gets mainChannelNo
     *
     * @return string
     */
    public function getMainChannelNo()
    {
        return $this->mainChannelNo;
    }

    /**
     * Sets mainChannelNo
     *
     * @param string $mainChannelNo
     * @return AggAttachReportV10Request
     */
    public function setMainChannelNo($mainChannelNo)
    {
        $this->mainChannelNo = $mainChannelNo;
        return $this;
    }
    /**
     * Gets mainReportMerchantNo
     *
     * @return string
     */
    public function getMainReportMerchantNo()
    {
        return $this->mainReportMerchantNo;
    }

    /**
     * Sets mainReportMerchantNo
     *
     * @param string $mainReportMerchantNo
     * @return AggAttachReportV10Request
     */
    public function setMainReportMerchantNo($mainReportMerchantNo)
    {
        $this->mainReportMerchantNo = $mainReportMerchantNo;
        return $this;
    }
    /**
     * Gets authFileName
     *
     * @return string
     */
    public function getAuthFileName()
    {
        return $this->authFileName;
    }

    /**
     * Sets authFileName
     *
     * @param string $authFileName
     * @return AggAttachReportV10Request
     */
    public function setAuthFileName($authFileName)
    {
        $this->authFileName = $authFileName;
        return $this;
    }
    /**
     * Gets authFileUrl
     *
     * @return string
     */
    public function getAuthFileUrl()
    {
        return $this->authFileUrl;
    }

    /**
     * Sets authFileUrl
     *
     * @param string $authFileUrl
     * @return AggAttachReportV10Request
     */
    public function setAuthFileUrl($authFileUrl)
    {
        $this->authFileUrl = $authFileUrl;
        return $this;
    }
    /**
     * Gets groupName
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * Sets groupName
     *
     * @param string $groupName
     * @return AggAttachReportV10Request
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
        return $this;
    }
    /**
     * Gets requestReason
     *
     * @return string
     */
    public function getRequestReason()
    {
        return $this->requestReason;
    }

    /**
     * Sets requestReason
     *
     * @param string $requestReason
     * @return AggAttachReportV10Request
     */
    public function setRequestReason($requestReason)
    {
        $this->requestReason = $requestReason;
        return $this;
    }
    /**
     * Gets payWayList
     *
     * @return string
     */
    public function getPayWayList()
    {
        return $this->payWayList;
    }

    /**
     * Sets payWayList
     *
     * @param string $payWayList
     * @return AggAttachReportV10Request
     */
    public function setPayWayList($payWayList)
    {
        $this->payWayList = $payWayList;
        return $this;
    }
    /**
     * Gets notifyUrl
     *
     * @return string
     */
    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }

    /**
     * Sets notifyUrl
     *
     * @param string $notifyUrl
     * @return AggAttachReportV10Request
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }
    /**
     * Gets mainMerchantNo
     *
     * @return string
     */
    public function getMainMerchantNo()
    {
        return $this->mainMerchantNo;
    }

    /**
     * Sets mainMerchantNo
     *
     * @param string $mainMerchantNo
     * @return AggAttachReportV10Request
     */
    public function setMainMerchantNo($mainMerchantNo)
    {
        $this->mainMerchantNo = $mainMerchantNo;
        return $this;
    }
    /**
     * Gets merchantTemplateUrl
     *
     * @return string
     */
    public function getMerchantTemplateUrl()
    {
        return $this->merchantTemplateUrl;
    }

    /**
     * Sets merchantTemplateUrl
     *
     * @param string $merchantTemplateUrl
     * @return AggAttachReportV10Request
     */
    public function setMerchantTemplateUrl($merchantTemplateUrl)
    {
        $this->merchantTemplateUrl = $merchantTemplateUrl;
        return $this;
    }
    /**
     * Gets merchantTemplateName
     *
     * @return string
     */
    public function getMerchantTemplateName()
    {
        return $this->merchantTemplateName;
    }

    /**
     * Sets merchantTemplateName
     *
     * @param string $merchantTemplateName
     * @return AggAttachReportV10Request
     */
    public function setMerchantTemplateName($merchantTemplateName)
    {
        $this->merchantTemplateName = $merchantTemplateName;
        return $this;
    }
    /**
     * Gets requestType
     *
     * @return string
     */
    public function getRequestType()
    {
        return $this->requestType;
    }

    /**
     * Sets requestType
     *
     * @param string $requestType
     * @return AggAttachReportV10Request
     */
    public function setRequestType($requestType)
    {
        $this->requestType = $requestType;
        return $this;
    }

    public static function getOperationId()
    {
        return 'agg_attach_report_v1_0';
    }


}
