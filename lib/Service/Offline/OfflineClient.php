<?php


namespace Yeepay\Yop\Sdk\Service\Offline;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Offline\Model as Model;
use Yeepay\Yop\Sdk\Service\Offline\Model\Old as ModelOld;

class OfflineClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * OfflineClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\BindRequest $request
     * @return Model\BindResponse
     * @throws YopClientException
     */
    public function bind(Model\BindRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindRequestMarshaller::getInstance(),
            Model\BindResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreateAuxiliaryTerminalRequest $request
     * @return Model\CreateAuxiliaryTerminalResponse
     * @throws YopClientException
     */
    public function createAuxiliaryTerminal(Model\CreateAuxiliaryTerminalRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreateAuxiliaryTerminalRequestMarshaller::getInstance(),
            Model\CreateAuxiliaryTerminalResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param ModelOld\CreateQrCodeRequest $request
     * @return ModelOld\CreateQrCodeResponse
     * @throws YopClientException
     */
    public function createQrCodeOld(ModelOld\CreateQrCodeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, ModelOld\CreateQrCodeRequestMarshaller::getInstance(),
            ModelOld\CreateQrCodeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreateQrcodeRequest $request
     * @return Model\CreateQrcodeResponse
     * @throws YopClientException
     */
    public function createQrcode(Model\CreateQrcodeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreateQrcodeRequestMarshaller::getInstance(),
            Model\CreateQrcodeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreateShopRequest $request
     * @return Model\CreateShopResponse
     * @throws YopClientException
     */
    public function createShop(Model\CreateShopRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreateShopRequestMarshaller::getInstance(),
            Model\CreateShopResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param ModelOld\DownloadQrCodeRequest $request
     * @return ModelOld\DownloadQrCodeResponse
     * @throws YopClientException
     */
    public function downloadQrCodeOld(ModelOld\DownloadQrCodeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, ModelOld\DownloadQrCodeRequestMarshaller::getInstance(),
            ModelOld\DownloadQrCodeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DownloadQrcodeRequest $request
     * @return Model\DownloadQrcodeResponse
     * @throws YopClientException
     */
    public function downloadQrcode(Model\DownloadQrcodeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DownloadQrcodeRequestMarshaller::getInstance(),
            Model\DownloadQrcodeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\GetShopRequest $request
     * @return Model\GetShopResponse
     * @throws YopClientException
     */
    public function getShop(Model\GetShopRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\GetShopRequestMarshaller::getInstance(),
            Model\GetShopResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param ModelOld\OpenQrCodeRequest $request
     * @return ModelOld\OpenQrCodeResponse
     * @throws YopClientException
     */
    public function openQrCodeOld(ModelOld\OpenQrCodeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, ModelOld\OpenQrCodeRequestMarshaller::getInstance(),
            ModelOld\OpenQrCodeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OpenQrcodeRequest $request
     * @return Model\OpenQrcodeResponse
     * @throws YopClientException
     */
    public function openQrcode(Model\OpenQrcodeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OpenQrcodeRequestMarshaller::getInstance(),
            Model\OpenQrcodeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OperateShopRequest $request
     * @return Model\OperateShopResponse
     * @throws YopClientException
     */
    public function operateShop(Model\OperateShopRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OperateShopRequestMarshaller::getInstance(),
            Model\OperateShopResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryAgentListRequest $request
     * @return Model\QueryAgentListResponse
     * @throws YopClientException
     */
    public function queryAgentList(Model\QueryAgentListRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryAgentListRequestMarshaller::getInstance(),
            Model\QueryAgentListResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryAuxiliaryTerminalRequest $request
     * @return Model\QueryAuxiliaryTerminalResponse
     * @throws YopClientException
     */
    public function queryAuxiliaryTerminal(Model\QueryAuxiliaryTerminalRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryAuxiliaryTerminalRequestMarshaller::getInstance(),
            Model\QueryAuxiliaryTerminalResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param ModelOld\QueryFanKeAccessTokenRequest $request
     * @return ModelOld\QueryFanKeAccessTokenResponse
     * @throws YopClientException
     */
    public function queryFanKeAccessTokenOld(ModelOld\QueryFanKeAccessTokenRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, ModelOld\QueryFanKeAccessTokenRequestMarshaller::getInstance(),
            ModelOld\QueryFanKeAccessTokenResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryFankeAccessTokenRequest $request
     * @return Model\QueryFankeAccessTokenResponse
     * @throws YopClientException
     */
    public function queryFankeAccessToken(Model\QueryFankeAccessTokenRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryFankeAccessTokenRequestMarshaller::getInstance(),
            Model\QueryFankeAccessTokenResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryOrderInfoRequest $request
     * @return Model\QueryOrderInfoResponse
     * @throws YopClientException
     */
    public function queryOrderInfo(Model\QueryOrderInfoRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryOrderInfoRequestMarshaller::getInstance(),
            Model\QueryOrderInfoResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryPosTrxInfoRequest $request
     * @return Model\QueryPosTrxInfoResponse
     * @throws YopClientException
     */
    public function queryPosTrxInfo(Model\QueryPosTrxInfoRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryPosTrxInfoRequestMarshaller::getInstance(),
            Model\QueryPosTrxInfoResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param ModelOld\QueryQrCodeListRequest $request
     * @return ModelOld\QueryQrCodeListResponse
     * @throws YopClientException
     */
    public function queryQrCodeListOld(ModelOld\QueryQrCodeListRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, ModelOld\QueryQrCodeListRequestMarshaller::getInstance(),
            ModelOld\QueryQrCodeListResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryQrcodeListRequest $request
     * @return Model\QueryQrcodeListResponse
     * @throws YopClientException
     */
    public function queryQrcodeList(Model\QueryQrcodeListRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryQrcodeListRequestMarshaller::getInstance(),
            Model\QueryQrcodeListResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryShopBindListRequest $request
     * @return Model\QueryShopBindListResponse
     * @throws YopClientException
     */
    public function queryShopBindList(Model\QueryShopBindListRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryShopBindListRequestMarshaller::getInstance(),
            Model\QueryShopBindListResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RelateBroadcastDeviceRequest $request
     * @return Model\RelateBroadcastDeviceResponse
     * @throws YopClientException
     */
    public function relateBroadcastDevice(Model\RelateBroadcastDeviceRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RelateBroadcastDeviceRequestMarshaller::getInstance(),
            Model\RelateBroadcastDeviceResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SaveTerminalEmployeeRequest $request
     * @return Model\SaveTerminalEmployeeResponse
     * @throws YopClientException
     */
    public function saveTerminalEmployee(Model\SaveTerminalEmployeeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SaveTerminalEmployeeRequestMarshaller::getInstance(),
            Model\SaveTerminalEmployeeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnbindRequest $request
     * @return Model\UnbindResponse
     * @throws YopClientException
     */
    public function unbind(Model\UnbindRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnbindRequestMarshaller::getInstance(),
            Model\UnbindResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param ModelOld\UnbindQrCodeRequest $request
     * @return ModelOld\UnbindQrCodeResponse
     * @throws YopClientException
     */
    public function unbindQrCodeOld(ModelOld\UnbindQrCodeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, ModelOld\UnbindQrCodeRequestMarshaller::getInstance(),
            ModelOld\UnbindQrCodeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnbindQrcodeRequest $request
     * @return Model\UnbindQrcodeResponse
     * @throws YopClientException
     */
    public function unbindQrcode(Model\UnbindQrcodeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnbindQrcodeRequestMarshaller::getInstance(),
            Model\UnbindQrcodeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UpdateAuxiliaryTerminalRequest $request
     * @return Model\UpdateAuxiliaryTerminalResponse
     * @throws YopClientException
     */
    public function updateAuxiliaryTerminal(Model\UpdateAuxiliaryTerminalRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UpdateAuxiliaryTerminalRequestMarshaller::getInstance(),
            Model\UpdateAuxiliaryTerminalResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UpdateQrCfgRequest $request
     * @return Model\UpdateQrCfgResponse
     * @throws YopClientException
     */
    public function updateQrCfg(Model\UpdateQrCfgRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UpdateQrCfgRequestMarshaller::getInstance(),
            Model\UpdateQrCfgResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param ModelOld\UpdateQrCodeStatusRequest $request
     * @return ModelOld\UpdateQrCodeStatusResponse
     * @throws YopClientException
     */
    public function updateQrCodeStatusOld(ModelOld\UpdateQrCodeStatusRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, ModelOld\UpdateQrCodeStatusRequestMarshaller::getInstance(),
            ModelOld\UpdateQrCodeStatusResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UpdateQrcodeStatusRequest $request
     * @return Model\UpdateQrcodeStatusResponse
     * @throws YopClientException
     */
    public function updateQrcodeStatus(Model\UpdateQrcodeStatusRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UpdateQrcodeStatusRequestMarshaller::getInstance(),
            Model\UpdateQrcodeStatusResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UpdateShopRequest $request
     * @return Model\UpdateShopResponse
     * @throws YopClientException
     */
    public function updateShop(Model\UpdateShopRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UpdateShopRequestMarshaller::getInstance(),
            Model\UpdateShopResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UpdateTerminalEmployeeRequest $request
     * @return Model\UpdateTerminalEmployeeResponse
     * @throws YopClientException
     */
    public function updateTerminalEmployee(Model\UpdateTerminalEmployeeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UpdateTerminalEmployeeRequestMarshaller::getInstance(),
            Model\UpdateTerminalEmployeeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
