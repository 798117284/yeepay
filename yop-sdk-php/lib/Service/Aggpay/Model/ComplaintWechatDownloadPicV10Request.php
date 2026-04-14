<?php

namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class ComplaintWechatDownloadPicV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $complaintNo;
    /**
     * @var string
     */
    private $fileType;
    /**
     * @var string
     */
    private $pictureUrl;

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
     * @return ComplaintWechatDownloadPicV10Request
     */
    public function setComplaintNo($complaintNo)
    {
        $this->complaintNo = $complaintNo;
        return $this;
    }
    /**
     * Gets fileType
     *
     * @return string
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * Sets fileType
     *
     * @param string $fileType
     * @return ComplaintWechatDownloadPicV10Request
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;
        return $this;
    }
    /**
     * Gets pictureUrl
     *
     * @return string
     */
    public function getPictureUrl()
    {
        return $this->pictureUrl;
    }

    /**
     * Sets pictureUrl
     *
     * @param string $pictureUrl
     * @return ComplaintWechatDownloadPicV10Request
     */
    public function setPictureUrl($pictureUrl)
    {
        $this->pictureUrl = $pictureUrl;
        return $this;
    }

    public static function getOperationId()
    {
        return 'complaint_wechat_download_pic_v1_0';
    }


}
