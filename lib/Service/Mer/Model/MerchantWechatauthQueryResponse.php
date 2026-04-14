<?php

namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class MerchantWechatauthQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryCertificateResultRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\QueryCertificateResultRespDto';
    }

    /**
     * @param QueryCertificateResultRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryCertificateResultRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
