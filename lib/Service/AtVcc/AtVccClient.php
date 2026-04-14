<?php


namespace Yeepay\Yop\Sdk\Service\AtVcc;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\AtVcc\Model as Model;

class AtVccClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * AtVccClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\UnionPayOrderQueryRequest $request
     * @return Model\UnionPayOrderQueryResponse
     * @throws YopClientException
     */
    public function unionPayOrderQuery(Model\UnionPayOrderQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnionPayOrderQueryRequestMarshaller::getInstance(),
            Model\UnionPayOrderQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnionPayOrderQueryV10Request $request
     * @return Model\UnionPayOrderQueryV10Response
     * @throws YopClientException
     */
    public function union_pay_order_query_v1_0(Model\UnionPayOrderQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnionPayOrderQueryV10RequestMarshaller::getInstance(),
            Model\UnionPayOrderQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
