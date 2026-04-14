<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class ComplaintWechatDetailsV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @return ComplaintWechatDetailsV10Request
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
     * @return ComplaintWechatDetailsV10Request
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
     * @return ComplaintWechatDetailsV10Request
     */
    public function setMerchantOrderNo($merchantOrderNo)
    {
        $this->merchantOrderNo = $merchantOrderNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'complaint_wechat_details_v1_0';
    }


}
