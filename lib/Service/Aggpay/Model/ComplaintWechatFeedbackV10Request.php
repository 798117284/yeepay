<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class ComplaintWechatFeedbackV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $complaintNo;
    /**
     * @var string
     */
    private $feedbackContent;
    /**
     * @var string
     */
    private $imageList;
    /**
     * @var string
     */
    private $feedbackType;
    /**
     * @var string
     */
    private $complaintSource;
    /**
     * @var string
     */
    private $operateType;

    /**
     * Gets complaintNo
     *
     * @return string
     */
    public function getComplaintNo()
    {
        return $this->complaintNo;
    }

    /**
     * Sets complaintNo
     *
     * @param string $complaintNo
     * @return ComplaintWechatFeedbackV10Request
     */
    public function setComplaintNo($complaintNo)
    {
        $this->complaintNo = $complaintNo;
        return $this;
    }
    /**
     * Gets feedbackContent
     *
     * @return string
     */
    public function getFeedbackContent()
    {
        return $this->feedbackContent;
    }

    /**
     * Sets feedbackContent
     *
     * @param string $feedbackContent
     * @return ComplaintWechatFeedbackV10Request
     */
    public function setFeedbackContent($feedbackContent)
    {
        $this->feedbackContent = $feedbackContent;
        return $this;
    }
    /**
     * Gets imageList
     *
     * @return string
     */
    public function getImageList()
    {
        return $this->imageList;
    }

    /**
     * Sets imageList
     *
     * @param string $imageList
     * @return ComplaintWechatFeedbackV10Request
     */
    public function setImageList($imageList)
    {
        $this->imageList = $imageList;
        return $this;
    }
    /**
     * Gets feedbackType
     *
     * @return string
     */
    public function getFeedbackType()
    {
        return $this->feedbackType;
    }

    /**
     * Sets feedbackType
     *
     * @param string $feedbackType
     * @return ComplaintWechatFeedbackV10Request
     */
    public function setFeedbackType($feedbackType)
    {
        $this->feedbackType = $feedbackType;
        return $this;
    }
    /**
     * Gets complaintSource
     *
     * @return string
     */
    public function getComplaintSource()
    {
        return $this->complaintSource;
    }

    /**
     * Sets complaintSource
     *
     * @param string $complaintSource
     * @return ComplaintWechatFeedbackV10Request
     */
    public function setComplaintSource($complaintSource)
    {
        $this->complaintSource = $complaintSource;
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
     * @return ComplaintWechatFeedbackV10Request
     */
    public function setOperateType($operateType)
    {
        $this->operateType = $operateType;
        return $this;
    }

    public static function getOperationId()
    {
        return 'complaint_wechat_feedback_v1_0';
    }


}
