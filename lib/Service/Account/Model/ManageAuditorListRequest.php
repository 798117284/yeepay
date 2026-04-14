<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class ManageAuditorListRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $auditBiz;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $merchantNo;

    /**
     * Gets auditBiz
     *
     * @return string
     */
    public function getAuditBiz()
    {
        return $this->auditBiz;
    }

    /**
     * Sets auditBiz
     *
     * @param string $auditBiz
     * @return ManageAuditorListRequest
     */
    public function setAuditBiz($auditBiz)
    {
        $this->auditBiz = $auditBiz;
        return $this;
    }
    /**
     * Gets parentMerchantNo
     *
     * @return string
     */
    public function getParentMerchantNo()
    {
        return $this->parentMerchantNo;
    }

    /**
     * Sets parentMerchantNo
     *
     * @param string $parentMerchantNo
     * @return ManageAuditorListRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
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
     * @return ManageAuditorListRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'manageAuditorList';
    }


}
