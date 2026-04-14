<?php

namespace Yeepay\Yop\Sdk\Service\Offline\Model;


class SaveTerminalEmployeeRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $employeeName;
    /**
     * @var string
     */
    private $password;
    /**
     * @var string
     */
    private $operatorType;
    /**
     * @var string
     */
    private $employeeNo;
    /**
     * @var string
     */
    private $employeeStatus;
    /**
     * @var string
     */
    private $merchantNo;

    /**
     * Gets employeeName
     *
     * @return string
     */
    public function getEmployeeName()
    {
        return $this->employeeName;
    }

    /**
     * Sets employeeName
     *
     * @param string $employeeName
     * @return SaveTerminalEmployeeRequest
     */
    public function setEmployeeName($employeeName)
    {
        $this->employeeName = $employeeName;
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
     * @return SaveTerminalEmployeeRequest
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
    /**
     * Gets operatorType
     *
     * @return string
     */
    public function getOperatorType()
    {
        return $this->operatorType;
    }

    /**
     * Sets operatorType
     *
     * @param string $operatorType
     * @return SaveTerminalEmployeeRequest
     */
    public function setOperatorType($operatorType)
    {
        $this->operatorType = $operatorType;
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
     * @return SaveTerminalEmployeeRequest
     */
    public function setEmployeeNo($employeeNo)
    {
        $this->employeeNo = $employeeNo;
        return $this;
    }
    /**
     * Gets employeeStatus
     *
     * @return string
     */
    public function getEmployeeStatus()
    {
        return $this->employeeStatus;
    }

    /**
     * Sets employeeStatus
     *
     * @param string $employeeStatus
     * @return SaveTerminalEmployeeRequest
     */
    public function setEmployeeStatus($employeeStatus)
    {
        $this->employeeStatus = $employeeStatus;
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
     * @return SaveTerminalEmployeeRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'saveTerminalEmployee';
    }


}
