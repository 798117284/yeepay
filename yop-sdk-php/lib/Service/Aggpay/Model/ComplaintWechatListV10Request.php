<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class ComplaintWechatListV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $startTime;
    /**
     * @var string
     */
    private $endTime;
    /**
     * @var string
     */
    private $merchantOrderNo;
    /**
     * @var string
     */
    private $wechatOrderNo;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $complaintSource;
    /**
     * @var int
     */
    private $page;
    /**
     * @var int
     */
    private $limit;

    /**
     * Gets startTime
     *
     * @return string
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets startTime
     *
     * @param string $startTime
     * @return ComplaintWechatListV10Request
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }
    /**
     * Gets endTime
     *
     * @return string
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets endTime
     *
     * @param string $endTime
     * @return ComplaintWechatListV10Request
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
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
     * @return ComplaintWechatListV10Request
     */
    public function setMerchantOrderNo($merchantOrderNo)
    {
        $this->merchantOrderNo = $merchantOrderNo;
        return $this;
    }
    /**
     * Gets wechatOrderNo
     *
     * @return string
     */
    public function getWechatOrderNo()
    {
        return $this->wechatOrderNo;
    }

    /**
     * Sets wechatOrderNo
     *
     * @param string $wechatOrderNo
     * @return ComplaintWechatListV10Request
     */
    public function setWechatOrderNo($wechatOrderNo)
    {
        $this->wechatOrderNo = $wechatOrderNo;
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
     * @return ComplaintWechatListV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
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
     * @return ComplaintWechatListV10Request
     */
    public function setComplaintSource($complaintSource)
    {
        $this->complaintSource = $complaintSource;
        return $this;
    }
    /**
     * Gets page
     *
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Sets page
     *
     * @param int $page
     * @return ComplaintWechatListV10Request
     */
    public function setPage($page)
    {
        $this->page = $page;
        return $this;
    }
    /**
     * Gets limit
     *
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Sets limit
     *
     * @param int $limit
     * @return ComplaintWechatListV10Request
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    public static function getOperationId()
    {
        return 'complaint_wechat_list_v1_0';
    }


}
