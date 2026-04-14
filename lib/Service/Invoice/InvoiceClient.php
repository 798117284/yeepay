<?php


namespace Yeepay\Yop\Sdk\Service\Invoice;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Invoice\Model as Model;

class InvoiceClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * InvoiceClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\ActiveSmsCodeCheckRequest $request
     * @return Model\ActiveSmsCodeCheckResponse
     * @throws YopClientException
     */
    public function active_sms_code_check(Model\ActiveSmsCodeCheckRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ActiveSmsCodeCheckRequestMarshaller::getInstance(),
            Model\ActiveSmsCodeCheckResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ApplyRequest $request
     * @return Model\ApplyResponse
     * @throws YopClientException
     */
    public function apply(Model\ApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ApplyRequestMarshaller::getInstance(),
            Model\ApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ApplyV10Request $request
     * @return Model\ApplyV10Response
     * @throws YopClientException
     */
    public function apply_v1_0(Model\ApplyV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ApplyV10RequestMarshaller::getInstance(),
            Model\ApplyV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AutoGoodsCodeQueryRequest $request
     * @return Model\AutoGoodsCodeQueryResponse
     * @throws YopClientException
     */
    public function auto_goods_code_query(Model\AutoGoodsCodeQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AutoGoodsCodeQueryRequestMarshaller::getInstance(),
            Model\AutoGoodsCodeQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AutoTitleQueryRequest $request
     * @return Model\AutoTitleQueryResponse
     * @throws YopClientException
     */
    public function auto_title_query(Model\AutoTitleQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AutoTitleQueryRequestMarshaller::getInstance(),
            Model\AutoTitleQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CancelOrderQrCodeRequest $request
     * @return Model\CancelOrderQrCodeResponse
     * @throws YopClientException
     */
    public function cancel_order_qr_code(Model\CancelOrderQrCodeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CancelOrderQrCodeRequestMarshaller::getInstance(),
            Model\CancelOrderQrCodeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CertifyResultGetRequest $request
     * @return Model\CertifyResultGetResponse
     * @throws YopClientException
     */
    public function certify_result_get(Model\CertifyResultGetRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CertifyResultGetRequestMarshaller::getInstance(),
            Model\CertifyResultGetResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DeleteInvoiceRequest $request
     * @return Model\DeleteInvoiceResponse
     * @throws YopClientException
     */
    public function delete_invoice(Model\DeleteInvoiceRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DeleteInvoiceRequestMarshaller::getInstance(),
            Model\DeleteInvoiceResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DigitAccountAddEditRequest $request
     * @return Model\DigitAccountAddEditResponse
     * @throws YopClientException
     */
    public function digitAccountAddEdit(Model\DigitAccountAddEditRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DigitAccountAddEditRequestMarshaller::getInstance(),
            Model\DigitAccountAddEditResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DigitActiveSmsCodeCheckRequest $request
     * @return Model\DigitActiveSmsCodeCheckResponse
     * @throws YopClientException
     */
    public function digitActiveSmsCodeCheck(Model\DigitActiveSmsCodeCheckRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DigitActiveSmsCodeCheckRequestMarshaller::getInstance(),
            Model\DigitActiveSmsCodeCheckResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DigitAutoGoodsCodeQueryRequest $request
     * @return Model\DigitAutoGoodsCodeQueryResponse
     * @throws YopClientException
     */
    public function digitAutoGoodsCodeQuery(Model\DigitAutoGoodsCodeQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DigitAutoGoodsCodeQueryRequestMarshaller::getInstance(),
            Model\DigitAutoGoodsCodeQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DigitAutoTitleQueryRequest $request
     * @return Model\DigitAutoTitleQueryResponse
     * @throws YopClientException
     */
    public function digitAutoTitleQuery(Model\DigitAutoTitleQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DigitAutoTitleQueryRequestMarshaller::getInstance(),
            Model\DigitAutoTitleQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DigitCancelOrderQrCodeRequest $request
     * @return Model\DigitCancelOrderQrCodeResponse
     * @throws YopClientException
     */
    public function digitCancelOrderQrCode(Model\DigitCancelOrderQrCodeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DigitCancelOrderQrCodeRequestMarshaller::getInstance(),
            Model\DigitCancelOrderQrCodeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DigitCertifyQrcodeGetRequest $request
     * @return Model\DigitCertifyQrcodeGetResponse
     * @throws YopClientException
     */
    public function digitCertifyQrcodeGet(Model\DigitCertifyQrcodeGetRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DigitCertifyQrcodeGetRequestMarshaller::getInstance(),
            Model\DigitCertifyQrcodeGetResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DigitCertifyResultGetRequest $request
     * @return Model\DigitCertifyResultGetResponse
     * @throws YopClientException
     */
    public function digitCertifyResultGet(Model\DigitCertifyResultGetRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DigitCertifyResultGetRequestMarshaller::getInstance(),
            Model\DigitCertifyResultGetResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DigitDeleteInvoiceRequest $request
     * @return Model\DigitDeleteInvoiceResponse
     * @throws YopClientException
     */
    public function digitDeleteInvoice(Model\DigitDeleteInvoiceRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DigitDeleteInvoiceRequestMarshaller::getInstance(),
            Model\DigitDeleteInvoiceResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DigitDigitalAccountQueryRequest $request
     * @return Model\DigitDigitalAccountQueryResponse
     * @throws YopClientException
     */
    public function digitDigitalAccountQuery(Model\DigitDigitalAccountQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DigitDigitalAccountQueryRequestMarshaller::getInstance(),
            Model\DigitDigitalAccountQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DigitEnterpriseQueryRequest $request
     * @return Model\DigitEnterpriseQueryResponse
     * @throws YopClientException
     */
    public function digitEnterpriseQuery(Model\DigitEnterpriseQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DigitEnterpriseQueryRequestMarshaller::getInstance(),
            Model\DigitEnterpriseQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DigitEnterpriseRegisterRequest $request
     * @return Model\DigitEnterpriseRegisterResponse
     * @throws YopClientException
     */
    public function digitEnterpriseRegister(Model\DigitEnterpriseRegisterRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DigitEnterpriseRegisterRequestMarshaller::getInstance(),
            Model\DigitEnterpriseRegisterResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DigitEnterpriseUpdateRequest $request
     * @return Model\DigitEnterpriseUpdateResponse
     * @throws YopClientException
     */
    public function digitEnterpriseUpdate(Model\DigitEnterpriseUpdateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DigitEnterpriseUpdateRequestMarshaller::getInstance(),
            Model\DigitEnterpriseUpdateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DigitFastRedRequest $request
     * @return Model\DigitFastRedResponse
     * @throws YopClientException
     */
    public function digitFastRed(Model\DigitFastRedRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DigitFastRedRequestMarshaller::getInstance(),
            Model\DigitFastRedResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DigitInvoicePageQueryRequest $request
     * @return Model\DigitInvoicePageQueryResponse
     * @throws YopClientException
     */
    public function digitInvoicePageQuery(Model\DigitInvoicePageQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DigitInvoicePageQueryRequestMarshaller::getInstance(),
            Model\DigitInvoicePageQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DigitInvoicepdfResendemailRequest $request
     * @return Model\DigitInvoicepdfResendemailResponse
     * @throws YopClientException
     */
    public function digitInvoicepdfResendemail(Model\DigitInvoicepdfResendemailRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DigitInvoicepdfResendemailRequestMarshaller::getInstance(),
            Model\DigitInvoicepdfResendemailResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DigitIssueInvoiceRequest $request
     * @return Model\DigitIssueInvoiceResponse
     * @throws YopClientException
     */
    public function digitIssueInvoice(Model\DigitIssueInvoiceRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DigitIssueInvoiceRequestMarshaller::getInstance(),
            Model\DigitIssueInvoiceResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DigitLoginResultQueryRequest $request
     * @return Model\DigitLoginResultQueryResponse
     * @throws YopClientException
     */
    public function digitLoginResultQuery(Model\DigitLoginResultQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DigitLoginResultQueryRequestMarshaller::getInstance(),
            Model\DigitLoginResultQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DigitOpenServerRequest $request
     * @return Model\DigitOpenServerResponse
     * @throws YopClientException
     */
    public function digitOpenServer(Model\DigitOpenServerRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DigitOpenServerRequestMarshaller::getInstance(),
            Model\DigitOpenServerResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DigitOrderQrcodeGenRequest $request
     * @return Model\DigitOrderQrcodeGenResponse
     * @throws YopClientException
     */
    public function digitOrderQrcodeGen(Model\DigitOrderQrcodeGenRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DigitOrderQrcodeGenRequestMarshaller::getInstance(),
            Model\DigitOrderQrcodeGenResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DigitOrderQrcodeStatusQueryRequest $request
     * @return Model\DigitOrderQrcodeStatusQueryResponse
     * @throws YopClientException
     */
    public function digitOrderQrcodeStatusQuery(Model\DigitOrderQrcodeStatusQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DigitOrderQrcodeStatusQueryRequestMarshaller::getInstance(),
            Model\DigitOrderQrcodeStatusQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DigitQrcodeCertifyResultGetRequest $request
     * @return Model\DigitQrcodeCertifyResultGetResponse
     * @throws YopClientException
     */
    public function digitQrcodeCertifyResultGet(Model\DigitQrcodeCertifyResultGetRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DigitQrcodeCertifyResultGetRequestMarshaller::getInstance(),
            Model\DigitQrcodeCertifyResultGetResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DigitQueryInvoiceRequest $request
     * @return Model\DigitQueryInvoiceResponse
     * @throws YopClientException
     */
    public function digitQueryInvoice(Model\DigitQueryInvoiceRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DigitQueryInvoiceRequestMarshaller::getInstance(),
            Model\DigitQueryInvoiceResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DigitRetryInvoiceRequest $request
     * @return Model\DigitRetryInvoiceResponse
     * @throws YopClientException
     */
    public function digitRetryInvoice(Model\DigitRetryInvoiceRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DigitRetryInvoiceRequestMarshaller::getInstance(),
            Model\DigitRetryInvoiceResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DigitUnifiedLoginRequest $request
     * @return Model\DigitUnifiedLoginResponse
     * @throws YopClientException
     */
    public function digitUnifiedLogin(Model\DigitUnifiedLoginRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DigitUnifiedLoginRequestMarshaller::getInstance(),
            Model\DigitUnifiedLoginResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DigitUnifiedLoginCheckRequest $request
     * @return Model\DigitUnifiedLoginCheckResponse
     * @throws YopClientException
     */
    public function digitUnifiedLoginCheck(Model\DigitUnifiedLoginCheckRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DigitUnifiedLoginCheckRequestMarshaller::getInstance(),
            Model\DigitUnifiedLoginCheckResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DigitUserLoginRequest $request
     * @return Model\DigitUserLoginResponse
     * @throws YopClientException
     */
    public function digitUserLogin(Model\DigitUserLoginRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DigitUserLoginRequestMarshaller::getInstance(),
            Model\DigitUserLoginResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DigitUserLoginRequest $request
     * @return Model\DigitUserLoginResponse
     * @throws YopClientException
     */
    public function digit_user_login(Model\DigitUserLoginRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DigitUserLoginRequestMarshaller::getInstance(),
            Model\DigitUserLoginResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DigitalAccountAddEditRequest $request
     * @return Model\DigitalAccountAddEditResponse
     * @throws YopClientException
     */
    public function digital_account_add_edit(Model\DigitalAccountAddEditRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DigitalAccountAddEditRequestMarshaller::getInstance(),
            Model\DigitalAccountAddEditResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\DigitalAccountQueryRequest $request
     * @return Model\DigitalAccountQueryResponse
     * @throws YopClientException
     */
    public function digital_account_query(Model\DigitalAccountQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\DigitalAccountQueryRequestMarshaller::getInstance(),
            Model\DigitalAccountQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EnterpriseQueryRequest $request
     * @return Model\EnterpriseQueryResponse
     * @throws YopClientException
     */
    public function enterprise_query(Model\EnterpriseQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EnterpriseQueryRequestMarshaller::getInstance(),
            Model\EnterpriseQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EnterpriseRegisterRequest $request
     * @return Model\EnterpriseRegisterResponse
     * @throws YopClientException
     */
    public function enterprise_register(Model\EnterpriseRegisterRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EnterpriseRegisterRequestMarshaller::getInstance(),
            Model\EnterpriseRegisterResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\EnterpriseUpdateRequest $request
     * @return Model\EnterpriseUpdateResponse
     * @throws YopClientException
     */
    public function enterprise_update(Model\EnterpriseUpdateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\EnterpriseUpdateRequestMarshaller::getInstance(),
            Model\EnterpriseUpdateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FastRedRequest $request
     * @return Model\FastRedResponse
     * @throws YopClientException
     */
    public function fastRed(Model\FastRedRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FastRedRequestMarshaller::getInstance(),
            Model\FastRedResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FeeQueryRequest $request
     * @return Model\FeeQueryResponse
     * @throws YopClientException
     */
    public function feeQuery(Model\FeeQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FeeQueryRequestMarshaller::getInstance(),
            Model\FeeQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FeeQueryV10Request $request
     * @return Model\FeeQueryV10Response
     * @throws YopClientException
     */
    public function fee_query_v1_0(Model\FeeQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FeeQueryV10RequestMarshaller::getInstance(),
            Model\FeeQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\GetCertifyQrcodeRequest $request
     * @return Model\GetCertifyQrcodeResponse
     * @throws YopClientException
     */
    public function getCertifyQrcode(Model\GetCertifyQrcodeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\GetCertifyQrcodeRequestMarshaller::getInstance(),
            Model\GetCertifyQrcodeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\GetH5UrlRequest $request
     * @return Model\GetH5UrlResponse
     * @throws YopClientException
     */
    public function getH5Url(Model\GetH5UrlRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\GetH5UrlRequestMarshaller::getInstance(),
            Model\GetH5UrlResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\GetLoginResultRequest $request
     * @return Model\GetLoginResultResponse
     * @throws YopClientException
     */
    public function getLoginResult(Model\GetLoginResultRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\GetLoginResultRequestMarshaller::getInstance(),
            Model\GetLoginResultResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\GetQrcodeCertifyResultRequest $request
     * @return Model\GetQrcodeCertifyResultResponse
     * @throws YopClientException
     */
    public function getQrcodeCertifyResult(Model\GetQrcodeCertifyResultRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\GetQrcodeCertifyResultRequestMarshaller::getInstance(),
            Model\GetQrcodeCertifyResultResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\InfoModifyRequest $request
     * @return Model\InfoModifyResponse
     * @throws YopClientException
     */
    public function infoModify(Model\InfoModifyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\InfoModifyRequestMarshaller::getInstance(),
            Model\InfoModifyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\InfoQueryRequest $request
     * @return Model\InfoQueryResponse
     * @throws YopClientException
     */
    public function infoQuery(Model\InfoQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\InfoQueryRequestMarshaller::getInstance(),
            Model\InfoQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\InfoModifyV10Request $request
     * @return Model\InfoModifyV10Response
     * @throws YopClientException
     */
    public function info_modify_v1_0(Model\InfoModifyV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\InfoModifyV10RequestMarshaller::getInstance(),
            Model\InfoModifyV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\InfoQueryV10Request $request
     * @return Model\InfoQueryV10Response
     * @throws YopClientException
     */
    public function info_query_v1_0(Model\InfoQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\InfoQueryV10RequestMarshaller::getInstance(),
            Model\InfoQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\InvoicePdfReSendEmailRequest $request
     * @return Model\InvoicePdfReSendEmailResponse
     * @throws YopClientException
     */
    public function invoicePdf_reSendEmail(Model\InvoicePdfReSendEmailRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\InvoicePdfReSendEmailRequestMarshaller::getInstance(),
            Model\InvoicePdfReSendEmailResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\IssueInvoiceV1Request $request
     * @return Model\IssueInvoiceV1Response
     * @throws YopClientException
     */
    public function issue_invoice_v1(Model\IssueInvoiceV1Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\IssueInvoiceV1RequestMarshaller::getInstance(),
            Model\IssueInvoiceV1ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OpenServerV1Request $request
     * @return Model\OpenServerV1Response
     * @throws YopClientException
     */
    public function open_server_v1(Model\OpenServerV1Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OpenServerV1RequestMarshaller::getInstance(),
            Model\OpenServerV1ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OrderQrcodeGenRequest $request
     * @return Model\OrderQrcodeGenResponse
     * @throws YopClientException
     */
    public function order_qrcode_gen(Model\OrderQrcodeGenRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OrderQrcodeGenRequestMarshaller::getInstance(),
            Model\OrderQrcodeGenResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OrderQrcodeStatusQueryRequest $request
     * @return Model\OrderQrcodeStatusQueryResponse
     * @throws YopClientException
     */
    public function order_qrcode_status_query(Model\OrderQrcodeStatusQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OrderQrcodeStatusQueryRequestMarshaller::getInstance(),
            Model\OrderQrcodeStatusQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryInvoiceV1Request $request
     * @return Model\QueryInvoiceV1Response
     * @throws YopClientException
     */
    public function query_invoice_v1(Model\QueryInvoiceV1Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryInvoiceV1RequestMarshaller::getInstance(),
            Model\QueryInvoiceV1ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RecordQueryRequest $request
     * @return Model\RecordQueryResponse
     * @throws YopClientException
     */
    public function recordQuery(Model\RecordQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RecordQueryRequestMarshaller::getInstance(),
            Model\RecordQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RecordQueryV10Request $request
     * @return Model\RecordQueryV10Response
     * @throws YopClientException
     */
    public function record_query_v1_0(Model\RecordQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RecordQueryV10RequestMarshaller::getInstance(),
            Model\RecordQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RetryInvoiceV1Request $request
     * @return Model\RetryInvoiceV1Response
     * @throws YopClientException
     */
    public function retry_invoice_v1(Model\RetryInvoiceV1Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RetryInvoiceV1RequestMarshaller::getInstance(),
            Model\RetryInvoiceV1ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnifiedLoginRequest $request
     * @return Model\UnifiedLoginResponse
     * @throws YopClientException
     */
    public function unifiedLogin(Model\UnifiedLoginRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnifiedLoginRequestMarshaller::getInstance(),
            Model\UnifiedLoginResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnifiedLoginCheckRequest $request
     * @return Model\UnifiedLoginCheckResponse
     * @throws YopClientException
     */
    public function unifiedLoginCheck(Model\UnifiedLoginCheckRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnifiedLoginCheckRequestMarshaller::getInstance(),
            Model\UnifiedLoginCheckResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UserLoginRequest $request
     * @return Model\UserLoginResponse
     * @throws YopClientException
     */
    public function userLogin(Model\UserLoginRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UserLoginRequestMarshaller::getInstance(),
            Model\UserLoginResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UserLoginRequest $request
     * @return Model\UserLoginResponse
     * @throws YopClientException
     */
    public function user_login(Model\UserLoginRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UserLoginRequestMarshaller::getInstance(),
            Model\UserLoginResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
