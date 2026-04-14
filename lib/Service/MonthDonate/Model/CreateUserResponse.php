<?php

namespace Yeepay\Yop\Sdk\Service\MonthDonate\Model;


class CreateUserResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var CreateUserResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MonthDonate\Model\CreateUserResponseDTO';
    }

    /**
     * @param CreateUserResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CreateUserResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
