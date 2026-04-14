<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class AuthStateQueryV20Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var IdentityAuthStateResDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\IdentityAuthStateResDto';
    }

    /**
     * @param IdentityAuthStateResDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return IdentityAuthStateResDto
     */
    function getResult()
    {
        return $this->result;
    }
}
