<?php

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


class BindcardUnbindcardRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $userNo;
    /**
     * @var string
     */
    private $userType;
    /**
     * @var string
     */
    private $bindId;
    /**
     * @var string
     */
    private $bankCardNoFirst6;
    /**
     * @var string
     */
    private $bankCardNoLast4;
    /**
     * @var string
     */
    private $bankCardNo;

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
     * @return BindcardUnbindcardRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets userNo
     *
     * @return string
     */
    public function getUserNo()
    {
        return $this->userNo;
    }

    /**
     * Sets userNo
     *
     * @param string $userNo
     * @return BindcardUnbindcardRequest
     */
    public function setUserNo($userNo)
    {
        $this->userNo = $userNo;
        return $this;
    }
    /**
     * Gets userType
     *
     * @return string
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Sets userType
     *
     * @param string $userType
     * @return BindcardUnbindcardRequest
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;
        return $this;
    }
    /**
     * Gets bindId
     *
     * @return string
     */
    public function getBindId()
    {
        return $this->bindId;
    }

    /**
     * Sets bindId
     *
     * @param string $bindId
     * @return BindcardUnbindcardRequest
     */
    public function setBindId($bindId)
    {
        $this->bindId = $bindId;
        return $this;
    }
    /**
     * Gets bankCardNoFirst6
     *
     * @return string
     */
    public function getBankCardNoFirst6()
    {
        return $this->bankCardNoFirst6;
    }

    /**
     * Sets bankCardNoFirst6
     *
     * @param string $bankCardNoFirst6
     * @return BindcardUnbindcardRequest
     */
    public function setBankCardNoFirst6($bankCardNoFirst6)
    {
        $this->bankCardNoFirst6 = $bankCardNoFirst6;
        return $this;
    }
    /**
     * Gets bankCardNoLast4
     *
     * @return string
     */
    public function getBankCardNoLast4()
    {
        return $this->bankCardNoLast4;
    }

    /**
     * Sets bankCardNoLast4
     *
     * @param string $bankCardNoLast4
     * @return BindcardUnbindcardRequest
     */
    public function setBankCardNoLast4($bankCardNoLast4)
    {
        $this->bankCardNoLast4 = $bankCardNoLast4;
        return $this;
    }
    /**
     * Gets bankCardNo
     *
     * @return string
     */
    public function getBankCardNo()
    {
        return $this->bankCardNo;
    }

    /**
     * Sets bankCardNo
     *
     * @param string $bankCardNo
     * @return BindcardUnbindcardRequest
     */
    public function setBankCardNo($bankCardNo)
    {
        $this->bankCardNo = $bankCardNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'bindcardUnbindcard';
    }


}
