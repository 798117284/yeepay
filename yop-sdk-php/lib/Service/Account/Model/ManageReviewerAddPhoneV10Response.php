<?php

namespace Yeepay\Yop\Sdk\Service\Account\Model;


class ManageReviewerAddPhoneV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AddReviewerPhoneRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AddReviewerPhoneRespDTO';
    }

    /**
     * @param AddReviewerPhoneRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AddReviewerPhoneRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
