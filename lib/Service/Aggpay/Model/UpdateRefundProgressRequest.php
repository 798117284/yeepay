<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class UpdateRefundProgressRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $complaintNo;
    /**
     * @var string
     */
    private $action;
    /**
     * @var string
     */
    private $remark;
    /**
     * @var string
     */
    private $imageList;
    /**
     * @var string
     */
    private $rejectReason;
    /**
     * @var int
     */
    private $launchRefundDay;

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
     * @return UpdateRefundProgressRequest
     */
    public function setComplaintNo($complaintNo)
    {
        $this->complaintNo = $complaintNo;
        return $this;
    }
    /**
     * Gets action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets action
     *
     * @param string $action
     * @return UpdateRefundProgressRequest
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }
    /**
     * Gets remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets remark
     *
     * @param string $remark
     * @return UpdateRefundProgressRequest
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
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
     * @return UpdateRefundProgressRequest
     */
    public function setImageList($imageList)
    {
        $this->imageList = $imageList;
        return $this;
    }
    /**
     * Gets rejectReason
     *
     * @return string
     */
    public function getRejectReason()
    {
        return $this->rejectReason;
    }

    /**
     * Sets rejectReason
     *
     * @param string $rejectReason
     * @return UpdateRefundProgressRequest
     */
    public function setRejectReason($rejectReason)
    {
        $this->rejectReason = $rejectReason;
        return $this;
    }
    /**
     * Gets launchRefundDay
     *
     * @return int
     */
    public function getLaunchRefundDay()
    {
        return $this->launchRefundDay;
    }

    /**
     * Sets launchRefundDay
     *
     * @param int $launchRefundDay
     * @return UpdateRefundProgressRequest
     */
    public function setLaunchRefundDay($launchRefundDay)
    {
        $this->launchRefundDay = $launchRefundDay;
        return $this;
    }

    public static function getOperationId()
    {
        return 'updateRefundProgress';
    }


}
