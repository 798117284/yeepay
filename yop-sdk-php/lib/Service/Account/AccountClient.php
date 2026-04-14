<?php


namespace Yeepay\Yop\Sdk\Service\Account;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Account\Model as Model;
use Yeepay\Yop\Sdk\Service\Account\Model\Old as ModelOld;

class AccountClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * AccountClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\AccountBookQueryRefundRequest $request
     * @return Model\AccountBookQueryRefundResponse
     * @throws YopClientException
     */
    public function accountBookQueryRefund(Model\AccountBookQueryRefundRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountBookQueryRefundRequestMarshaller::getInstance(),
            Model\AccountBookQueryRefundResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountBookRefundRequest $request
     * @return Model\AccountBookRefundResponse
     * @throws YopClientException
     */
    public function accountBookRefund(Model\AccountBookRefundRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountBookRefundRequestMarshaller::getInstance(),
            Model\AccountBookRefundResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountManageAccountModifyRequest $request
     * @return Model\AccountManageAccountModifyResponse
     * @throws YopClientException
     */
    public function accountManageAccountModify(Model\AccountManageAccountModifyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountManageAccountModifyRequestMarshaller::getInstance(),
            Model\AccountManageAccountModifyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountManageAccountOpenRequest $request
     * @return Model\AccountManageAccountOpenResponse
     * @throws YopClientException
     */
    public function accountManageAccountOpen(Model\AccountManageAccountOpenRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountManageAccountOpenRequestMarshaller::getInstance(),
            Model\AccountManageAccountOpenResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountManageAccountOpenV2Request $request
     * @return Model\AccountManageAccountOpenV2Response
     * @throws YopClientException
     */
    public function accountManageAccountOpenV2(Model\AccountManageAccountOpenV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountManageAccountOpenV2RequestMarshaller::getInstance(),
            Model\AccountManageAccountOpenV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountManageAccountQueryRequest $request
     * @return Model\AccountManageAccountQueryResponse
     * @throws YopClientException
     */
    public function accountManageAccountQuery(Model\AccountManageAccountQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountManageAccountQueryRequestMarshaller::getInstance(),
            Model\AccountManageAccountQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountManageBalanceFreezeRequest $request
     * @return Model\AccountManageBalanceFreezeResponse
     * @throws YopClientException
     */
    public function accountManageBalanceFreeze(Model\AccountManageBalanceFreezeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountManageBalanceFreezeRequestMarshaller::getInstance(),
            Model\AccountManageBalanceFreezeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountManageBalanceFreezeQueryRequest $request
     * @return Model\AccountManageBalanceFreezeQueryResponse
     * @throws YopClientException
     */
    public function accountManageBalanceFreezeQuery(Model\AccountManageBalanceFreezeQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountManageBalanceFreezeQueryRequestMarshaller::getInstance(),
            Model\AccountManageBalanceFreezeQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountManageBalanceUnFreezeQueryRequest $request
     * @return Model\AccountManageBalanceUnFreezeQueryResponse
     * @throws YopClientException
     */
    public function accountManageBalanceUnFreezeQuery(Model\AccountManageBalanceUnFreezeQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountManageBalanceUnFreezeQueryRequestMarshaller::getInstance(),
            Model\AccountManageBalanceUnFreezeQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountManageBalanceUnfreezeRequest $request
     * @return Model\AccountManageBalanceUnfreezeResponse
     * @throws YopClientException
     */
    public function accountManageBalanceUnfreeze(Model\AccountManageBalanceUnfreezeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountManageBalanceUnfreezeRequestMarshaller::getInstance(),
            Model\AccountManageBalanceUnfreezeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountManageBankAccountOpenRequest $request
     * @return Model\AccountManageBankAccountOpenResponse
     * @throws YopClientException
     */
    public function accountManageBankAccountOpen(Model\AccountManageBankAccountOpenRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountManageBankAccountOpenRequestMarshaller::getInstance(),
            Model\AccountManageBankAccountOpenResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountManageBankAccountQueryRequest $request
     * @return Model\AccountManageBankAccountQueryResponse
     * @throws YopClientException
     */
    public function accountManageBankAccountQuery(Model\AccountManageBankAccountQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountManageBankAccountQueryRequestMarshaller::getInstance(),
            Model\AccountManageBankAccountQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountManageBankTradeFlowQueryRequest $request
     * @return Model\AccountManageBankTradeFlowQueryResponse
     * @throws YopClientException
     */
    public function accountManageBankTradeFlowQuery(Model\AccountManageBankTradeFlowQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountManageBankTradeFlowQueryRequestMarshaller::getInstance(),
            Model\AccountManageBankTradeFlowQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountManageXibBindCardRequest $request
     * @return Model\AccountManageXibBindCardResponse
     * @throws YopClientException
     */
    public function accountManageXibBindCard(Model\AccountManageXibBindCardRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountManageXibBindCardRequestMarshaller::getInstance(),
            Model\AccountManageXibBindCardResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountBookBalanceFreezeRequest $request
     * @return Model\AccountBookBalanceFreezeResponse
     * @throws YopClientException
     */
    public function account_book_balance_freeze(Model\AccountBookBalanceFreezeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountBookBalanceFreezeRequestMarshaller::getInstance(),
            Model\AccountBookBalanceFreezeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountBookBalanceFreezeQueryRequest $request
     * @return Model\AccountBookBalanceFreezeQueryResponse
     * @throws YopClientException
     */
    public function account_book_balance_freeze_query(Model\AccountBookBalanceFreezeQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountBookBalanceFreezeQueryRequestMarshaller::getInstance(),
            Model\AccountBookBalanceFreezeQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountBookBalanceUnFreezeQueryRequest $request
     * @return Model\AccountBookBalanceUnFreezeQueryResponse
     * @throws YopClientException
     */
    public function account_book_balance_un_freeze_query(Model\AccountBookBalanceUnFreezeQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountBookBalanceUnFreezeQueryRequestMarshaller::getInstance(),
            Model\AccountBookBalanceUnFreezeQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountBookBalanceUnfreezeRequest $request
     * @return Model\AccountBookBalanceUnfreezeResponse
     * @throws YopClientException
     */
    public function account_book_balance_unfreeze(Model\AccountBookBalanceUnfreezeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountBookBalanceUnfreezeRequestMarshaller::getInstance(),
            Model\AccountBookBalanceUnfreezeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountBookCreateRequest $request
     * @return Model\AccountBookCreateResponse
     * @throws YopClientException
     */
    public function account_book_create(Model\AccountBookCreateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountBookCreateRequestMarshaller::getInstance(),
            Model\AccountBookCreateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountBookModifyRequest $request
     * @return Model\AccountBookModifyResponse
     * @throws YopClientException
     */
    public function account_book_modify(Model\AccountBookModifyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountBookModifyRequestMarshaller::getInstance(),
            Model\AccountBookModifyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountBookQueryRefundV10Request $request
     * @return Model\AccountBookQueryRefundV10Response
     * @throws YopClientException
     */
    public function account_book_query_refund_v1_0(Model\AccountBookQueryRefundV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountBookQueryRefundV10RequestMarshaller::getInstance(),
            Model\AccountBookQueryRefundV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountBookRefundV10Request $request
     * @return Model\AccountBookRefundV10Response
     * @throws YopClientException
     */
    public function account_book_refund_v1_0(Model\AccountBookRefundV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountBookRefundV10RequestMarshaller::getInstance(),
            Model\AccountBookRefundV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountIndividualApplyRequest $request
     * @return Model\AccountIndividualApplyResponse
     * @throws YopClientException
     */
    public function account_individual_apply(Model\AccountIndividualApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountIndividualApplyRequestMarshaller::getInstance(),
            Model\AccountIndividualApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountIndividualModifyRequest $request
     * @return Model\AccountIndividualModifyResponse
     * @throws YopClientException
     */
    public function account_individual_modify(Model\AccountIndividualModifyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountIndividualModifyRequestMarshaller::getInstance(),
            Model\AccountIndividualModifyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountIndividualQueryRequest $request
     * @return Model\AccountIndividualQueryResponse
     * @throws YopClientException
     */
    public function account_individual_query(Model\AccountIndividualQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountIndividualQueryRequestMarshaller::getInstance(),
            Model\AccountIndividualQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountIndividualQueryProgressRequest $request
     * @return Model\AccountIndividualQueryProgressResponse
     * @throws YopClientException
     */
    public function account_individual_query_progress(Model\AccountIndividualQueryProgressRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountIndividualQueryProgressRequestMarshaller::getInstance(),
            Model\AccountIndividualQueryProgressResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountManageAccountOpenV10Request $request
     * @return Model\AccountManageAccountOpenV10Response
     * @throws YopClientException
     */
    public function account_manage_account_open_v1_0(Model\AccountManageAccountOpenV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountManageAccountOpenV10RequestMarshaller::getInstance(),
            Model\AccountManageAccountOpenV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountManageAccountQueryV10Request $request
     * @return Model\AccountManageAccountQueryV10Response
     * @throws YopClientException
     */
    public function account_manage_account_query_v1_0(Model\AccountManageAccountQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountManageAccountQueryV10RequestMarshaller::getInstance(),
            Model\AccountManageAccountQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountManageBankTradeFlowQueryRequest $request
     * @return Model\AccountManageBankTradeFlowQueryResponse
     * @throws YopClientException
     */
    public function account_manage_bankTradeFlow_query(Model\AccountManageBankTradeFlowQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountManageBankTradeFlowQueryRequestMarshaller::getInstance(),
            Model\AccountManageBankTradeFlowQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountManageBankAccountQueryV10Request $request
     * @return Model\AccountManageBankAccountQueryV10Response
     * @throws YopClientException
     */
    public function account_manage_bank_account_query_v1_0(Model\AccountManageBankAccountQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountManageBankAccountQueryV10RequestMarshaller::getInstance(),
            Model\AccountManageBankAccountQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountPayOrderV3Request $request
     * @return Model\AccountPayOrderV3Response
     * @throws YopClientException
     */
    public function account_pay_order_v3(Model\AccountPayOrderV3Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountPayOrderV3RequestMarshaller::getInstance(),
            Model\AccountPayOrderV3ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountRemitReverseQueryRequest $request
     * @return Model\AccountRemitReverseQueryResponse
     * @throws YopClientException
     */
    public function account_remit_reverse_query(Model\AccountRemitReverseQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountRemitReverseQueryRequestMarshaller::getInstance(),
            Model\AccountRemitReverseQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountTransferB2bOrderV3Request $request
     * @return Model\AccountTransferB2bOrderV3Response
     * @throws YopClientException
     */
    public function account_transfer_b2b_order_v3(Model\AccountTransferB2bOrderV3Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountTransferB2bOrderV3RequestMarshaller::getInstance(),
            Model\AccountTransferB2bOrderV3ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountinfosQueryRequest $request
     * @return Model\AccountinfosQueryResponse
     * @throws YopClientException
     */
    public function accountinfosQuery(Model\AccountinfosQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountinfosQueryRequestMarshaller::getInstance(),
            Model\AccountinfosQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountinfosQueryV10Request $request
     * @return Model\AccountinfosQueryV10Response
     * @throws YopClientException
     */
    public function accountinfos_query_v1_0(Model\AccountinfosQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountinfosQueryV10RequestMarshaller::getInstance(),
            Model\AccountinfosQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AliBatchTransferRequest $request
     * @return Model\AliBatchTransferResponse
     * @throws YopClientException
     */
    public function aliBatchTransfer(Model\AliBatchTransferRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AliBatchTransferRequestMarshaller::getInstance(),
            Model\AliBatchTransferResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AliBatchTransferDetailRequest $request
     * @return Model\AliBatchTransferDetailResponse
     * @throws YopClientException
     */
    public function aliBatchTransferDetail(Model\AliBatchTransferDetailRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AliBatchTransferDetailRequestMarshaller::getInstance(),
            Model\AliBatchTransferDetailResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AliCancelContractRequest $request
     * @return Model\AliCancelContractResponse
     * @throws YopClientException
     */
    public function aliCancelContract(Model\AliCancelContractRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AliCancelContractRequestMarshaller::getInstance(),
            Model\AliCancelContractResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AliCapitalTransferQueryRequest $request
     * @return Model\AliCapitalTransferQueryResponse
     * @throws YopClientException
     */
    public function aliCapitalTransferQuery(Model\AliCapitalTransferQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AliCapitalTransferQueryRequestMarshaller::getInstance(),
            Model\AliCapitalTransferQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AliCaptialTransferRequest $request
     * @return Model\AliCaptialTransferResponse
     * @throws YopClientException
     */
    public function aliCaptialTransfer(Model\AliCaptialTransferRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AliCaptialTransferRequestMarshaller::getInstance(),
            Model\AliCaptialTransferResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AliChannelBookDeailRequest $request
     * @return Model\AliChannelBookDeailResponse
     * @throws YopClientException
     */
    public function aliChannelBookDeail(Model\AliChannelBookDeailRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AliChannelBookDeailRequestMarshaller::getInstance(),
            Model\AliChannelBookDeailResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AliOpenChannelBookRequest $request
     * @return Model\AliOpenChannelBookResponse
     * @throws YopClientException
     */
    public function aliOpenChannelBook(Model\AliOpenChannelBookRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AliOpenChannelBookRequestMarshaller::getInstance(),
            Model\AliOpenChannelBookResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AliSignContractRequest $request
     * @return Model\AliSignContractResponse
     * @throws YopClientException
     */
    public function aliSignContract(Model\AliSignContractRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AliSignContractRequestMarshaller::getInstance(),
            Model\AliSignContractResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AliSignContractQueryRequest $request
     * @return Model\AliSignContractQueryResponse
     * @throws YopClientException
     */
    public function aliSignContractQuery(Model\AliSignContractQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AliSignContractQueryRequestMarshaller::getInstance(),
            Model\AliSignContractQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AlipaySingleProxyTransferRequest $request
     * @return Model\AlipaySingleProxyTransferResponse
     * @throws YopClientException
     */
    public function alipay_Single_Proxy_Transfer(Model\AlipaySingleProxyTransferRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AlipaySingleProxyTransferRequestMarshaller::getInstance(),
            Model\AlipaySingleProxyTransferResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AppointTargetRemitRequest $request
     * @return Model\AppointTargetRemitResponse
     * @throws YopClientException
     */
    public function appoint_target_remit(Model\AppointTargetRemitRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AppointTargetRemitRequestMarshaller::getInstance(),
            Model\AppointTargetRemitResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AutoWithdrawRuleCancelRequest $request
     * @return Model\AutoWithdrawRuleCancelResponse
     * @throws YopClientException
     */
    public function autoWithdrawRuleCancel(Model\AutoWithdrawRuleCancelRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AutoWithdrawRuleCancelRequestMarshaller::getInstance(),
            Model\AutoWithdrawRuleCancelResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AutoWithdrawRuleQueryRequest $request
     * @return Model\AutoWithdrawRuleQueryResponse
     * @throws YopClientException
     */
    public function autoWithdrawRuleQuery(Model\AutoWithdrawRuleQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AutoWithdrawRuleQueryRequestMarshaller::getInstance(),
            Model\AutoWithdrawRuleQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AutoWithdrawRuleSetRequest $request
     * @return Model\AutoWithdrawRuleSetResponse
     * @throws YopClientException
     */
    public function autoWithdrawRuleSet(Model\AutoWithdrawRuleSetRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AutoWithdrawRuleSetRequestMarshaller::getInstance(),
            Model\AutoWithdrawRuleSetResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AutoWithdrawRuleCancelV10Request $request
     * @return Model\AutoWithdrawRuleCancelV10Response
     * @throws YopClientException
     */
    public function auto_withdraw_rule_cancel_v1_0(Model\AutoWithdrawRuleCancelV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AutoWithdrawRuleCancelV10RequestMarshaller::getInstance(),
            Model\AutoWithdrawRuleCancelV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AutoWithdrawRuleQueryV10Request $request
     * @return Model\AutoWithdrawRuleQueryV10Response
     * @throws YopClientException
     */
    public function auto_withdraw_rule_query_v1_0(Model\AutoWithdrawRuleQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AutoWithdrawRuleQueryV10RequestMarshaller::getInstance(),
            Model\AutoWithdrawRuleQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AutoWithdrawRuleSetV10Request $request
     * @return Model\AutoWithdrawRuleSetV10Response
     * @throws YopClientException
     */
    public function auto_withdraw_rule_set_v1_0(Model\AutoWithdrawRuleSetV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AutoWithdrawRuleSetV10RequestMarshaller::getInstance(),
            Model\AutoWithdrawRuleSetV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BalanceQueryRequest $request
     * @return Model\BalanceQueryResponse
     * @throws YopClientException
     */
    public function balanceQuery(Model\BalanceQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BalanceQueryRequestMarshaller::getInstance(),
            Model\BalanceQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BalanceQueryV10Request $request
     * @return Model\BalanceQueryV10Response
     * @throws YopClientException
     */
    public function balance_query_v1_0(Model\BalanceQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BalanceQueryV10RequestMarshaller::getInstance(),
            Model\BalanceQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountApplyDepositRefundRequest $request
     * @return Model\BankAccountApplyDepositRefundResponse
     * @throws YopClientException
     */
    public function bankAccountApplyDepositRefund(Model\BankAccountApplyDepositRefundRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountApplyDepositRefundRequestMarshaller::getInstance(),
            Model\BankAccountApplyDepositRefundResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountApplySubAccountRequest $request
     * @return Model\BankAccountApplySubAccountResponse
     * @throws YopClientException
     */
    public function bankAccountApplySubAccount(Model\BankAccountApplySubAccountRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountApplySubAccountRequestMarshaller::getInstance(),
            Model\BankAccountApplySubAccountResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountAuthApplyRequest $request
     * @return Model\BankAccountAuthApplyResponse
     * @throws YopClientException
     */
    public function bankAccountAuthApply(Model\BankAccountAuthApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountAuthApplyRequestMarshaller::getInstance(),
            Model\BankAccountAuthApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountAuthConfirmRequest $request
     * @return Model\BankAccountAuthConfirmResponse
     * @throws YopClientException
     */
    public function bankAccountAuthConfirm(Model\BankAccountAuthConfirmRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountAuthConfirmRequestMarshaller::getInstance(),
            Model\BankAccountAuthConfirmResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountDownloadReceiptRequest $request
     * @return Model\BankAccountDownloadReceiptResponse
     * @throws YopClientException
     */
    public function bankAccountDownloadReceipt(Model\BankAccountDownloadReceiptRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountDownloadReceiptRequestMarshaller::getInstance(),
            Model\BankAccountDownloadReceiptResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountQueryDepositRefundRequest $request
     * @return Model\BankAccountQueryDepositRefundResponse
     * @throws YopClientException
     */
    public function bankAccountQueryDepositRefund(Model\BankAccountQueryDepositRefundRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountQueryDepositRefundRequestMarshaller::getInstance(),
            Model\BankAccountQueryDepositRefundResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountQuerySubAccountRequest $request
     * @return Model\BankAccountQuerySubAccountResponse
     * @throws YopClientException
     */
    public function bankAccountQuerySubAccount(Model\BankAccountQuerySubAccountRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountQuerySubAccountRequestMarshaller::getInstance(),
            Model\BankAccountQuerySubAccountResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountSubAccountBindCardRequest $request
     * @return Model\BankAccountSubAccountBindCardResponse
     * @throws YopClientException
     */
    public function bankAccountSubAccountBindCard(Model\BankAccountSubAccountBindCardRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountSubAccountBindCardRequestMarshaller::getInstance(),
            Model\BankAccountSubAccountBindCardResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankClearChangeCardRequest $request
     * @return Model\BankClearChangeCardResponse
     * @throws YopClientException
     */
    public function bankClearChangeCard(Model\BankClearChangeCardRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankClearChangeCardRequestMarshaller::getInstance(),
            Model\BankClearChangeCardResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankOpenSupplementRequest $request
     * @return Model\BankOpenSupplementResponse
     * @throws YopClientException
     */
    public function bankOpenSupplement(Model\BankOpenSupplementRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankOpenSupplementRequestMarshaller::getInstance(),
            Model\BankOpenSupplementResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankPaymentOrderRequest $request
     * @return Model\BankPaymentOrderResponse
     * @throws YopClientException
     */
    public function bankPaymentOrder(Model\BankPaymentOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankPaymentOrderRequestMarshaller::getInstance(),
            Model\BankPaymentOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountAuthApplyRequest $request
     * @return Model\BankAccountAuthApplyResponse
     * @throws YopClientException
     */
    public function bank_account_auth_apply(Model\BankAccountAuthApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountAuthApplyRequestMarshaller::getInstance(),
            Model\BankAccountAuthApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountAuthConfirmRequest $request
     * @return Model\BankAccountAuthConfirmResponse
     * @throws YopClientException
     */
    public function bank_account_auth_confirm(Model\BankAccountAuthConfirmRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountAuthConfirmRequestMarshaller::getInstance(),
            Model\BankAccountAuthConfirmResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param ModelOld\BankAccountBalanceQueryRequest $request
     * @return ModelOld\BankAccountBalanceQueryResponse
     * @throws YopClientException
     */
    public function bank_account_balance_queryOld(ModelOld\BankAccountBalanceQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, ModelOld\BankAccountBalanceQueryRequestMarshaller::getInstance(),
            ModelOld\BankAccountBalanceQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountDepositRefundApplyRequest $request
     * @return Model\BankAccountDepositRefundApplyResponse
     * @throws YopClientException
     */
    public function bank_account_deposit_refund_apply(Model\BankAccountDepositRefundApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountDepositRefundApplyRequestMarshaller::getInstance(),
            Model\BankAccountDepositRefundApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountDownloadReceiptRequest $request
     * @return Model\BankAccountDownloadReceiptResponse
     * @throws YopClientException
     */
    public function bank_account_download_receipt(Model\BankAccountDownloadReceiptRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountDownloadReceiptRequestMarshaller::getInstance(),
            Model\BankAccountDownloadReceiptResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountQueryDepositRefundRequest $request
     * @return Model\BankAccountQueryDepositRefundResponse
     * @throws YopClientException
     */
    public function bank_account_query_deposit_refund(Model\BankAccountQueryDepositRefundRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountQueryDepositRefundRequestMarshaller::getInstance(),
            Model\BankAccountQueryDepositRefundResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountQuerySubAccountRequest $request
     * @return Model\BankAccountQuerySubAccountResponse
     * @throws YopClientException
     */
    public function bank_account_query_sub_account(Model\BankAccountQuerySubAccountRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountQuerySubAccountRequestMarshaller::getInstance(),
            Model\BankAccountQuerySubAccountResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountSubAccountApplyRequest $request
     * @return Model\BankAccountSubAccountApplyResponse
     * @throws YopClientException
     */
    public function bank_account_sub_account_apply(Model\BankAccountSubAccountApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountSubAccountApplyRequestMarshaller::getInstance(),
            Model\BankAccountSubAccountApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountSubAccountBindCardRequest $request
     * @return Model\BankAccountSubAccountBindCardResponse
     * @throws YopClientException
     */
    public function bank_account_sub_account_bind_card(Model\BankAccountSubAccountBindCardRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountSubAccountBindCardRequestMarshaller::getInstance(),
            Model\BankAccountSubAccountBindCardResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param ModelOld\BankClearBindCardRequest $request
     * @return ModelOld\BankClearBindCardResponse
     * @throws YopClientException
     */
    public function bank_clear_bind_cardOld(ModelOld\BankClearBindCardRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, ModelOld\BankClearBindCardRequestMarshaller::getInstance(),
            ModelOld\BankClearBindCardResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankClearChangeBindCardRequest $request
     * @return Model\BankClearChangeBindCardResponse
     * @throws YopClientException
     */
    public function bank_clear_change_bind_card(Model\BankClearChangeBindCardRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankClearChangeBindCardRequestMarshaller::getInstance(),
            Model\BankClearChangeBindCardResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankPaymentOrderV10Request $request
     * @return Model\BankPaymentOrderV10Response
     * @throws YopClientException
     */
    public function bank_payment_order_v1_0(Model\BankPaymentOrderV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankPaymentOrderV10RequestMarshaller::getInstance(),
            Model\BankPaymentOrderV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankaccountbalancequeryRequest $request
     * @return Model\BankaccountbalancequeryResponse
     * @throws YopClientException
     */
    public function bankaccountbalancequery(Model\BankaccountbalancequeryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankaccountbalancequeryRequestMarshaller::getInstance(),
            Model\BankaccountbalancequeryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankclearApplyRecordRequest $request
     * @return Model\BankclearApplyRecordResponse
     * @throws YopClientException
     */
    public function bankclear_apply_record(Model\BankclearApplyRecordRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankclearApplyRecordRequestMarshaller::getInstance(),
            Model\BankclearApplyRecordResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankclearbindcardRequest $request
     * @return Model\BankclearbindcardResponse
     * @throws YopClientException
     */
    public function bankclearbindcard(Model\BankclearbindcardRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankclearbindcardRequestMarshaller::getInstance(),
            Model\BankclearbindcardResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankclerapplyrecordRequest $request
     * @return Model\BankclerapplyrecordResponse
     * @throws YopClientException
     */
    public function bankclerapplyrecord(Model\BankclerapplyrecordRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankclerapplyrecordRequestMarshaller::getInstance(),
            Model\BankclerapplyrecordResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param ModelOld\BindCardAuthApplyRequest $request
     * @return ModelOld\BindCardAuthApplyResponse
     * @throws YopClientException
     */
    public function bind_card_auth_applyOld(ModelOld\BindCardAuthApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, ModelOld\BindCardAuthApplyRequestMarshaller::getInstance(),
            ModelOld\BindCardAuthApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param ModelOld\BindCardAuthApplyConfirmRequest $request
     * @return ModelOld\BindCardAuthApplyConfirmResponse
     * @throws YopClientException
     */
    public function bind_card_auth_apply_confirmOld(ModelOld\BindCardAuthApplyConfirmRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, ModelOld\BindCardAuthApplyConfirmRequestMarshaller::getInstance(),
            ModelOld\BindCardAuthApplyConfirmResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindcardauthapplyRequest $request
     * @return Model\BindcardauthapplyResponse
     * @throws YopClientException
     */
    public function bindcardauthapply(Model\BindcardauthapplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindcardauthapplyRequestMarshaller::getInstance(),
            Model\BindcardauthapplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BindcardauthapplyconfirmRequest $request
     * @return Model\BindcardauthapplyconfirmResponse
     * @throws YopClientException
     */
    public function bindcardauthapplyconfirm(Model\BindcardauthapplyconfirmRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindcardauthapplyconfirmRequestMarshaller::getInstance(),
            Model\BindcardauthapplyconfirmResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DownloadDepositNotifyReceiptRequest $request
     * @return Model\DownloadDepositNotifyReceiptResponse
     * @throws YopClientException
     */
    public function downloadDepositNotifyReceipt(Model\DownloadDepositNotifyReceiptRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DownloadDepositNotifyReceiptRequestMarshaller::getInstance(),
            Model\DownloadDepositNotifyReceiptResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DownloadDepositNotifyReceiptRequest $request
     * @return Model\DownloadDepositNotifyReceiptResponse
     * @throws YopClientException
     */
    public function download_deposit_notify_receipt(Model\DownloadDepositNotifyReceiptRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DownloadDepositNotifyReceiptRequestMarshaller::getInstance(),
            Model\DownloadDepositNotifyReceiptResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EnterpriseAccountBookPayOrderRequest $request
     * @return Model\EnterpriseAccountBookPayOrderResponse
     * @throws YopClientException
     */
    public function enterpriseAccountBookPayOrder(Model\EnterpriseAccountBookPayOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EnterpriseAccountBookPayOrderRequestMarshaller::getInstance(),
            Model\EnterpriseAccountBookPayOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EnterpriseAccountPayOrderRequest $request
     * @return Model\EnterpriseAccountPayOrderResponse
     * @throws YopClientException
     */
    public function enterpriseAccountPayOrder(Model\EnterpriseAccountPayOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EnterpriseAccountPayOrderRequestMarshaller::getInstance(),
            Model\EnterpriseAccountPayOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EnterpriseAutoPaymentOrderRequest $request
     * @return Model\EnterpriseAutoPaymentOrderResponse
     * @throws YopClientException
     */
    public function enterpriseAutoPaymentOrder(Model\EnterpriseAutoPaymentOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EnterpriseAutoPaymentOrderRequestMarshaller::getInstance(),
            Model\EnterpriseAutoPaymentOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EnterpriseAutoPaymentOrderHlzhRequest $request
     * @return Model\EnterpriseAutoPaymentOrderHlzhResponse
     * @throws YopClientException
     */
    public function enterpriseAutoPaymentOrderHlzh(Model\EnterpriseAutoPaymentOrderHlzhRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EnterpriseAutoPaymentOrderHlzhRequestMarshaller::getInstance(),
            Model\EnterpriseAutoPaymentOrderHlzhResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EnterpriseAutoPaymentQueryRequest $request
     * @return Model\EnterpriseAutoPaymentQueryResponse
     * @throws YopClientException
     */
    public function enterpriseAutoPaymentQuery(Model\EnterpriseAutoPaymentQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EnterpriseAutoPaymentQueryRequestMarshaller::getInstance(),
            Model\EnterpriseAutoPaymentQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EnterpriseTokenPayOrderRequest $request
     * @return Model\EnterpriseTokenPayOrderResponse
     * @throws YopClientException
     */
    public function enterpriseTokenPayOrder(Model\EnterpriseTokenPayOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EnterpriseTokenPayOrderRequestMarshaller::getInstance(),
            Model\EnterpriseTokenPayOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EnterpriseWithholdingCheckBalanceRequest $request
     * @return Model\EnterpriseWithholdingCheckBalanceResponse
     * @throws YopClientException
     */
    public function enterpriseWithholdingCheckBalance(Model\EnterpriseWithholdingCheckBalanceRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EnterpriseWithholdingCheckBalanceRequestMarshaller::getInstance(),
            Model\EnterpriseWithholdingCheckBalanceResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EnterpriseWithholdingOrderRequest $request
     * @return Model\EnterpriseWithholdingOrderResponse
     * @throws YopClientException
     */
    public function enterpriseWithholdingOrder(Model\EnterpriseWithholdingOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EnterpriseWithholdingOrderRequestMarshaller::getInstance(),
            Model\EnterpriseWithholdingOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EnterpriseAccountBookPayOrderV10Request $request
     * @return Model\EnterpriseAccountBookPayOrderV10Response
     * @throws YopClientException
     */
    public function enterprise_account_book_pay_order_v1_0(Model\EnterpriseAccountBookPayOrderV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EnterpriseAccountBookPayOrderV10RequestMarshaller::getInstance(),
            Model\EnterpriseAccountBookPayOrderV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EnterpriseAccountPayOrderV10Request $request
     * @return Model\EnterpriseAccountPayOrderV10Response
     * @throws YopClientException
     */
    public function enterprise_account_pay_order_v1_0(Model\EnterpriseAccountPayOrderV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EnterpriseAccountPayOrderV10RequestMarshaller::getInstance(),
            Model\EnterpriseAccountPayOrderV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EnterpriseAutoPaymentOrderHlzhRequest $request
     * @return Model\EnterpriseAutoPaymentOrderHlzhResponse
     * @throws YopClientException
     */
    public function enterprise_auto_payment_order_hlzh(Model\EnterpriseAutoPaymentOrderHlzhRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EnterpriseAutoPaymentOrderHlzhRequestMarshaller::getInstance(),
            Model\EnterpriseAutoPaymentOrderHlzhResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EnterpriseAutoPaymentOrderV10Request $request
     * @return Model\EnterpriseAutoPaymentOrderV10Response
     * @throws YopClientException
     */
    public function enterprise_auto_payment_order_v1_0(Model\EnterpriseAutoPaymentOrderV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EnterpriseAutoPaymentOrderV10RequestMarshaller::getInstance(),
            Model\EnterpriseAutoPaymentOrderV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EnterpriseAutoPaymentQueryV10Request $request
     * @return Model\EnterpriseAutoPaymentQueryV10Response
     * @throws YopClientException
     */
    public function enterprise_auto_payment_query_v1_0(Model\EnterpriseAutoPaymentQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EnterpriseAutoPaymentQueryV10RequestMarshaller::getInstance(),
            Model\EnterpriseAutoPaymentQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EnterpriseTokenPayOrderV10Request $request
     * @return Model\EnterpriseTokenPayOrderV10Response
     * @throws YopClientException
     */
    public function enterprise_token_pay_order_v1_0(Model\EnterpriseTokenPayOrderV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EnterpriseTokenPayOrderV10RequestMarshaller::getInstance(),
            Model\EnterpriseTokenPayOrderV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EnterpriseWithholdingCheckBalanceV10Request $request
     * @return Model\EnterpriseWithholdingCheckBalanceV10Response
     * @throws YopClientException
     */
    public function enterprise_withholding_check_balance_v1_0(Model\EnterpriseWithholdingCheckBalanceV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EnterpriseWithholdingCheckBalanceV10RequestMarshaller::getInstance(),
            Model\EnterpriseWithholdingCheckBalanceV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EnterpriseWithholdingOrderV10Request $request
     * @return Model\EnterpriseWithholdingOrderV10Response
     * @throws YopClientException
     */
    public function enterprise_withholding_order_v1_0(Model\EnterpriseWithholdingOrderV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EnterpriseWithholdingOrderV10RequestMarshaller::getInstance(),
            Model\EnterpriseWithholdingOrderV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ExternalOrderRequest $request
     * @return Model\ExternalOrderResponse
     * @throws YopClientException
     */
    public function externalOrder(Model\ExternalOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ExternalOrderRequestMarshaller::getInstance(),
            Model\ExternalOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ExternalOrderV10Request $request
     * @return Model\ExternalOrderV10Response
     * @throws YopClientException
     */
    public function external_order_v1_0(Model\ExternalOrderV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ExternalOrderV10RequestMarshaller::getInstance(),
            Model\ExternalOrderV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\GetReceiptForReceiverRequest $request
     * @return Model\GetReceiptForReceiverResponse
     * @throws YopClientException
     */
    public function getReceiptForReceiver(Model\GetReceiptForReceiverRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\GetReceiptForReceiverRequestMarshaller::getInstance(),
            Model\GetReceiptForReceiverResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\GetClearAccountInfoByMerchantRequest $request
     * @return Model\GetClearAccountInfoByMerchantResponse
     * @throws YopClientException
     */
    public function get_clear_account_info_by_merchant(Model\GetClearAccountInfoByMerchantRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\GetClearAccountInfoByMerchantRequestMarshaller::getInstance(),
            Model\GetClearAccountInfoByMerchantResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\GetclearaccountinfoymerchantRequest $request
     * @return Model\GetclearaccountinfoymerchantResponse
     * @throws YopClientException
     */
    public function getclearaccountinfoymerchant(Model\GetclearaccountinfoymerchantRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\GetclearaccountinfoymerchantRequestMarshaller::getInstance(),
            Model\GetclearaccountinfoymerchantResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\GroupAccountTransferRequest $request
     * @return Model\GroupAccountTransferResponse
     * @throws YopClientException
     */
    public function groupAccountTransfer(Model\GroupAccountTransferRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\GroupAccountTransferRequestMarshaller::getInstance(),
            Model\GroupAccountTransferResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\GroupAccountTransferQueryRequest $request
     * @return Model\GroupAccountTransferQueryResponse
     * @throws YopClientException
     */
    public function groupAccountTransferQuery(Model\GroupAccountTransferQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\GroupAccountTransferQueryRequestMarshaller::getInstance(),
            Model\GroupAccountTransferQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\IndividualApplyRequest $request
     * @return Model\IndividualApplyResponse
     * @throws YopClientException
     */
    public function individualApply(Model\IndividualApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\IndividualApplyRequestMarshaller::getInstance(),
            Model\IndividualApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\IndividualModifyRequest $request
     * @return Model\IndividualModifyResponse
     * @throws YopClientException
     */
    public function individualModify(Model\IndividualModifyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\IndividualModifyRequestMarshaller::getInstance(),
            Model\IndividualModifyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\IndividualQueryRequest $request
     * @return Model\IndividualQueryResponse
     * @throws YopClientException
     */
    public function individualQuery(Model\IndividualQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\IndividualQueryRequestMarshaller::getInstance(),
            Model\IndividualQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\IndividualQueryProgressRequest $request
     * @return Model\IndividualQueryProgressResponse
     * @throws YopClientException
     */
    public function individualQueryProgress(Model\IndividualQueryProgressRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\IndividualQueryProgressRequestMarshaller::getInstance(),
            Model\IndividualQueryProgressResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\InitiateUserBookWithdrawRequest $request
     * @return Model\InitiateUserBookWithdrawResponse
     * @throws YopClientException
     */
    public function initiateUserBookWithdraw(Model\InitiateUserBookWithdrawRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\InitiateUserBookWithdrawRequestMarshaller::getInstance(),
            Model\InitiateUserBookWithdrawResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ManageAuditProcessRequest $request
     * @return Model\ManageAuditProcessResponse
     * @throws YopClientException
     */
    public function manageAuditProcess(Model\ManageAuditProcessRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ManageAuditProcessRequestMarshaller::getInstance(),
            Model\ManageAuditProcessResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ManageAuditorAddRequest $request
     * @return Model\ManageAuditorAddResponse
     * @throws YopClientException
     */
    public function manageAuditorAdd(Model\ManageAuditorAddRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ManageAuditorAddRequestMarshaller::getInstance(),
            Model\ManageAuditorAddResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ManageAuditorConfirmRequest $request
     * @return Model\ManageAuditorConfirmResponse
     * @throws YopClientException
     */
    public function manageAuditorConfirm(Model\ManageAuditorConfirmRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ManageAuditorConfirmRequestMarshaller::getInstance(),
            Model\ManageAuditorConfirmResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ManageAuditorListRequest $request
     * @return Model\ManageAuditorListResponse
     * @throws YopClientException
     */
    public function manageAuditorList(Model\ManageAuditorListRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ManageAuditorListRequestMarshaller::getInstance(),
            Model\ManageAuditorListResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ManageAuditorQueryRequest $request
     * @return Model\ManageAuditorQueryResponse
     * @throws YopClientException
     */
    public function manageAuditorQuery(Model\ManageAuditorQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ManageAuditorQueryRequestMarshaller::getInstance(),
            Model\ManageAuditorQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ManageAuditorSendSmsRequest $request
     * @return Model\ManageAuditorSendSmsResponse
     * @throws YopClientException
     */
    public function manageAuditorSendSms(Model\ManageAuditorSendSmsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ManageAuditorSendSmsRequestMarshaller::getInstance(),
            Model\ManageAuditorSendSmsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ManageReviewerAddPhoneRequest $request
     * @return Model\ManageReviewerAddPhoneResponse
     * @throws YopClientException
     */
    public function manageReviewerAddPhone(Model\ManageReviewerAddPhoneRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ManageReviewerAddPhoneRequestMarshaller::getInstance(),
            Model\ManageReviewerAddPhoneResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ManageReviewerQueryRequest $request
     * @return Model\ManageReviewerQueryResponse
     * @throws YopClientException
     */
    public function manageReviewerQuery(Model\ManageReviewerQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ManageReviewerQueryRequestMarshaller::getInstance(),
            Model\ManageReviewerQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ManageTransitBalanceQueryRequest $request
     * @return Model\ManageTransitBalanceQueryResponse
     * @throws YopClientException
     */
    public function manageTransitBalanceQuery(Model\ManageTransitBalanceQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ManageTransitBalanceQueryRequestMarshaller::getInstance(),
            Model\ManageTransitBalanceQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ManageAuditProcessV10Request $request
     * @return Model\ManageAuditProcessV10Response
     * @throws YopClientException
     */
    public function manage_audit_process_v1_0(Model\ManageAuditProcessV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ManageAuditProcessV10RequestMarshaller::getInstance(),
            Model\ManageAuditProcessV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ManageAuditorAddV10Request $request
     * @return Model\ManageAuditorAddV10Response
     * @throws YopClientException
     */
    public function manage_auditor_add_v1_0(Model\ManageAuditorAddV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ManageAuditorAddV10RequestMarshaller::getInstance(),
            Model\ManageAuditorAddV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ManageAuditorConfirmV10Request $request
     * @return Model\ManageAuditorConfirmV10Response
     * @throws YopClientException
     */
    public function manage_auditor_confirm_v1_0(Model\ManageAuditorConfirmV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ManageAuditorConfirmV10RequestMarshaller::getInstance(),
            Model\ManageAuditorConfirmV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ManageAuditorListV10Request $request
     * @return Model\ManageAuditorListV10Response
     * @throws YopClientException
     */
    public function manage_auditor_list_v1_0(Model\ManageAuditorListV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ManageAuditorListV10RequestMarshaller::getInstance(),
            Model\ManageAuditorListV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ManageAuditorQueryV10Request $request
     * @return Model\ManageAuditorQueryV10Response
     * @throws YopClientException
     */
    public function manage_auditor_query_v1_0(Model\ManageAuditorQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ManageAuditorQueryV10RequestMarshaller::getInstance(),
            Model\ManageAuditorQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ManageAuditorSendSmsV10Request $request
     * @return Model\ManageAuditorSendSmsV10Response
     * @throws YopClientException
     */
    public function manage_auditor_send_sms_v1_0(Model\ManageAuditorSendSmsV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ManageAuditorSendSmsV10RequestMarshaller::getInstance(),
            Model\ManageAuditorSendSmsV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ManageBankSupplementRequest $request
     * @return Model\ManageBankSupplementResponse
     * @throws YopClientException
     */
    public function manage_bank_supplement(Model\ManageBankSupplementRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ManageBankSupplementRequestMarshaller::getInstance(),
            Model\ManageBankSupplementResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ManageReviewerAddPhoneV10Request $request
     * @return Model\ManageReviewerAddPhoneV10Response
     * @throws YopClientException
     */
    public function manage_reviewer_add_phone_v1_0(Model\ManageReviewerAddPhoneV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ManageReviewerAddPhoneV10RequestMarshaller::getInstance(),
            Model\ManageReviewerAddPhoneV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ManageReviewerQueryV10Request $request
     * @return Model\ManageReviewerQueryV10Response
     * @throws YopClientException
     */
    public function manage_reviewer_query_v1_0(Model\ManageReviewerQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ManageReviewerQueryV10RequestMarshaller::getInstance(),
            Model\ManageReviewerQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MultimodalAccountTradeRequest $request
     * @return Model\MultimodalAccountTradeResponse
     * @throws YopClientException
     */
    public function multimodal_account_trade(Model\MultimodalAccountTradeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MultimodalAccountTradeRequestMarshaller::getInstance(),
            Model\MultimodalAccountTradeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param ModelOld\OpenBankAccountRequest $request
     * @return ModelOld\OpenBankAccountResponse
     * @throws YopClientException
     */
    public function open_bank_accountOld(ModelOld\OpenBankAccountRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, ModelOld\OpenBankAccountRequestMarshaller::getInstance(),
            ModelOld\OpenBankAccountResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OpenbankaccountRequest $request
     * @return Model\OpenbankaccountResponse
     * @throws YopClientException
     */
    public function openbankaccount(Model\OpenbankaccountRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OpenbankaccountRequestMarshaller::getInstance(),
            Model\OpenbankaccountResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayAccoutCardRequest $request
     * @return Model\PayAccoutCardResponse
     * @throws YopClientException
     */
    public function payAccoutCard(Model\PayAccoutCardRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayAccoutCardRequestMarshaller::getInstance(),
            Model\PayAccoutCardResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayBatchOrderRequest $request
     * @return Model\PayBatchOrderResponse
     * @throws YopClientException
     */
    public function payBatchOrder(Model\PayBatchOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayBatchOrderRequestMarshaller::getInstance(),
            Model\PayBatchOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayBatchQueryRequest $request
     * @return Model\PayBatchQueryResponse
     * @throws YopClientException
     */
    public function payBatchQuery(Model\PayBatchQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayBatchQueryRequestMarshaller::getInstance(),
            Model\PayBatchQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayCancelRequest $request
     * @return Model\PayCancelResponse
     * @throws YopClientException
     */
    public function payCancel(Model\PayCancelRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayCancelRequestMarshaller::getInstance(),
            Model\PayCancelResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayOrderRequest $request
     * @return Model\PayOrderResponse
     * @throws YopClientException
     */
    public function payOrder(Model\PayOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayOrderRequestMarshaller::getInstance(),
            Model\PayOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayOrderAuditQueryRequest $request
     * @return Model\PayOrderAuditQueryResponse
     * @throws YopClientException
     */
    public function payOrderAuditQuery(Model\PayOrderAuditQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayOrderAuditQueryRequestMarshaller::getInstance(),
            Model\PayOrderAuditQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayOrderAuditSendSmsRequest $request
     * @return Model\PayOrderAuditSendSmsResponse
     * @throws YopClientException
     */
    public function payOrderAuditSendSms(Model\PayOrderAuditSendSmsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayOrderAuditSendSmsRequestMarshaller::getInstance(),
            Model\PayOrderAuditSendSmsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayOrderAuditSmsRequest $request
     * @return Model\PayOrderAuditSmsResponse
     * @throws YopClientException
     */
    public function payOrderAuditSms(Model\PayOrderAuditSmsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayOrderAuditSmsRequestMarshaller::getInstance(),
            Model\PayOrderAuditSmsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayOrderV2Request $request
     * @return Model\PayOrderV2Response
     * @throws YopClientException
     */
    public function payOrderV2(Model\PayOrderV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayOrderV2RequestMarshaller::getInstance(),
            Model\PayOrderV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayOrderV3Request $request
     * @return Model\PayOrderV3Response
     * @throws YopClientException
     */
    public function payOrderV3(Model\PayOrderV3Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayOrderV3RequestMarshaller::getInstance(),
            Model\PayOrderV3ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayQueryRequest $request
     * @return Model\PayQueryResponse
     * @throws YopClientException
     */
    public function payQuery(Model\PayQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayQueryRequestMarshaller::getInstance(),
            Model\PayQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayReverseQueryRequest $request
     * @return Model\PayReverseQueryResponse
     * @throws YopClientException
     */
    public function payReverseQuery(Model\PayReverseQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayReverseQueryRequestMarshaller::getInstance(),
            Model\PayReverseQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PaySystemQueryRequest $request
     * @return Model\PaySystemQueryResponse
     * @throws YopClientException
     */
    public function paySystemQuery(Model\PaySystemQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PaySystemQueryRequestMarshaller::getInstance(),
            Model\PaySystemQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayBatchOrderV10Request $request
     * @return Model\PayBatchOrderV10Response
     * @throws YopClientException
     */
    public function pay_batch_order_v1_0(Model\PayBatchOrderV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayBatchOrderV10RequestMarshaller::getInstance(),
            Model\PayBatchOrderV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayBatchQueryV10Request $request
     * @return Model\PayBatchQueryV10Response
     * @throws YopClientException
     */
    public function pay_batch_query_v1_0(Model\PayBatchQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayBatchQueryV10RequestMarshaller::getInstance(),
            Model\PayBatchQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayCancelV10Request $request
     * @return Model\PayCancelV10Response
     * @throws YopClientException
     */
    public function pay_cancel_v1_0(Model\PayCancelV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayCancelV10RequestMarshaller::getInstance(),
            Model\PayCancelV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayOrderAuditQueryRequest $request
     * @return Model\PayOrderAuditQueryResponse
     * @throws YopClientException
     */
    public function pay_order_audit_query(Model\PayOrderAuditQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayOrderAuditQueryRequestMarshaller::getInstance(),
            Model\PayOrderAuditQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayOrderAuditSendSmsRequest $request
     * @return Model\PayOrderAuditSendSmsResponse
     * @throws YopClientException
     */
    public function pay_order_audit_send_sms(Model\PayOrderAuditSendSmsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayOrderAuditSendSmsRequestMarshaller::getInstance(),
            Model\PayOrderAuditSendSmsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayOrderAuditSmsRequest $request
     * @return Model\PayOrderAuditSmsResponse
     * @throws YopClientException
     */
    public function pay_order_audit_sms(Model\PayOrderAuditSmsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayOrderAuditSmsRequestMarshaller::getInstance(),
            Model\PayOrderAuditSmsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayOrderV10Request $request
     * @return Model\PayOrderV10Response
     * @throws YopClientException
     */
    public function pay_order_v1_0(Model\PayOrderV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayOrderV10RequestMarshaller::getInstance(),
            Model\PayOrderV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayQueryV10Request $request
     * @return Model\PayQueryV10Response
     * @throws YopClientException
     */
    public function pay_query_v1_0(Model\PayQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayQueryV10RequestMarshaller::getInstance(),
            Model\PayQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PaySystemQueryV10Request $request
     * @return Model\PaySystemQueryV10Response
     * @throws YopClientException
     */
    public function pay_system_query_v1_0(Model\PaySystemQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PaySystemQueryV10RequestMarshaller::getInstance(),
            Model\PaySystemQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QuerySingleTransferDetailRequest $request
     * @return Model\QuerySingleTransferDetailResponse
     * @throws YopClientException
     */
    public function querySingleTransferDetail(Model\QuerySingleTransferDetailRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QuerySingleTransferDetailRequestMarshaller::getInstance(),
            Model\QuerySingleTransferDetailResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryUserBookWithdrawOrderBySystemRequest $request
     * @return Model\QueryUserBookWithdrawOrderBySystemResponse
     * @throws YopClientException
     */
    public function queryUserBookWithdrawOrderBySystem(Model\QueryUserBookWithdrawOrderBySystemRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryUserBookWithdrawOrderBySystemRequestMarshaller::getInstance(),
            Model\QueryUserBookWithdrawOrderBySystemResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param ModelOld\QueryBindCardApplyListRequest $request
     * @return ModelOld\QueryBindCardApplyListResponse
     * @throws YopClientException
     */
    public function query_bind_card_apply_listOld(ModelOld\QueryBindCardApplyListRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, ModelOld\QueryBindCardApplyListRequestMarshaller::getInstance(),
            ModelOld\QueryBindCardApplyListResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param ModelOld\QueryBindCardListRequest $request
     * @return ModelOld\QueryBindCardListResponse
     * @throws YopClientException
     */
    public function query_bind_card_listOld(ModelOld\QueryBindCardListRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, ModelOld\QueryBindCardListRequestMarshaller::getInstance(),
            ModelOld\QueryBindCardListResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QuerySingleTransferDetailRequest $request
     * @return Model\QuerySingleTransferDetailResponse
     * @throws YopClientException
     */
    public function query_single_transfer_detail(Model\QuerySingleTransferDetailRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QuerySingleTransferDetailRequestMarshaller::getInstance(),
            Model\QuerySingleTransferDetailResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryTransitAccountBalanceRequest $request
     * @return Model\QueryTransitAccountBalanceResponse
     * @throws YopClientException
     */
    public function query_transit_account_balance(Model\QueryTransitAccountBalanceRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryTransitAccountBalanceRequestMarshaller::getInstance(),
            Model\QueryTransitAccountBalanceResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QuerybindcardapplylistRequest $request
     * @return Model\QuerybindcardapplylistResponse
     * @throws YopClientException
     */
    public function querybindcardapplylist(Model\QuerybindcardapplylistRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QuerybindcardapplylistRequestMarshaller::getInstance(),
            Model\QuerybindcardapplylistResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QuerybindcardlistRequest $request
     * @return Model\QuerybindcardlistResponse
     * @throws YopClientException
     */
    public function querybindcardlist(Model\QuerybindcardlistRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QuerybindcardlistRequestMarshaller::getInstance(),
            Model\QuerybindcardlistResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ReceiptGatherRequest $request
     * @return Model\ReceiptGatherResponse
     * @throws YopClientException
     */
    public function receiptGather(Model\ReceiptGatherRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ReceiptGatherRequestMarshaller::getInstance(),
            Model\ReceiptGatherResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ReceiptGetRequest $request
     * @return Model\ReceiptGetResponse
     * @throws YopClientException
     */
    public function receiptGet(Model\ReceiptGetRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ReceiptGetRequestMarshaller::getInstance(),
            Model\ReceiptGetResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ReceiptReceiverGetRequest $request
     * @return Model\ReceiptReceiverGetResponse
     * @throws YopClientException
     */
    public function receiptReceiverGet(Model\ReceiptReceiverGetRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ReceiptReceiverGetRequestMarshaller::getInstance(),
            Model\ReceiptReceiverGetResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ReceiptGatherV10Request $request
     * @return Model\ReceiptGatherV10Response
     * @throws YopClientException
     */
    public function receipt_gather_v1_0(Model\ReceiptGatherV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ReceiptGatherV10RequestMarshaller::getInstance(),
            Model\ReceiptGatherV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ReceiptGetV10Request $request
     * @return Model\ReceiptGetV10Response
     * @throws YopClientException
     */
    public function receipt_get_v1_0(Model\ReceiptGetV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ReceiptGetV10RequestMarshaller::getInstance(),
            Model\ReceiptGetV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RechargeRequest $request
     * @return Model\RechargeResponse
     * @throws YopClientException
     */
    public function recharge(Model\RechargeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RechargeRequestMarshaller::getInstance(),
            Model\RechargeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RechargeAccountBookQueryRequest $request
     * @return Model\RechargeAccountBookQueryResponse
     * @throws YopClientException
     */
    public function rechargeAccountBookQuery(Model\RechargeAccountBookQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RechargeAccountBookQueryRequestMarshaller::getInstance(),
            Model\RechargeAccountBookQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RechargeBatchQueryRequest $request
     * @return Model\RechargeBatchQueryResponse
     * @throws YopClientException
     */
    public function rechargeBatchQuery(Model\RechargeBatchQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RechargeBatchQueryRequestMarshaller::getInstance(),
            Model\RechargeBatchQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RechargeDelConfigRequest $request
     * @return Model\RechargeDelConfigResponse
     * @throws YopClientException
     */
    public function rechargeDelConfig(Model\RechargeDelConfigRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RechargeDelConfigRequestMarshaller::getInstance(),
            Model\RechargeDelConfigResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RechargeOnlinebankOrderRequest $request
     * @return Model\RechargeOnlinebankOrderResponse
     * @throws YopClientException
     */
    public function rechargeOnlinebankOrder(Model\RechargeOnlinebankOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RechargeOnlinebankOrderRequestMarshaller::getInstance(),
            Model\RechargeOnlinebankOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RechargeOrderRequest $request
     * @return Model\RechargeOrderResponse
     * @throws YopClientException
     */
    public function rechargeOrder(Model\RechargeOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RechargeOrderRequestMarshaller::getInstance(),
            Model\RechargeOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RechargePayerAddRequest $request
     * @return Model\RechargePayerAddResponse
     * @throws YopClientException
     */
    public function rechargePayerAdd(Model\RechargePayerAddRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RechargePayerAddRequestMarshaller::getInstance(),
            Model\RechargePayerAddResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RechargePayerDeleteRequest $request
     * @return Model\RechargePayerDeleteResponse
     * @throws YopClientException
     */
    public function rechargePayerDelete(Model\RechargePayerDeleteRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RechargePayerDeleteRequestMarshaller::getInstance(),
            Model\RechargePayerDeleteResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RechargePayerQueryRequest $request
     * @return Model\RechargePayerQueryResponse
     * @throws YopClientException
     */
    public function rechargePayerQuery(Model\RechargePayerQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RechargePayerQueryRequestMarshaller::getInstance(),
            Model\RechargePayerQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RechargeQueryRequest $request
     * @return Model\RechargeQueryResponse
     * @throws YopClientException
     */
    public function rechargeQuery(Model\RechargeQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RechargeQueryRequestMarshaller::getInstance(),
            Model\RechargeQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RechargeQueryConfigRequest $request
     * @return Model\RechargeQueryConfigResponse
     * @throws YopClientException
     */
    public function rechargeQueryConfig(Model\RechargeQueryConfigRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RechargeQueryConfigRequestMarshaller::getInstance(),
            Model\RechargeQueryConfigResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RechargeSaveConfigRequest $request
     * @return Model\RechargeSaveConfigResponse
     * @throws YopClientException
     */
    public function rechargeSaveConfig(Model\RechargeSaveConfigRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RechargeSaveConfigRequestMarshaller::getInstance(),
            Model\RechargeSaveConfigResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RechargeAccountBookQueryV10Request $request
     * @return Model\RechargeAccountBookQueryV10Response
     * @throws YopClientException
     */
    public function recharge_account_book_query_v1_0(Model\RechargeAccountBookQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RechargeAccountBookQueryV10RequestMarshaller::getInstance(),
            Model\RechargeAccountBookQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RechargeBatchQueryV10Request $request
     * @return Model\RechargeBatchQueryV10Response
     * @throws YopClientException
     */
    public function recharge_batch_query_v1_0(Model\RechargeBatchQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RechargeBatchQueryV10RequestMarshaller::getInstance(),
            Model\RechargeBatchQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RechargeOnlinebankOrderV10Request $request
     * @return Model\RechargeOnlinebankOrderV10Response
     * @throws YopClientException
     */
    public function recharge_onlinebank_order_v1_0(Model\RechargeOnlinebankOrderV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RechargeOnlinebankOrderV10RequestMarshaller::getInstance(),
            Model\RechargeOnlinebankOrderV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RechargeOrderV10Request $request
     * @return Model\RechargeOrderV10Response
     * @throws YopClientException
     */
    public function recharge_order_v1_0(Model\RechargeOrderV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RechargeOrderV10RequestMarshaller::getInstance(),
            Model\RechargeOrderV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RechargeQueryV10Request $request
     * @return Model\RechargeQueryV10Response
     * @throws YopClientException
     */
    public function recharge_query_v1_0(Model\RechargeQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RechargeQueryV10RequestMarshaller::getInstance(),
            Model\RechargeQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RechargeV10Request $request
     * @return Model\RechargeV10Response
     * @throws YopClientException
     */
    public function recharge_v1_0(Model\RechargeV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RechargeV10RequestMarshaller::getInstance(),
            Model\RechargeV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SingleProxyTransferRequest $request
     * @return Model\SingleProxyTransferResponse
     * @throws YopClientException
     */
    public function singleProxyTransfer(Model\SingleProxyTransferRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SingleProxyTransferRequestMarshaller::getInstance(),
            Model\SingleProxyTransferResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SupplierApplyRequest $request
     * @return Model\SupplierApplyResponse
     * @throws YopClientException
     */
    public function supplierApply(Model\SupplierApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SupplierApplyRequestMarshaller::getInstance(),
            Model\SupplierApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SupplierPayOrderRequest $request
     * @return Model\SupplierPayOrderResponse
     * @throws YopClientException
     */
    public function supplierPayOrder(Model\SupplierPayOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SupplierPayOrderRequestMarshaller::getInstance(),
            Model\SupplierPayOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SupplierQueryRequest $request
     * @return Model\SupplierQueryResponse
     * @throws YopClientException
     */
    public function supplierQuery(Model\SupplierQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SupplierQueryRequestMarshaller::getInstance(),
            Model\SupplierQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SupplierQueryProgressRequest $request
     * @return Model\SupplierQueryProgressResponse
     * @throws YopClientException
     */
    public function supplierQueryProgress(Model\SupplierQueryProgressRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SupplierQueryProgressRequestMarshaller::getInstance(),
            Model\SupplierQueryProgressResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SupplierApplyV10Request $request
     * @return Model\SupplierApplyV10Response
     * @throws YopClientException
     */
    public function supplier_apply_v1_0(Model\SupplierApplyV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SupplierApplyV10RequestMarshaller::getInstance(),
            Model\SupplierApplyV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SupplierPayOrderV10Request $request
     * @return Model\SupplierPayOrderV10Response
     * @throws YopClientException
     */
    public function supplier_pay_order_v1_0(Model\SupplierPayOrderV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SupplierPayOrderV10RequestMarshaller::getInstance(),
            Model\SupplierPayOrderV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SupplierQueryProgressV10Request $request
     * @return Model\SupplierQueryProgressV10Response
     * @throws YopClientException
     */
    public function supplier_query_progress_v1_0(Model\SupplierQueryProgressV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SupplierQueryProgressV10RequestMarshaller::getInstance(),
            Model\SupplierQueryProgressV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SupplierQueryV10Request $request
     * @return Model\SupplierQueryV10Response
     * @throws YopClientException
     */
    public function supplier_query_v1_0(Model\SupplierQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SupplierQueryV10RequestMarshaller::getInstance(),
            Model\SupplierQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TargetOrderRequest $request
     * @return Model\TargetOrderResponse
     * @throws YopClientException
     */
    public function targetOrder(Model\TargetOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TargetOrderRequestMarshaller::getInstance(),
            Model\TargetOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferAppointMarketAccountRequest $request
     * @return Model\TransferAppointMarketAccountResponse
     * @throws YopClientException
     */
    public function transferAppointMarketAccount(Model\TransferAppointMarketAccountRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferAppointMarketAccountRequestMarshaller::getInstance(),
            Model\TransferAppointMarketAccountResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferB2bOrderRequest $request
     * @return Model\TransferB2bOrderResponse
     * @throws YopClientException
     */
    public function transferB2bOrder(Model\TransferB2bOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferB2bOrderRequestMarshaller::getInstance(),
            Model\TransferB2bOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferB2bOrderAuditQueryRequest $request
     * @return Model\TransferB2bOrderAuditQueryResponse
     * @throws YopClientException
     */
    public function transferB2bOrderAuditQuery(Model\TransferB2bOrderAuditQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferB2bOrderAuditQueryRequestMarshaller::getInstance(),
            Model\TransferB2bOrderAuditQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferB2bOrderAuditSendSmsRequest $request
     * @return Model\TransferB2bOrderAuditSendSmsResponse
     * @throws YopClientException
     */
    public function transferB2bOrderAuditSendSms(Model\TransferB2bOrderAuditSendSmsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferB2bOrderAuditSendSmsRequestMarshaller::getInstance(),
            Model\TransferB2bOrderAuditSendSmsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferB2bOrderAuditSmsRequest $request
     * @return Model\TransferB2bOrderAuditSmsResponse
     * @throws YopClientException
     */
    public function transferB2bOrderAuditSms(Model\TransferB2bOrderAuditSmsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferB2bOrderAuditSmsRequestMarshaller::getInstance(),
            Model\TransferB2bOrderAuditSmsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferB2bOrderV3Request $request
     * @return Model\TransferB2bOrderV3Response
     * @throws YopClientException
     */
    public function transferB2bOrderV3(Model\TransferB2bOrderV3Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferB2bOrderV3RequestMarshaller::getInstance(),
            Model\TransferB2bOrderV3ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferB2bQueryRequest $request
     * @return Model\TransferB2bQueryResponse
     * @throws YopClientException
     */
    public function transferB2bQuery(Model\TransferB2bQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferB2bQueryRequestMarshaller::getInstance(),
            Model\TransferB2bQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferSystemQueryRequest $request
     * @return Model\TransferSystemQueryResponse
     * @throws YopClientException
     */
    public function transferSystemQuery(Model\TransferSystemQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferSystemQueryRequestMarshaller::getInstance(),
            Model\TransferSystemQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferWechatOrderRequest $request
     * @return Model\TransferWechatOrderResponse
     * @throws YopClientException
     */
    public function transferWechatOrder(Model\TransferWechatOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferWechatOrderRequestMarshaller::getInstance(),
            Model\TransferWechatOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferWechatQueryRequest $request
     * @return Model\TransferWechatQueryResponse
     * @throws YopClientException
     */
    public function transferWechatQuery(Model\TransferWechatQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferWechatQueryRequestMarshaller::getInstance(),
            Model\TransferWechatQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferAppointMarketAccountRequest $request
     * @return Model\TransferAppointMarketAccountResponse
     * @throws YopClientException
     */
    public function transfer_appoint_market_account(Model\TransferAppointMarketAccountRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferAppointMarketAccountRequestMarshaller::getInstance(),
            Model\TransferAppointMarketAccountResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferB2bOrderAuditQueryRequest $request
     * @return Model\TransferB2bOrderAuditQueryResponse
     * @throws YopClientException
     */
    public function transfer_b2b_order_audit_query(Model\TransferB2bOrderAuditQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferB2bOrderAuditQueryRequestMarshaller::getInstance(),
            Model\TransferB2bOrderAuditQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferB2bOrderAuditSendSmsRequest $request
     * @return Model\TransferB2bOrderAuditSendSmsResponse
     * @throws YopClientException
     */
    public function transfer_b2b_order_audit_send_sms(Model\TransferB2bOrderAuditSendSmsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferB2bOrderAuditSendSmsRequestMarshaller::getInstance(),
            Model\TransferB2bOrderAuditSendSmsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferB2bOrderAuditSmsRequest $request
     * @return Model\TransferB2bOrderAuditSmsResponse
     * @throws YopClientException
     */
    public function transfer_b2b_order_audit_sms(Model\TransferB2bOrderAuditSmsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferB2bOrderAuditSmsRequestMarshaller::getInstance(),
            Model\TransferB2bOrderAuditSmsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferB2bOrderV10Request $request
     * @return Model\TransferB2bOrderV10Response
     * @throws YopClientException
     */
    public function transfer_b2b_order_v1_0(Model\TransferB2bOrderV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferB2bOrderV10RequestMarshaller::getInstance(),
            Model\TransferB2bOrderV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferB2bQueryV10Request $request
     * @return Model\TransferB2bQueryV10Response
     * @throws YopClientException
     */
    public function transfer_b2b_query_v1_0(Model\TransferB2bQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferB2bQueryV10RequestMarshaller::getInstance(),
            Model\TransferB2bQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferGroupAccountQueryV1Request $request
     * @return Model\TransferGroupAccountQueryV1Response
     * @throws YopClientException
     */
    public function transfer_group_account_query_v1(Model\TransferGroupAccountQueryV1Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferGroupAccountQueryV1RequestMarshaller::getInstance(),
            Model\TransferGroupAccountQueryV1ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferGroupAccountV1Request $request
     * @return Model\TransferGroupAccountV1Response
     * @throws YopClientException
     */
    public function transfer_group_account_v1(Model\TransferGroupAccountV1Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferGroupAccountV1RequestMarshaller::getInstance(),
            Model\TransferGroupAccountV1ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferSystemQueryV10Request $request
     * @return Model\TransferSystemQueryV10Response
     * @throws YopClientException
     */
    public function transfer_system_query_v1_0(Model\TransferSystemQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferSystemQueryV10RequestMarshaller::getInstance(),
            Model\TransferSystemQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferWechatOrderV10Request $request
     * @return Model\TransferWechatOrderV10Response
     * @throws YopClientException
     */
    public function transfer_wechat_order_v1_0(Model\TransferWechatOrderV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferWechatOrderV10RequestMarshaller::getInstance(),
            Model\TransferWechatOrderV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferWechatQueryV10Request $request
     * @return Model\TransferWechatQueryV10Response
     * @throws YopClientException
     */
    public function transfer_wechat_query_v1_0(Model\TransferWechatQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferWechatQueryV10RequestMarshaller::getInstance(),
            Model\TransferWechatQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnionAccountAliBatchProxyTransferRequest $request
     * @return Model\UnionAccountAliBatchProxyTransferResponse
     * @throws YopClientException
     */
    public function union_account_ali_batch_proxy_transfer(Model\UnionAccountAliBatchProxyTransferRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnionAccountAliBatchProxyTransferRequestMarshaller::getInstance(),
            Model\UnionAccountAliBatchProxyTransferResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnionAccountAliBatchTransferDetailRequest $request
     * @return Model\UnionAccountAliBatchTransferDetailResponse
     * @throws YopClientException
     */
    public function union_account_ali_batch_transfer_detail(Model\UnionAccountAliBatchTransferDetailRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnionAccountAliBatchTransferDetailRequestMarshaller::getInstance(),
            Model\UnionAccountAliBatchTransferDetailResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnionAccountAliCancelContractRequest $request
     * @return Model\UnionAccountAliCancelContractResponse
     * @throws YopClientException
     */
    public function union_account_ali_cancel_contract(Model\UnionAccountAliCancelContractRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnionAccountAliCancelContractRequestMarshaller::getInstance(),
            Model\UnionAccountAliCancelContractResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnionAccountAliCapitalTransferQueryRequest $request
     * @return Model\UnionAccountAliCapitalTransferQueryResponse
     * @throws YopClientException
     */
    public function union_account_ali_capital_transfer_query(Model\UnionAccountAliCapitalTransferQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnionAccountAliCapitalTransferQueryRequestMarshaller::getInstance(),
            Model\UnionAccountAliCapitalTransferQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnionAccountAliChannlBookDetailRequest $request
     * @return Model\UnionAccountAliChannlBookDetailResponse
     * @throws YopClientException
     */
    public function union_account_ali_channl_book_detail(Model\UnionAccountAliChannlBookDetailRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnionAccountAliChannlBookDetailRequestMarshaller::getInstance(),
            Model\UnionAccountAliChannlBookDetailResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnionAccountAliOpenChannelBookRequest $request
     * @return Model\UnionAccountAliOpenChannelBookResponse
     * @throws YopClientException
     */
    public function union_account_ali_open_channel_book(Model\UnionAccountAliOpenChannelBookRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnionAccountAliOpenChannelBookRequestMarshaller::getInstance(),
            Model\UnionAccountAliOpenChannelBookResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnionAccountAliSignContractRequest $request
     * @return Model\UnionAccountAliSignContractResponse
     * @throws YopClientException
     */
    public function union_account_ali_sign_contract(Model\UnionAccountAliSignContractRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnionAccountAliSignContractRequestMarshaller::getInstance(),
            Model\UnionAccountAliSignContractResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnionAccountCapitalTransferRequest $request
     * @return Model\UnionAccountCapitalTransferResponse
     * @throws YopClientException
     */
    public function union_account_capital_transfer(Model\UnionAccountCapitalTransferRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnionAccountCapitalTransferRequestMarshaller::getInstance(),
            Model\UnionAccountCapitalTransferResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnionAccountRechargeDelConfigRequest $request
     * @return Model\UnionAccountRechargeDelConfigResponse
     * @throws YopClientException
     */
    public function union_account_recharge_del_config(Model\UnionAccountRechargeDelConfigRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnionAccountRechargeDelConfigRequestMarshaller::getInstance(),
            Model\UnionAccountRechargeDelConfigResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnionAccountRechargePayerAddRequest $request
     * @return Model\UnionAccountRechargePayerAddResponse
     * @throws YopClientException
     */
    public function union_account_recharge_payer_add(Model\UnionAccountRechargePayerAddRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnionAccountRechargePayerAddRequestMarshaller::getInstance(),
            Model\UnionAccountRechargePayerAddResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnionAccountRechargePayerDeleteRequest $request
     * @return Model\UnionAccountRechargePayerDeleteResponse
     * @throws YopClientException
     */
    public function union_account_recharge_payer_delete(Model\UnionAccountRechargePayerDeleteRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnionAccountRechargePayerDeleteRequestMarshaller::getInstance(),
            Model\UnionAccountRechargePayerDeleteResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnionAccountRechargePayerQueryRequest $request
     * @return Model\UnionAccountRechargePayerQueryResponse
     * @throws YopClientException
     */
    public function union_account_recharge_payer_query(Model\UnionAccountRechargePayerQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnionAccountRechargePayerQueryRequestMarshaller::getInstance(),
            Model\UnionAccountRechargePayerQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnionAccountRechargeQueryConfigRequest $request
     * @return Model\UnionAccountRechargeQueryConfigResponse
     * @throws YopClientException
     */
    public function union_account_recharge_query_config(Model\UnionAccountRechargeQueryConfigRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnionAccountRechargeQueryConfigRequestMarshaller::getInstance(),
            Model\UnionAccountRechargeQueryConfigResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnionAccountRechargeSaveConfigRequest $request
     * @return Model\UnionAccountRechargeSaveConfigResponse
     * @throws YopClientException
     */
    public function union_account_recharge_save_config(Model\UnionAccountRechargeSaveConfigRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnionAccountRechargeSaveConfigRequestMarshaller::getInstance(),
            Model\UnionAccountRechargeSaveConfigResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnionAccountSignContractQueryRequest $request
     * @return Model\UnionAccountSignContractQueryResponse
     * @throws YopClientException
     */
    public function union_account_sign_contract_query(Model\UnionAccountSignContractQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnionAccountSignContractQueryRequestMarshaller::getInstance(),
            Model\UnionAccountSignContractQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnionAccountTradeAccountBookRemitRequest $request
     * @return Model\UnionAccountTradeAccountBookRemitResponse
     * @throws YopClientException
     */
    public function union_account_trade_account_book_remit(Model\UnionAccountTradeAccountBookRemitRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnionAccountTradeAccountBookRemitRequestMarshaller::getInstance(),
            Model\UnionAccountTradeAccountBookRemitResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UserBookWithdrawOrderRequest $request
     * @return Model\UserBookWithdrawOrderResponse
     * @throws YopClientException
     */
    public function userBookWithdrawOrder(Model\UserBookWithdrawOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UserBookWithdrawOrderRequestMarshaller::getInstance(),
            Model\UserBookWithdrawOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UserBookWithdrawQueryRequest $request
     * @return Model\UserBookWithdrawQueryResponse
     * @throws YopClientException
     */
    public function userBookWithdrawQuery(Model\UserBookWithdrawQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UserBookWithdrawQueryRequestMarshaller::getInstance(),
            Model\UserBookWithdrawQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WithdrawCardBindRequest $request
     * @return Model\WithdrawCardBindResponse
     * @throws YopClientException
     */
    public function withdrawCardBind(Model\WithdrawCardBindRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WithdrawCardBindRequestMarshaller::getInstance(),
            Model\WithdrawCardBindResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WithdrawCardModifyRequest $request
     * @return Model\WithdrawCardModifyResponse
     * @throws YopClientException
     */
    public function withdrawCardModify(Model\WithdrawCardModifyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WithdrawCardModifyRequestMarshaller::getInstance(),
            Model\WithdrawCardModifyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WithdrawCardQueryRequest $request
     * @return Model\WithdrawCardQueryResponse
     * @throws YopClientException
     */
    public function withdrawCardQuery(Model\WithdrawCardQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WithdrawCardQueryRequestMarshaller::getInstance(),
            Model\WithdrawCardQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WithdrawH5OrderRequest $request
     * @return Model\WithdrawH5OrderResponse
     * @throws YopClientException
     */
    public function withdrawH5Order(Model\WithdrawH5OrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WithdrawH5OrderRequestMarshaller::getInstance(),
            Model\WithdrawH5OrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WithdrawOrderRequest $request
     * @return Model\WithdrawOrderResponse
     * @throws YopClientException
     */
    public function withdrawOrder(Model\WithdrawOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WithdrawOrderRequestMarshaller::getInstance(),
            Model\WithdrawOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WithdrawQueryRequest $request
     * @return Model\WithdrawQueryResponse
     * @throws YopClientException
     */
    public function withdrawQuery(Model\WithdrawQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WithdrawQueryRequestMarshaller::getInstance(),
            Model\WithdrawQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WithdrawSystemQueryRequest $request
     * @return Model\WithdrawSystemQueryResponse
     * @throws YopClientException
     */
    public function withdrawSystemQuery(Model\WithdrawSystemQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WithdrawSystemQueryRequestMarshaller::getInstance(),
            Model\WithdrawSystemQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WithdrawCardBindV10Request $request
     * @return Model\WithdrawCardBindV10Response
     * @throws YopClientException
     */
    public function withdraw_card_bind_v1_0(Model\WithdrawCardBindV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WithdrawCardBindV10RequestMarshaller::getInstance(),
            Model\WithdrawCardBindV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WithdrawCardModifyV10Request $request
     * @return Model\WithdrawCardModifyV10Response
     * @throws YopClientException
     */
    public function withdraw_card_modify_v1_0(Model\WithdrawCardModifyV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WithdrawCardModifyV10RequestMarshaller::getInstance(),
            Model\WithdrawCardModifyV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WithdrawCardQueryV10Request $request
     * @return Model\WithdrawCardQueryV10Response
     * @throws YopClientException
     */
    public function withdraw_card_query_v1_0(Model\WithdrawCardQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WithdrawCardQueryV10RequestMarshaller::getInstance(),
            Model\WithdrawCardQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WithdrawH5OrderV10Request $request
     * @return Model\WithdrawH5OrderV10Response
     * @throws YopClientException
     */
    public function withdraw_h5_order_v1_0(Model\WithdrawH5OrderV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WithdrawH5OrderV10RequestMarshaller::getInstance(),
            Model\WithdrawH5OrderV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WithdrawOrderV10Request $request
     * @return Model\WithdrawOrderV10Response
     * @throws YopClientException
     */
    public function withdraw_order_v1_0(Model\WithdrawOrderV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WithdrawOrderV10RequestMarshaller::getInstance(),
            Model\WithdrawOrderV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WithdrawQueryV10Request $request
     * @return Model\WithdrawQueryV10Response
     * @throws YopClientException
     */
    public function withdraw_query_v1_0(Model\WithdrawQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WithdrawQueryV10RequestMarshaller::getInstance(),
            Model\WithdrawQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WithdrawSystemQueryV10Request $request
     * @return Model\WithdrawSystemQueryV10Response
     * @throws YopClientException
     */
    public function withdraw_system_query_v1_0(Model\WithdrawSystemQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WithdrawSystemQueryV10RequestMarshaller::getInstance(),
            Model\WithdrawSystemQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\XibMultiBindCardRequest $request
     * @return Model\XibMultiBindCardResponse
     * @throws YopClientException
     */
    public function xibMultiBindCard(Model\XibMultiBindCardRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\XibMultiBindCardRequestMarshaller::getInstance(),
            Model\XibMultiBindCardResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
