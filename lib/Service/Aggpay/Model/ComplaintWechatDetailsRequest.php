<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class ComplaintWechatDetailsRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $complaintNo;
    /**
     * @var string
     */
    private $complaintSource;
    /**
     * @var string
     */
    private $merchantOrderNo;

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
     * @return ComplaintWechatDetailsRequest
     */
    public function setComplaintNo($complaintNo)
    {
        $this->complaintNo = $complaintNo;
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
     * @return ComplaintWechatDetailsRequest
     */
    public function setComplaintSource($complaintSource)
    {
        $this->complaintSource = $complaintSource;
        return $this;
    }
    /**
     * Gets merchantOrderNo
     *
     * @return string
     */
    public function getMerchantOrderNo()
    {
        return $this->merchantOrderNo;
    }

    /**
     * Sets merchantOrderNo
     *
     * @param string $merchantOrderNo
     * @return ComplaintWechatDetailsRequest
     */
    public function setMerchantOrderNo($merchantOrderNo)
    {
        $this->merchantOrderNo = $merchantOrderNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'complaintWechatDetails';
    }


}
