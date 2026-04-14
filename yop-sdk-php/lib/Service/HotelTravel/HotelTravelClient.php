<?php


namespace Yeepay\Yop\Sdk\Service\HotelTravel;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\HotelTravel\Model as Model;

class HotelTravelClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * HotelTravelClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\OrderVerifySyncRequest $request
     * @return Model\OrderVerifySyncResponse
     * @throws YopClientException
     */
    public function orderVerifySync(Model\OrderVerifySyncRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OrderVerifySyncRequestMarshaller::getInstance(),
            Model\OrderVerifySyncResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OrderResultQueryRequest $request
     * @return Model\OrderResultQueryResponse
     * @throws YopClientException
     */
    public function order_result_query(Model\OrderResultQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OrderResultQueryRequestMarshaller::getInstance(),
            Model\OrderResultQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OrderSyncRequest $request
     * @return Model\OrderSyncResponse
     * @throws YopClientException
     */
    public function order_sync(Model\OrderSyncRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OrderSyncRequestMarshaller::getInstance(),
            Model\OrderSyncResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryOrderResultRequest $request
     * @return Model\QueryOrderResultResponse
     * @throws YopClientException
     */
    public function queryOrderResult(Model\QueryOrderResultRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryOrderResultRequestMarshaller::getInstance(),
            Model\QueryOrderResultResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
