<?php


namespace Yeepay\Yop\Sdk\Service\Promtion;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Promtion\Model as Model;

class PromtionClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * PromtionClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\ActivityListQueryRequest $request
     * @return Model\ActivityListQueryResponse
     * @throws YopClientException
     */
    public function activityListQuery(Model\ActivityListQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ActivityListQueryRequestMarshaller::getInstance(),
            Model\ActivityListQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AddRightsRequest $request
     * @return Model\AddRightsResponse
     * @throws YopClientException
     */
    public function addRights(Model\AddRightsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AddRightsRequestMarshaller::getInstance(),
            Model\AddRightsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AddRightsRequest $request
     * @return Model\AddRightsResponse
     * @throws YopClientException
     */
    public function add_rights(Model\AddRightsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AddRightsRequestMarshaller::getInstance(),
            Model\AddRightsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankActivityQueryRequest $request
     * @return Model\BankActivityQueryResponse
     * @throws YopClientException
     */
    public function bankActivityQuery(Model\BankActivityQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankActivityQueryRequestMarshaller::getInstance(),
            Model\BankActivityQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankActivitySignupRequest $request
     * @return Model\BankActivitySignupResponse
     * @throws YopClientException
     */
    public function bankActivitySignup(Model\BankActivitySignupRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankActivitySignupRequestMarshaller::getInstance(),
            Model\BankActivitySignupResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankCancelApplicationRequest $request
     * @return Model\BankCancelApplicationResponse
     * @throws YopClientException
     */
    public function bankCancelApplication(Model\BankCancelApplicationRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankCancelApplicationRequestMarshaller::getInstance(),
            Model\BankCancelApplicationResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CouponApplyRequest $request
     * @return Model\CouponApplyResponse
     * @throws YopClientException
     */
    public function couponApply(Model\CouponApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CouponApplyRequestMarshaller::getInstance(),
            Model\CouponApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CouponListQueryRequest $request
     * @return Model\CouponListQueryResponse
     * @throws YopClientException
     */
    public function couponListQuery(Model\CouponListQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CouponListQueryRequestMarshaller::getInstance(),
            Model\CouponListQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreateRightsQrcodeAdapterRequest $request
     * @return Model\CreateRightsQrcodeAdapterResponse
     * @throws YopClientException
     */
    public function create_rights_qrcode_adapter(Model\CreateRightsQrcodeAdapterRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreateRightsQrcodeAdapterRequestMarshaller::getInstance(),
            Model\CreateRightsQrcodeAdapterResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FrozenRightsRequest $request
     * @return Model\FrozenRightsResponse
     * @throws YopClientException
     */
    public function frozen_rights(Model\FrozenRightsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FrozenRightsRequestMarshaller::getInstance(),
            Model\FrozenRightsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PointCreateRequest $request
     * @return Model\PointCreateResponse
     * @throws YopClientException
     */
    public function pointCreate(Model\PointCreateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PointCreateRequestMarshaller::getInstance(),
            Model\PointCreateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PointOperateRequest $request
     * @return Model\PointOperateResponse
     * @throws YopClientException
     */
    public function pointOperate(Model\PointOperateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PointOperateRequestMarshaller::getInstance(),
            Model\PointOperateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PointQueryRequest $request
     * @return Model\PointQueryResponse
     * @throws YopClientException
     */
    public function pointQuery(Model\PointQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PointQueryRequestMarshaller::getInstance(),
            Model\PointQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PromtionBankActivityQueryV10Request $request
     * @return Model\PromtionBankActivityQueryV10Response
     * @throws YopClientException
     */
    public function promtion_bank_activity_query_v1_0(Model\PromtionBankActivityQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PromtionBankActivityQueryV10RequestMarshaller::getInstance(),
            Model\PromtionBankActivityQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PromtionBankActivitySignupRequest $request
     * @return Model\PromtionBankActivitySignupResponse
     * @throws YopClientException
     */
    public function promtion_bank_activity_signup(Model\PromtionBankActivitySignupRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PromtionBankActivitySignupRequestMarshaller::getInstance(),
            Model\PromtionBankActivitySignupResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PromtionBankCancelApplicationV1Request $request
     * @return Model\PromtionBankCancelApplicationV1Response
     * @throws YopClientException
     */
    public function promtion_bank_cancel_application_V1(Model\PromtionBankCancelApplicationV1Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PromtionBankCancelApplicationV1RequestMarshaller::getInstance(),
            Model\PromtionBankCancelApplicationV1ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PromtionBankSignupQueryV10Request $request
     * @return Model\PromtionBankSignupQueryV10Response
     * @throws YopClientException
     */
    public function promtion_bank_signup_query_v1_0(Model\PromtionBankSignupQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PromtionBankSignupQueryV10RequestMarshaller::getInstance(),
            Model\PromtionBankSignupQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PromtionSubsidyGrantQueryV10Request $request
     * @return Model\PromtionSubsidyGrantQueryV10Response
     * @throws YopClientException
     */
    public function promtion_subsidy_grant_query_v1_0(Model\PromtionSubsidyGrantQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PromtionSubsidyGrantQueryV10RequestMarshaller::getInstance(),
            Model\PromtionSubsidyGrantQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PromtionSubsidyLimitQueryV10Request $request
     * @return Model\PromtionSubsidyLimitQueryV10Response
     * @throws YopClientException
     */
    public function promtion_subsidy_limit_query_v1_0(Model\PromtionSubsidyLimitQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PromtionSubsidyLimitQueryV10RequestMarshaller::getInstance(),
            Model\PromtionSubsidyLimitQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PromtionSubsidyRefundQueryV10Request $request
     * @return Model\PromtionSubsidyRefundQueryV10Response
     * @throws YopClientException
     */
    public function promtion_subsidy_refund_query_v1_0(Model\PromtionSubsidyRefundQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PromtionSubsidyRefundQueryV10RequestMarshaller::getInstance(),
            Model\PromtionSubsidyRefundQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PromtionSubsidyVerifyQueryV10Request $request
     * @return Model\PromtionSubsidyVerifyQueryV10Response
     * @throws YopClientException
     */
    public function promtion_subsidy_verify_query_v1_0(Model\PromtionSubsidyVerifyQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PromtionSubsidyVerifyQueryV10RequestMarshaller::getInstance(),
            Model\PromtionSubsidyVerifyQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryConsumeRecordAdapterRequest $request
     * @return Model\QueryConsumeRecordAdapterResponse
     * @throws YopClientException
     */
    public function query_consume_record_adapter(Model\QueryConsumeRecordAdapterRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryConsumeRecordAdapterRequestMarshaller::getInstance(),
            Model\QueryConsumeRecordAdapterResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryRightsRequest $request
     * @return Model\QueryRightsResponse
     * @throws YopClientException
     */
    public function query_rights(Model\QueryRightsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryRightsRequestMarshaller::getInstance(),
            Model\QueryRightsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RightsCreateQrcodeRequest $request
     * @return Model\RightsCreateQrcodeResponse
     * @throws YopClientException
     */
    public function rightsCreateQrcode(Model\RightsCreateQrcodeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RightsCreateQrcodeRequestMarshaller::getInstance(),
            Model\RightsCreateQrcodeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RightsFrozenRightsRequest $request
     * @return Model\RightsFrozenRightsResponse
     * @throws YopClientException
     */
    public function rightsFrozenRights(Model\RightsFrozenRightsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RightsFrozenRightsRequestMarshaller::getInstance(),
            Model\RightsFrozenRightsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RightsQueryConsumeRecordsRequest $request
     * @return Model\RightsQueryConsumeRecordsResponse
     * @throws YopClientException
     */
    public function rightsQueryConsumeRecords(Model\RightsQueryConsumeRecordsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RightsQueryConsumeRecordsRequestMarshaller::getInstance(),
            Model\RightsQueryConsumeRecordsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RightsQueryRightsRequest $request
     * @return Model\RightsQueryRightsResponse
     * @throws YopClientException
     */
    public function rightsQueryRights(Model\RightsQueryRightsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RightsQueryRightsRequestMarshaller::getInstance(),
            Model\RightsQueryRightsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RightsTransferRequest $request
     * @return Model\RightsTransferResponse
     * @throws YopClientException
     */
    public function rightsTransfer(Model\RightsTransferRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RightsTransferRequestMarshaller::getInstance(),
            Model\RightsTransferResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RightsTransferRequest $request
     * @return Model\RightsTransferResponse
     * @throws YopClientException
     */
    public function rights_transfer(Model\RightsTransferRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RightsTransferRequestMarshaller::getInstance(),
            Model\RightsTransferResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SignupQueryRequest $request
     * @return Model\SignupQueryResponse
     * @throws YopClientException
     */
    public function signupQuery(Model\SignupQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SignupQueryRequestMarshaller::getInstance(),
            Model\SignupQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SubsidyApplyRequest $request
     * @return Model\SubsidyApplyResponse
     * @throws YopClientException
     */
    public function subsidyApply(Model\SubsidyApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SubsidyApplyRequestMarshaller::getInstance(),
            Model\SubsidyApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SubsidyBackRequest $request
     * @return Model\SubsidyBackResponse
     * @throws YopClientException
     */
    public function subsidyBack(Model\SubsidyBackRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SubsidyBackRequestMarshaller::getInstance(),
            Model\SubsidyBackResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SubsidyBackQueryRequest $request
     * @return Model\SubsidyBackQueryResponse
     * @throws YopClientException
     */
    public function subsidyBackQuery(Model\SubsidyBackQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SubsidyBackQueryRequestMarshaller::getInstance(),
            Model\SubsidyBackQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SubsidyGrantQueryRequest $request
     * @return Model\SubsidyGrantQueryResponse
     * @throws YopClientException
     */
    public function subsidyGrantQuery(Model\SubsidyGrantQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SubsidyGrantQueryRequestMarshaller::getInstance(),
            Model\SubsidyGrantQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SubsidyLimitQueryRequest $request
     * @return Model\SubsidyLimitQueryResponse
     * @throws YopClientException
     */
    public function subsidyLimitQuery(Model\SubsidyLimitQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SubsidyLimitQueryRequestMarshaller::getInstance(),
            Model\SubsidyLimitQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SubsidyQueryRequest $request
     * @return Model\SubsidyQueryResponse
     * @throws YopClientException
     */
    public function subsidyQuery(Model\SubsidyQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SubsidyQueryRequestMarshaller::getInstance(),
            Model\SubsidyQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SubsidyRefundQueryRequest $request
     * @return Model\SubsidyRefundQueryResponse
     * @throws YopClientException
     */
    public function subsidyRefundQuery(Model\SubsidyRefundQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SubsidyRefundQueryRequestMarshaller::getInstance(),
            Model\SubsidyRefundQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SubsidyVerifyQueryRequest $request
     * @return Model\SubsidyVerifyQueryResponse
     * @throws YopClientException
     */
    public function subsidyVerifyQuery(Model\SubsidyVerifyQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SubsidyVerifyQueryRequestMarshaller::getInstance(),
            Model\SubsidyVerifyQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
