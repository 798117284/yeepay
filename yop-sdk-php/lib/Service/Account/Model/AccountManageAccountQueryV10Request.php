<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AccountManageAccountQueryV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $merchantAccountBookNo;
    /**
     * @var string
     */
    private $ypAccountBookNo;
    /**
     * @var string
     */
    private $bookNo;

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
     * @return AccountManageAccountQueryV10Request
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
     * @return AccountManageAccountQueryV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets merchantAccountBookNo
     *
     * @return string
     */
    public function getMerchantAccountBookNo()
    {
        return $this->merchantAccountBookNo;
    }

    /**
     * Sets merchantAccountBookNo
     *
     * @param string $merchantAccountBookNo
     * @return AccountManageAccountQueryV10Request
     */
    public function setMerchantAccountBookNo($merchantAccountBookNo)
    {
        $this->merchantAccountBookNo = $merchantAccountBookNo;
        return $this;
    }
    /**
     * Gets ypAccountBookNo
     *
     * @return string
     */
    public function getYpAccountBookNo()
    {
        return $this->ypAccountBookNo;
    }

    /**
     * Sets ypAccountBookNo
     *
     * @param string $ypAccountBookNo
     * @return AccountManageAccountQueryV10Request
     */
    public function setYpAccountBookNo($ypAccountBookNo)
    {
        $this->ypAccountBookNo = $ypAccountBookNo;
        return $this;
    }
    /**
     * Gets bookNo
     *
     * @return string
     */
    public function getBookNo()
    {
        return $this->bookNo;
    }

    /**
     * Sets bookNo
     *
     * @param string $bookNo
     * @return AccountManageAccountQueryV10Request
     */
    public function setBookNo($bookNo)
    {
        $this->bookNo = $bookNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'account_manage_account_query_v1_0';
    }


}
