<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class ComplaintWechatFeedbackRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @return ComplaintWechatFeedbackRequest
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
     * @return ComplaintWechatFeedbackRequest
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
     * @return ComplaintWechatFeedbackRequest
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
     * @return ComplaintWechatFeedbackRequest
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
     * @return ComplaintWechatFeedbackRequest
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
     * @return ComplaintWechatFeedbackRequest
     */
    public function setOperateType($operateType)
    {
        $this->operateType = $operateType;
        return $this;
    }

    public static function getOperationId()
    {
        return 'complaintWechatFeedback';
    }


}
