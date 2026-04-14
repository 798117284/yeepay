<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model;


class UpdateTerminalEmployeeRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var int
     */
    private $resetPassword;
    /**
     * @var string
     */
    private $password;
    /**
     * @var string
     */
    private $oldPassword;
    /**
     * @var string
     */
    private $employeeNo;
    /**
     * @var string
     */
    private $merchantNo;

    /**
     * Gets resetPassword
     *
     * @return int
     */
    public function getResetPassword()
    {
        return $this->resetPassword;
    }

    /**
     * Sets resetPassword
     *
     * @param int $resetPassword
     * @return UpdateTerminalEmployeeRequest
     */
    public function setResetPassword($resetPassword)
    {
        $this->resetPassword = $resetPassword;
        return $this;
    }
    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets password
     *
     * @param string $password
     * @return UpdateTerminalEmployeeRequest
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
    /**
     * Gets oldPassword
     *
     * @return string
     */
    public function getOldPassword()
    {
        return $this->oldPassword;
    }

    /**
     * Sets oldPassword
     *
     * @param string $oldPassword
     * @return UpdateTerminalEmployeeRequest
     */
    public function setOldPassword($oldPassword)
    {
        $this->oldPassword = $oldPassword;
        return $this;
    }
    /**
     * Gets employeeNo
     *
     * @return string
     */
    public function getEmployeeNo()
    {
        return $this->employeeNo;
    }

    /**
     * Sets employeeNo
     *
     * @param string $employeeNo
     * @return UpdateTerminalEmployeeRequest
     */
    public function setEmployeeNo($employeeNo)
    {
        $this->employeeNo = $employeeNo;
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
     * @return UpdateTerminalEmployeeRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'updateTerminalEmployee';
    }


}
