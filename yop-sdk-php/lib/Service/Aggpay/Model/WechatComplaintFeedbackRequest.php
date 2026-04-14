<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class WechatComplaintFeedbackRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $feedbackContent;
    /**
     * @var string
     */
    private $operateType;
    /**
     * @var string
     */
    private $acceptReturn;
    /**
     * @var string
     */
    private $returnId;
    /**
     * @var int
     */
    private $bussiHandle;
    /**
     * @var string
     */
    private $type;
    /**
     * @var string
     */
    private $imageList;
    /**
     * @var string
     */
    private $complaintNo;

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
     * @return WechatComplaintFeedbackRequest
     */
    public function setFeedbackContent($feedbackContent)
    {
        $this->feedbackContent = $feedbackContent;
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
     * @return WechatComplaintFeedbackRequest
     */
    public function setOperateType($operateType)
    {
        $this->operateType = $operateType;
        return $this;
    }
    /**
     * Gets acceptReturn
     *
     * @return string
     */
    public function getAcceptReturn()
    {
        return $this->acceptReturn;
    }

    /**
     * Sets acceptReturn
     *
     * @param string $acceptReturn
     * @return WechatComplaintFeedbackRequest
     */
    public function setAcceptReturn($acceptReturn)
    {
        $this->acceptReturn = $acceptReturn;
        return $this;
    }
    /**
     * Gets returnId
     *
     * @return string
     */
    public function getReturnId()
    {
        return $this->returnId;
    }

    /**
     * Sets returnId
     *
     * @param string $returnId
     * @return WechatComplaintFeedbackRequest
     */
    public function setReturnId($returnId)
    {
        $this->returnId = $returnId;
        return $this;
    }
    /**
     * Gets bussiHandle
     *
     * @return int
     */
    public function getBussiHandle()
    {
        return $this->bussiHandle;
    }

    /**
     * Sets bussiHandle
     *
     * @param int $bussiHandle
     * @return WechatComplaintFeedbackRequest
     */
    public function setBussiHandle($bussiHandle)
    {
        $this->bussiHandle = $bussiHandle;
        return $this;
    }
    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets type
     *
     * @param string $type
     * @return WechatComplaintFeedbackRequest
     */
    public function setType($type)
    {
        $this->type = $type;
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
     * @return WechatComplaintFeedbackRequest
     */
    public function setImageList($imageList)
    {
        $this->imageList = $imageList;
        return $this;
    }
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
     * @return WechatComplaintFeedbackRequest
     */
    public function setComplaintNo($complaintNo)
    {
        $this->complaintNo = $complaintNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'wechatComplaintFeedback';
    }


}
