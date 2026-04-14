<?php


namespace Yeepay\Yop\Sdk\Service\AgencyOperation;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\AgencyOperation\Model as Model;

class AgencyOperationClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * AgencyOperationClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\CreateShopRequest $request
     * @return Model\CreateShopResponse
     * @throws YopClientException
     */
    public function create_shop(Model\CreateShopRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreateShopRequestMarshaller::getInstance(),
            Model\CreateShopResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\InitiateCommissionRequest $request
     * @return Model\InitiateCommissionResponse
     * @throws YopClientException
     */
    public function initiate_commission(Model\InitiateCommissionRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\InitiateCommissionRequestMarshaller::getInstance(),
            Model\InitiateCommissionResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OcCommissionQueryRequest $request
     * @return Model\OcCommissionQueryResponse
     * @throws YopClientException
     */
    public function ocCommissionQuery(Model\OcCommissionQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OcCommissionQueryRequestMarshaller::getInstance(),
            Model\OcCommissionQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OcCommissionRequestRequest $request
     * @return Model\OcCommissionRequestResponse
     * @throws YopClientException
     */
    public function ocCommissionRequest(Model\OcCommissionRequestRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OcCommissionRequestRequestMarshaller::getInstance(),
            Model\OcCommissionRequestResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OcShopAuthRequest $request
     * @return Model\OcShopAuthResponse
     * @throws YopClientException
     */
    public function ocShopAuth(Model\OcShopAuthRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OcShopAuthRequestMarshaller::getInstance(),
            Model\OcShopAuthResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OcShopBindCardRequest $request
     * @return Model\OcShopBindCardResponse
     * @throws YopClientException
     */
    public function ocShopBindCard(Model\OcShopBindCardRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OcShopBindCardRequestMarshaller::getInstance(),
            Model\OcShopBindCardResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OcShopCreateRequest $request
     * @return Model\OcShopCreateResponse
     * @throws YopClientException
     */
    public function ocShopCreate(Model\OcShopCreateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OcShopCreateRequestMarshaller::getInstance(),
            Model\OcShopCreateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OcShopQueryRequest $request
     * @return Model\OcShopQueryResponse
     * @throws YopClientException
     */
    public function ocShopQuery(Model\OcShopQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OcShopQueryRequestMarshaller::getInstance(),
            Model\OcShopQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OcShopUnbindCardRequest $request
     * @return Model\OcShopUnbindCardResponse
     * @throws YopClientException
     */
    public function ocShopUnbindCard(Model\OcShopUnbindCardRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OcShopUnbindCardRequestMarshaller::getInstance(),
            Model\OcShopUnbindCardResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryCommissionRecordRequest $request
     * @return Model\QueryCommissionRecordResponse
     * @throws YopClientException
     */
    public function query_commission_record(Model\QueryCommissionRecordRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryCommissionRecordRequestMarshaller::getInstance(),
            Model\QueryCommissionRecordResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ShopBindRequest $request
     * @return Model\ShopBindResponse
     * @throws YopClientException
     */
    public function shopBind(Model\ShopBindRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ShopBindRequestMarshaller::getInstance(),
            Model\ShopBindResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ShopBindQueryRequest $request
     * @return Model\ShopBindQueryResponse
     * @throws YopClientException
     */
    public function shopBindQuery(Model\ShopBindQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ShopBindQueryRequestMarshaller::getInstance(),
            Model\ShopBindQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ShopAuthorizeRequest $request
     * @return Model\ShopAuthorizeResponse
     * @throws YopClientException
     */
    public function shop_authorize(Model\ShopAuthorizeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ShopAuthorizeRequestMarshaller::getInstance(),
            Model\ShopAuthorizeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ShopBindCardRequest $request
     * @return Model\ShopBindCardResponse
     * @throws YopClientException
     */
    public function shop_bind_card(Model\ShopBindCardRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ShopBindCardRequestMarshaller::getInstance(),
            Model\ShopBindCardResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ShopQueryRequest $request
     * @return Model\ShopQueryResponse
     * @throws YopClientException
     */
    public function shop_query(Model\ShopQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ShopQueryRequestMarshaller::getInstance(),
            Model\ShopQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ShopUnbindCardRequest $request
     * @return Model\ShopUnbindCardResponse
     * @throws YopClientException
     */
    public function shop_unbind_card(Model\ShopUnbindCardRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ShopUnbindCardRequestMarshaller::getInstance(),
            Model\ShopUnbindCardResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WithholdRequest $request
     * @return Model\WithholdResponse
     * @throws YopClientException
     */
    public function withhold(Model\WithholdRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WithholdRequestMarshaller::getInstance(),
            Model\WithholdResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WithholdQueryRequest $request
     * @return Model\WithholdQueryResponse
     * @throws YopClientException
     */
    public function withholdQuery(Model\WithholdQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WithholdQueryRequestMarshaller::getInstance(),
            Model\WithholdQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WithholdRecordQueryV10Request $request
     * @return Model\WithholdRecordQueryV10Response
     * @throws YopClientException
     */
    public function withhold_record_query_v1_0(Model\WithholdRecordQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WithholdRecordQueryV10RequestMarshaller::getInstance(),
            Model\WithholdRecordQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WithholdShopBindQueryV10Request $request
     * @return Model\WithholdShopBindQueryV10Response
     * @throws YopClientException
     */
    public function withhold_shop_bind_query_v1_0(Model\WithholdShopBindQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WithholdShopBindQueryV10RequestMarshaller::getInstance(),
            Model\WithholdShopBindQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WithholdShopBindV10Request $request
     * @return Model\WithholdShopBindV10Response
     * @throws YopClientException
     */
    public function withhold_shop_bind_v1_0(Model\WithholdShopBindV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WithholdShopBindV10RequestMarshaller::getInstance(),
            Model\WithholdShopBindV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WithholdV10Request $request
     * @return Model\WithholdV10Response
     * @throws YopClientException
     */
    public function withhold_v1_0(Model\WithholdV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WithholdV10RequestMarshaller::getInstance(),
            Model\WithholdV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
