<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Aggpay\Model as Model;
use Yeepay\Yop\Sdk\Service\Aggpay\Model\Old as ModelOld;

class AggpayClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * AggpayClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\ActivityQueryRequest $request
     * @return Model\ActivityQueryResponse
     * @throws YopClientException
     */
    public function activityQuery(Model\ActivityQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ActivityQueryRequestMarshaller::getInstance(),
            Model\ActivityQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ActivityRequestRequest $request
     * @return Model\ActivityRequestResponse
     * @throws YopClientException
     */
    public function activityRequest(Model\ActivityRequestRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ActivityRequestRequestMarshaller::getInstance(),
            Model\ActivityRequestResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AggAttachReportQueryV10Request $request
     * @return Model\AggAttachReportQueryV10Response
     * @throws YopClientException
     */
    public function agg_attach_report_query_v1_0(Model\AggAttachReportQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AggAttachReportQueryV10RequestMarshaller::getInstance(),
            Model\AggAttachReportQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AggAttachReportV10Request $request
     * @return Model\AggAttachReportV10Response
     * @throws YopClientException
     */
    public function agg_attach_report_v1_0(Model\AggAttachReportV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AggAttachReportV10RequestMarshaller::getInstance(),
            Model\AggAttachReportV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AggCloseOrderV10Request $request
     * @return Model\AggCloseOrderV10Response
     * @throws YopClientException
     */
    public function agg_close_order_v1_0(Model\AggCloseOrderV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AggCloseOrderV10RequestMarshaller::getInstance(),
            Model\AggCloseOrderV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AggHbfqAwardReceiveV10Request $request
     * @return Model\AggHbfqAwardReceiveV10Response
     * @throws YopClientException
     */
    public function agg_hbfq_award_receive_v1_0(Model\AggHbfqAwardReceiveV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AggHbfqAwardReceiveV10RequestMarshaller::getInstance(),
            Model\AggHbfqAwardReceiveV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AggHbfqMarketingConsultV10Request $request
     * @return Model\AggHbfqMarketingConsultV10Response
     * @throws YopClientException
     */
    public function agg_hbfq_marketing_consult_v1_0(Model\AggHbfqMarketingConsultV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AggHbfqMarketingConsultV10RequestMarshaller::getInstance(),
            Model\AggHbfqMarketingConsultV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AggReportBackUpV10Request $request
     * @return Model\AggReportBackUpV10Response
     * @throws YopClientException
     */
    public function agg_report_back_up_v1_0(Model\AggReportBackUpV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AggReportBackUpV10RequestMarshaller::getInstance(),
            Model\AggReportBackUpV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AggReportQueryV10Request $request
     * @return Model\AggReportQueryV10Response
     * @throws YopClientException
     */
    public function agg_report_query_v1_0(Model\AggReportQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AggReportQueryV10RequestMarshaller::getInstance(),
            Model\AggReportQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AggReportUpdateV10Request $request
     * @return Model\AggReportUpdateV10Response
     * @throws YopClientException
     */
    public function agg_report_update_v1_0(Model\AggReportUpdateV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AggReportUpdateV10RequestMarshaller::getInstance(),
            Model\AggReportUpdateV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AggRetailBatchCreateV10Request $request
     * @return Model\AggRetailBatchCreateV10Response
     * @throws YopClientException
     */
    public function agg_retail_batch_create_v1_0(Model\AggRetailBatchCreateV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AggRetailBatchCreateV10RequestMarshaller::getInstance(),
            Model\AggRetailBatchCreateV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AggRetailGetInfoV10Request $request
     * @return Model\AggRetailGetInfoV10Response
     * @throws YopClientException
     */
    public function agg_retail_get_info_v1_0(Model\AggRetailGetInfoV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AggRetailGetInfoV10RequestMarshaller::getInstance(),
            Model\AggRetailGetInfoV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AggWechatDisposalQueryV10Request $request
     * @return Model\AggWechatDisposalQueryV10Response
     * @throws YopClientException
     */
    public function agg_wechat_disposal_query_v1_0(Model\AggWechatDisposalQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AggWechatDisposalQueryV10RequestMarshaller::getInstance(),
            Model\AggWechatDisposalQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ApplyChannelNoRequest $request
     * @return Model\ApplyChannelNoResponse
     * @throws YopClientException
     */
    public function applyChannelNo(Model\ApplyChannelNoRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ApplyChannelNoRequestMarshaller::getInstance(),
            Model\ApplyChannelNoResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AttachAddRequest $request
     * @return Model\AttachAddResponse
     * @throws YopClientException
     */
    public function attachAdd(Model\AttachAddRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AttachAddRequestMarshaller::getInstance(),
            Model\AttachAddResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AttachQueryRequest $request
     * @return Model\AttachQueryResponse
     * @throws YopClientException
     */
    public function attachQuery(Model\AttachQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AttachQueryRequestMarshaller::getInstance(),
            Model\AttachQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AttachRelieveRequest $request
     * @return Model\AttachRelieveResponse
     * @throws YopClientException
     */
    public function attachRelieve(Model\AttachRelieveRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AttachRelieveRequestMarshaller::getInstance(),
            Model\AttachRelieveResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AttachReportRequest $request
     * @return Model\AttachReportResponse
     * @throws YopClientException
     */
    public function attachReport(Model\AttachReportRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AttachReportRequestMarshaller::getInstance(),
            Model\AttachReportResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CloseOrderRequest $request
     * @return Model\CloseOrderResponse
     * @throws YopClientException
     */
    public function closeOrder(Model\CloseOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CloseOrderRequestMarshaller::getInstance(),
            Model\CloseOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CloseOrderV2Request $request
     * @return Model\CloseOrderV2Response
     * @throws YopClientException
     */
    public function closeOrderV2(Model\CloseOrderV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CloseOrderV2RequestMarshaller::getInstance(),
            Model\CloseOrderV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CloseOrderV20Request $request
     * @return Model\CloseOrderV20Response
     * @throws YopClientException
     */
    public function close_order_v2_0(Model\CloseOrderV20Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CloseOrderV20RequestMarshaller::getInstance(),
            Model\CloseOrderV20ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ComplaintUpdaterefundprogressRequest $request
     * @return Model\ComplaintUpdaterefundprogressResponse
     * @throws YopClientException
     */
    public function complaintUpdaterefundprogress(Model\ComplaintUpdaterefundprogressRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ComplaintUpdaterefundprogressRequestMarshaller::getInstance(),
            Model\ComplaintUpdaterefundprogressResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ComplaintWechatDetailsRequest $request
     * @return Model\ComplaintWechatDetailsResponse
     * @throws YopClientException
     */
    public function complaintWechatDetails(Model\ComplaintWechatDetailsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ComplaintWechatDetailsRequestMarshaller::getInstance(),
            Model\ComplaintWechatDetailsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ComplaintWechatDownloadPicRequest $request
     * @return Model\ComplaintWechatDownloadPicResponse
     * @throws YopClientException
     */
    public function complaintWechatDownloadPic(Model\ComplaintWechatDownloadPicRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ComplaintWechatDownloadPicRequestMarshaller::getInstance(),
            Model\ComplaintWechatDownloadPicResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ComplaintWechatFeedbackRequest $request
     * @return Model\ComplaintWechatFeedbackResponse
     * @throws YopClientException
     */
    public function complaintWechatFeedback(Model\ComplaintWechatFeedbackRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ComplaintWechatFeedbackRequestMarshaller::getInstance(),
            Model\ComplaintWechatFeedbackResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ComplaintWechatListRequest $request
     * @return Model\ComplaintWechatListResponse
     * @throws YopClientException
     */
    public function complaintWechatList(Model\ComplaintWechatListRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ComplaintWechatListRequestMarshaller::getInstance(),
            Model\ComplaintWechatListResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ComplaintWechatNegotiationHistoryRequest $request
     * @return Model\ComplaintWechatNegotiationHistoryResponse
     * @throws YopClientException
     */
    public function complaintWechatNegotiationHistory(Model\ComplaintWechatNegotiationHistoryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ComplaintWechatNegotiationHistoryRequestMarshaller::getInstance(),
            Model\ComplaintWechatNegotiationHistoryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ComplaintWechatSuccessRequest $request
     * @return Model\ComplaintWechatSuccessResponse
     * @throws YopClientException
     */
    public function complaintWechatSuccess(Model\ComplaintWechatSuccessRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ComplaintWechatSuccessRequestMarshaller::getInstance(),
            Model\ComplaintWechatSuccessResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ComplaintWechatDetailsV10Request $request
     * @return Model\ComplaintWechatDetailsV10Response
     * @throws YopClientException
     */
    public function complaint_wechat_details_v1_0(Model\ComplaintWechatDetailsV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ComplaintWechatDetailsV10RequestMarshaller::getInstance(),
            Model\ComplaintWechatDetailsV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ComplaintWechatDownloadPicV10Request $request
     * @return Model\ComplaintWechatDownloadPicV10Response
     * @throws YopClientException
     */
    public function complaint_wechat_download_pic_v1_0(Model\ComplaintWechatDownloadPicV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ComplaintWechatDownloadPicV10RequestMarshaller::getInstance(),
            Model\ComplaintWechatDownloadPicV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ComplaintWechatFeedbackV10Request $request
     * @return Model\ComplaintWechatFeedbackV10Response
     * @throws YopClientException
     */
    public function complaint_wechat_feedback_v1_0(Model\ComplaintWechatFeedbackV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ComplaintWechatFeedbackV10RequestMarshaller::getInstance(),
            Model\ComplaintWechatFeedbackV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ComplaintWechatListV10Request $request
     * @return Model\ComplaintWechatListV10Response
     * @throws YopClientException
     */
    public function complaint_wechat_list_v1_0(Model\ComplaintWechatListV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ComplaintWechatListV10RequestMarshaller::getInstance(),
            Model\ComplaintWechatListV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ComplaintWechatNegotiationHistoryV10Request $request
     * @return Model\ComplaintWechatNegotiationHistoryV10Response
     * @throws YopClientException
     */
    public function complaint_wechat_negotiation_history_v1_0(Model\ComplaintWechatNegotiationHistoryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ComplaintWechatNegotiationHistoryV10RequestMarshaller::getInstance(),
            Model\ComplaintWechatNegotiationHistoryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ComplaintWechatSuccessV10Request $request
     * @return Model\ComplaintWechatSuccessV10Response
     * @throws YopClientException
     */
    public function complaint_wechat_success_v1_0(Model\ComplaintWechatSuccessV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ComplaintWechatSuccessV10RequestMarshaller::getInstance(),
            Model\ComplaintWechatSuccessV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param ModelOld\CreditScoreAuthorizationRequest $request
     * @return ModelOld\CreditScoreAuthorizationResponse
     * @throws YopClientException
     */
    public function creditScoreAuthorizationOld(ModelOld\CreditScoreAuthorizationRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, ModelOld\CreditScoreAuthorizationRequestMarshaller::getInstance(),
            ModelOld\CreditScoreAuthorizationResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param ModelOld\CreditScoreAuthorizationQueryRequest $request
     * @return ModelOld\CreditScoreAuthorizationQueryResponse
     * @throws YopClientException
     */
    public function creditScoreAuthorizationQueryOld(ModelOld\CreditScoreAuthorizationQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, ModelOld\CreditScoreAuthorizationQueryRequestMarshaller::getInstance(),
            ModelOld\CreditScoreAuthorizationQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param ModelOld\CreditScoreCancelRequest $request
     * @return ModelOld\CreditScoreCancelResponse
     * @throws YopClientException
     */
    public function creditScoreCancelOld(ModelOld\CreditScoreCancelRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, ModelOld\CreditScoreCancelRequestMarshaller::getInstance(),
            ModelOld\CreditScoreCancelResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param ModelOld\CreditScoreCreateRequest $request
     * @return ModelOld\CreditScoreCreateResponse
     * @throws YopClientException
     */
    public function creditScoreCreateOld(ModelOld\CreditScoreCreateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, ModelOld\CreditScoreCreateRequestMarshaller::getInstance(),
            ModelOld\CreditScoreCreateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param ModelOld\CreditScoreModifyRequest $request
     * @return ModelOld\CreditScoreModifyResponse
     * @throws YopClientException
     */
    public function creditScoreModifyOld(ModelOld\CreditScoreModifyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, ModelOld\CreditScoreModifyRequestMarshaller::getInstance(),
            ModelOld\CreditScoreModifyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param ModelOld\CreditScorePayRequest $request
     * @return ModelOld\CreditScorePayResponse
     * @throws YopClientException
     */
    public function creditScorePayOld(ModelOld\CreditScorePayRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, ModelOld\CreditScorePayRequestMarshaller::getInstance(),
            ModelOld\CreditScorePayResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param ModelOld\CreditScoreQueryRequest $request
     * @return ModelOld\CreditScoreQueryResponse
     * @throws YopClientException
     */
    public function creditScoreQueryOld(ModelOld\CreditScoreQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, ModelOld\CreditScoreQueryRequestMarshaller::getInstance(),
            ModelOld\CreditScoreQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param ModelOld\CreditScoreSyncRequest $request
     * @return ModelOld\CreditScoreSyncResponse
     * @throws YopClientException
     */
    public function creditScoreSyncOld(ModelOld\CreditScoreSyncRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, ModelOld\CreditScoreSyncRequestMarshaller::getInstance(),
            ModelOld\CreditScoreSyncResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param ModelOld\CreditScoreUnAuthorizationRequest $request
     * @return ModelOld\CreditScoreUnAuthorizationResponse
     * @throws YopClientException
     */
    public function creditScoreUnAuthorizationOld(ModelOld\CreditScoreUnAuthorizationRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, ModelOld\CreditScoreUnAuthorizationRequestMarshaller::getInstance(),
            ModelOld\CreditScoreUnAuthorizationResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param ModelOld\CreditScorecompleteRequest $request
     * @return ModelOld\CreditScorecompleteResponse
     * @throws YopClientException
     */
    public function creditScorecompleteOld(ModelOld\CreditScorecompleteRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, ModelOld\CreditScorecompleteRequestMarshaller::getInstance(),
            ModelOld\CreditScorecompleteResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreditscoreAuthorizationRequest $request
     * @return Model\CreditscoreAuthorizationResponse
     * @throws YopClientException
     */
    public function creditscoreAuthorization(Model\CreditscoreAuthorizationRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreditscoreAuthorizationRequestMarshaller::getInstance(),
            Model\CreditscoreAuthorizationResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreditscoreAuthorizationqueryRequest $request
     * @return Model\CreditscoreAuthorizationqueryResponse
     * @throws YopClientException
     */
    public function creditscoreAuthorizationquery(Model\CreditscoreAuthorizationqueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreditscoreAuthorizationqueryRequestMarshaller::getInstance(),
            Model\CreditscoreAuthorizationqueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreditscoreCancelRequest $request
     * @return Model\CreditscoreCancelResponse
     * @throws YopClientException
     */
    public function creditscoreCancel(Model\CreditscoreCancelRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreditscoreCancelRequestMarshaller::getInstance(),
            Model\CreditscoreCancelResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreditscoreCompleteRequest $request
     * @return Model\CreditscoreCompleteResponse
     * @throws YopClientException
     */
    public function creditscoreComplete(Model\CreditscoreCompleteRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreditscoreCompleteRequestMarshaller::getInstance(),
            Model\CreditscoreCompleteResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreditscoreCreateRequest $request
     * @return Model\CreditscoreCreateResponse
     * @throws YopClientException
     */
    public function creditscoreCreate(Model\CreditscoreCreateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreditscoreCreateRequestMarshaller::getInstance(),
            Model\CreditscoreCreateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreditscoreModifyRequest $request
     * @return Model\CreditscoreModifyResponse
     * @throws YopClientException
     */
    public function creditscoreModify(Model\CreditscoreModifyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreditscoreModifyRequestMarshaller::getInstance(),
            Model\CreditscoreModifyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreditscorePayRequest $request
     * @return Model\CreditscorePayResponse
     * @throws YopClientException
     */
    public function creditscorePay(Model\CreditscorePayRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreditscorePayRequestMarshaller::getInstance(),
            Model\CreditscorePayResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreditscoreQueryRequest $request
     * @return Model\CreditscoreQueryResponse
     * @throws YopClientException
     */
    public function creditscoreQuery(Model\CreditscoreQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreditscoreQueryRequestMarshaller::getInstance(),
            Model\CreditscoreQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreditscoreSyncRequest $request
     * @return Model\CreditscoreSyncResponse
     * @throws YopClientException
     */
    public function creditscoreSync(Model\CreditscoreSyncRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreditscoreSyncRequestMarshaller::getInstance(),
            Model\CreditscoreSyncResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreditscoreUnauthorizationRequest $request
     * @return Model\CreditscoreUnauthorizationResponse
     * @throws YopClientException
     */
    public function creditscoreUnauthorization(Model\CreditscoreUnauthorizationRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreditscoreUnauthorizationRequestMarshaller::getInstance(),
            Model\CreditscoreUnauthorizationResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EntryReapplyRequest $request
     * @return Model\EntryReapplyResponse
     * @throws YopClientException
     */
    public function entryReapply(Model\EntryReapplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EntryReapplyRequestMarshaller::getInstance(),
            Model\EntryReapplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EntryReapplyRequest $request
     * @return Model\EntryReapplyResponse
     * @throws YopClientException
     */
    public function entry_reapply(Model\EntryReapplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EntryReapplyRequestMarshaller::getInstance(),
            Model\EntryReapplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\GetAuthInfoRequest $request
     * @return Model\GetAuthInfoResponse
     * @throws YopClientException
     */
    public function getAuthInfo(Model\GetAuthInfoRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\GetAuthInfoRequestMarshaller::getInstance(),
            Model\GetAuthInfoResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\GetUserIdRequest $request
     * @return Model\GetUserIdResponse
     * @throws YopClientException
     */
    public function getUserId(Model\GetUserIdRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\GetUserIdRequestMarshaller::getInstance(),
            Model\GetUserIdResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\GetAuthInfoV10Request $request
     * @return Model\GetAuthInfoV10Response
     * @throws YopClientException
     */
    public function get_auth_info_v1_0(Model\GetAuthInfoV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\GetAuthInfoV10RequestMarshaller::getInstance(),
            Model\GetAuthInfoV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\HbfqAwardReceiveRequest $request
     * @return Model\HbfqAwardReceiveResponse
     * @throws YopClientException
     */
    public function hbfqAwardReceive(Model\HbfqAwardReceiveRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\HbfqAwardReceiveRequestMarshaller::getInstance(),
            Model\HbfqAwardReceiveResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\HbfqMarketingConsultRequest $request
     * @return Model\HbfqMarketingConsultResponse
     * @throws YopClientException
     */
    public function hbfqMarketingConsult(Model\HbfqMarketingConsultRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\HbfqMarketingConsultRequestMarshaller::getInstance(),
            Model\HbfqMarketingConsultResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MiniprogramDetailsRequest $request
     * @return Model\MiniprogramDetailsResponse
     * @throws YopClientException
     */
    public function miniprogramDetails(Model\MiniprogramDetailsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MiniprogramDetailsRequestMarshaller::getInstance(),
            Model\MiniprogramDetailsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MiniprogramFeedbackRequest $request
     * @return Model\MiniprogramFeedbackResponse
     * @throws YopClientException
     */
    public function miniprogramFeedback(Model\MiniprogramFeedbackRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MiniprogramFeedbackRequestMarshaller::getInstance(),
            Model\MiniprogramFeedbackResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MiniprogramNegotiationHistoryRequest $request
     * @return Model\MiniprogramNegotiationHistoryResponse
     * @throws YopClientException
     */
    public function miniprogramNegotiationHistory(Model\MiniprogramNegotiationHistoryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MiniprogramNegotiationHistoryRequestMarshaller::getInstance(),
            Model\MiniprogramNegotiationHistoryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OrderQueryV2Request $request
     * @return Model\OrderQueryV2Response
     * @throws YopClientException
     */
    public function orderQueryV2(Model\OrderQueryV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OrderQueryV2RequestMarshaller::getInstance(),
            Model\OrderQueryV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayRequest $request
     * @return Model\PayResponse
     * @throws YopClientException
     */
    public function pay(Model\PayRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayRequestMarshaller::getInstance(),
            Model\PayResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayLinkRequest $request
     * @return Model\PayLinkResponse
     * @throws YopClientException
     */
    public function payLink(Model\PayLinkRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayLinkRequestMarshaller::getInstance(),
            Model\PayLinkResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayLinkV10Request $request
     * @return Model\PayLinkV10Response
     * @throws YopClientException
     */
    public function pay_link_v1_0(Model\PayLinkV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayLinkV10RequestMarshaller::getInstance(),
            Model\PayLinkV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PayV10Request $request
     * @return Model\PayV10Response
     * @throws YopClientException
     */
    public function pay_v1_0(Model\PayV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PayV10RequestMarshaller::getInstance(),
            Model\PayV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PrePayRequest $request
     * @return Model\PrePayResponse
     * @throws YopClientException
     */
    public function prePay(Model\PrePayRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PrePayRequestMarshaller::getInstance(),
            Model\PrePayResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PrePayV10Request $request
     * @return Model\PrePayV10Response
     * @throws YopClientException
     */
    public function pre_pay_v1_0(Model\PrePayV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PrePayV10RequestMarshaller::getInstance(),
            Model\PrePayV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryAccountInfoRequest $request
     * @return Model\QueryAccountInfoResponse
     * @throws YopClientException
     */
    public function queryAccountInfo(Model\QueryAccountInfoRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryAccountInfoRequestMarshaller::getInstance(),
            Model\QueryAccountInfoResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryAccountUpdateResultRequest $request
     * @return Model\QueryAccountUpdateResultResponse
     * @throws YopClientException
     */
    public function queryAccountUpdateResult(Model\QueryAccountUpdateResultRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryAccountUpdateResultRequestMarshaller::getInstance(),
            Model\QueryAccountUpdateResultResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryApplyChannelNoRequest $request
     * @return Model\QueryApplyChannelNoResponse
     * @throws YopClientException
     */
    public function queryApplyChannelNo(Model\QueryApplyChannelNoRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryApplyChannelNoRequestMarshaller::getInstance(),
            Model\QueryApplyChannelNoResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryComplaintNegotiationHistoryRequest $request
     * @return Model\QueryComplaintNegotiationHistoryResponse
     * @throws YopClientException
     */
    public function queryComplaintNegotiationHistory(Model\QueryComplaintNegotiationHistoryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryComplaintNegotiationHistoryRequestMarshaller::getInstance(),
            Model\QueryComplaintNegotiationHistoryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryMiniProgramDetailRequest $request
     * @return Model\QueryMiniProgramDetailResponse
     * @throws YopClientException
     */
    public function queryMiniProgramDetail(Model\QueryMiniProgramDetailRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryMiniProgramDetailRequestMarshaller::getInstance(),
            Model\QueryMiniProgramDetailResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryUseridRequest $request
     * @return Model\QueryUseridResponse
     * @throws YopClientException
     */
    public function queryUserid(Model\QueryUseridRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryUseridRequestMarshaller::getInstance(),
            Model\QueryUseridResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryOrderV20Request $request
     * @return Model\QueryOrderV20Response
     * @throws YopClientException
     */
    public function query_order_v2_0(Model\QueryOrderV20Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryOrderV20RequestMarshaller::getInstance(),
            Model\QueryOrderV20ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryUseridV10Request $request
     * @return Model\QueryUseridV10Response
     * @throws YopClientException
     */
    public function query_userid_v1_0(Model\QueryUseridV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryUseridV10RequestMarshaller::getInstance(),
            Model\QueryUseridV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ReportAttachRequest $request
     * @return Model\ReportAttachResponse
     * @throws YopClientException
     */
    public function reportAttach(Model\ReportAttachRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ReportAttachRequestMarshaller::getInstance(),
            Model\ReportAttachResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ReportBackUpRequest $request
     * @return Model\ReportBackUpResponse
     * @throws YopClientException
     */
    public function reportBackUp(Model\ReportBackUpRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ReportBackUpRequestMarshaller::getInstance(),
            Model\ReportBackUpResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ReportQueryRequest $request
     * @return Model\ReportQueryResponse
     * @throws YopClientException
     */
    public function reportQuery(Model\ReportQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ReportQueryRequestMarshaller::getInstance(),
            Model\ReportQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ReportQueryAllRequest $request
     * @return Model\ReportQueryAllResponse
     * @throws YopClientException
     */
    public function reportQueryAll(Model\ReportQueryAllRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ReportQueryAllRequestMarshaller::getInstance(),
            Model\ReportQueryAllResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ReportUpdateRequest $request
     * @return Model\ReportUpdateResponse
     * @throws YopClientException
     */
    public function reportUpdate(Model\ReportUpdateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ReportUpdateRequestMarshaller::getInstance(),
            Model\ReportUpdateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RetailBatchCreateRequest $request
     * @return Model\RetailBatchCreateResponse
     * @throws YopClientException
     */
    public function retailBatchCreate(Model\RetailBatchCreateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RetailBatchCreateRequestMarshaller::getInstance(),
            Model\RetailBatchCreateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RetailGetInfoRequest $request
     * @return Model\RetailGetInfoResponse
     * @throws YopClientException
     */
    public function retailGetInfo(Model\RetailGetInfoRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RetailGetInfoRequestMarshaller::getInstance(),
            Model\RetailGetInfoResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ShareTokenGenerateRequest $request
     * @return Model\ShareTokenGenerateResponse
     * @throws YopClientException
     */
    public function shareTokenGenerate(Model\ShareTokenGenerateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ShareTokenGenerateRequestMarshaller::getInstance(),
            Model\ShareTokenGenerateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ShareTokenMarketQueryRequest $request
     * @return Model\ShareTokenMarketQueryResponse
     * @throws YopClientException
     */
    public function shareTokenMarketQuery(Model\ShareTokenMarketQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ShareTokenMarketQueryRequestMarshaller::getInstance(),
            Model\ShareTokenMarketQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ShareTokenGenerateV10Request $request
     * @return Model\ShareTokenGenerateV10Response
     * @throws YopClientException
     */
    public function share_token_generate_v1_0(Model\ShareTokenGenerateV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ShareTokenGenerateV10RequestMarshaller::getInstance(),
            Model\ShareTokenGenerateV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ShareTokenMarketQueryV10Request $request
     * @return Model\ShareTokenMarketQueryV10Response
     * @throws YopClientException
     */
    public function share_token_market_query_v1_0(Model\ShareTokenMarketQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ShareTokenMarketQueryV10RequestMarshaller::getInstance(),
            Model\ShareTokenMarketQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SignRequest $request
     * @return Model\SignResponse
     * @throws YopClientException
     */
    public function sign(Model\SignRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SignRequestMarshaller::getInstance(),
            Model\SignResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SignQueryRequest $request
     * @return Model\SignQueryResponse
     * @throws YopClientException
     */
    public function signQuery(Model\SignQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SignQueryRequestMarshaller::getInstance(),
            Model\SignQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SignQueryV10Request $request
     * @return Model\SignQueryV10Response
     * @throws YopClientException
     */
    public function sign_query_v1_0(Model\SignQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SignQueryV10RequestMarshaller::getInstance(),
            Model\SignQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SignV10Request $request
     * @return Model\SignV10Response
     * @throws YopClientException
     */
    public function sign_v1_0(Model\SignV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SignV10RequestMarshaller::getInstance(),
            Model\SignV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TutelagePrePayRequest $request
     * @return Model\TutelagePrePayResponse
     * @throws YopClientException
     */
    public function tutelagePrePay(Model\TutelagePrePayRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TutelagePrePayRequestMarshaller::getInstance(),
            Model\TutelagePrePayResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TutelagePrePayV10Request $request
     * @return Model\TutelagePrePayV10Response
     * @throws YopClientException
     */
    public function tutelage_pre_pay_v1_0(Model\TutelagePrePayV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TutelagePrePayV10RequestMarshaller::getInstance(),
            Model\TutelagePrePayV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnifiedOrderV2Request $request
     * @return Model\UnifiedOrderV2Response
     * @throws YopClientException
     */
    public function unifiedOrderV2(Model\UnifiedOrderV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnifiedOrderV2RequestMarshaller::getInstance(),
            Model\UnifiedOrderV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnifiedOrderV20Request $request
     * @return Model\UnifiedOrderV20Response
     * @throws YopClientException
     */
    public function unified_order_v2_0(Model\UnifiedOrderV20Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnifiedOrderV20RequestMarshaller::getInstance(),
            Model\UnifiedOrderV20ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnsignRequest $request
     * @return Model\UnsignResponse
     * @throws YopClientException
     */
    public function unsign(Model\UnsignRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnsignRequestMarshaller::getInstance(),
            Model\UnsignResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnsignV10Request $request
     * @return Model\UnsignV10Response
     * @throws YopClientException
     */
    public function unsign_v1_0(Model\UnsignV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnsignV10RequestMarshaller::getInstance(),
            Model\UnsignV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UpdateAccountInfoRequest $request
     * @return Model\UpdateAccountInfoResponse
     * @throws YopClientException
     */
    public function updateAccountInfo(Model\UpdateAccountInfoRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UpdateAccountInfoRequestMarshaller::getInstance(),
            Model\UpdateAccountInfoResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UpdateRefundProgressRequest $request
     * @return Model\UpdateRefundProgressResponse
     * @throws YopClientException
     */
    public function updateRefundProgress(Model\UpdateRefundProgressRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UpdateRefundProgressRequestMarshaller::getInstance(),
            Model\UpdateRefundProgressResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UploadElectronicReceiptRequest $request
     * @return Model\UploadElectronicReceiptResponse
     * @throws YopClientException
     */
    public function uploadElectronicReceipt(Model\UploadElectronicReceiptRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UploadElectronicReceiptRequestMarshaller::getInstance(),
            Model\UploadElectronicReceiptResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UploadElectronicReceiptV10Request $request
     * @return Model\UploadElectronicReceiptV10Response
     * @throws YopClientException
     */
    public function upload_electronic_receipt_v1_0(Model\UploadElectronicReceiptV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UploadElectronicReceiptV10RequestMarshaller::getInstance(),
            Model\UploadElectronicReceiptV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ViolationWechatChannelRequest $request
     * @return Model\ViolationWechatChannelResponse
     * @throws YopClientException
     */
    public function violationWechatChannel(Model\ViolationWechatChannelRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ViolationWechatChannelRequestMarshaller::getInstance(),
            Model\ViolationWechatChannelResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ViolationWechatChannelV10Request $request
     * @return Model\ViolationWechatChannelV10Response
     * @throws YopClientException
     */
    public function violation_wechat_channel_v1_0(Model\ViolationWechatChannelV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ViolationWechatChannelV10RequestMarshaller::getInstance(),
            Model\ViolationWechatChannelV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WechatComplaintFeedbackRequest $request
     * @return Model\WechatComplaintFeedbackResponse
     * @throws YopClientException
     */
    public function wechatComplaintFeedback(Model\WechatComplaintFeedbackRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WechatComplaintFeedbackRequestMarshaller::getInstance(),
            Model\WechatComplaintFeedbackResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WechatConfigAddRequest $request
     * @return Model\WechatConfigAddResponse
     * @throws YopClientException
     */
    public function wechatConfigAdd(Model\WechatConfigAddRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WechatConfigAddRequestMarshaller::getInstance(),
            Model\WechatConfigAddResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WechatConfigAddSyncRequest $request
     * @return Model\WechatConfigAddSyncResponse
     * @throws YopClientException
     */
    public function wechatConfigAddSync(Model\WechatConfigAddSyncRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WechatConfigAddSyncRequestMarshaller::getInstance(),
            Model\WechatConfigAddSyncResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WechatConfigAddV2Request $request
     * @return Model\WechatConfigAddV2Response
     * @throws YopClientException
     */
    public function wechatConfigAddV2(Model\WechatConfigAddV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WechatConfigAddV2RequestMarshaller::getInstance(),
            Model\WechatConfigAddV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WechatConfigQueryRequest $request
     * @return Model\WechatConfigQueryResponse
     * @throws YopClientException
     */
    public function wechatConfigQuery(Model\WechatConfigQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WechatConfigQueryRequestMarshaller::getInstance(),
            Model\WechatConfigQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WechatConfigQueryV2Request $request
     * @return Model\WechatConfigQueryV2Response
     * @throws YopClientException
     */
    public function wechatConfigQueryV2(Model\WechatConfigQueryV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WechatConfigQueryV2RequestMarshaller::getInstance(),
            Model\WechatConfigQueryV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WechatDisposalQueryRequest $request
     * @return Model\WechatDisposalQueryResponse
     * @throws YopClientException
     */
    public function wechatDisposalQuery(Model\WechatDisposalQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WechatDisposalQueryRequestMarshaller::getInstance(),
            Model\WechatDisposalQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WechatConfigAddSyncV10Request $request
     * @return Model\WechatConfigAddSyncV10Response
     * @throws YopClientException
     */
    public function wechat_config_add_sync_v1_0(Model\WechatConfigAddSyncV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WechatConfigAddSyncV10RequestMarshaller::getInstance(),
            Model\WechatConfigAddSyncV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WechatConfigAddV10Request $request
     * @return Model\WechatConfigAddV10Response
     * @throws YopClientException
     */
    public function wechat_config_add_v1_0(Model\WechatConfigAddV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WechatConfigAddV10RequestMarshaller::getInstance(),
            Model\WechatConfigAddV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WechatConfigAddV20Request $request
     * @return Model\WechatConfigAddV20Response
     * @throws YopClientException
     */
    public function wechat_config_add_v2_0(Model\WechatConfigAddV20Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WechatConfigAddV20RequestMarshaller::getInstance(),
            Model\WechatConfigAddV20ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WechatConfigQueryV10Request $request
     * @return Model\WechatConfigQueryV10Response
     * @throws YopClientException
     */
    public function wechat_config_query_v1_0(Model\WechatConfigQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WechatConfigQueryV10RequestMarshaller::getInstance(),
            Model\WechatConfigQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WechatConfigQueryV20Request $request
     * @return Model\WechatConfigQueryV20Response
     * @throws YopClientException
     */
    public function wechat_config_query_v2_0(Model\WechatConfigQueryV20Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WechatConfigQueryV20RequestMarshaller::getInstance(),
            Model\WechatConfigQueryV20ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WecomPayLinkRequest $request
     * @return Model\WecomPayLinkResponse
     * @throws YopClientException
     */
    public function wecomPayLink(Model\WecomPayLinkRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WecomPayLinkRequestMarshaller::getInstance(),
            Model\WecomPayLinkResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WecomPayLinkRequest $request
     * @return Model\WecomPayLinkResponse
     * @throws YopClientException
     */
    public function wecom_pay_link(Model\WecomPayLinkRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WecomPayLinkRequestMarshaller::getInstance(),
            Model\WecomPayLinkResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
