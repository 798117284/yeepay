<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AccountIndividualModifyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ModifyIndividualResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\ModifyIndividualResponseDTO';
    }

    /**
     * @param ModifyIndividualResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ModifyIndividualResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
