<?php


namespace Yeepay\Yop\Sdk\Service\Mer;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Mer\Model as Model;

class MerClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * MerClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\AddUserBankcardRequest $request
     * @return Model\AddUserBankcardResponse
     * @throws YopClientException
     */
    public function add_user_bankcard(Model\AddUserBankcardRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AddUserBankcardRequestMarshaller::getInstance(),
            Model\AddUserBankcardResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AlipayauthApplyRequest $request
     * @return Model\AlipayauthApplyResponse
     * @throws YopClientException
     */
    public function alipayauthApply(Model\AlipayauthApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AlipayauthApplyRequestMarshaller::getInstance(),
            Model\AlipayauthApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AlipayauthCancelRequest $request
     * @return Model\AlipayauthCancelResponse
     * @throws YopClientException
     */
    public function alipayauthCancel(Model\AlipayauthCancelRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AlipayauthCancelRequestMarshaller::getInstance(),
            Model\AlipayauthCancelResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AlipayauthQueryRequest $request
     * @return Model\AlipayauthQueryResponse
     * @throws YopClientException
     */
    public function alipayauthQuery(Model\AlipayauthQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AlipayauthQueryRequestMarshaller::getInstance(),
            Model\AlipayauthQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ApplyReceiverProgressQueryRequest $request
     * @return Model\ApplyReceiverProgressQueryResponse
     * @throws YopClientException
     */
    public function applyReceiverProgressQuery(Model\ApplyReceiverProgressQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ApplyReceiverProgressQueryRequestMarshaller::getInstance(),
            Model\ApplyReceiverProgressQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ApplyUserRequest $request
     * @return Model\ApplyUserResponse
     * @throws YopClientException
     */
    public function apply_user(Model\ApplyUserRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ApplyUserRequestMarshaller::getInstance(),
            Model\ApplyUserResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AreaQueryRequest $request
     * @return Model\AreaQueryResponse
     * @throws YopClientException
     */
    public function areaQuery(Model\AreaQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AreaQueryRequestMarshaller::getInstance(),
            Model\AreaQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AuthStateQueryV2Request $request
     * @return Model\AuthStateQueryV2Response
     * @throws YopClientException
     */
    public function authStateQueryV2(Model\AuthStateQueryV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AuthStateQueryV2RequestMarshaller::getInstance(),
            Model\AuthStateQueryV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AuthStateQueryV20Request $request
     * @return Model\AuthStateQueryV20Response
     * @throws YopClientException
     */
    public function auth_state_query_v2_0(Model\AuthStateQueryV20Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AuthStateQueryV20RequestMarshaller::getInstance(),
            Model\AuthStateQueryV20ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindUserBankcardRequest $request
     * @return Model\BindUserBankcardResponse
     * @throws YopClientException
     */
    public function bind_user_bankcard(Model\BindUserBankcardRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindUserBankcardRequestMarshaller::getInstance(),
            Model\BindUserBankcardResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BossRegisterQueryV2Request $request
     * @return Model\BossRegisterQueryV2Response
     * @throws YopClientException
     */
    public function bossRegisterQueryV2(Model\BossRegisterQueryV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BossRegisterQueryV2RequestMarshaller::getInstance(),
            Model\BossRegisterQueryV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BossRegisterSaasDivideV2Request $request
     * @return Model\BossRegisterSaasDivideV2Response
     * @throws YopClientException
     */
    public function bossRegisterSaasDivideV2(Model\BossRegisterSaasDivideV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BossRegisterSaasDivideV2RequestMarshaller::getInstance(),
            Model\BossRegisterSaasDivideV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BossRegisterSaasStandardV2Request $request
     * @return Model\BossRegisterSaasStandardV2Response
     * @throws YopClientException
     */
    public function bossRegisterSaasStandardV2(Model\BossRegisterSaasStandardV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BossRegisterSaasStandardV2RequestMarshaller::getInstance(),
            Model\BossRegisterSaasStandardV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CardQueryRequest $request
     * @return Model\CardQueryResponse
     * @throws YopClientException
     */
    public function cardQuery(Model\CardQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CardQueryRequestMarshaller::getInstance(),
            Model\CardQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CloneMerchantRequest $request
     * @return Model\CloneMerchantResponse
     * @throws YopClientException
     */
    public function cloneMerchant(Model\CloneMerchantRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CloneMerchantRequestMarshaller::getInstance(),
            Model\CloneMerchantResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerCardQueryRequest $request
     * @return Model\MerCardQueryResponse
     * @throws YopClientException
     */
    public function mer_card_query(Model\MerCardQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerCardQueryRequestMarshaller::getInstance(),
            Model\MerCardQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantBasicInfoQueryRequest $request
     * @return Model\MerchantBasicInfoQueryResponse
     * @throws YopClientException
     */
    public function merchantBasicInfoQuery(Model\MerchantBasicInfoQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantBasicInfoQueryRequestMarshaller::getInstance(),
            Model\MerchantBasicInfoQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantDisposeQueryRequest $request
     * @return Model\MerchantDisposeQueryResponse
     * @throws YopClientException
     */
    public function merchantDisposeQuery(Model\MerchantDisposeQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantDisposeQueryRequestMarshaller::getInstance(),
            Model\MerchantDisposeQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantDisposeUnfreezeRequest $request
     * @return Model\MerchantDisposeUnfreezeResponse
     * @throws YopClientException
     */
    public function merchantDisposeUnfreeze(Model\MerchantDisposeUnfreezeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantDisposeUnfreezeRequestMarshaller::getInstance(),
            Model\MerchantDisposeUnfreezeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantInfoModifyRequest $request
     * @return Model\MerchantInfoModifyResponse
     * @throws YopClientException
     */
    public function merchantInfoModify(Model\MerchantInfoModifyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantInfoModifyRequestMarshaller::getInstance(),
            Model\MerchantInfoModifyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantInfoModifyQueryRequest $request
     * @return Model\MerchantInfoModifyQueryResponse
     * @throws YopClientException
     */
    public function merchantInfoModifyQuery(Model\MerchantInfoModifyQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantInfoModifyQueryRequestMarshaller::getInstance(),
            Model\MerchantInfoModifyQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantInfoVerifySubMerchantRelationRequest $request
     * @return Model\MerchantInfoVerifySubMerchantRelationResponse
     * @throws YopClientException
     */
    public function merchantInfoVerifySubMerchantRelation(Model\MerchantInfoVerifySubMerchantRelationRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantInfoVerifySubMerchantRelationRequestMarshaller::getInstance(),
            Model\MerchantInfoVerifySubMerchantRelationResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantSupplementQualificationQueryRequest $request
     * @return Model\MerchantSupplementQualificationQueryResponse
     * @throws YopClientException
     */
    public function merchantSupplementQualificationQuery(Model\MerchantSupplementQualificationQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantSupplementQualificationQueryRequestMarshaller::getInstance(),
            Model\MerchantSupplementQualificationQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantSupplementQualificationSubmitRequest $request
     * @return Model\MerchantSupplementQualificationSubmitResponse
     * @throws YopClientException
     */
    public function merchantSupplementQualificationSubmit(Model\MerchantSupplementQualificationSubmitRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantSupplementQualificationSubmitRequestMarshaller::getInstance(),
            Model\MerchantSupplementQualificationSubmitResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantWechatauthApplyRequest $request
     * @return Model\MerchantWechatauthApplyResponse
     * @throws YopClientException
     */
    public function merchantWechatauthApply(Model\MerchantWechatauthApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantWechatauthApplyRequestMarshaller::getInstance(),
            Model\MerchantWechatauthApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantWechatauthCancelRequest $request
     * @return Model\MerchantWechatauthCancelResponse
     * @throws YopClientException
     */
    public function merchantWechatauthCancel(Model\MerchantWechatauthCancelRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantWechatauthCancelRequestMarshaller::getInstance(),
            Model\MerchantWechatauthCancelResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantWechatauthQueryRequest $request
     * @return Model\MerchantWechatauthQueryResponse
     * @throws YopClientException
     */
    public function merchantWechatauthQuery(Model\MerchantWechatauthQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantWechatauthQueryRequestMarshaller::getInstance(),
            Model\MerchantWechatauthQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantAdapterReadH5NetInRequest $request
     * @return Model\MerchantAdapterReadH5NetInResponse
     * @throws YopClientException
     */
    public function merchant_adapter_read_h5_net_in(Model\MerchantAdapterReadH5NetInRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantAdapterReadH5NetInRequestMarshaller::getInstance(),
            Model\MerchantAdapterReadH5NetInResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantAdapterReadH5QueryRequest $request
     * @return Model\MerchantAdapterReadH5QueryResponse
     * @throws YopClientException
     */
    public function merchant_adapter_read_h5_query(Model\MerchantAdapterReadH5QueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantAdapterReadH5QueryRequestMarshaller::getInstance(),
            Model\MerchantAdapterReadH5QueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantAlipayauthApplyV10Request $request
     * @return Model\MerchantAlipayauthApplyV10Response
     * @throws YopClientException
     */
    public function merchant_alipayauth_apply_v1_0(Model\MerchantAlipayauthApplyV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantAlipayauthApplyV10RequestMarshaller::getInstance(),
            Model\MerchantAlipayauthApplyV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantAlipayauthCancelV10Request $request
     * @return Model\MerchantAlipayauthCancelV10Response
     * @throws YopClientException
     */
    public function merchant_alipayauth_cancel_v1_0(Model\MerchantAlipayauthCancelV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantAlipayauthCancelV10RequestMarshaller::getInstance(),
            Model\MerchantAlipayauthCancelV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantAlipayauthQueryV10Request $request
     * @return Model\MerchantAlipayauthQueryV10Response
     * @throws YopClientException
     */
    public function merchant_alipayauth_query_v1_0(Model\MerchantAlipayauthQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantAlipayauthQueryV10RequestMarshaller::getInstance(),
            Model\MerchantAlipayauthQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantDisposeUnfreezeV10Request $request
     * @return Model\MerchantDisposeUnfreezeV10Response
     * @throws YopClientException
     */
    public function merchant_dispose_unfreeze_v1_0(Model\MerchantDisposeUnfreezeV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantDisposeUnfreezeV10RequestMarshaller::getInstance(),
            Model\MerchantDisposeUnfreezeV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantInfoModifyV10Request $request
     * @return Model\MerchantInfoModifyV10Response
     * @throws YopClientException
     */
    public function merchant_info_modify_v1_0(Model\MerchantInfoModifyV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantInfoModifyV10RequestMarshaller::getInstance(),
            Model\MerchantInfoModifyV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantRectificationResultQueryRequest $request
     * @return Model\MerchantRectificationResultQueryResponse
     * @throws YopClientException
     */
    public function merchant_rectification_result_query(Model\MerchantRectificationResultQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantRectificationResultQueryRequestMarshaller::getInstance(),
            Model\MerchantRectificationResultQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantSupplementQualificationSubmitV10Request $request
     * @return Model\MerchantSupplementQualificationSubmitV10Response
     * @throws YopClientException
     */
    public function merchant_supplement_qualification_submit_v1_0(Model\MerchantSupplementQualificationSubmitV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantSupplementQualificationSubmitV10RequestMarshaller::getInstance(),
            Model\MerchantSupplementQualificationSubmitV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantWechatauthApplyV10Request $request
     * @return Model\MerchantWechatauthApplyV10Response
     * @throws YopClientException
     */
    public function merchant_wechatauth_apply_v1_0(Model\MerchantWechatauthApplyV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantWechatauthApplyV10RequestMarshaller::getInstance(),
            Model\MerchantWechatauthApplyV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantWechatauthCancelV10Request $request
     * @return Model\MerchantWechatauthCancelV10Response
     * @throws YopClientException
     */
    public function merchant_wechatauth_cancel_v1_0(Model\MerchantWechatauthCancelV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantWechatauthCancelV10RequestMarshaller::getInstance(),
            Model\MerchantWechatauthCancelV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MerchantWechatauthQueryV10Request $request
     * @return Model\MerchantWechatauthQueryV10Response
     * @throws YopClientException
     */
    public function merchant_wechatauth_query_v1_0(Model\MerchantWechatauthQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MerchantWechatauthQueryV10RequestMarshaller::getInstance(),
            Model\MerchantWechatauthQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MpSendSmsVerifyCodeRequest $request
     * @return Model\MpSendSmsVerifyCodeResponse
     * @throws YopClientException
     */
    public function mpSendSmsVerifyCode(Model\MpSendSmsVerifyCodeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MpSendSmsVerifyCodeRequestMarshaller::getInstance(),
            Model\MpSendSmsVerifyCodeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MpSetTradePasswordRequest $request
     * @return Model\MpSetTradePasswordResponse
     * @throws YopClientException
     */
    public function mpSetTradePassword(Model\MpSetTradePasswordRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MpSetTradePasswordRequestMarshaller::getInstance(),
            Model\MpSetTradePasswordResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MpVerifyTradePasswordRequest $request
     * @return Model\MpVerifyTradePasswordResponse
     * @throws YopClientException
     */
    public function mpVerifyTradePassword(Model\MpVerifyTradePasswordRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MpVerifyTradePasswordRequestMarshaller::getInstance(),
            Model\MpVerifyTradePasswordResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\NetInProgressQueryByNameRequest $request
     * @return Model\NetInProgressQueryByNameResponse
     * @throws YopClientException
     */
    public function netInProgressQueryByName(Model\NetInProgressQueryByNameRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\NetInProgressQueryByNameRequestMarshaller::getInstance(),
            Model\NetInProgressQueryByNameResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\NetinH5IndexRequest $request
     * @return Model\NetinH5IndexResponse
     * @throws YopClientException
     */
    public function netinH5Index(Model\NetinH5IndexRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\NetinH5IndexRequestMarshaller::getInstance(),
            Model\NetinH5IndexResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\NetinH5QueryRequest $request
     * @return Model\NetinH5QueryResponse
     * @throws YopClientException
     */
    public function netinH5Query(Model\NetinH5QueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\NetinH5QueryRequestMarshaller::getInstance(),
            Model\NetinH5QueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\NotifyRepeatV2Request $request
     * @return Model\NotifyRepeatV2Response
     * @throws YopClientException
     */
    public function notifyRepeatV2(Model\NotifyRepeatV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\NotifyRepeatV2RequestMarshaller::getInstance(),
            Model\NotifyRepeatV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\NotifyRepeatV20Request $request
     * @return Model\NotifyRepeatV20Response
     * @throws YopClientException
     */
    public function notify_repeat_v2_0(Model\NotifyRepeatV20Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\NotifyRepeatV20RequestMarshaller::getInstance(),
            Model\NotifyRepeatV20ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ProductFeeModifyV2Request $request
     * @return Model\ProductFeeModifyV2Response
     * @throws YopClientException
     */
    public function productFeeModifyV2(Model\ProductFeeModifyV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ProductFeeModifyV2RequestMarshaller::getInstance(),
            Model\ProductFeeModifyV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ProductFeeQueryV2Request $request
     * @return Model\ProductFeeQueryV2Response
     * @throws YopClientException
     */
    public function productFeeQueryV2(Model\ProductFeeQueryV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ProductFeeQueryV2RequestMarshaller::getInstance(),
            Model\ProductFeeQueryV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ProductIncrementSettleOpenV2Request $request
     * @return Model\ProductIncrementSettleOpenV2Response
     * @throws YopClientException
     */
    public function productIncrementSettleOpenV2(Model\ProductIncrementSettleOpenV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ProductIncrementSettleOpenV2RequestMarshaller::getInstance(),
            Model\ProductIncrementSettleOpenV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ProductModifyQueryV2Request $request
     * @return Model\ProductModifyQueryV2Response
     * @throws YopClientException
     */
    public function productModifyQueryV2(Model\ProductModifyQueryV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ProductModifyQueryV2RequestMarshaller::getInstance(),
            Model\ProductModifyQueryV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ProductFeeModifyV20Request $request
     * @return Model\ProductFeeModifyV20Response
     * @throws YopClientException
     */
    public function product_fee_modify_v2_0(Model\ProductFeeModifyV20Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ProductFeeModifyV20RequestMarshaller::getInstance(),
            Model\ProductFeeModifyV20ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ProductIncrementSettleOpenV20Request $request
     * @return Model\ProductIncrementSettleOpenV20Response
     * @throws YopClientException
     */
    public function product_increment_settle_open_v2_0(Model\ProductIncrementSettleOpenV20Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ProductIncrementSettleOpenV20RequestMarshaller::getInstance(),
            Model\ProductIncrementSettleOpenV20ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryAreaRequest $request
     * @return Model\QueryAreaResponse
     * @throws YopClientException
     */
    public function queryArea(Model\QueryAreaRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryAreaRequestMarshaller::getInstance(),
            Model\QueryAreaResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryMerchantInfoModifyProgressRequest $request
     * @return Model\QueryMerchantInfoModifyProgressResponse
     * @throws YopClientException
     */
    public function queryMerchantInfoModifyProgress(Model\QueryMerchantInfoModifyProgressRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryMerchantInfoModifyProgressRequestMarshaller::getInstance(),
            Model\QueryMerchantInfoModifyProgressResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryMerchantStatusRequest $request
     * @return Model\QueryMerchantStatusResponse
     * @throws YopClientException
     */
    public function queryMerchantStatus(Model\QueryMerchantStatusRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryMerchantStatusRequestMarshaller::getInstance(),
            Model\QueryMerchantStatusResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryBookInfoRequest $request
     * @return Model\QueryBookInfoResponse
     * @throws YopClientException
     */
    public function query_book_info(Model\QueryBookInfoRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryBookInfoRequestMarshaller::getInstance(),
            Model\QueryBookInfoResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryMerchantBasicInfoRequest $request
     * @return Model\QueryMerchantBasicInfoResponse
     * @throws YopClientException
     */
    public function query_merchant_basic_info(Model\QueryMerchantBasicInfoRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryMerchantBasicInfoRequestMarshaller::getInstance(),
            Model\QueryMerchantBasicInfoResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ReceiverApplyRequest $request
     * @return Model\ReceiverApplyResponse
     * @throws YopClientException
     */
    public function receiverApply(Model\ReceiverApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ReceiverApplyRequestMarshaller::getInstance(),
            Model\ReceiverApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ReceiverApplyProgressQueryRequest $request
     * @return Model\ReceiverApplyProgressQueryResponse
     * @throws YopClientException
     */
    public function receiverApplyProgressQuery(Model\ReceiverApplyProgressQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ReceiverApplyProgressQueryRequestMarshaller::getInstance(),
            Model\ReceiverApplyProgressQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ReceiverUpdateRequest $request
     * @return Model\ReceiverUpdateResponse
     * @throws YopClientException
     */
    public function receiverUpdate(Model\ReceiverUpdateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ReceiverUpdateRequestMarshaller::getInstance(),
            Model\ReceiverUpdateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RectificationResultQueryRequest $request
     * @return Model\RectificationResultQueryResponse
     * @throws YopClientException
     */
    public function rectificationResultQuery(Model\RectificationResultQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RectificationResultQueryRequestMarshaller::getInstance(),
            Model\RectificationResultQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RegisterContributeMerchantCloneRequest $request
     * @return Model\RegisterContributeMerchantCloneResponse
     * @throws YopClientException
     */
    public function registerContributeMerchantClone(Model\RegisterContributeMerchantCloneRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RegisterContributeMerchantCloneRequestMarshaller::getInstance(),
            Model\RegisterContributeMerchantCloneResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RegisterQueryByNameRequest $request
     * @return Model\RegisterQueryByNameResponse
     * @throws YopClientException
     */
    public function registerQueryByName(Model\RegisterQueryByNameRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RegisterQueryByNameRequestMarshaller::getInstance(),
            Model\RegisterQueryByNameResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RegisterQueryV2Request $request
     * @return Model\RegisterQueryV2Response
     * @throws YopClientException
     */
    public function registerQueryV2(Model\RegisterQueryV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RegisterQueryV2RequestMarshaller::getInstance(),
            Model\RegisterQueryV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RegisterSaasIndexV2Request $request
     * @return Model\RegisterSaasIndexV2Response
     * @throws YopClientException
     */
    public function registerSaasIndexV2(Model\RegisterSaasIndexV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RegisterSaasIndexV2RequestMarshaller::getInstance(),
            Model\RegisterSaasIndexV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RegisterSaasMerchantV2Request $request
     * @return Model\RegisterSaasMerchantV2Response
     * @throws YopClientException
     */
    public function registerSaasMerchantV2(Model\RegisterSaasMerchantV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RegisterSaasMerchantV2RequestMarshaller::getInstance(),
            Model\RegisterSaasMerchantV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RegisterSaasMicroV2Request $request
     * @return Model\RegisterSaasMicroV2Response
     * @throws YopClientException
     */
    public function registerSaasMicroV2(Model\RegisterSaasMicroV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RegisterSaasMicroV2RequestMarshaller::getInstance(),
            Model\RegisterSaasMicroV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RegisterSaasWebIndexV2Request $request
     * @return Model\RegisterSaasWebIndexV2Response
     * @throws YopClientException
     */
    public function registerSaasWebIndexV2(Model\RegisterSaasWebIndexV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RegisterSaasWebIndexV2RequestMarshaller::getInstance(),
            Model\RegisterSaasWebIndexV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RestV2MerBossRegisterQueryRequest $request
     * @return Model\RestV2MerBossRegisterQueryResponse
     * @throws YopClientException
     */
    public function rest_v2_mer_boss_register_query(Model\RestV2MerBossRegisterQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RestV2MerBossRegisterQueryRequestMarshaller::getInstance(),
            Model\RestV2MerBossRegisterQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RestV2MerBossRegisterSaasStandardRequest $request
     * @return Model\RestV2MerBossRegisterSaasStandardResponse
     * @throws YopClientException
     */
    public function rest_v2_mer_boss_register_saas_standard(Model\RestV2MerBossRegisterSaasStandardRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RestV2MerBossRegisterSaasStandardRequestMarshaller::getInstance(),
            Model\RestV2MerBossRegisterSaasStandardResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RestV2MerBossRegisterSassDivideRequest $request
     * @return Model\RestV2MerBossRegisterSassDivideResponse
     * @throws YopClientException
     */
    public function rest_v2_mer_boss_register_sass_divide(Model\RestV2MerBossRegisterSassDivideRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RestV2MerBossRegisterSassDivideRequestMarshaller::getInstance(),
            Model\RestV2MerBossRegisterSassDivideResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SendSmsVerifyCodeRequest $request
     * @return Model\SendSmsVerifyCodeResponse
     * @throws YopClientException
     */
    public function sendSmsVerifyCode(Model\SendSmsVerifyCodeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SendSmsVerifyCodeRequestMarshaller::getInstance(),
            Model\SendSmsVerifyCodeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SetTradePasswordRequest $request
     * @return Model\SetTradePasswordResponse
     * @throws YopClientException
     */
    public function setTradePassword(Model\SetTradePasswordRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SetTradePasswordRequestMarshaller::getInstance(),
            Model\SetTradePasswordResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\StatusQueryRequest $request
     * @return Model\StatusQueryResponse
     * @throws YopClientException
     */
    public function statusQuery(Model\StatusQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\StatusQueryRequestMarshaller::getInstance(),
            Model\StatusQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UpdateReceiverRequest $request
     * @return Model\UpdateReceiverResponse
     * @throws YopClientException
     */
    public function updateReceiver(Model\UpdateReceiverRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UpdateReceiverRequestMarshaller::getInstance(),
            Model\UpdateReceiverResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UserApplyRequest $request
     * @return Model\UserApplyResponse
     * @throws YopClientException
     */
    public function userApply(Model\UserApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UserApplyRequestMarshaller::getInstance(),
            Model\UserApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UserApplyProgressQueryRequest $request
     * @return Model\UserApplyProgressQueryResponse
     * @throws YopClientException
     */
    public function userApplyProgressQuery(Model\UserApplyProgressQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UserApplyProgressQueryRequestMarshaller::getInstance(),
            Model\UserApplyProgressQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UserBankcardAddRequest $request
     * @return Model\UserBankcardAddResponse
     * @throws YopClientException
     */
    public function userBankcardAdd(Model\UserBankcardAddRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UserBankcardAddRequestMarshaller::getInstance(),
            Model\UserBankcardAddResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UserBankcardBindRequest $request
     * @return Model\UserBankcardBindResponse
     * @throws YopClientException
     */
    public function userBankcardBind(Model\UserBankcardBindRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UserBankcardBindRequestMarshaller::getInstance(),
            Model\UserBankcardBindResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UserBookQueryRequest $request
     * @return Model\UserBookQueryResponse
     * @throws YopClientException
     */
    public function userBookQuery(Model\UserBookQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UserBookQueryRequestMarshaller::getInstance(),
            Model\UserBookQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UserApplyProgressQueryRequest $request
     * @return Model\UserApplyProgressQueryResponse
     * @throws YopClientException
     */
    public function user_apply_progress_query(Model\UserApplyProgressQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UserApplyProgressQueryRequestMarshaller::getInstance(),
            Model\UserApplyProgressQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\VerifyMerchantRelationRequest $request
     * @return Model\VerifyMerchantRelationResponse
     * @throws YopClientException
     */
    public function verify_merchant_relation(Model\VerifyMerchantRelationRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\VerifyMerchantRelationRequestMarshaller::getInstance(),
            Model\VerifyMerchantRelationResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\YOPVerifyTradePasswordRequest $request
     * @return Model\YOPVerifyTradePasswordResponse
     * @throws YopClientException
     */
    public function yOPVerifyTradePassword(Model\YOPVerifyTradePasswordRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\YOPVerifyTradePasswordRequestMarshaller::getInstance(),
            Model\YOPVerifyTradePasswordResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
