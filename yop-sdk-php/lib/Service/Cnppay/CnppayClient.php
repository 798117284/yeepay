<?php


namespace Yeepay\Yop\Sdk\Service\Cnppay;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Cnppay\Model as Model;

class CnppayClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * CnppayClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\BindPreOrderPayRequestRequest $request
     * @return Model\BindPreOrderPayRequestResponse
     * @throws YopClientException
     */
    public function bind_pre_order_pay_request(Model\BindPreOrderPayRequestRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindPreOrderPayRequestRequestMarshaller::getInstance(),
            Model\BindPreOrderPayRequestResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindpayPreorderRequestRequest $request
     * @return Model\BindpayPreorderRequestResponse
     * @throws YopClientException
     */
    public function bindpayPreorderRequest(Model\BindpayPreorderRequestRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindpayPreorderRequestRequestMarshaller::getInstance(),
            Model\BindpayPreorderRequestResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\InstallmentPayRequestRequest $request
     * @return Model\InstallmentPayRequestResponse
     * @throws YopClientException
     */
    public function installmentPayRequest(Model\InstallmentPayRequestRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\InstallmentPayRequestRequestMarshaller::getInstance(),
            Model\InstallmentPayRequestResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\InstallmentPayRequestV11Request $request
     * @return Model\InstallmentPayRequestV11Response
     * @throws YopClientException
     */
    public function installmentPayRequestV1_1(Model\InstallmentPayRequestV11Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\InstallmentPayRequestV11RequestMarshaller::getInstance(),
            Model\InstallmentPayRequestV11ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\InstallmentQuerybankcfgRequest $request
     * @return Model\InstallmentQuerybankcfgResponse
     * @throws YopClientException
     */
    public function installmentQuerybankcfg(Model\InstallmentQuerybankcfgRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\InstallmentQuerybankcfgRequestMarshaller::getInstance(),
            Model\InstallmentQuerybankcfgResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OverseasPayAuthRequest $request
     * @return Model\OverseasPayAuthResponse
     * @throws YopClientException
     */
    public function overseasPayAuth(Model\OverseasPayAuthRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OverseasPayAuthRequestMarshaller::getInstance(),
            Model\OverseasPayAuthResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OverseasPayConfirmRequest $request
     * @return Model\OverseasPayConfirmResponse
     * @throws YopClientException
     */
    public function overseasPayConfirm(Model\OverseasPayConfirmRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OverseasPayConfirmRequestMarshaller::getInstance(),
            Model\OverseasPayConfirmResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OverseasPayRequestRequest $request
     * @return Model\OverseasPayRequestResponse
     * @throws YopClientException
     */
    public function overseasPayRequest(Model\OverseasPayRequestRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OverseasPayRequestRequestMarshaller::getInstance(),
            Model\OverseasPayRequestResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OverseasQueryRequest $request
     * @return Model\OverseasQueryResponse
     * @throws YopClientException
     */
    public function overseasQuery(Model\OverseasQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OverseasQueryRequestMarshaller::getInstance(),
            Model\OverseasQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OverseasPayConfirmV10Request $request
     * @return Model\OverseasPayConfirmV10Response
     * @throws YopClientException
     */
    public function overseas_pay_confirm_v1_0(Model\OverseasPayConfirmV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OverseasPayConfirmV10RequestMarshaller::getInstance(),
            Model\OverseasPayConfirmV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OverseasPayRequestV10Request $request
     * @return Model\OverseasPayRequestV10Response
     * @throws YopClientException
     */
    public function overseas_pay_request_v1_0(Model\OverseasPayRequestV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OverseasPayRequestV10RequestMarshaller::getInstance(),
            Model\OverseasPayRequestV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OverseasQueryV10Request $request
     * @return Model\OverseasQueryV10Response
     * @throws YopClientException
     */
    public function overseas_query_v1_0(Model\OverseasQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OverseasQueryV10RequestMarshaller::getInstance(),
            Model\OverseasQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
