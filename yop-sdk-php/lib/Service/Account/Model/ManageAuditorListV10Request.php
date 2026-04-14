<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class ManageAuditorListV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @return ManageAuditorListV10Request
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
     * @return ManageAuditorListV10Request
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
     * @return ManageAuditorListV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'manage_auditor_list_v1_0';
    }


}
