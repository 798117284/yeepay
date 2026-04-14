<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class MiniprogramFeedbackRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @return MiniprogramFeedbackRequest
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
     * @return MiniprogramFeedbackRequest
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
     * @return MiniprogramFeedbackRequest
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
     * @return MiniprogramFeedbackRequest
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
     * @return MiniprogramFeedbackRequest
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
     * @return MiniprogramFeedbackRequest
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
     * @return MiniprogramFeedbackRequest
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
     * @return MiniprogramFeedbackRequest
     */
    public function setComplaintNo($complaintNo)
    {
        $this->complaintNo = $complaintNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'miniprogramFeedback';
    }


}
