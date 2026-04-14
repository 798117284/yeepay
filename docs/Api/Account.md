# Yeepay\Yop\Sdk\Account

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountBookQueryRefund**](Account.md#accountBookQueryRefund) | **GET** /rest/v1.0/account/account-book/query-refund | 记账簿退款查询
[**accountBookRefund**](Account.md#accountBookRefund) | **POST** /rest/v1.0/account/account-book/refund | 记账簿退款
[**accountManageAccountModify**](Account.md#accountManageAccountModify) | **POST** /rest/v1.0/account/account-manage/account/modify | 更新记账簿
[**accountManageAccountOpen**](Account.md#accountManageAccountOpen) | **POST** /rest/v1.0/account/account-manage/account/open | 开立记账簿
[**accountManageAccountOpenV2**](Account.md#accountManageAccountOpenV2) | **POST** /rest/v2.0/account/account-manage/account/open | 开立记账簿
[**accountManageAccountQuery**](Account.md#accountManageAccountQuery) | **GET** /rest/v1.0/account/account-manage/account/query | 查询记账簿
[**accountManageBalanceFreeze**](Account.md#accountManageBalanceFreeze) | **POST** /rest/v1.0/account/account-manage/balance/freeze | 冻结记账薄金额
[**accountManageBalanceFreezeQuery**](Account.md#accountManageBalanceFreezeQuery) | **GET** /rest/v1.0/account/account-manage/balance/freeze-query | 记账簿冻结记录查询
[**accountManageBalanceUnFreezeQuery**](Account.md#accountManageBalanceUnFreezeQuery) | **GET** /rest/v1.0/account/account-manage/balance/un-freeze-query | 记账簿解冻记录查询
[**accountManageBalanceUnfreeze**](Account.md#accountManageBalanceUnfreeze) | **POST** /rest/v1.0/account/account-manage/balance/unfreeze | 解冻记账薄金额
[**accountManageBankAccountOpen**](Account.md#accountManageBankAccountOpen) | **POST** /rest/v1.0/account/account-manage/bank-account/open | 开立银行账户
[**accountManageBankAccountQuery**](Account.md#accountManageBankAccountQuery) | **GET** /rest/v1.0/account/account-manage/bank-account/query | 开立银行账户查询
[**accountManageBankTradeFlowQuery**](Account.md#accountManageBankTradeFlowQuery) | **GET** /rest/v1.0/account/account-manage/bank/trade/flow/query | 银行账户流水查询
[**accountManageXibBindCard**](Account.md#accountManageXibBindCard) | **POST** /rest/v1.0/account/account-manage/xib-bind-card | 厦门多渠道开户激活
[**account_book_balance_freeze**](Account.md#account_book_balance_freeze) | **POST** /rest/v1.0/account/account-manage/balance/freeze | 冻结记账薄金额
[**account_book_balance_freeze_query**](Account.md#account_book_balance_freeze_query) | **GET** /rest/v1.0/account/account-manage/balance/freeze-query | 记账簿冻结记录查询
[**account_book_balance_un_freeze_query**](Account.md#account_book_balance_un_freeze_query) | **GET** /rest/v1.0/account/account-manage/balance/un-freeze-query | 记账簿解冻记录查询
[**account_book_balance_unfreeze**](Account.md#account_book_balance_unfreeze) | **POST** /rest/v1.0/account/account-manage/balance/unfreeze | 解冻记账薄金额
[**account_book_create**](Account.md#account_book_create) | **POST** /rest/v2.0/account/account-manage/account/open | 开立记账簿
[**account_book_modify**](Account.md#account_book_modify) | **POST** /rest/v1.0/account/account-manage/account/modify | 更新记账簿
[**account_book_query_refund_v1_0**](Account.md#account_book_query_refund_v1_0) | **GET** /rest/v1.0/account/account-book/query-refund | 记账簿退款查询
[**account_book_refund_v1_0**](Account.md#account_book_refund_v1_0) | **POST** /rest/v1.0/account/account-book/refund | 记账簿退款
[**account_individual_apply**](Account.md#account_individual_apply) | **POST** /rest/v1.0/account/individual/apply | 付款到个人--申请添加个人用户
[**account_individual_modify**](Account.md#account_individual_modify) | **POST** /rest/v1.0/account/individual/modify | 付款到个人--变更已添加的个人用户
[**account_individual_query**](Account.md#account_individual_query) | **POST** /rest/v1.0/account/individual/query | 付款到个人--查询已添加的个人用户
[**account_individual_query_progress**](Account.md#account_individual_query_progress) | **POST** /rest/v1.0/account/individual/query-progress | 付款到个人--查询申请进度
[**account_manage_account_open_v1_0**](Account.md#account_manage_account_open_v1_0) | **POST** /rest/v1.0/account/account-manage/account/open | 开立记账簿
[**account_manage_account_query_v1_0**](Account.md#account_manage_account_query_v1_0) | **GET** /rest/v1.0/account/account-manage/account/query | 查询记账簿
[**account_manage_bankTradeFlow_query**](Account.md#account_manage_bankTradeFlow_query) | **GET** /rest/v1.0/account/account-manage/bank/trade/flow/query | 银行账户流水查询
[**account_manage_bank_account_query_v1_0**](Account.md#account_manage_bank_account_query_v1_0) | **GET** /rest/v1.0/account/account-manage/bank-account/query | 开立银行账户查询
[**account_pay_order_v3**](Account.md#account_pay_order_v3) | **POST** /rest/v3.0/account/pay/order | 付款-下单-支持短验复核
[**account_remit_reverse_query**](Account.md#account_remit_reverse_query) | **POST** /rest/v1.0/account/pay/reverse/query | 付款冲退-查询
[**account_transfer_b2b_order_v3**](Account.md#account_transfer_b2b_order_v3) | **POST** /rest/v3.0/account/transfer/b2b/order | 转账-下单-支持短验复核
[**accountinfosQuery**](Account.md#accountinfosQuery) | **GET** /rest/v1.0/account/accountinfos/query | 全部账户余额查询
[**accountinfos_query_v1_0**](Account.md#accountinfos_query_v1_0) | **GET** /rest/v1.0/account/accountinfos/query | 全部账户余额查询
[**aliBatchTransfer**](Account.md#aliBatchTransfer) | **POST** /rest/v1.0/account/ali-batch-transfer | 转账到支付宝
[**aliBatchTransferDetail**](Account.md#aliBatchTransferDetail) | **POST** /rest/v1.0/account/ali-batch-transfer-detail | 转账到支付宝记录查询
[**aliCancelContract**](Account.md#aliCancelContract) | **POST** /rest/v1.0/account/ali-cancel-contract | 转账到支付宝-解约
[**aliCapitalTransferQuery**](Account.md#aliCapitalTransferQuery) | **POST** /rest/v1.0/account/ali-capital-transfer-query | 记账本资金拨入记录查询
[**aliCaptialTransfer**](Account.md#aliCaptialTransfer) | **POST** /rest/v1.0/account/ali-captial-transfer | 转账到支付宝-记账本资金拨入
[**aliChannelBookDeail**](Account.md#aliChannelBookDeail) | **POST** /rest/v1.0/account/ali-channel-book-deail | 转账到支付宝-记账本查询
[**aliOpenChannelBook**](Account.md#aliOpenChannelBook) | **POST** /rest/v1.0/account/ali-open-channel-book | 转账到支付宝-开立记账本
[**aliSignContract**](Account.md#aliSignContract) | **POST** /rest/v1.0/account/ali-sign-contract | 转账到支付宝-签约
[**aliSignContractQuery**](Account.md#aliSignContractQuery) | **POST** /rest/v1.0/account/ali-sign-contract-query | 转账到支付宝-签约查询
[**alipay_Single_Proxy_Transfer**](Account.md#alipay_Single_Proxy_Transfer) | **POST** /rest/v1.0/account/single-proxy-transfer | 转账到支付宝（单笔）
[**appoint_target_remit**](Account.md#appoint_target_remit) | **POST** /rest/v1.0/account/target/order | 定向付款-下单
[**autoWithdrawRuleCancel**](Account.md#autoWithdrawRuleCancel) | **POST** /rest/v1.0/account/auto-withdraw-rule/cancel | 自动提现-规则作废
[**autoWithdrawRuleQuery**](Account.md#autoWithdrawRuleQuery) | **GET** /rest/v1.0/account/auto-withdraw-rule/query | 自动提现-规则查询
[**autoWithdrawRuleSet**](Account.md#autoWithdrawRuleSet) | **POST** /rest/v1.0/account/auto-withdraw-rule/set | 自动提现-规则设置
[**auto_withdraw_rule_cancel_v1_0**](Account.md#auto_withdraw_rule_cancel_v1_0) | **POST** /rest/v1.0/account/auto-withdraw-rule/cancel | 自动提现-规则作废
[**auto_withdraw_rule_query_v1_0**](Account.md#auto_withdraw_rule_query_v1_0) | **GET** /rest/v1.0/account/auto-withdraw-rule/query | 自动提现-规则查询
[**auto_withdraw_rule_set_v1_0**](Account.md#auto_withdraw_rule_set_v1_0) | **POST** /rest/v1.0/account/auto-withdraw-rule/set | 自动提现-规则设置
[**balanceQuery**](Account.md#balanceQuery) | **GET** /rest/v1.0/account/balance/query | 资金账户余额查询
[**balance_query_v1_0**](Account.md#balance_query_v1_0) | **GET** /rest/v1.0/account/balance/query | 资金账户余额查询
[**bankAccountApplyDepositRefund**](Account.md#bankAccountApplyDepositRefund) | **POST** /rest/v1.0/account/bank-account/apply-deposit-refund | 银行入金退回
[**bankAccountApplySubAccount**](Account.md#bankAccountApplySubAccount) | **POST** /rest/v1.0/account/bank-account/apply-sub-account | 申请开通缴费账户
[**bankAccountAuthApply**](Account.md#bankAccountAuthApply) | **POST** /rest/v1.0/account/bank-account/auth-apply | 开立银行账户-申请短验
[**bankAccountAuthConfirm**](Account.md#bankAccountAuthConfirm) | **POST** /rest/v1.0/account/bank-account/auth-confirm | 开立银行账户-短验确认
[**bankAccountDownloadReceipt**](Account.md#bankAccountDownloadReceipt) | **GET** /rest/v1.0/account/bank-account/download-receipt | 付款方银行转账回单
[**bankAccountQueryDepositRefund**](Account.md#bankAccountQueryDepositRefund) | **GET** /rest/v1.0/account/bank-account/query-deposit-refund | 银行入金流水退回查询
[**bankAccountQuerySubAccount**](Account.md#bankAccountQuerySubAccount) | **GET** /rest/v1.0/account/bank-account/query-sub-account | 查询缴费账户
[**bankAccountSubAccountBindCard**](Account.md#bankAccountSubAccountBindCard) | **POST** /rest/v1.0/account/bank-account/sub-account/bind-card | 缴费账户绑定卡
[**bankClearChangeCard**](Account.md#bankClearChangeCard) | **POST** /rest/v1.0/account/bank-clear/change-card | 银行清分账户变更绑卡
[**bankOpenSupplement**](Account.md#bankOpenSupplement) | **POST** /rest/v1.0/account/bank-open-supplement | 资质信息补录
[**bankPaymentOrder**](Account.md#bankPaymentOrder) | **POST** /rest/v1.0/account/bank/payment/order | 银行账户支付
[**bank_account_auth_apply**](Account.md#bank_account_auth_apply) | **POST** /rest/v1.0/account/bank-account/auth-apply | 开立银行账户-申请短验
[**bank_account_auth_confirm**](Account.md#bank_account_auth_confirm) | **POST** /rest/v1.0/account/bank-account/auth-confirm | 开立银行账户-短验确认
[**bank_account_balance_query**](Account.md#bank_account_balance_query) | **POST** /rest/v1.0/account/bankaccountbalancequery | 银行清分账户余额查询
[**bank_account_deposit_refund_apply**](Account.md#bank_account_deposit_refund_apply) | **POST** /rest/v1.0/account/bank-account/apply-deposit-refund | 银行入金退回
[**bank_account_download_receipt**](Account.md#bank_account_download_receipt) | **GET** /rest/v1.0/account/bank-account/download-receipt | 付款方银行转账回单
[**bank_account_query_deposit_refund**](Account.md#bank_account_query_deposit_refund) | **GET** /rest/v1.0/account/bank-account/query-deposit-refund | 银行入金流水退回查询
[**bank_account_query_sub_account**](Account.md#bank_account_query_sub_account) | **GET** /rest/v1.0/account/bank-account/query-sub-account | 查询缴费账户
[**bank_account_sub_account_apply**](Account.md#bank_account_sub_account_apply) | **POST** /rest/v1.0/account/bank-account/apply-sub-account | 申请开通缴费账户
[**bank_account_sub_account_bind_card**](Account.md#bank_account_sub_account_bind_card) | **POST** /rest/v1.0/account/bank-account/sub-account/bind-card | 缴费账户绑定卡
[**bank_clear_bind_card**](Account.md#bank_clear_bind_card) | **POST** /rest/v1.0/account/bankclearbindcard | 银行清分绑卡
[**bank_clear_change_bind_card**](Account.md#bank_clear_change_bind_card) | **POST** /rest/v1.0/account/bank-clear/change-card | 银行清分账户变更绑卡
[**bank_payment_order_v1_0**](Account.md#bank_payment_order_v1_0) | **POST** /rest/v1.0/account/bank/payment/order | 银行账户支付
[**bankaccountbalancequery**](Account.md#bankaccountbalancequery) | **POST** /rest/v1.0/account/bankaccountbalancequery | 银行清分账户余额查询
[**bankclear_apply_record**](Account.md#bankclear_apply_record) | **POST** /rest/v1.0/account/bankclerapplyrecord | 开立银行清分账户查询
[**bankclearbindcard**](Account.md#bankclearbindcard) | **POST** /rest/v1.0/account/bankclearbindcard | 银行清分绑卡
[**bankclerapplyrecord**](Account.md#bankclerapplyrecord) | **POST** /rest/v1.0/account/bankclerapplyrecord | 开立银行清分账户查询
[**bind_card_auth_apply**](Account.md#bind_card_auth_apply) | **POST** /rest/v1.0/account/bindcardauthapply | 银行清分账户绑卡-申请短验
[**bind_card_auth_apply_confirm**](Account.md#bind_card_auth_apply_confirm) | **POST** /rest/v1.0/account/bindcardauthapplyconfirm | 银行账户绑卡-验证确认
[**bindcardauthapply**](Account.md#bindcardauthapply) | **POST** /rest/v1.0/account/bindcardauthapply | 银行清分账户绑卡-申请短验
[**bindcardauthapplyconfirm**](Account.md#bindcardauthapplyconfirm) | **POST** /rest/v1.0/account/bindcardauthapplyconfirm | 银行账户绑卡-验证确认
[**downloadDepositNotifyReceipt**](Account.md#downloadDepositNotifyReceipt) | **POST** /rest/v1.0/account/download/deposit-notify-receipt | 多渠道入金通知回单下载
[**download_deposit_notify_receipt**](Account.md#download_deposit_notify_receipt) | **POST** /rest/v1.0/account/download/deposit-notify-receipt | 多渠道入金通知回单下载
[**enterpriseAccountBookPayOrder**](Account.md#enterpriseAccountBookPayOrder) | **POST** /rest/v1.0/account/enterprise/account-book-pay/order | 记账薄支付
[**enterpriseAccountPayOrder**](Account.md#enterpriseAccountPayOrder) | **POST** /rest/v1.0/account/enterprise/account-pay/order | 企业账户支付-下单
[**enterpriseAutoPaymentOrder**](Account.md#enterpriseAutoPaymentOrder) | **POST** /rest/v1.0/account/enterprise/auto-payment/order | 企业账户支付-自动付款
[**enterpriseAutoPaymentOrderHlzh**](Account.md#enterpriseAutoPaymentOrderHlzh) | **POST** /rest/v1.0/account/enterprise/auto-payment/order-hlzh | 企业账户支付-自动付款-航旅纵横版
[**enterpriseAutoPaymentQuery**](Account.md#enterpriseAutoPaymentQuery) | **GET** /rest/v1.0/account/enterprise/auto-payment/query | 企业账户支付-自动付款订单查询
[**enterpriseTokenPayOrder**](Account.md#enterpriseTokenPayOrder) | **POST** /rest/v1.0/account/enterprise/token-pay/order | 企业账户支付-token支付
[**enterpriseWithholdingCheckBalance**](Account.md#enterpriseWithholdingCheckBalance) | **POST** /rest/v1.0/account/enterprise/withholding/check-balance | 企业账户支付-关系扣款余额预校验
[**enterpriseWithholdingOrder**](Account.md#enterpriseWithholdingOrder) | **POST** /rest/v1.0/account/enterprise/withholding/order | 企业账户支付-关系扣款
[**enterprise_account_book_pay_order_v1_0**](Account.md#enterprise_account_book_pay_order_v1_0) | **POST** /rest/v1.0/account/enterprise/account-book-pay/order | 记账薄支付
[**enterprise_account_pay_order_v1_0**](Account.md#enterprise_account_pay_order_v1_0) | **POST** /rest/v1.0/account/enterprise/account-pay/order | 企业账户支付-下单
[**enterprise_auto_payment_order_hlzh**](Account.md#enterprise_auto_payment_order_hlzh) | **POST** /rest/v1.0/account/enterprise/auto-payment/order-hlzh | 企业账户支付-自动付款-航旅纵横版
[**enterprise_auto_payment_order_v1_0**](Account.md#enterprise_auto_payment_order_v1_0) | **POST** /rest/v1.0/account/enterprise/auto-payment/order | 企业账户支付-自动付款
[**enterprise_auto_payment_query_v1_0**](Account.md#enterprise_auto_payment_query_v1_0) | **GET** /rest/v1.0/account/enterprise/auto-payment/query | 企业账户支付-自动付款订单查询
[**enterprise_token_pay_order_v1_0**](Account.md#enterprise_token_pay_order_v1_0) | **POST** /rest/v1.0/account/enterprise/token-pay/order | 企业账户支付-token支付
[**enterprise_withholding_check_balance_v1_0**](Account.md#enterprise_withholding_check_balance_v1_0) | **POST** /rest/v1.0/account/enterprise/withholding/check-balance | 企业账户支付-关系扣款余额预校验
[**enterprise_withholding_order_v1_0**](Account.md#enterprise_withholding_order_v1_0) | **POST** /rest/v1.0/account/enterprise/withholding/order | 企业账户支付-关系扣款
[**externalOrder**](Account.md#externalOrder) | **POST** /rest/v1.0/account/external/order | 银行账户支付-外部订单同步
[**external_order_v1_0**](Account.md#external_order_v1_0) | **POST** /rest/v1.0/account/external/order | 银行账户支付-外部订单同步
[**getReceiptForReceiver**](Account.md#getReceiptForReceiver) | **POST** /rest/v1.0/account/receipt/receiver/get | 转入方回单下载
[**get_clear_account_info_by_merchant**](Account.md#get_clear_account_info_by_merchant) | **POST** /rest/v1.0/account/getclearaccountinfoymerchant | 银行清分账户信息查询
[**getclearaccountinfoymerchant**](Account.md#getclearaccountinfoymerchant) | **POST** /rest/v1.0/account/getclearaccountinfoymerchant | 银行清分账户信息查询
[**groupAccountTransfer**](Account.md#groupAccountTransfer) | **POST** /rest/v1.0/account/group/account/transfer | 集团账户资金划拨
[**groupAccountTransferQuery**](Account.md#groupAccountTransferQuery) | **GET** /rest/v1.0/account/group/account/transfer/query | 集团账户资金划拨查询
[**individualApply**](Account.md#individualApply) | **POST** /rest/v1.0/account/individual/apply | 付款到个人--申请添加个人用户
[**individualModify**](Account.md#individualModify) | **POST** /rest/v1.0/account/individual/modify | 付款到个人--变更已添加的个人用户
[**individualQuery**](Account.md#individualQuery) | **POST** /rest/v1.0/account/individual/query | 付款到个人--查询已添加的个人用户
[**individualQueryProgress**](Account.md#individualQueryProgress) | **POST** /rest/v1.0/account/individual/query-progress | 付款到个人--查询申请进度
[**initiateUserBookWithdraw**](Account.md#initiateUserBookWithdraw) | **POST** /rest/v1.0/account/user-book/withdraw/order | 记账簿出款-下单
[**manageAuditProcess**](Account.md#manageAuditProcess) | **POST** /rest/v1.0/account/manage/audit/process | 申请开通、关闭复核功能
[**manageAuditorAdd**](Account.md#manageAuditorAdd) | **POST** /rest/v1.0/account/manage/auditor/add | 申请添加短验复核人
[**manageAuditorConfirm**](Account.md#manageAuditorConfirm) | **POST** /rest/v1.0/account/manage/auditor/confirm | 添加短验复核人确认
[**manageAuditorList**](Account.md#manageAuditorList) | **GET** /rest/v1.0/account/manage/auditor/list | 查询短验复核人
[**manageAuditorQuery**](Account.md#manageAuditorQuery) | **GET** /rest/v1.0/account/manage/auditor/query | 查询短验复核人申请信息
[**manageAuditorSendSms**](Account.md#manageAuditorSendSms) | **POST** /rest/v1.0/account/manage/auditor/send-sms | 添加短验复核人重发短验
[**manageReviewerAddPhone**](Account.md#manageReviewerAddPhone) | **POST** /rest/v1.0/account/manage/reviewer/add-phone | 添加商户审核人手机号
[**manageReviewerQuery**](Account.md#manageReviewerQuery) | **GET** /rest/v1.0/account/manage/reviewer/query | 查询商户审核人
[**manageTransitBalanceQuery**](Account.md#manageTransitBalanceQuery) | **POST** /rest/v1.0/account/manage/transit-balance-query | 在途账户余额查询
[**manage_audit_process_v1_0**](Account.md#manage_audit_process_v1_0) | **POST** /rest/v1.0/account/manage/audit/process | 申请开通、关闭复核功能
[**manage_auditor_add_v1_0**](Account.md#manage_auditor_add_v1_0) | **POST** /rest/v1.0/account/manage/auditor/add | 申请添加短验复核人
[**manage_auditor_confirm_v1_0**](Account.md#manage_auditor_confirm_v1_0) | **POST** /rest/v1.0/account/manage/auditor/confirm | 添加短验复核人确认
[**manage_auditor_list_v1_0**](Account.md#manage_auditor_list_v1_0) | **GET** /rest/v1.0/account/manage/auditor/list | 查询短验复核人
[**manage_auditor_query_v1_0**](Account.md#manage_auditor_query_v1_0) | **GET** /rest/v1.0/account/manage/auditor/query | 查询短验复核人申请信息
[**manage_auditor_send_sms_v1_0**](Account.md#manage_auditor_send_sms_v1_0) | **POST** /rest/v1.0/account/manage/auditor/send-sms | 添加短验复核人重发短验
[**manage_bank_supplement**](Account.md#manage_bank_supplement) | **POST** /rest/v1.0/account/bank-open-supplement | 资质信息补录
[**manage_reviewer_add_phone_v1_0**](Account.md#manage_reviewer_add_phone_v1_0) | **POST** /rest/v1.0/account/manage/reviewer/add-phone | 添加商户审核人手机号
[**manage_reviewer_query_v1_0**](Account.md#manage_reviewer_query_v1_0) | **GET** /rest/v1.0/account/manage/reviewer/query | 查询商户审核人
[**multimodal_account_trade**](Account.md#multimodal_account_trade) | **POST** /rest/v2.0/account/pay/order | 付款-下单（多场景）
[**open_bank_account**](Account.md#open_bank_account) | **POST** /rest/v1.0/account/openbankaccount | 开立银行清分账户
[**openbankaccount**](Account.md#openbankaccount) | **POST** /rest/v1.0/account/openbankaccount | 开立银行清分账户
[**payAccoutCard**](Account.md#payAccoutCard) | **POST** /rest/v1.0/account/pay/accout-card | 代付到记账簿绑定卡
[**payBatchOrder**](Account.md#payBatchOrder) | **POST** /rest/v1.0/account/pay/batch-order | 付款-批量下单
[**payBatchQuery**](Account.md#payBatchQuery) | **GET** /rest/v1.0/account/pay/batch-query | 付款-批次查询
[**payCancel**](Account.md#payCancel) | **POST** /rest/v1.0/account/pay/cancel | 付款-撤销
[**payOrder**](Account.md#payOrder) | **POST** /rest/v1.0/account/pay/order | 付款-下单
[**payOrderAuditQuery**](Account.md#payOrderAuditQuery) | **GET** /rest/v1.0/account/pay/order/audit-query | 付款-复核订单查询
[**payOrderAuditSendSms**](Account.md#payOrderAuditSendSms) | **POST** /rest/v1.0/account/pay/order/audit-send-sms | 付款-短信重发
[**payOrderAuditSms**](Account.md#payOrderAuditSms) | **POST** /rest/v1.0/account/pay/order/audit-sms | 付款-短信确认
[**payOrderV2**](Account.md#payOrderV2) | **POST** /rest/v2.0/account/pay/order | 付款-下单（多场景）
[**payOrderV3**](Account.md#payOrderV3) | **POST** /rest/v3.0/account/pay/order | 付款-下单-支持短验复核
[**payQuery**](Account.md#payQuery) | **GET** /rest/v1.0/account/pay/query | 付款-查询
[**payReverseQuery**](Account.md#payReverseQuery) | **POST** /rest/v1.0/account/pay/reverse/query | 付款冲退-查询
[**paySystemQuery**](Account.md#paySystemQuery) | **GET** /rest/v1.0/account/pay/system/query | 付款-查询
[**pay_batch_order_v1_0**](Account.md#pay_batch_order_v1_0) | **POST** /rest/v1.0/account/pay/batch-order | 付款-批量下单
[**pay_batch_query_v1_0**](Account.md#pay_batch_query_v1_0) | **GET** /rest/v1.0/account/pay/batch-query | 付款-批次查询
[**pay_cancel_v1_0**](Account.md#pay_cancel_v1_0) | **POST** /rest/v1.0/account/pay/cancel | 付款-撤销
[**pay_order_audit_query**](Account.md#pay_order_audit_query) | **GET** /rest/v1.0/account/pay/order/audit-query | 付款-复核订单查询
[**pay_order_audit_send_sms**](Account.md#pay_order_audit_send_sms) | **POST** /rest/v1.0/account/pay/order/audit-send-sms | 付款-短信重发
[**pay_order_audit_sms**](Account.md#pay_order_audit_sms) | **POST** /rest/v1.0/account/pay/order/audit-sms | 付款-短信确认
[**pay_order_v1_0**](Account.md#pay_order_v1_0) | **POST** /rest/v1.0/account/pay/order | 付款-下单
[**pay_query_v1_0**](Account.md#pay_query_v1_0) | **GET** /rest/v1.0/account/pay/query | 付款-查询
[**pay_system_query_v1_0**](Account.md#pay_system_query_v1_0) | **GET** /rest/v1.0/account/pay/system/query | 付款-查询
[**querySingleTransferDetail**](Account.md#querySingleTransferDetail) | **POST** /rest/v1.0/account/query-single-transfer-detail | 转账到支付宝记录查询（单笔）
[**queryUserBookWithdrawOrderBySystem**](Account.md#queryUserBookWithdrawOrderBySystem) | **POST** /rest/v1.0/account/user-book/withdraw/query | 记账簿出款-查询
[**query_bind_card_apply_list**](Account.md#query_bind_card_apply_list) | **POST** /rest/v1.0/account/querybindcardapplylist | 银行清分账户绑卡请求查询
[**query_bind_card_list**](Account.md#query_bind_card_list) | **POST** /rest/v1.0/account/querybindcardlist | 银行清分账户绑卡信息查询
[**query_single_transfer_detail**](Account.md#query_single_transfer_detail) | **POST** /rest/v1.0/account/query-single-transfer-detail | 转账到支付宝记录查询（单笔）
[**query_transit_account_balance**](Account.md#query_transit_account_balance) | **POST** /rest/v1.0/account/manage/transit-balance-query | 在途账户余额查询
[**querybindcardapplylist**](Account.md#querybindcardapplylist) | **POST** /rest/v1.0/account/querybindcardapplylist | 银行清分账户绑卡请求查询
[**querybindcardlist**](Account.md#querybindcardlist) | **POST** /rest/v1.0/account/querybindcardlist | 银行清分账户绑卡信息查询
[**receiptGather**](Account.md#receiptGather) | **POST** /rest/v1.0/account/receipt/gather | 获取资金汇总凭证
[**receiptGet**](Account.md#receiptGet) | **GET** /rest/v1.0/account/receipt/get | 电子回单-下载
[**receiptReceiverGet**](Account.md#receiptReceiverGet) | **POST** /rest/v1.0/account/receipt/receiver/get | 转入方回单下载
[**receipt_gather_v1_0**](Account.md#receipt_gather_v1_0) | **POST** /rest/v1.0/account/receipt/gather | 获取资金汇总凭证
[**receipt_get_v1_0**](Account.md#receipt_get_v1_0) | **GET** /rest/v1.0/account/receipt/get | 电子回单-下载
[**recharge**](Account.md#recharge) | **POST** /rest/v1.0/account/recharge | 充值-下单（多种支付）
[**rechargeAccountBookQuery**](Account.md#rechargeAccountBookQuery) | **GET** /rest/v1.0/account/recharge/account-book/query | 批量查询记账簿来账流水
[**rechargeBatchQuery**](Account.md#rechargeBatchQuery) | **GET** /rest/v1.0/account/recharge/batch-query | 充值订单批量查询
[**rechargeDelConfig**](Account.md#rechargeDelConfig) | **POST** /rest/v1.0/account/recharge/del/config | 充值银行汇款-删除绑卡信息
[**rechargeOnlinebankOrder**](Account.md#rechargeOnlinebankOrder) | **POST** /rest/v1.0/account/recharge/onlinebank/order | 充值-网银下单
[**rechargeOrder**](Account.md#rechargeOrder) | **POST** /rest/v1.0/account/recharge/order | 充值-银行汇款下单
[**rechargePayerAdd**](Account.md#rechargePayerAdd) | **POST** /rest/v1.0/account/recharge/payer-add | 添加付款方
[**rechargePayerDelete**](Account.md#rechargePayerDelete) | **POST** /rest/v1.0/account/recharge/payer-delete | 删除付款方
[**rechargePayerQuery**](Account.md#rechargePayerQuery) | **GET** /rest/v1.0/account/recharge/payer-query | 查询付款方
[**rechargeQuery**](Account.md#rechargeQuery) | **GET** /rest/v1.0/account/recharge/query | 充值-查询
[**rechargeQueryConfig**](Account.md#rechargeQueryConfig) | **POST** /rest/v1.0/account/recharge/query/config | 充值银行汇款-查询绑卡信息
[**rechargeSaveConfig**](Account.md#rechargeSaveConfig) | **POST** /rest/v1.0/account/recharge/save/config | 充值银行汇款-新增绑卡信息
[**recharge_account_book_query_v1_0**](Account.md#recharge_account_book_query_v1_0) | **GET** /rest/v1.0/account/recharge/account-book/query | 批量查询记账簿来账流水
[**recharge_batch_query_v1_0**](Account.md#recharge_batch_query_v1_0) | **GET** /rest/v1.0/account/recharge/batch-query | 充值订单批量查询
[**recharge_onlinebank_order_v1_0**](Account.md#recharge_onlinebank_order_v1_0) | **POST** /rest/v1.0/account/recharge/onlinebank/order | 充值-网银下单
[**recharge_order_v1_0**](Account.md#recharge_order_v1_0) | **POST** /rest/v1.0/account/recharge/order | 充值-银行汇款下单
[**recharge_query_v1_0**](Account.md#recharge_query_v1_0) | **GET** /rest/v1.0/account/recharge/query | 充值-查询
[**recharge_v1_0**](Account.md#recharge_v1_0) | **POST** /rest/v1.0/account/recharge | 充值-下单（多种支付）
[**singleProxyTransfer**](Account.md#singleProxyTransfer) | **POST** /rest/v1.0/account/single-proxy-transfer | 转账到支付宝（单笔）
[**supplierApply**](Account.md#supplierApply) | **POST** /rest/v1.0/account/supplier/apply | 付款到供应商--申请添加供应商
[**supplierPayOrder**](Account.md#supplierPayOrder) | **POST** /rest/v1.0/account/supplier/pay/order | 付款到供应商/个人-下单
[**supplierQuery**](Account.md#supplierQuery) | **GET** /rest/v1.0/account/supplier/query | 付款到供应商--查询已添加的供应商
[**supplierQueryProgress**](Account.md#supplierQueryProgress) | **GET** /rest/v1.0/account/supplier/query-progress | 付款到供应商--查询申请进度
[**supplier_apply_v1_0**](Account.md#supplier_apply_v1_0) | **POST** /rest/v1.0/account/supplier/apply | 付款到供应商--申请添加供应商
[**supplier_pay_order_v1_0**](Account.md#supplier_pay_order_v1_0) | **POST** /rest/v1.0/account/supplier/pay/order | 付款到供应商/个人-下单
[**supplier_query_progress_v1_0**](Account.md#supplier_query_progress_v1_0) | **GET** /rest/v1.0/account/supplier/query-progress | 付款到供应商--查询申请进度
[**supplier_query_v1_0**](Account.md#supplier_query_v1_0) | **GET** /rest/v1.0/account/supplier/query | 付款到供应商--查询已添加的供应商
[**targetOrder**](Account.md#targetOrder) | **POST** /rest/v1.0/account/target/order | 定向付款-下单
[**transferAppointMarketAccount**](Account.md#transferAppointMarketAccount) | **POST** /rest/v1.0/account/transfer/appoint-market-account | 营销账户转账-下单
[**transferB2bOrder**](Account.md#transferB2bOrder) | **POST** /rest/v1.0/account/transfer/b2b/order | 转账-下单
[**transferB2bOrderAuditQuery**](Account.md#transferB2bOrderAuditQuery) | **GET** /rest/v1.0/account/transfer/b2b/order/audit-query | 转账-复核订单查询
[**transferB2bOrderAuditSendSms**](Account.md#transferB2bOrderAuditSendSms) | **POST** /rest/v1.0/account/transfer/b2b/order/audit-send-sms | 转账-短信重发
[**transferB2bOrderAuditSms**](Account.md#transferB2bOrderAuditSms) | **POST** /rest/v1.0/account/transfer/b2b/order/audit-sms | 转账-短信确认
[**transferB2bOrderV3**](Account.md#transferB2bOrderV3) | **POST** /rest/v3.0/account/transfer/b2b/order | 转账-下单-支持短验复核
[**transferB2bQuery**](Account.md#transferB2bQuery) | **GET** /rest/v1.0/account/transfer/b2b/query | 转账-查询
[**transferSystemQuery**](Account.md#transferSystemQuery) | **GET** /rest/v1.0/account/transfer/system/query | 转账-查询
[**transferWechatOrder**](Account.md#transferWechatOrder) | **POST** /rest/v1.0/account/transfer/wechat/order | 转账到微信零钱-下单
[**transferWechatQuery**](Account.md#transferWechatQuery) | **GET** /rest/v1.0/account/transfer/wechat/query | 转账到微信零钱-查询
[**transfer_appoint_market_account**](Account.md#transfer_appoint_market_account) | **POST** /rest/v1.0/account/transfer/appoint-market-account | 营销账户转账-下单
[**transfer_b2b_order_audit_query**](Account.md#transfer_b2b_order_audit_query) | **GET** /rest/v1.0/account/transfer/b2b/order/audit-query | 转账-复核订单查询
[**transfer_b2b_order_audit_send_sms**](Account.md#transfer_b2b_order_audit_send_sms) | **POST** /rest/v1.0/account/transfer/b2b/order/audit-send-sms | 转账-短信重发
[**transfer_b2b_order_audit_sms**](Account.md#transfer_b2b_order_audit_sms) | **POST** /rest/v1.0/account/transfer/b2b/order/audit-sms | 转账-短信确认
[**transfer_b2b_order_v1_0**](Account.md#transfer_b2b_order_v1_0) | **POST** /rest/v1.0/account/transfer/b2b/order | 转账-下单
[**transfer_b2b_query_v1_0**](Account.md#transfer_b2b_query_v1_0) | **GET** /rest/v1.0/account/transfer/b2b/query | 转账-查询
[**transfer_group_account_query_v1**](Account.md#transfer_group_account_query_v1) | **GET** /rest/v1.0/account/group/account/transfer/query | 集团账户资金划拨查询
[**transfer_group_account_v1**](Account.md#transfer_group_account_v1) | **POST** /rest/v1.0/account/group/account/transfer | 集团账户资金划拨
[**transfer_system_query_v1_0**](Account.md#transfer_system_query_v1_0) | **GET** /rest/v1.0/account/transfer/system/query | 转账-查询
[**transfer_wechat_order_v1_0**](Account.md#transfer_wechat_order_v1_0) | **POST** /rest/v1.0/account/transfer/wechat/order | 转账到微信零钱-下单
[**transfer_wechat_query_v1_0**](Account.md#transfer_wechat_query_v1_0) | **GET** /rest/v1.0/account/transfer/wechat/query | 转账到微信零钱-查询
[**union_account_ali_batch_proxy_transfer**](Account.md#union_account_ali_batch_proxy_transfer) | **POST** /rest/v1.0/account/ali-batch-transfer | 转账到支付宝
[**union_account_ali_batch_transfer_detail**](Account.md#union_account_ali_batch_transfer_detail) | **POST** /rest/v1.0/account/ali-batch-transfer-detail | 转账到支付宝记录查询
[**union_account_ali_cancel_contract**](Account.md#union_account_ali_cancel_contract) | **POST** /rest/v1.0/account/ali-cancel-contract | 转账到支付宝-解约
[**union_account_ali_capital_transfer_query**](Account.md#union_account_ali_capital_transfer_query) | **POST** /rest/v1.0/account/ali-capital-transfer-query | 记账本资金拨入记录查询
[**union_account_ali_channl_book_detail**](Account.md#union_account_ali_channl_book_detail) | **POST** /rest/v1.0/account/ali-channel-book-deail | 转账到支付宝-记账本查询
[**union_account_ali_open_channel_book**](Account.md#union_account_ali_open_channel_book) | **POST** /rest/v1.0/account/ali-open-channel-book | 转账到支付宝-开立记账本
[**union_account_ali_sign_contract**](Account.md#union_account_ali_sign_contract) | **POST** /rest/v1.0/account/ali-sign-contract | 转账到支付宝-签约
[**union_account_capital_transfer**](Account.md#union_account_capital_transfer) | **POST** /rest/v1.0/account/ali-captial-transfer | 转账到支付宝-记账本资金拨入
[**union_account_recharge_del_config**](Account.md#union_account_recharge_del_config) | **POST** /rest/v1.0/account/recharge/del/config | 充值银行汇款-删除绑卡信息
[**union_account_recharge_payer_add**](Account.md#union_account_recharge_payer_add) | **POST** /rest/v1.0/account/recharge/payer-add | 添加付款方
[**union_account_recharge_payer_delete**](Account.md#union_account_recharge_payer_delete) | **POST** /rest/v1.0/account/recharge/payer-delete | 删除付款方
[**union_account_recharge_payer_query**](Account.md#union_account_recharge_payer_query) | **GET** /rest/v1.0/account/recharge/payer-query | 查询付款方
[**union_account_recharge_query_config**](Account.md#union_account_recharge_query_config) | **POST** /rest/v1.0/account/recharge/query/config | 充值银行汇款-查询绑卡信息
[**union_account_recharge_save_config**](Account.md#union_account_recharge_save_config) | **POST** /rest/v1.0/account/recharge/save/config | 充值银行汇款-新增绑卡信息
[**union_account_sign_contract_query**](Account.md#union_account_sign_contract_query) | **POST** /rest/v1.0/account/ali-sign-contract-query | 转账到支付宝-签约查询
[**union_account_trade_account_book_remit**](Account.md#union_account_trade_account_book_remit) | **POST** /rest/v1.0/account/pay/accout-card | 代付到记账簿绑定卡
[**userBookWithdrawOrder**](Account.md#userBookWithdrawOrder) | **POST** /rest/v1.0/account/user-book/withdraw/order | 记账簿出款-下单
[**userBookWithdrawQuery**](Account.md#userBookWithdrawQuery) | **POST** /rest/v1.0/account/user-book/withdraw/query | 记账簿出款-查询
[**withdrawCardBind**](Account.md#withdrawCardBind) | **POST** /rest/v1.0/account/withdraw/card/bind | 提现卡-添加
[**withdrawCardModify**](Account.md#withdrawCardModify) | **POST** /rest/v1.0/account/withdraw/card/modify | 提现卡-修改/注销
[**withdrawCardQuery**](Account.md#withdrawCardQuery) | **GET** /rest/v1.0/account/withdraw/card/query | 提现卡查询
[**withdrawH5Order**](Account.md#withdrawH5Order) | **POST** /rest/v1.0/account/withdraw/h5/order | 提现-下单（H5版）
[**withdrawOrder**](Account.md#withdrawOrder) | **POST** /rest/v1.0/account/withdraw/order | 提现-下单
[**withdrawQuery**](Account.md#withdrawQuery) | **GET** /rest/v1.0/account/withdraw/query | 提现-查询
[**withdrawSystemQuery**](Account.md#withdrawSystemQuery) | **GET** /rest/v1.0/account/withdraw/system/query | 提现-查询
[**withdraw_card_bind_v1_0**](Account.md#withdraw_card_bind_v1_0) | **POST** /rest/v1.0/account/withdraw/card/bind | 提现卡-添加
[**withdraw_card_modify_v1_0**](Account.md#withdraw_card_modify_v1_0) | **POST** /rest/v1.0/account/withdraw/card/modify | 提现卡-修改/注销
[**withdraw_card_query_v1_0**](Account.md#withdraw_card_query_v1_0) | **GET** /rest/v1.0/account/withdraw/card/query | 提现卡查询
[**withdraw_h5_order_v1_0**](Account.md#withdraw_h5_order_v1_0) | **POST** /rest/v1.0/account/withdraw/h5/order | 提现-下单（H5版）
[**withdraw_order_v1_0**](Account.md#withdraw_order_v1_0) | **POST** /rest/v1.0/account/withdraw/order | 提现-下单
[**withdraw_query_v1_0**](Account.md#withdraw_query_v1_0) | **GET** /rest/v1.0/account/withdraw/query | 提现-查询
[**withdraw_system_query_v1_0**](Account.md#withdraw_system_query_v1_0) | **GET** /rest/v1.0/account/withdraw/system/query | 提现-查询
[**xibMultiBindCard**](Account.md#xibMultiBindCard) | **POST** /rest/v1.0/account/account-manage/xib-bind-card | 厦门多渠道开户激活


# **accountBookQueryRefund**
AccountBookQueryRefundResponse accountBookQueryRefund(AccountBookQueryRefundRequest request)

记账簿退款查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountBookQueryRefundRequest();
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantRefundRequestNo("merchantRefundRequestNo_example");

try {
    $response = $api_client->accountBookQueryRefund($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->accountBookQueryRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| 收款商户商编 |
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantRefundRequestNo** | **string**| 商户退款请求号。可包含字母、数字、下划线；需保证在商户端不重复 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\QueryAccountBookRefundRespDTO**](../Model/QueryAccountBookRefundRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountBookRefund**
AccountBookRefundResponse accountBookRefund(AccountBookRefundRequest request)

记账簿退款

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountBookRefundRequest();
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantRefundRequestNo("merchantRefundRequestNo_example");
$request->setOriginalOrderNo("originalOrderNo_example");
$request->setRefundAmount(1.2);
$request->setBankPostscrip("bankPostscrip_example");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->accountBookRefund($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->accountBookRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantRefundRequestNo** | **string**|  | [optional]
 **originalOrderNo** | **string**|  | [optional]
 **refundAmount** | **float**|  | [optional]
 **bankPostscrip** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookRefundRespDTO**](../Model/AccountBookRefundRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountManageAccountModify**
AccountManageAccountModifyResponse accountManageAccountModify(AccountManageAccountModifyRequest request)

更新记账簿

更新记账簿

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountManageAccountModifyRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AccountBookUpdateRequestDto());

try {
    $response = $api_client->accountManageAccountModify($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->accountManageAccountModify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookUpdateRequestDto**](../Model/AccountBookUpdateRequestDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookUpdateResponseDto**](../Model/AccountBookUpdateResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **accountManageAccountOpen**
AccountManageAccountOpenResponse accountManageAccountOpen(AccountManageAccountOpenRequest request)

开立记账簿

商户请求该接口，申请开通买家记账簿

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountManageAccountOpenRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantAccountBookNo("merchantAccountBookNo_example");
$request->setMerchantAccountBookName("merchantAccountBookName_example");

try {
    $response = $api_client->accountManageAccountOpen($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->accountManageAccountOpen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantAccountBookNo** | **string**|  | [optional]
 **merchantAccountBookName** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookCreateResponseDto**](../Model/AccountBookCreateResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountManageAccountOpenV2**
AccountManageAccountOpenV2Response accountManageAccountOpenV2(AccountManageAccountOpenV2Request request)

开立记账簿

开立记账簿

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountManageAccountOpenV2Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AccountBookCreateRequestDto());

try {
    $response = $api_client->accountManageAccountOpenV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->accountManageAccountOpenV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookCreateRequestDto**](../Model/AccountBookCreateRequestDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookCreateResponseDto**](../Model/AccountBookCreateResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **accountManageAccountQuery**
AccountManageAccountQueryResponse accountManageAccountQuery(AccountManageAccountQueryRequest request)

查询记账簿

商户请求该接口，查询相应记账簿余额。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountManageAccountQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantAccountBookNo("merchantAccountBookNo_example");
$request->setYpAccountBookNo("ypAccountBookNo_example");
$request->setBookNo("bookNo_example");

try {
    $response = $api_client->accountManageAccountQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->accountManageAccountQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;记账簿所属的商户编号&lt;/p&gt; |
 **merchantAccountBookNo** | **string**| &lt;p&gt;商户侧记账簿编号和易宝记账簿编号至少有其中一个&lt;/p&gt; | [optional]
 **ypAccountBookNo** | **string**| &lt;p&gt;商户侧记账簿编号和易宝记账簿编号至少有其中一个&lt;/p&gt; | [optional]
 **bookNo** | **string**| &lt;p&gt;易宝记账簿编号（账户类型默认为V_CLEARING_SUSPENSE_ACCOUNT: 待清算专户用户记账簿）&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBalanceQueryResponseDto**](../Model/AccountBalanceQueryResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountManageBalanceFreeze**
AccountManageBalanceFreezeResponse accountManageBalanceFreeze(AccountManageBalanceFreezeRequest request)

冻结记账薄金额

冻结记账薄金额

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountManageBalanceFreezeRequest();
$request->setParentMerchantNo("100400612345");
$request->setMerchantNo("100400612345");
$request->setRequestNo("requestNo_example");
$request->setMerchantAccountBookNo("merchantAccountBookNo_example");
$request->setYpAccountBookNo("ypAccountBookNo_example");
$request->setFreezeAmount("1.01");

try {
    $response = $api_client->accountManageBalanceFreeze($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->accountManageBalanceFreeze: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantAccountBookNo** | **string**|  | [optional]
 **ypAccountBookNo** | **string**|  | [optional]
 **freezeAmount** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookFreezeBalanceResponseDTO**](../Model/AccountBookFreezeBalanceResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountManageBalanceFreezeQuery**
AccountManageBalanceFreezeQueryResponse accountManageBalanceFreezeQuery(AccountManageBalanceFreezeQueryRequest request)

记账簿冻结记录查询

记账簿冻结记录查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountManageBalanceFreezeQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setOrderFlowNo("orderFlowNo_example");

try {
    $response = $api_client->accountManageBalanceFreezeQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->accountManageBalanceFreezeQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;商户商编&lt;/p&gt; |
 **requestNo** | **string**| &lt;p&gt;商户请求号和冻结订单号二选一必填&lt;/p&gt; | [optional]
 **orderFlowNo** | **string**| &lt;p&gt;商户请求号和冻结订单号二选一必填&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookFreezeQueryResponseDTO**](../Model/AccountBookFreezeQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountManageBalanceUnFreezeQuery**
AccountManageBalanceUnFreezeQueryResponse accountManageBalanceUnFreezeQuery(AccountManageBalanceUnFreezeQueryRequest request)

记账簿解冻记录查询

记账簿解冻记录查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountManageBalanceUnFreezeQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->accountManageBalanceUnFreezeQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->accountManageBalanceUnFreezeQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **requestNo** | **string**| &lt;div&gt; &lt;pre&gt;解冻请求号&lt;/pre&gt; &lt;/div&gt; |
 **merchantNo** | **string**| &lt;div&gt; &lt;pre&gt;商户商编号&lt;/pre&gt; &lt;/div&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookUnFreezeQueryResponseDTO**](../Model/AccountBookUnFreezeQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountManageBalanceUnfreeze**
AccountManageBalanceUnfreezeResponse accountManageBalanceUnfreeze(AccountManageBalanceUnfreezeRequest request)

解冻记账薄金额

解冻记账薄金额

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountManageBalanceUnfreezeRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setOrderFlowNo("orderFlowNo_example");
$request->setOrgRequestNo("orgRequestNo_example");
$request->setUnFreezeAmount("1.01");

try {
    $response = $api_client->accountManageBalanceUnfreeze($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->accountManageBalanceUnfreeze: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **orderFlowNo** | **string**|  | [optional]
 **orgRequestNo** | **string**|  | [optional]
 **unFreezeAmount** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookUnFreezeBalanceResponseDTO**](../Model/AccountBookUnFreezeBalanceResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountManageBankAccountOpen**
AccountManageBankAccountOpenResponse accountManageBankAccountOpen(AccountManageBankAccountOpenRequest request)

开立银行账户



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountManageBankAccountOpenRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\StandardOpenAccountRequestDTO());

try {
    $response = $api_client->accountManageBankAccountOpen($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->accountManageBankAccountOpen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\StandardOpenAccountRequestDTO**](../Model/StandardOpenAccountRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\StandardOpenAccountResponseDTO**](../Model/StandardOpenAccountResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **accountManageBankAccountQuery**
AccountManageBankAccountQueryResponse accountManageBankAccountQuery(AccountManageBankAccountQueryRequest request)

开立银行账户查询



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountManageBankAccountQueryRequest();
$request->setRequestNo("requestNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->accountManageBankAccountQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->accountManageBankAccountQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**| 商户订单号 |
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;universal-card-text\&quot;&gt;易宝支付分配的的商户唯一标识&lt;/span&gt;&lt;/div&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\StandardOpenAccountQueryResponseDTO**](../Model/StandardOpenAccountQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountManageBankTradeFlowQuery**
AccountManageBankTradeFlowQueryResponse accountManageBankTradeFlowQuery(AccountManageBankTradeFlowQueryRequest request)

银行账户流水查询

银行账户流水查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountManageBankTradeFlowQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setBankCode("bankCode_example");
$request->setBankAccountNo("bankAccountNo_example");
$request->setTrxStartDate("2024-01-01");
$request->setTrxEndDate("2024-01-02");
$request->setPageSize(100);
$request->setPageNo(1);

try {
    $response = $api_client->accountManageBankTradeFlowQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->accountManageBankTradeFlowQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;/p&gt; |
 **bankCode** | **string**| 可选项如下: HXBXB:百信银行 XWB:新网银行 SUNINGBANK:江苏苏商银行 WHLHB:蓝海银行 SMB_LARGE:江苏苏商银行_大额 XIB:厦门国际 |
 **bankAccountNo** | **string**| &lt;p&gt;银行账户号&lt;/p&gt; |
 **trxStartDate** | **string**| &lt;p&gt;格式：yyyy-MM-dd&lt;/p&gt; |
 **trxEndDate** | **string**| &lt;p&gt;格式：yyyy-MM-dd&lt;/p&gt; |
 **pageSize** | **int**| &lt;p&gt;银行编码为HXBXB时页大小只能为100；银行编码为WHLHB时页大小不能超过99&lt;/p&gt; |
 **pageNo** | **int**| &lt;p&gt;不填默认为1&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountTrxQueryRespDTO**](../Model/BankAccountTrxQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountManageXibBindCard**
AccountManageXibBindCardResponse accountManageXibBindCard(AccountManageXibBindCardRequest request)

厦门多渠道开户激活



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountManageXibBindCardRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\XibBindClearCardReqDTO());

try {
    $response = $api_client->accountManageXibBindCard($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->accountManageXibBindCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\XibBindClearCardReqDTO**](../Model/XibBindClearCardReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\XibMultiBindCardRspDTO**](../Model/XibMultiBindCardRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **account_book_balance_freeze**
AccountBookBalanceFreezeResponse account_book_balance_freeze(AccountBookBalanceFreezeRequest request)

冻结记账薄金额

冻结记账薄金额

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountBookBalanceFreezeRequest();
$request->setParentMerchantNo("100400612345");
$request->setMerchantNo("100400612345");
$request->setRequestNo("requestNo_example");
$request->setMerchantAccountBookNo("merchantAccountBookNo_example");
$request->setYpAccountBookNo("ypAccountBookNo_example");
$request->setFreezeAmount("1.01");

try {
    $response = $api_client->account_book_balance_freeze($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->account_book_balance_freeze: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantAccountBookNo** | **string**|  | [optional]
 **ypAccountBookNo** | **string**|  | [optional]
 **freezeAmount** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookFreezeBalanceResponseDTO**](../Model/AccountBookFreezeBalanceResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **account_book_balance_freeze_query**
AccountBookBalanceFreezeQueryResponse account_book_balance_freeze_query(AccountBookBalanceFreezeQueryRequest request)

记账簿冻结记录查询

记账簿冻结记录查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountBookBalanceFreezeQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setOrderFlowNo("orderFlowNo_example");

try {
    $response = $api_client->account_book_balance_freeze_query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->account_book_balance_freeze_query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;商户商编&lt;/p&gt; |
 **requestNo** | **string**| &lt;p&gt;商户请求号和冻结订单号二选一必填&lt;/p&gt; | [optional]
 **orderFlowNo** | **string**| &lt;p&gt;商户请求号和冻结订单号二选一必填&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookFreezeQueryResponseDTO**](../Model/AccountBookFreezeQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **account_book_balance_un_freeze_query**
AccountBookBalanceUnFreezeQueryResponse account_book_balance_un_freeze_query(AccountBookBalanceUnFreezeQueryRequest request)

记账簿解冻记录查询

记账簿解冻记录查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountBookBalanceUnFreezeQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->account_book_balance_un_freeze_query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->account_book_balance_un_freeze_query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **requestNo** | **string**| &lt;div&gt; &lt;pre&gt;解冻请求号&lt;/pre&gt; &lt;/div&gt; |
 **merchantNo** | **string**| &lt;div&gt; &lt;pre&gt;商户商编号&lt;/pre&gt; &lt;/div&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookUnFreezeQueryResponseDTO**](../Model/AccountBookUnFreezeQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **account_book_balance_unfreeze**
AccountBookBalanceUnfreezeResponse account_book_balance_unfreeze(AccountBookBalanceUnfreezeRequest request)

解冻记账薄金额

解冻记账薄金额

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountBookBalanceUnfreezeRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setOrderFlowNo("orderFlowNo_example");
$request->setOrgRequestNo("orgRequestNo_example");
$request->setUnFreezeAmount("1.01");

try {
    $response = $api_client->account_book_balance_unfreeze($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->account_book_balance_unfreeze: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **orderFlowNo** | **string**|  | [optional]
 **orgRequestNo** | **string**|  | [optional]
 **unFreezeAmount** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookUnFreezeBalanceResponseDTO**](../Model/AccountBookUnFreezeBalanceResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **account_book_create**
AccountBookCreateResponse account_book_create(AccountBookCreateRequest request)

开立记账簿

开立记账簿

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountBookCreateRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AccountBookCreateRequestDto());

try {
    $response = $api_client->account_book_create($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->account_book_create: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookCreateRequestDto**](../Model/AccountBookCreateRequestDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookCreateResponseDto**](../Model/AccountBookCreateResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **account_book_modify**
AccountBookModifyResponse account_book_modify(AccountBookModifyRequest request)

更新记账簿

更新记账簿

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountBookModifyRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AccountBookUpdateRequestDto());

try {
    $response = $api_client->account_book_modify($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->account_book_modify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookUpdateRequestDto**](../Model/AccountBookUpdateRequestDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookUpdateResponseDto**](../Model/AccountBookUpdateResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **account_book_query_refund_v1_0**
AccountBookQueryRefundV10Response account_book_query_refund_v1_0(AccountBookQueryRefundV10Request request)

记账簿退款查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountBookQueryRefundV10Request();
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantRefundRequestNo("merchantRefundRequestNo_example");

try {
    $response = $api_client->account_book_query_refund_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->account_book_query_refund_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| 收款商户商编 |
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantRefundRequestNo** | **string**| 商户退款请求号。可包含字母、数字、下划线；需保证在商户端不重复 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\QueryAccountBookRefundRespDTO**](../Model/QueryAccountBookRefundRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **account_book_refund_v1_0**
AccountBookRefundV10Response account_book_refund_v1_0(AccountBookRefundV10Request request)

记账簿退款

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountBookRefundV10Request();
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantRefundRequestNo("merchantRefundRequestNo_example");
$request->setOriginalOrderNo("originalOrderNo_example");
$request->setRefundAmount(1.2);
$request->setBankPostscrip("bankPostscrip_example");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->account_book_refund_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->account_book_refund_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantRefundRequestNo** | **string**|  | [optional]
 **originalOrderNo** | **string**|  | [optional]
 **refundAmount** | **float**|  | [optional]
 **bankPostscrip** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookRefundRespDTO**](../Model/AccountBookRefundRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **account_individual_apply**
AccountIndividualApplyResponse account_individual_apply(AccountIndividualApplyRequest request)

付款到个人--申请添加个人用户

此服务针对于有付款给个人收款方且不满足使用企业付款场景的商户使用。商户向常用个人用户付款前，请先通过此接口申请添加个人用户信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountIndividualApplyRequest();
$request->setMerchantNo("merchantNo_example");
$request->setRequestNo("商户请求号，由商户自定义生成;示例值：TRANS2133213124");
$request->setName("name_example");
$request->setCertificateType("certificateType_example");
$request->setCertificateNo("certificateNo_example");
$request->setPhone("phone_example");
$request->setFrontUrl("frontUrl_example");
$request->setContraryUrl("contraryUrl_example");

try {
    $response = $api_client->account_individual_apply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->account_individual_apply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **certificateType** | **string**|  | [optional]
 **certificateNo** | **string**|  | [optional]
 **phone** | **string**|  | [optional]
 **frontUrl** | **string**|  | [optional]
 **contraryUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ApplyIndividualRespDTO**](../Model/ApplyIndividualRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **account_individual_modify**
AccountIndividualModifyResponse account_individual_modify(AccountIndividualModifyRequest request)

付款到个人--变更已添加的个人用户

付款到个人--变更已添加的个人用户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountIndividualModifyRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\ModifyIndividualRequestDTO());

try {
    $response = $api_client->account_individual_modify($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->account_individual_modify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\ModifyIndividualRequestDTO**](../Model/ModifyIndividualRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ModifyIndividualResponseDTO**](../Model/ModifyIndividualResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **account_individual_query**
AccountIndividualQueryResponse account_individual_query(AccountIndividualQueryRequest request)

付款到个人--查询已添加的个人用户

通过此服务查询付款商户已经添加的个人用户信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountIndividualQueryRequest();
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->account_individual_query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->account_individual_query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\QueryIndividualRespDTO**](../Model/QueryIndividualRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **account_individual_query_progress**
AccountIndividualQueryProgressResponse account_individual_query_progress(AccountIndividualQueryProgressRequest request)

付款到个人--查询申请进度

通过此接口服务查询个人用户添加进度

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountIndividualQueryProgressRequest();
$request->setRequestNo("商户请求号，由商户自定义生成;示例值：TRANS2133213124");

try {
    $response = $api_client->account_individual_query_progress($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->account_individual_query_progress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ApplyIndivdualProgressRespDTO**](../Model/ApplyIndivdualProgressRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **account_manage_account_open_v1_0**
AccountManageAccountOpenV10Response account_manage_account_open_v1_0(AccountManageAccountOpenV10Request request)

开立记账簿

商户请求该接口，申请开通买家记账簿

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountManageAccountOpenV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantAccountBookNo("merchantAccountBookNo_example");
$request->setMerchantAccountBookName("merchantAccountBookName_example");

try {
    $response = $api_client->account_manage_account_open_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->account_manage_account_open_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantAccountBookNo** | **string**|  | [optional]
 **merchantAccountBookName** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookCreateResponseDto**](../Model/AccountBookCreateResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **account_manage_account_query_v1_0**
AccountManageAccountQueryV10Response account_manage_account_query_v1_0(AccountManageAccountQueryV10Request request)

查询记账簿

商户请求该接口，查询相应记账簿余额。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountManageAccountQueryV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantAccountBookNo("merchantAccountBookNo_example");
$request->setYpAccountBookNo("ypAccountBookNo_example");
$request->setBookNo("bookNo_example");

try {
    $response = $api_client->account_manage_account_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->account_manage_account_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;记账簿所属的商户编号&lt;/p&gt; |
 **merchantAccountBookNo** | **string**| &lt;p&gt;商户侧记账簿编号和易宝记账簿编号至少有其中一个&lt;/p&gt; | [optional]
 **ypAccountBookNo** | **string**| &lt;p&gt;商户侧记账簿编号和易宝记账簿编号至少有其中一个&lt;/p&gt; | [optional]
 **bookNo** | **string**| &lt;p&gt;易宝记账簿编号（账户类型默认为V_CLEARING_SUSPENSE_ACCOUNT: 待清算专户用户记账簿）&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBalanceQueryResponseDto**](../Model/AccountBalanceQueryResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **account_manage_bankTradeFlow_query**
AccountManageBankTradeFlowQueryResponse account_manage_bankTradeFlow_query(AccountManageBankTradeFlowQueryRequest request)

银行账户流水查询

银行账户流水查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountManageBankTradeFlowQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setBankCode("bankCode_example");
$request->setBankAccountNo("bankAccountNo_example");
$request->setTrxStartDate("2024-01-01");
$request->setTrxEndDate("2024-01-02");
$request->setPageSize(100);
$request->setPageNo(1);

try {
    $response = $api_client->account_manage_bankTradeFlow_query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->account_manage_bankTradeFlow_query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;/p&gt; |
 **bankCode** | **string**| 可选项如下: HXBXB:百信银行 XWB:新网银行 SUNINGBANK:江苏苏商银行 WHLHB:蓝海银行 SMB_LARGE:江苏苏商银行_大额 XIB:厦门国际 |
 **bankAccountNo** | **string**| &lt;p&gt;银行账户号&lt;/p&gt; |
 **trxStartDate** | **string**| &lt;p&gt;格式：yyyy-MM-dd&lt;/p&gt; |
 **trxEndDate** | **string**| &lt;p&gt;格式：yyyy-MM-dd&lt;/p&gt; |
 **pageSize** | **int**| &lt;p&gt;银行编码为HXBXB时页大小只能为100；银行编码为WHLHB时页大小不能超过99&lt;/p&gt; |
 **pageNo** | **int**| &lt;p&gt;不填默认为1&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountTrxQueryRespDTO**](../Model/BankAccountTrxQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **account_manage_bank_account_query_v1_0**
AccountManageBankAccountQueryV10Response account_manage_bank_account_query_v1_0(AccountManageBankAccountQueryV10Request request)

开立银行账户查询



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountManageBankAccountQueryV10Request();
$request->setRequestNo("requestNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->account_manage_bank_account_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->account_manage_bank_account_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**| 商户订单号 |
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;div data-lark-html-role&#x3D;\&quot;root\&quot;&gt;&lt;span class&#x3D;\&quot;universal-card-text\&quot;&gt;易宝支付分配的的商户唯一标识&lt;/span&gt;&lt;/div&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\StandardOpenAccountQueryResponseDTO**](../Model/StandardOpenAccountQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **account_pay_order_v3**
AccountPayOrderV3Response account_pay_order_v3(AccountPayOrderV3Request request)

付款-下单-支持短验复核

为了保证出款成功，各农信社卡或账号16位以下的农业银行卡，建议或尽可能填写支行编码；

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountPayOrderV3Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RemitRequestDTO());

try {
    $response = $api_client->account_pay_order_v3($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->account_pay_order_v3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\RemitRequestDTO**](../Model/RemitRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RemitRespDTO**](../Model/RemitRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **account_remit_reverse_query**
AccountRemitReverseQueryResponse account_remit_reverse_query(AccountRemitReverseQueryRequest request)

付款冲退-查询

付款银行冲退订单查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountRemitReverseQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RemitOrderReverseQueryReqDTO());

try {
    $response = $api_client->account_remit_reverse_query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->account_remit_reverse_query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\RemitOrderReverseQueryReqDTO**](../Model/RemitOrderReverseQueryReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RemitOrderReverseQueryRespDTO**](../Model/RemitOrderReverseQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **account_transfer_b2b_order_v3**
AccountTransferB2bOrderV3Response account_transfer_b2b_order_v3(AccountTransferB2bOrderV3Request request)

转账-下单-支持短验复核

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountTransferB2bOrderV3Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\MgTransferReqDTO());

try {
    $response = $api_client->account_transfer_b2b_order_v3($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->account_transfer_b2b_order_v3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\MgTransferReqDTO**](../Model/MgTransferReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\MgTransferOrderRespDTO**](../Model/MgTransferOrderRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **accountinfosQuery**
AccountinfosQueryResponse accountinfosQuery(AccountinfosQueryRequest request)

全部账户余额查询



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountinfosQueryRequest();
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->accountinfosQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->accountinfosQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\QueryAccountInfoListRespDTO**](../Model/QueryAccountInfoListRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountinfos_query_v1_0**
AccountinfosQueryV10Response accountinfos_query_v1_0(AccountinfosQueryV10Request request)

全部账户余额查询



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AccountinfosQueryV10Request();
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->accountinfos_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->accountinfos_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\QueryAccountInfoListRespDTO**](../Model/QueryAccountInfoListRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **aliBatchTransfer**
AliBatchTransferResponse aliBatchTransfer(AliBatchTransferRequest request)

转账到支付宝

支持商户通过该接口发起转账到支付宝

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AliBatchTransferRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BatchProxyTransferReqDTO());

try {
    $response = $api_client->aliBatchTransfer($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->aliBatchTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BatchProxyTransferReqDTO**](../Model/BatchProxyTransferReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BatchProxyTransferRspDTO**](../Model/BatchProxyTransferRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **aliBatchTransferDetail**
AliBatchTransferDetailResponse aliBatchTransferDetail(AliBatchTransferDetailRequest request)

转账到支付宝记录查询

支持商户通过该接口查询转账到支付宝记录

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AliBatchTransferDetailRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BatchTransferDetailReqDTO());

try {
    $response = $api_client->aliBatchTransferDetail($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->aliBatchTransferDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BatchTransferDetailReqDTO**](../Model/BatchTransferDetailReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BatchTransferDetailRspDTO**](../Model/BatchTransferDetailRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **aliCancelContract**
AliCancelContractResponse aliCancelContract(AliCancelContractRequest request)

转账到支付宝-解约

支持商户通过该接口发起转账到支付宝解约

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AliCancelContractRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\CancelChannelBookReqDTO());

try {
    $response = $api_client->aliCancelContract($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->aliCancelContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\CancelChannelBookReqDTO**](../Model/CancelChannelBookReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\CancelChannelBookRspDTO**](../Model/CancelChannelBookRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **aliCapitalTransferQuery**
AliCapitalTransferQueryResponse aliCapitalTransferQuery(AliCapitalTransferQueryRequest request)

记账本资金拨入记录查询

支持商户通过该接口查询记账本资金拨入进度

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AliCapitalTransferQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\CapitalTransferApplyReqDTO());

try {
    $response = $api_client->aliCapitalTransferQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->aliCapitalTransferQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\CapitalTransferApplyReqDTO**](../Model/CapitalTransferApplyReqDTO.md)| 支持商户通过该接口查询记账本资金拨入进度 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\CapitalTransferApplyRspDTO**](../Model/CapitalTransferApplyRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **aliCaptialTransfer**
AliCaptialTransferResponse aliCaptialTransfer(AliCaptialTransferRequest request)

转账到支付宝-记账本资金拨入

支持商户通过该接口向已开立记账本发起资金拨入

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AliCaptialTransferRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\ChannelBookCapitalTransferReqDTO());

try {
    $response = $api_client->aliCaptialTransfer($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->aliCaptialTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\ChannelBookCapitalTransferReqDTO**](../Model/ChannelBookCapitalTransferReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ChannelBookCapitalTransferRspDTO**](../Model/ChannelBookCapitalTransferRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **aliChannelBookDeail**
AliChannelBookDeailResponse aliChannelBookDeail(AliChannelBookDeailRequest request)

转账到支付宝-记账本查询

支持商户通过该接口查询已开立的记账本

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AliChannelBookDeailRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\ChannelBookDetailQueryReqDTO());

try {
    $response = $api_client->aliChannelBookDeail($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->aliChannelBookDeail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\ChannelBookDetailQueryReqDTO**](../Model/ChannelBookDetailQueryReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ChannelBookDetailQueryRspDTO**](../Model/ChannelBookDetailQueryRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **aliOpenChannelBook**
AliOpenChannelBookResponse aliOpenChannelBook(AliOpenChannelBookRequest request)

转账到支付宝-开立记账本

支持商户通过该接口开立记账本，用于转账到支付宝账户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AliOpenChannelBookRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\OpenChannelBookReqDTO());

try {
    $response = $api_client->aliOpenChannelBook($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->aliOpenChannelBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\OpenChannelBookReqDTO**](../Model/OpenChannelBookReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\OpenChannelBookRsqDTO**](../Model/OpenChannelBookRsqDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **aliSignContract**
AliSignContractResponse aliSignContract(AliSignContractRequest request)

转账到支付宝-签约

支持商户通过该接口发起转账到支付宝签约

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AliSignContractRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\SignContractReqDTO());

try {
    $response = $api_client->aliSignContract($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->aliSignContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\SignContractReqDTO**](../Model/SignContractReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\SignContractRspDTO**](../Model/SignContractRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **aliSignContractQuery**
AliSignContractQueryResponse aliSignContractQuery(AliSignContractQueryRequest request)

转账到支付宝-签约查询

支持商户通过该接口发起转账到支付宝签约进度

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AliSignContractQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\SignContractApplyQueryReqDTO());

try {
    $response = $api_client->aliSignContractQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->aliSignContractQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\SignContractApplyQueryReqDTO**](../Model/SignContractApplyQueryReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\SignContractApplyQueryRspDTO**](../Model/SignContractApplyQueryRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **alipay_Single_Proxy_Transfer**
AlipaySingleProxyTransferResponse alipay_Single_Proxy_Transfer(AlipaySingleProxyTransferRequest request)

转账到支付宝（单笔）

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AlipaySingleProxyTransferRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\SingleProxyTransferChannelReqDTO());

try {
    $response = $api_client->alipay_Single_Proxy_Transfer($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->alipay_Single_Proxy_Transfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\SingleProxyTransferChannelReqDTO**](../Model/SingleProxyTransferChannelReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\SingleProxyTransferRspDTO**](../Model/SingleProxyTransferRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **appoint_target_remit**
AppointTargetRemitResponse appoint_target_remit(AppointTargetRemitRequest request)

定向付款-下单

为了保证出款成功，各农信社卡或账号16位以下的农业银行卡，建议或尽可能填写支行编码； 如商户已成功对接过银联，选择采用银联接口获取总行编码及支行编码，可能存在使用过程中，易宝无法识别的总行编码或支行编码，如出现此情况，请联系易宝运营人员处理

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AppointTargetRemitRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\YopAppointTargetRemitRequestDTO());

try {
    $response = $api_client->appoint_target_remit($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->appoint_target_remit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\YopAppointTargetRemitRequestDTO**](../Model/YopAppointTargetRemitRequestDTO.md)| 定向付款的下单的请求参数 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\YopAppointTargetRemitResponseDTO**](../Model/YopAppointTargetRemitResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **autoWithdrawRuleCancel**
AutoWithdrawRuleCancelResponse autoWithdrawRuleCancel(AutoWithdrawRuleCancelRequest request)

自动提现-规则作废

自动提现-规则作废

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AutoWithdrawRuleCancelRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setRuleId("ruleId_example");

try {
    $response = $api_client->autoWithdrawRuleCancel($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->autoWithdrawRuleCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **ruleId** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\YopAutoWithdrawRuleCancelResponseDTO**](../Model/YopAutoWithdrawRuleCancelResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **autoWithdrawRuleQuery**
AutoWithdrawRuleQueryResponse autoWithdrawRuleQuery(AutoWithdrawRuleQueryRequest request)

自动提现-规则查询

自动提现-规则查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AutoWithdrawRuleQueryRequest();
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->autoWithdrawRuleQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->autoWithdrawRuleQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| &lt;p&gt;提现商户编号&lt;/p&gt; |
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\YopAutoWithdrawRuleQueryResponseDTO**](../Model/YopAutoWithdrawRuleQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **autoWithdrawRuleSet**
AutoWithdrawRuleSetResponse autoWithdrawRuleSet(AutoWithdrawRuleSetRequest request)

自动提现-规则设置

自动提现-规则设置

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AutoWithdrawRuleSetRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setBindId("bindId_example");
$request->setBankAccountNo("bankAccountNo_example");
$request->setReceiveType("receiveType_example");
$request->setTriggerTime("triggerTime_example");
$request->setRemainAmount(1.2);
$request->setRemark("remark_example");
$request->setNotifyAddress("notifyAddress_example");

try {
    $response = $api_client->autoWithdrawRuleSet($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->autoWithdrawRuleSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **bindId** | **string**|  | [optional]
 **bankAccountNo** | **string**|  | [optional]
 **receiveType** | **string**|  | [optional]
 **triggerTime** | **string**|  | [optional]
 **remainAmount** | **float**|  | [optional]
 **remark** | **string**|  | [optional]
 **notifyAddress** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\YopAutoWithdrawRuleSetResponseDTO**](../Model/YopAutoWithdrawRuleSetResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **auto_withdraw_rule_cancel_v1_0**
AutoWithdrawRuleCancelV10Response auto_withdraw_rule_cancel_v1_0(AutoWithdrawRuleCancelV10Request request)

自动提现-规则作废

自动提现-规则作废

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AutoWithdrawRuleCancelV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setRuleId("ruleId_example");

try {
    $response = $api_client->auto_withdraw_rule_cancel_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->auto_withdraw_rule_cancel_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **ruleId** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\YopAutoWithdrawRuleCancelResponseDTO**](../Model/YopAutoWithdrawRuleCancelResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **auto_withdraw_rule_query_v1_0**
AutoWithdrawRuleQueryV10Response auto_withdraw_rule_query_v1_0(AutoWithdrawRuleQueryV10Request request)

自动提现-规则查询

自动提现-规则查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AutoWithdrawRuleQueryV10Request();
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->auto_withdraw_rule_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->auto_withdraw_rule_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| &lt;p&gt;提现商户编号&lt;/p&gt; |
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\YopAutoWithdrawRuleQueryResponseDTO**](../Model/YopAutoWithdrawRuleQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **auto_withdraw_rule_set_v1_0**
AutoWithdrawRuleSetV10Response auto_withdraw_rule_set_v1_0(AutoWithdrawRuleSetV10Request request)

自动提现-规则设置

自动提现-规则设置

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\AutoWithdrawRuleSetV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setBindId("bindId_example");
$request->setBankAccountNo("bankAccountNo_example");
$request->setReceiveType("receiveType_example");
$request->setTriggerTime("triggerTime_example");
$request->setRemainAmount(1.2);
$request->setRemark("remark_example");
$request->setNotifyAddress("notifyAddress_example");

try {
    $response = $api_client->auto_withdraw_rule_set_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->auto_withdraw_rule_set_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **bindId** | **string**|  | [optional]
 **bankAccountNo** | **string**|  | [optional]
 **receiveType** | **string**|  | [optional]
 **triggerTime** | **string**|  | [optional]
 **remainAmount** | **float**|  | [optional]
 **remark** | **string**|  | [optional]
 **notifyAddress** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\YopAutoWithdrawRuleSetResponseDTO**](../Model/YopAutoWithdrawRuleSetResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **balanceQuery**
BalanceQueryResponse balanceQuery(BalanceQueryRequest request)

资金账户余额查询

查询商户余额

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BalanceQueryRequest();
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->balanceQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->balanceQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;br /&gt;易宝支付分配的的商户唯一标识&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountInfoRespDTO**](../Model/AccountInfoRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **balance_query_v1_0**
BalanceQueryV10Response balance_query_v1_0(BalanceQueryV10Request request)

资金账户余额查询

查询商户余额

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BalanceQueryV10Request();
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->balance_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->balance_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;br /&gt;易宝支付分配的的商户唯一标识&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountInfoRespDTO**](../Model/AccountInfoRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankAccountApplyDepositRefund**
BankAccountApplyDepositRefundResponse bankAccountApplyDepositRefund(BankAccountApplyDepositRefundRequest request)

银行入金退回

基于银行入金流水做资金退回

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankAccountApplyDepositRefundRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BankAccountRefundReqDTO());

try {
    $response = $api_client->bankAccountApplyDepositRefund($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bankAccountApplyDepositRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountRefundReqDTO**](../Model/BankAccountRefundReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountRefundRespDTO**](../Model/BankAccountRefundRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bankAccountApplySubAccount**
BankAccountApplySubAccountResponse bankAccountApplySubAccount(BankAccountApplySubAccountRequest request)

申请开通缴费账户

申请开通缴费账户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankAccountApplySubAccountRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\OpenSubBankAccountReqDTO());

try {
    $response = $api_client->bankAccountApplySubAccount($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bankAccountApplySubAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\OpenSubBankAccountReqDTO**](../Model/OpenSubBankAccountReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\OpenSubBankAccountRespDTO**](../Model/OpenSubBankAccountRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bankAccountAuthApply**
BankAccountAuthApplyResponse bankAccountAuthApply(BankAccountAuthApplyRequest request)

开立银行账户-申请短验

开立银行账户，申请短验接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankAccountAuthApplyRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bankAccountAuthApply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bankAccountAuthApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\OpenAccountAuthApplyRespDTO**](../Model/OpenAccountAuthApplyRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankAccountAuthConfirm**
BankAccountAuthConfirmResponse bankAccountAuthConfirm(BankAccountAuthConfirmRequest request)

开立银行账户-短验确认

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankAccountAuthConfirmRequest();
$request->setAuthCode("authCode_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bankAccountAuthConfirm($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bankAccountAuthConfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authCode** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\OpenAccountAuthConfirmRespDTO**](../Model/OpenAccountAuthConfirmRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankAccountDownloadReceipt**
BankAccountDownloadReceiptResponse bankAccountDownloadReceipt(BankAccountDownloadReceiptRequest request)

付款方银行转账回单

通过该接口获取付款方银行转账回单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankAccountDownloadReceiptRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setBankCode("bankCode_example");
$request->setBankAccountNo("bankAccountNo_example");
$request->setBankSerialNo("bankSerialNo_example");
$request->setTrxDateTime("trxDateTime_example");

try {
    $response = $api_client->bankAccountDownloadReceipt($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bankAccountDownloadReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;/p&gt; |
 **bankCode** | **string**| 可选项如下: SMB_LARGE:江苏苏商银行_大额 |
 **bankAccountNo** | **string**| &lt;p&gt;银行账户号&lt;/p&gt; |
 **bankSerialNo** | **string**| &lt;p&gt;银行流水号&lt;/p&gt; |
 **trxDateTime** | **string**| &lt;p&gt;格式：yyyy-MM-dd HH:mm:ss&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\DownloadReceiptRespDTO**](../Model/DownloadReceiptRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankAccountQueryDepositRefund**
BankAccountQueryDepositRefundResponse bankAccountQueryDepositRefund(BankAccountQueryDepositRefundRequest request)

银行入金流水退回查询

银行入金流水退回查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankAccountQueryDepositRefundRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setRefundFlowNo("refundFlowNo_example");

try {
    $response = $api_client->bankAccountQueryDepositRefund($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bankAccountQueryDepositRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;易宝支付分配的的商户唯一标识&lt;/p&gt; |
 **refundFlowNo** | **string**| &lt;p&gt;由商户自定义生成&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\QueryBankAccountRefundRespDTO**](../Model/QueryBankAccountRefundRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankAccountQuerySubAccount**
BankAccountQuerySubAccountResponse bankAccountQuerySubAccount(BankAccountQuerySubAccountRequest request)

查询缴费账户

查询缴费账户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankAccountQuerySubAccountRequest();
$request->setParentMerchantNo("100400612345");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantAccountUid("merchantAccountUid_example");
$request->setBankCode("bankCode_example");
$request->setBankAccountNo("bankAccountNo_example");

try {
    $response = $api_client->bankAccountQuerySubAccount($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bankAccountQuerySubAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;pre&gt;商户编号&lt;br /&gt;易宝支付分配的的商户唯一标识&lt;/pre&gt; |
 **merchantAccountUid** | **string**| &lt;p&gt;数字、字母、下划线组合&lt;/p&gt; |
 **bankCode** | **string**| &lt;p&gt;可选项如下：&lt;/p&gt; &lt;pre&gt;SMB_LARGE&lt;/pre&gt; |
 **bankAccountNo** | **string**| &lt;pre&gt;银行账户号&lt;br /&gt;备注：对应银行开户接口中，开成功的银行账户号&lt;/pre&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\QueryOpenSubBankAccountRespDTO**](../Model/QueryOpenSubBankAccountRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankAccountSubAccountBindCard**
BankAccountSubAccountBindCardResponse bankAccountSubAccountBindCard(BankAccountSubAccountBindCardRequest request)

缴费账户绑定卡

缴费账户绑定卡

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankAccountSubAccountBindCardRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\SubBankAccountBindCardReqDTO());

try {
    $response = $api_client->bankAccountSubAccountBindCard($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bankAccountSubAccountBindCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\SubBankAccountBindCardReqDTO**](../Model/SubBankAccountBindCardReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\SubBankAccountBindCardRespDTO**](../Model/SubBankAccountBindCardRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bankClearChangeCard**
BankClearChangeCardResponse bankClearChangeCard(BankClearChangeCardRequest request)

银行清分账户变更绑卡



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankClearChangeCardRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BankClearChangeBindCardReqDTO());

try {
    $response = $api_client->bankClearChangeCard($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bankClearChangeCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BankClearChangeBindCardReqDTO**](../Model/BankClearChangeBindCardReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BankClearChangeBindCardRspDTO**](../Model/BankClearChangeBindCardRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bankOpenSupplement**
BankOpenSupplementResponse bankOpenSupplement(BankOpenSupplementRequest request)

资质信息补录

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankOpenSupplementRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\OpenBankExtendSupplementReqDTO());

try {
    $response = $api_client->bankOpenSupplement($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bankOpenSupplement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\OpenBankExtendSupplementReqDTO**](../Model/OpenBankExtendSupplementReqDTO.md)| 多渠道开户资质信息补录 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\OpenBankExtendSupplementRspDTO**](../Model/OpenBankExtendSupplementRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bankPaymentOrder**
BankPaymentOrderResponse bankPaymentOrder(BankPaymentOrderRequest request)

银行账户支付

提供银行账户支付服务

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankPaymentOrderRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BankAccountPaymentRequestDto());

try {
    $response = $api_client->bankPaymentOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bankPaymentOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountPaymentRequestDto**](../Model/BankAccountPaymentRequestDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountPaymentRespDto**](../Model/BankAccountPaymentRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bank_account_auth_apply**
BankAccountAuthApplyResponse bank_account_auth_apply(BankAccountAuthApplyRequest request)

开立银行账户-申请短验

开立银行账户，申请短验接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankAccountAuthApplyRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bank_account_auth_apply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bank_account_auth_apply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\OpenAccountAuthApplyRespDTO**](../Model/OpenAccountAuthApplyRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bank_account_auth_confirm**
BankAccountAuthConfirmResponse bank_account_auth_confirm(BankAccountAuthConfirmRequest request)

开立银行账户-短验确认

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankAccountAuthConfirmRequest();
$request->setAuthCode("authCode_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bank_account_auth_confirm($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bank_account_auth_confirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authCode** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\OpenAccountAuthConfirmRespDTO**](../Model/OpenAccountAuthConfirmRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bank_account_balance_query**
BankAccountBalanceQueryResponse bank_account_balance_query(BankAccountBalanceQueryRequest request)

银行清分账户余额查询

支持商户通过此接口查询银行账户余额

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankAccountBalanceQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BankAccountBalanceReqDTO());

try {
    $response = $api_client->bank_account_balance_query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bank_account_balance_query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountBalanceReqDTO**](../Model/BankAccountBalanceReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountBalanceRspDTO**](../Model/BankAccountBalanceRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bank_account_deposit_refund_apply**
BankAccountDepositRefundApplyResponse bank_account_deposit_refund_apply(BankAccountDepositRefundApplyRequest request)

银行入金退回

基于银行入金流水做资金退回

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankAccountDepositRefundApplyRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BankAccountRefundReqDTO());

try {
    $response = $api_client->bank_account_deposit_refund_apply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bank_account_deposit_refund_apply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountRefundReqDTO**](../Model/BankAccountRefundReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountRefundRespDTO**](../Model/BankAccountRefundRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bank_account_download_receipt**
BankAccountDownloadReceiptResponse bank_account_download_receipt(BankAccountDownloadReceiptRequest request)

付款方银行转账回单

通过该接口获取付款方银行转账回单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankAccountDownloadReceiptRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setBankCode("bankCode_example");
$request->setBankAccountNo("bankAccountNo_example");
$request->setBankSerialNo("bankSerialNo_example");
$request->setTrxDateTime("trxDateTime_example");

try {
    $response = $api_client->bank_account_download_receipt($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bank_account_download_receipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;/p&gt; |
 **bankCode** | **string**| 可选项如下: SMB_LARGE:江苏苏商银行_大额 |
 **bankAccountNo** | **string**| &lt;p&gt;银行账户号&lt;/p&gt; |
 **bankSerialNo** | **string**| &lt;p&gt;银行流水号&lt;/p&gt; |
 **trxDateTime** | **string**| &lt;p&gt;格式：yyyy-MM-dd HH:mm:ss&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\DownloadReceiptRespDTO**](../Model/DownloadReceiptRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bank_account_query_deposit_refund**
BankAccountQueryDepositRefundResponse bank_account_query_deposit_refund(BankAccountQueryDepositRefundRequest request)

银行入金流水退回查询

银行入金流水退回查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankAccountQueryDepositRefundRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setRefundFlowNo("refundFlowNo_example");

try {
    $response = $api_client->bank_account_query_deposit_refund($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bank_account_query_deposit_refund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;易宝支付分配的的商户唯一标识&lt;/p&gt; |
 **refundFlowNo** | **string**| &lt;p&gt;由商户自定义生成&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\QueryBankAccountRefundRespDTO**](../Model/QueryBankAccountRefundRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bank_account_query_sub_account**
BankAccountQuerySubAccountResponse bank_account_query_sub_account(BankAccountQuerySubAccountRequest request)

查询缴费账户

查询缴费账户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankAccountQuerySubAccountRequest();
$request->setParentMerchantNo("100400612345");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantAccountUid("merchantAccountUid_example");
$request->setBankCode("bankCode_example");
$request->setBankAccountNo("bankAccountNo_example");

try {
    $response = $api_client->bank_account_query_sub_account($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bank_account_query_sub_account: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;pre&gt;商户编号&lt;br /&gt;易宝支付分配的的商户唯一标识&lt;/pre&gt; |
 **merchantAccountUid** | **string**| &lt;p&gt;数字、字母、下划线组合&lt;/p&gt; |
 **bankCode** | **string**| &lt;p&gt;可选项如下：&lt;/p&gt; &lt;pre&gt;SMB_LARGE&lt;/pre&gt; |
 **bankAccountNo** | **string**| &lt;pre&gt;银行账户号&lt;br /&gt;备注：对应银行开户接口中，开成功的银行账户号&lt;/pre&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\QueryOpenSubBankAccountRespDTO**](../Model/QueryOpenSubBankAccountRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bank_account_sub_account_apply**
BankAccountSubAccountApplyResponse bank_account_sub_account_apply(BankAccountSubAccountApplyRequest request)

申请开通缴费账户

申请开通缴费账户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankAccountSubAccountApplyRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\OpenSubBankAccountReqDTO());

try {
    $response = $api_client->bank_account_sub_account_apply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bank_account_sub_account_apply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\OpenSubBankAccountReqDTO**](../Model/OpenSubBankAccountReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\OpenSubBankAccountRespDTO**](../Model/OpenSubBankAccountRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bank_account_sub_account_bind_card**
BankAccountSubAccountBindCardResponse bank_account_sub_account_bind_card(BankAccountSubAccountBindCardRequest request)

缴费账户绑定卡

缴费账户绑定卡

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankAccountSubAccountBindCardRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\SubBankAccountBindCardReqDTO());

try {
    $response = $api_client->bank_account_sub_account_bind_card($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bank_account_sub_account_bind_card: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\SubBankAccountBindCardReqDTO**](../Model/SubBankAccountBindCardReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\SubBankAccountBindCardRespDTO**](../Model/SubBankAccountBindCardRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bank_clear_bind_card**
BankClearBindCardResponse bank_clear_bind_card(BankClearBindCardRequest request)

银行清分绑卡

支持商户通过此接口为开立银行账户绑定银行卡

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankClearBindCardRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BindClearCardReqDTO());

try {
    $response = $api_client->bank_clear_bind_card($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bank_clear_bind_card: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BindClearCardReqDTO**](../Model/BindClearCardReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BankClearBindCardRspDTO**](../Model/BankClearBindCardRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bank_clear_change_bind_card**
BankClearChangeBindCardResponse bank_clear_change_bind_card(BankClearChangeBindCardRequest request)

银行清分账户变更绑卡



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankClearChangeBindCardRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BankClearChangeBindCardReqDTO());

try {
    $response = $api_client->bank_clear_change_bind_card($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bank_clear_change_bind_card: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BankClearChangeBindCardReqDTO**](../Model/BankClearChangeBindCardReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BankClearChangeBindCardRspDTO**](../Model/BankClearChangeBindCardRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bank_payment_order_v1_0**
BankPaymentOrderV10Response bank_payment_order_v1_0(BankPaymentOrderV10Request request)

银行账户支付

提供银行账户支付服务

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankPaymentOrderV10Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BankAccountPaymentRequestDto());

try {
    $response = $api_client->bank_payment_order_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bank_payment_order_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountPaymentRequestDto**](../Model/BankAccountPaymentRequestDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountPaymentRespDto**](../Model/BankAccountPaymentRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bankaccountbalancequery**
BankaccountbalancequeryResponse bankaccountbalancequery(BankaccountbalancequeryRequest request)

银行清分账户余额查询

支持商户通过此接口查询银行账户余额

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankaccountbalancequeryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BankAccountBalanceReqDTO());

try {
    $response = $api_client->bankaccountbalancequery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bankaccountbalancequery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountBalanceReqDTO**](../Model/BankAccountBalanceReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountBalanceRspDTO**](../Model/BankAccountBalanceRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bankclear_apply_record**
BankclearApplyRecordResponse bankclear_apply_record(BankclearApplyRecordRequest request)

开立银行清分账户查询

支持商户通过此接口查询开户进度

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankclearApplyRecordRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\YopOpenRecordReqDTO());

try {
    $response = $api_client->bankclear_apply_record($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bankclear_apply_record: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\YopOpenRecordReqDTO**](../Model/YopOpenRecordReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BankClearAccountOpenApplyVoDTO**](../Model/BankClearAccountOpenApplyVoDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bankclearbindcard**
BankclearbindcardResponse bankclearbindcard(BankclearbindcardRequest request)

银行清分绑卡

支持商户通过此接口为开立银行账户绑定银行卡

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankclearbindcardRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BindClearCardReqDTO());

try {
    $response = $api_client->bankclearbindcard($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bankclearbindcard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BindClearCardReqDTO**](../Model/BindClearCardReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BankClearBindCardRspDTO**](../Model/BankClearBindCardRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bankclerapplyrecord**
BankclerapplyrecordResponse bankclerapplyrecord(BankclerapplyrecordRequest request)

开立银行清分账户查询

支持商户通过此接口查询开户进度

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BankclerapplyrecordRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\YopOpenRecordReqDTO());

try {
    $response = $api_client->bankclerapplyrecord($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bankclerapplyrecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\YopOpenRecordReqDTO**](../Model/YopOpenRecordReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BankClearAccountOpenApplyVoDTO**](../Model/BankClearAccountOpenApplyVoDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bind_card_auth_apply**
BindCardAuthApplyResponse bind_card_auth_apply(BindCardAuthApplyRequest request)

银行清分账户绑卡-申请短验

支持商户通过该接口申请绑卡短信验证

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BindCardAuthApplyRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BindCardAuthApplyReqDTO());

try {
    $response = $api_client->bind_card_auth_apply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bind_card_auth_apply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BindCardAuthApplyReqDTO**](../Model/BindCardAuthApplyReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BindCardAuthApplyRspDTO**](../Model/BindCardAuthApplyRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bind_card_auth_apply_confirm**
BindCardAuthApplyConfirmResponse bind_card_auth_apply_confirm(BindCardAuthApplyConfirmRequest request)

银行账户绑卡-验证确认

支持商户通过此接口进行绑卡验证确认

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BindCardAuthApplyConfirmRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BindCardAuthApplyConfirmReqDTO());

try {
    $response = $api_client->bind_card_auth_apply_confirm($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bind_card_auth_apply_confirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BindCardAuthApplyConfirmReqDTO**](../Model/BindCardAuthApplyConfirmReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BindCardAuthApplyConfirmRspDTO**](../Model/BindCardAuthApplyConfirmRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bindcardauthapply**
BindcardauthapplyResponse bindcardauthapply(BindcardauthapplyRequest request)

银行清分账户绑卡-申请短验

支持商户通过该接口申请绑卡短信验证

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BindcardauthapplyRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BindCardAuthApplyReqDTO());

try {
    $response = $api_client->bindcardauthapply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bindcardauthapply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BindCardAuthApplyReqDTO**](../Model/BindCardAuthApplyReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BindCardAuthApplyRspDTO**](../Model/BindCardAuthApplyRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bindcardauthapplyconfirm**
BindcardauthapplyconfirmResponse bindcardauthapplyconfirm(BindcardauthapplyconfirmRequest request)

银行账户绑卡-验证确认

支持商户通过此接口进行绑卡验证确认

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\BindcardauthapplyconfirmRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BindCardAuthApplyConfirmReqDTO());

try {
    $response = $api_client->bindcardauthapplyconfirm($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->bindcardauthapplyconfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BindCardAuthApplyConfirmReqDTO**](../Model/BindCardAuthApplyConfirmReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BindCardAuthApplyConfirmRspDTO**](../Model/BindCardAuthApplyConfirmRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **downloadDepositNotifyReceipt**
DownloadDepositNotifyReceiptResponse downloadDepositNotifyReceipt(DownloadDepositNotifyReceiptRequest request)

多渠道入金通知回单下载

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\DownloadDepositNotifyReceiptRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\DepositNotifyReceiptReqDTO());

try {
    $response = $api_client->downloadDepositNotifyReceipt($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->downloadDepositNotifyReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\DepositNotifyReceiptReqDTO**](../Model/DepositNotifyReceiptReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\DepositNotifyReceiptRespDTO**](../Model/DepositNotifyReceiptRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **download_deposit_notify_receipt**
DownloadDepositNotifyReceiptResponse download_deposit_notify_receipt(DownloadDepositNotifyReceiptRequest request)

多渠道入金通知回单下载

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\DownloadDepositNotifyReceiptRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\DepositNotifyReceiptReqDTO());

try {
    $response = $api_client->download_deposit_notify_receipt($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->download_deposit_notify_receipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\DepositNotifyReceiptReqDTO**](../Model/DepositNotifyReceiptReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\DepositNotifyReceiptRespDTO**](../Model/DepositNotifyReceiptRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **enterpriseAccountBookPayOrder**
EnterpriseAccountBookPayOrderResponse enterpriseAccountBookPayOrder(EnterpriseAccountBookPayOrderRequest request)

记账薄支付

记账薄支付

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAccountBookPayOrderRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AccountBookPaymentRequestDto());

try {
    $response = $api_client->enterpriseAccountBookPayOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->enterpriseAccountBookPayOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookPaymentRequestDto**](../Model/AccountBookPaymentRequestDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookPaymentRespDto**](../Model/AccountBookPaymentRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **enterpriseAccountPayOrder**
EnterpriseAccountPayOrderResponse enterpriseAccountPayOrder(EnterpriseAccountPayOrderRequest request)

企业账户支付-下单

企业账户支付提供商户支付给其他商家的能力，主要解决收单场景中商户余额付款需求，如购买机票等

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAccountPayOrderRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AccountPaymentRequestDto());

try {
    $response = $api_client->enterpriseAccountPayOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->enterpriseAccountPayOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\AccountPaymentRequestDto**](../Model/AccountPaymentRequestDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountPaymentRespDto**](../Model/AccountPaymentRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **enterpriseAutoPaymentOrder**
EnterpriseAutoPaymentOrderResponse enterpriseAutoPaymentOrder(EnterpriseAutoPaymentOrderRequest request)

企业账户支付-自动付款

付款方主动发起的付款请求

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAutoPaymentOrderRequest();
$request->setParentMerchantNo("10014242005");
$request->setMerchantNo("10014242006");
$request->setPayerMerchantNo("10014242005");
$request->setOrderId("merchant12345");
$request->setOrderAmount(0.01);
$request->setFundProcessType("fundProcessType_example");
$request->setGoodsName("旺仔牛奶");
$request->setExpiredTime("2021-05-12 13:23:45");
$request->setNotifyUrl("notifyUrl_example");
$request->setMemo("memo_example");
$request->setPayerNotifyUrl("payerNotifyUrl_example");
$request->setCsUrl("csUrl_example");

try {
    $response = $api_client->enterpriseAutoPaymentOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->enterpriseAutoPaymentOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **payerMerchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **expiredTime** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **payerNotifyUrl** | **string**|  | [optional]
 **csUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AutoPaymentRespDto**](../Model/AutoPaymentRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **enterpriseAutoPaymentOrderHlzh**
EnterpriseAutoPaymentOrderHlzhResponse enterpriseAutoPaymentOrderHlzh(EnterpriseAutoPaymentOrderHlzhRequest request)

企业账户支付-自动付款-航旅纵横版

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAutoPaymentOrderHlzhRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\HLZHAutoPaymentReqDto());

try {
    $response = $api_client->enterpriseAutoPaymentOrderHlzh($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->enterpriseAutoPaymentOrderHlzh: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\HLZHAutoPaymentReqDto**](../Model/HLZHAutoPaymentReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\HLZHAutoPaymentRespDto**](../Model/HLZHAutoPaymentRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **enterpriseAutoPaymentQuery**
EnterpriseAutoPaymentQueryResponse enterpriseAutoPaymentQuery(EnterpriseAutoPaymentQueryRequest request)

企业账户支付-自动付款订单查询

查询自动付款订单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAutoPaymentQueryRequest();
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setOrderDate("orderDate_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");

try {
    $response = $api_client->enterpriseAutoPaymentQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->enterpriseAutoPaymentQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |
 **orderId** | **string**| 商户系统内部生成的订单号&lt;br&gt;如填写易宝内部订单号则可以不填，否则必填 | [optional]
 **orderDate** | **string**| 订单日期&lt;br&gt;如填写易宝内部订单号则可以不填，否则必填 | [optional]
 **uniqueOrderNo** | **string**| 易宝内部订单号&lt;br&gt;如填写此项，订单号及订单日期可以不填。如同时填写将以易宝内部订单号为准 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AutoPaymentQueryRespDto**](../Model/AutoPaymentQueryRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **enterpriseTokenPayOrder**
EnterpriseTokenPayOrderResponse enterpriseTokenPayOrder(EnterpriseTokenPayOrderRequest request)

企业账户支付-token支付

企业账户支付-token支付

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseTokenPayOrderRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setToken("token_example");
$request->setPayerMerchantNo("payerMerchantNo_example");

try {
    $response = $api_client->enterpriseTokenPayOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->enterpriseTokenPayOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **payerMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\TokenPaymentResponseDto**](../Model/TokenPaymentResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **enterpriseWithholdingCheckBalance**
EnterpriseWithholdingCheckBalanceResponse enterpriseWithholdingCheckBalance(EnterpriseWithholdingCheckBalanceRequest request)

企业账户支付-关系扣款余额预校验

企业账户支付-关系扣款余额预校验

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseWithholdingCheckBalanceRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setPayerMerchantNo("payerMerchantNo_example");
$request->setTradeAmount(1.2);

try {
    $response = $api_client->enterpriseWithholdingCheckBalance($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->enterpriseWithholdingCheckBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **payerMerchantNo** | **string**|  | [optional]
 **tradeAmount** | **float**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountPaymentBaseResponseDto**](../Model/AccountPaymentBaseResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **enterpriseWithholdingOrder**
EnterpriseWithholdingOrderResponse enterpriseWithholdingOrder(EnterpriseWithholdingOrderRequest request)

企业账户支付-关系扣款

企业账户支付-关系扣款

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseWithholdingOrderRequest();
$request->setParentMerchantNo("10012426723");
$request->setMerchantNo("10014242004");
$request->setPayerMerchantNo("10014242005");
$request->setOrderId("merchant12345");
$request->setOrderAmount(88.88);
$request->setFundProcessType("fundProcessType_example");
$request->setGoodsName("旺仔牛奶");
$request->setExpiredTime("2017-12-12 13:23:45");
$request->setNotifyUrl("notifyUrl_example");
$request->setMemo("费用");
$request->setPayerNotifyUrl("payerNotifyUrl_example");
$request->setCsUrl("csUrl_example");
$request->setYpAccountBookNo("ypAccountBookNo_example");
$request->setYpPromotionInfo("ypPromotionInfo_example");

try {
    $response = $api_client->enterpriseWithholdingOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->enterpriseWithholdingOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **payerMerchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **expiredTime** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **payerNotifyUrl** | **string**|  | [optional]
 **csUrl** | **string**|  | [optional]
 **ypAccountBookNo** | **string**|  | [optional]
 **ypPromotionInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\WithholdingPaymentRespDto**](../Model/WithholdingPaymentRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **enterprise_account_book_pay_order_v1_0**
EnterpriseAccountBookPayOrderV10Response enterprise_account_book_pay_order_v1_0(EnterpriseAccountBookPayOrderV10Request request)

记账薄支付

记账薄支付

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAccountBookPayOrderV10Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AccountBookPaymentRequestDto());

try {
    $response = $api_client->enterprise_account_book_pay_order_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->enterprise_account_book_pay_order_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookPaymentRequestDto**](../Model/AccountBookPaymentRequestDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookPaymentRespDto**](../Model/AccountBookPaymentRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **enterprise_account_pay_order_v1_0**
EnterpriseAccountPayOrderV10Response enterprise_account_pay_order_v1_0(EnterpriseAccountPayOrderV10Request request)

企业账户支付-下单

企业账户支付提供商户支付给其他商家的能力，主要解决收单场景中商户余额付款需求，如购买机票等

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAccountPayOrderV10Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AccountPaymentRequestDto());

try {
    $response = $api_client->enterprise_account_pay_order_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->enterprise_account_pay_order_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\AccountPaymentRequestDto**](../Model/AccountPaymentRequestDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountPaymentRespDto**](../Model/AccountPaymentRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **enterprise_auto_payment_order_hlzh**
EnterpriseAutoPaymentOrderHlzhResponse enterprise_auto_payment_order_hlzh(EnterpriseAutoPaymentOrderHlzhRequest request)

企业账户支付-自动付款-航旅纵横版

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAutoPaymentOrderHlzhRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\HLZHAutoPaymentReqDto());

try {
    $response = $api_client->enterprise_auto_payment_order_hlzh($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->enterprise_auto_payment_order_hlzh: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\HLZHAutoPaymentReqDto**](../Model/HLZHAutoPaymentReqDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\HLZHAutoPaymentRespDto**](../Model/HLZHAutoPaymentRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **enterprise_auto_payment_order_v1_0**
EnterpriseAutoPaymentOrderV10Response enterprise_auto_payment_order_v1_0(EnterpriseAutoPaymentOrderV10Request request)

企业账户支付-自动付款

付款方主动发起的付款请求

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAutoPaymentOrderV10Request();
$request->setParentMerchantNo("10014242005");
$request->setMerchantNo("10014242006");
$request->setPayerMerchantNo("10014242005");
$request->setOrderId("merchant12345");
$request->setOrderAmount(0.01);
$request->setFundProcessType("fundProcessType_example");
$request->setGoodsName("旺仔牛奶");
$request->setExpiredTime("2021-05-12 13:23:45");
$request->setNotifyUrl("notifyUrl_example");
$request->setMemo("memo_example");
$request->setPayerNotifyUrl("payerNotifyUrl_example");
$request->setCsUrl("csUrl_example");

try {
    $response = $api_client->enterprise_auto_payment_order_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->enterprise_auto_payment_order_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **payerMerchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **expiredTime** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **payerNotifyUrl** | **string**|  | [optional]
 **csUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AutoPaymentRespDto**](../Model/AutoPaymentRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **enterprise_auto_payment_query_v1_0**
EnterpriseAutoPaymentQueryV10Response enterprise_auto_payment_query_v1_0(EnterpriseAutoPaymentQueryV10Request request)

企业账户支付-自动付款订单查询

查询自动付款订单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAutoPaymentQueryV10Request();
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setOrderDate("orderDate_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");

try {
    $response = $api_client->enterprise_auto_payment_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->enterprise_auto_payment_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |
 **orderId** | **string**| 商户系统内部生成的订单号&lt;br&gt;如填写易宝内部订单号则可以不填，否则必填 | [optional]
 **orderDate** | **string**| 订单日期&lt;br&gt;如填写易宝内部订单号则可以不填，否则必填 | [optional]
 **uniqueOrderNo** | **string**| 易宝内部订单号&lt;br&gt;如填写此项，订单号及订单日期可以不填。如同时填写将以易宝内部订单号为准 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AutoPaymentQueryRespDto**](../Model/AutoPaymentQueryRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **enterprise_token_pay_order_v1_0**
EnterpriseTokenPayOrderV10Response enterprise_token_pay_order_v1_0(EnterpriseTokenPayOrderV10Request request)

企业账户支付-token支付

企业账户支付-token支付

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseTokenPayOrderV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setToken("token_example");
$request->setPayerMerchantNo("payerMerchantNo_example");

try {
    $response = $api_client->enterprise_token_pay_order_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->enterprise_token_pay_order_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **token** | **string**|  | [optional]
 **payerMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\TokenPaymentResponseDto**](../Model/TokenPaymentResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **enterprise_withholding_check_balance_v1_0**
EnterpriseWithholdingCheckBalanceV10Response enterprise_withholding_check_balance_v1_0(EnterpriseWithholdingCheckBalanceV10Request request)

企业账户支付-关系扣款余额预校验

企业账户支付-关系扣款余额预校验

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseWithholdingCheckBalanceV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setPayerMerchantNo("payerMerchantNo_example");
$request->setTradeAmount(1.2);

try {
    $response = $api_client->enterprise_withholding_check_balance_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->enterprise_withholding_check_balance_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **payerMerchantNo** | **string**|  | [optional]
 **tradeAmount** | **float**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AccountPaymentBaseResponseDto**](../Model/AccountPaymentBaseResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **enterprise_withholding_order_v1_0**
EnterpriseWithholdingOrderV10Response enterprise_withholding_order_v1_0(EnterpriseWithholdingOrderV10Request request)

企业账户支付-关系扣款

企业账户支付-关系扣款

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseWithholdingOrderV10Request();
$request->setParentMerchantNo("10012426723");
$request->setMerchantNo("10014242004");
$request->setPayerMerchantNo("10014242005");
$request->setOrderId("merchant12345");
$request->setOrderAmount(88.88);
$request->setFundProcessType("fundProcessType_example");
$request->setGoodsName("旺仔牛奶");
$request->setExpiredTime("2017-12-12 13:23:45");
$request->setNotifyUrl("notifyUrl_example");
$request->setMemo("费用");
$request->setPayerNotifyUrl("payerNotifyUrl_example");
$request->setCsUrl("csUrl_example");
$request->setYpAccountBookNo("ypAccountBookNo_example");
$request->setYpPromotionInfo("ypPromotionInfo_example");

try {
    $response = $api_client->enterprise_withholding_order_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->enterprise_withholding_order_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **payerMerchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **expiredTime** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **payerNotifyUrl** | **string**|  | [optional]
 **csUrl** | **string**|  | [optional]
 **ypAccountBookNo** | **string**|  | [optional]
 **ypPromotionInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\WithholdingPaymentRespDto**](../Model/WithholdingPaymentRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **externalOrder**
ExternalOrderResponse externalOrder(ExternalOrderRequest request)

银行账户支付-外部订单同步

用于报送非易宝订单信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\ExternalOrderRequest();
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setChannelName("美团");
$request->setOrderId("orderId_example");
$request->setMerchantName("merchantName_example");
$request->setGoodsName("goodsName_example");
$request->setTrxDate("trxDate_example");
$request->setFinishDate("finishDate_example");
$request->setOrderAmount(1.2);
$request->setRealAmount(1.2);
$request->setPayerUserId("payerUserId_example");
$request->setPayWay("payWay_example");
$request->setPayCardNo("payCardNo_example");
$request->setPayCardType("payCardType_example");
$request->setUserRequestIp("userRequestIp_example");
$request->setTrxType("trxType_example");
$request->setBatchNo("batchNo_example");
$request->setChannelExtInfo("{   \"channelMerchantInfos\": [     {       \"channelMrchantName\": \"商户名称\",       \"channelMrchantNo\": \"10020320020\"     },     {       \"channelMrchantName\": \"商户名称2\",       \"channelMrchantNo\": \"10020320021\"     }   ] }");

try {
    $response = $api_client->externalOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->externalOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **channelName** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **merchantName** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **trxDate** | **string**|  | [optional]
 **finishDate** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **realAmount** | **float**|  | [optional]
 **payerUserId** | **string**|  | [optional]
 **payWay** | **string**|  | [optional]
 **payCardNo** | **string**|  | [optional]
 **payCardType** | **string**|  | [optional]
 **userRequestIp** | **string**|  | [optional]
 **trxType** | **string**|  | [optional]
 **batchNo** | **string**|  | [optional]
 **channelExtInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ExternalOrderSubmitOrderRespDto**](../Model/ExternalOrderSubmitOrderRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **external_order_v1_0**
ExternalOrderV10Response external_order_v1_0(ExternalOrderV10Request request)

银行账户支付-外部订单同步

用于报送非易宝订单信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\ExternalOrderV10Request();
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setChannelName("美团");
$request->setOrderId("orderId_example");
$request->setMerchantName("merchantName_example");
$request->setGoodsName("goodsName_example");
$request->setTrxDate("trxDate_example");
$request->setFinishDate("finishDate_example");
$request->setOrderAmount(1.2);
$request->setRealAmount(1.2);
$request->setPayerUserId("payerUserId_example");
$request->setPayWay("payWay_example");
$request->setPayCardNo("payCardNo_example");
$request->setPayCardType("payCardType_example");
$request->setUserRequestIp("userRequestIp_example");
$request->setTrxType("trxType_example");
$request->setBatchNo("batchNo_example");
$request->setChannelExtInfo("{   \"channelMerchantInfos\": [     {       \"channelMrchantName\": \"商户名称\",       \"channelMrchantNo\": \"10020320020\"     },     {       \"channelMrchantName\": \"商户名称2\",       \"channelMrchantNo\": \"10020320021\"     }   ] }");

try {
    $response = $api_client->external_order_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->external_order_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **channelName** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **merchantName** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **trxDate** | **string**|  | [optional]
 **finishDate** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **realAmount** | **float**|  | [optional]
 **payerUserId** | **string**|  | [optional]
 **payWay** | **string**|  | [optional]
 **payCardNo** | **string**|  | [optional]
 **payCardType** | **string**|  | [optional]
 **userRequestIp** | **string**|  | [optional]
 **trxType** | **string**|  | [optional]
 **batchNo** | **string**|  | [optional]
 **channelExtInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ExternalOrderSubmitOrderRespDto**](../Model/ExternalOrderSubmitOrderRespDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **getReceiptForReceiver**
GetReceiptForReceiverResponse getReceiptForReceiver(GetReceiptForReceiverRequest request)

转入方回单下载

支持转入方通过该接口下载转账电子回单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\GetReceiptForReceiverRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\ReceiverReceiptReqDTO());

try {
    $response = $api_client->getReceiptForReceiver($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->getReceiptForReceiver: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\ReceiverReceiptReqDTO**](../Model/ReceiverReceiptReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ReceiverReceiptResponseDTO**](../Model/ReceiverReceiptResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **get_clear_account_info_by_merchant**
GetClearAccountInfoByMerchantResponse get_clear_account_info_by_merchant(GetClearAccountInfoByMerchantRequest request)

银行清分账户信息查询

支持商户通过此接口查询银行账户信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\GetClearAccountInfoByMerchantRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BankAccountQueryDTO());

try {
    $response = $api_client->get_clear_account_info_by_merchant($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->get_clear_account_info_by_merchant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountQueryDTO**](../Model/BankAccountQueryDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountQueryInfoRspDTO**](../Model/BankAccountQueryInfoRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **getclearaccountinfoymerchant**
GetclearaccountinfoymerchantResponse getclearaccountinfoymerchant(GetclearaccountinfoymerchantRequest request)

银行清分账户信息查询

支持商户通过此接口查询银行账户信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\GetclearaccountinfoymerchantRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BankAccountQueryDTO());

try {
    $response = $api_client->getclearaccountinfoymerchant($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->getclearaccountinfoymerchant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountQueryDTO**](../Model/BankAccountQueryDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BankAccountQueryInfoRspDTO**](../Model/BankAccountQueryInfoRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **groupAccountTransfer**
GroupAccountTransferResponse groupAccountTransfer(GroupAccountTransferRequest request)

集团账户资金划拨

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\GroupAccountTransferRequest();
$request->setParentMerchantNo("100400612345");
$request->setRequestNo("商户请求号，由商户自定义生成;示例值：TRANS2133213124");
$request->setFromMerchantNo("易宝支付分配的的商户唯一标识;示例值:100400612345");
$request->setToMerchantNo("易宝支付分配的的商户唯一标识;示例值:100400612346");
$request->setOrderAmount("单位：元（RMB），精确到分;示例值：0.01 元");
$request->setUsage("usage_example");
$request->setFeeChargeSide("当商户承担且计费方式为预付实扣或后收时，不支持转入方承担；当平台商或服务商承担时无需指定此手续费承担方；");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->groupAccountTransfer($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->groupAccountTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **fromMerchantNo** | **string**|  | [optional]
 **toMerchantNo** | **string**|  | [optional]
 **orderAmount** | **string**|  | [optional]
 **usage** | **string**|  | [optional]
 **feeChargeSide** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\GroupAccountTransferRespDTO**](../Model/GroupAccountTransferRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **groupAccountTransferQuery**
GroupAccountTransferQueryResponse groupAccountTransferQuery(GroupAccountTransferQueryRequest request)

集团账户资金划拨查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\GroupAccountTransferQueryRequest();
$request->setParentMerchantNo("100400612345");
$request->setMerchantNo("merchantNo_example");
$request->setOrderNo("orderNo_example");
$request->setRequestNo("TRANS2133213124");

try {
    $response = $api_client->groupAccountTransferQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->groupAccountTransferQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;div data-page-id&#x3D;\&quot;Tq8rdopvvoUCakxJJCjcmQBcnah\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-FMREd4hYFoBSkixZwqjcL6tFnpe\&quot;&gt;转入方商编&lt;/div&gt; &lt;/div&gt; |
 **orderNo** | **string**| &lt;p&gt;易宝支付系统生成的订单号(与商户请求号两者填其一)&lt;/p&gt; | [optional]
 **requestNo** | **string**| &lt;p&gt;由商户自定义生成(与易宝转账订单号两者填其一)&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\GroupAccountTransferQueryRespDTO**](../Model/GroupAccountTransferQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **individualApply**
IndividualApplyResponse individualApply(IndividualApplyRequest request)

付款到个人--申请添加个人用户

此服务针对于有付款给个人收款方且不满足使用企业付款场景的商户使用。商户向常用个人用户付款前，请先通过此接口申请添加个人用户信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\IndividualApplyRequest();
$request->setMerchantNo("merchantNo_example");
$request->setRequestNo("商户请求号，由商户自定义生成;示例值：TRANS2133213124");
$request->setName("name_example");
$request->setCertificateType("certificateType_example");
$request->setCertificateNo("certificateNo_example");
$request->setPhone("phone_example");
$request->setFrontUrl("frontUrl_example");
$request->setContraryUrl("contraryUrl_example");

try {
    $response = $api_client->individualApply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->individualApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **certificateType** | **string**|  | [optional]
 **certificateNo** | **string**|  | [optional]
 **phone** | **string**|  | [optional]
 **frontUrl** | **string**|  | [optional]
 **contraryUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ApplyIndividualRespDTO**](../Model/ApplyIndividualRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **individualModify**
IndividualModifyResponse individualModify(IndividualModifyRequest request)

付款到个人--变更已添加的个人用户

付款到个人--变更已添加的个人用户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\IndividualModifyRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\ModifyIndividualRequestDTO());

try {
    $response = $api_client->individualModify($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->individualModify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\ModifyIndividualRequestDTO**](../Model/ModifyIndividualRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ModifyIndividualResponseDTO**](../Model/ModifyIndividualResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **individualQuery**
IndividualQueryResponse individualQuery(IndividualQueryRequest request)

付款到个人--查询已添加的个人用户

通过此服务查询付款商户已经添加的个人用户信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\IndividualQueryRequest();
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->individualQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->individualQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\QueryIndividualRespDTO**](../Model/QueryIndividualRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **individualQueryProgress**
IndividualQueryProgressResponse individualQueryProgress(IndividualQueryProgressRequest request)

付款到个人--查询申请进度

通过此接口服务查询个人用户添加进度

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\IndividualQueryProgressRequest();
$request->setRequestNo("商户请求号，由商户自定义生成;示例值：TRANS2133213124");

try {
    $response = $api_client->individualQueryProgress($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->individualQueryProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ApplyIndivdualProgressRespDTO**](../Model/ApplyIndivdualProgressRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **initiateUserBookWithdraw**
InitiateUserBookWithdrawResponse initiateUserBookWithdraw(InitiateUserBookWithdrawRequest request)

记账簿出款-下单

记账簿出款-下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\InitiateUserBookWithdrawRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\InitUserBookWithdrawReqDTO());

try {
    $response = $api_client->initiateUserBookWithdraw($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->initiateUserBookWithdraw: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\InitUserBookWithdrawReqDTO**](../Model/InitUserBookWithdrawReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\InitUserBookWithdrawRespDTO**](../Model/InitUserBookWithdrawRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **manageAuditProcess**
ManageAuditProcessResponse manageAuditProcess(ManageAuditProcessRequest request)

申请开通、关闭复核功能

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\ManageAuditProcessRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\ApplyProcessAuditorReqDTO());

try {
    $response = $api_client->manageAuditProcess($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->manageAuditProcess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\ApplyProcessAuditorReqDTO**](../Model/ApplyProcessAuditorReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ApplyProcessAuditorRespDTO**](../Model/ApplyProcessAuditorRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **manageAuditorAdd**
ManageAuditorAddResponse manageAuditorAdd(ManageAuditorAddRequest request)

申请添加短验复核人

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\ManageAuditorAddRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\ApplyAddAuditorReqDTO());

try {
    $response = $api_client->manageAuditorAdd($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->manageAuditorAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\ApplyAddAuditorReqDTO**](../Model/ApplyAddAuditorReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ApplyAddAuditorRespDTO**](../Model/ApplyAddAuditorRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **manageAuditorConfirm**
ManageAuditorConfirmResponse manageAuditorConfirm(ManageAuditorConfirmRequest request)

添加短验复核人确认

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\ManageAuditorConfirmRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AddAuditorConfirmReqDTO());

try {
    $response = $api_client->manageAuditorConfirm($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->manageAuditorConfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\AddAuditorConfirmReqDTO**](../Model/AddAuditorConfirmReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AddAuditorConfirmRespDTO**](../Model/AddAuditorConfirmRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **manageAuditorList**
ManageAuditorListResponse manageAuditorList(ManageAuditorListRequest request)

查询短验复核人

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\ManageAuditorListRequest();
$request->setAuditBiz("auditBiz_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->manageAuditorList($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->manageAuditorList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auditBiz** | **string**| &lt;p&gt;REMIT: 付款&lt;/p&gt; &lt;p&gt;TRANSFER: 转账&lt;/p&gt; |
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;交易发起主体商编&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\QueryAuditorInfoListRespDTO**](../Model/QueryAuditorInfoListRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **manageAuditorQuery**
ManageAuditorQueryResponse manageAuditorQuery(ManageAuditorQueryRequest request)

查询短验复核人申请信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\ManageAuditorQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setApplyOrderNo("applyOrderNo_example");
$request->setRequestNo("requestNo_example");

try {
    $response = $api_client->manageAuditorQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->manageAuditorQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;交易发起主体商编&lt;/p&gt; |
 **applyOrderNo** | **string**| &lt;p&gt;易宝申请复核订单号&lt;/p&gt; | [optional]
 **requestNo** | **string**| &lt;p&gt;商户请求号&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\QueryApplyAuditorRespDTO**](../Model/QueryApplyAuditorRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **manageAuditorSendSms**
ManageAuditorSendSmsResponse manageAuditorSendSms(ManageAuditorSendSmsRequest request)

添加短验复核人重发短验

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\ManageAuditorSendSmsRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\SendAddAuditorSmsReqDTO());

try {
    $response = $api_client->manageAuditorSendSms($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->manageAuditorSendSms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\SendAddAuditorSmsReqDTO**](../Model/SendAddAuditorSmsReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\SendAddAuditorSmsRespDTO**](../Model/SendAddAuditorSmsRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **manageReviewerAddPhone**
ManageReviewerAddPhoneResponse manageReviewerAddPhone(ManageReviewerAddPhoneRequest request)

添加商户审核人手机号

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\ManageReviewerAddPhoneRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AddReviewerPhoneReqDTO());

try {
    $response = $api_client->manageReviewerAddPhone($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->manageReviewerAddPhone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\AddReviewerPhoneReqDTO**](../Model/AddReviewerPhoneReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AddReviewerPhoneRespDTO**](../Model/AddReviewerPhoneRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **manageReviewerQuery**
ManageReviewerQueryResponse manageReviewerQuery(ManageReviewerQueryRequest request)

查询商户审核人

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\ManageReviewerQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->manageReviewerQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->manageReviewerQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;交易发起主体商编&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\QueryReviewerRespDTO**](../Model/QueryReviewerRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **manageTransitBalanceQuery**
ManageTransitBalanceQueryResponse manageTransitBalanceQuery(ManageTransitBalanceQueryRequest request)

在途账户余额查询

在途账户余额查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\ManageTransitBalanceQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\QueryTransitVirtualAccountBalanceReqDTO());

try {
    $response = $api_client->manageTransitBalanceQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->manageTransitBalanceQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\QueryTransitVirtualAccountBalanceReqDTO**](../Model/QueryTransitVirtualAccountBalanceReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\QueryTransitVirtualAccountBalanceRespDTO**](../Model/QueryTransitVirtualAccountBalanceRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **manage_audit_process_v1_0**
ManageAuditProcessV10Response manage_audit_process_v1_0(ManageAuditProcessV10Request request)

申请开通、关闭复核功能

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\ManageAuditProcessV10Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\ApplyProcessAuditorReqDTO());

try {
    $response = $api_client->manage_audit_process_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->manage_audit_process_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\ApplyProcessAuditorReqDTO**](../Model/ApplyProcessAuditorReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ApplyProcessAuditorRespDTO**](../Model/ApplyProcessAuditorRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **manage_auditor_add_v1_0**
ManageAuditorAddV10Response manage_auditor_add_v1_0(ManageAuditorAddV10Request request)

申请添加短验复核人

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\ManageAuditorAddV10Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\ApplyAddAuditorReqDTO());

try {
    $response = $api_client->manage_auditor_add_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->manage_auditor_add_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\ApplyAddAuditorReqDTO**](../Model/ApplyAddAuditorReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ApplyAddAuditorRespDTO**](../Model/ApplyAddAuditorRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **manage_auditor_confirm_v1_0**
ManageAuditorConfirmV10Response manage_auditor_confirm_v1_0(ManageAuditorConfirmV10Request request)

添加短验复核人确认

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\ManageAuditorConfirmV10Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AddAuditorConfirmReqDTO());

try {
    $response = $api_client->manage_auditor_confirm_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->manage_auditor_confirm_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\AddAuditorConfirmReqDTO**](../Model/AddAuditorConfirmReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AddAuditorConfirmRespDTO**](../Model/AddAuditorConfirmRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **manage_auditor_list_v1_0**
ManageAuditorListV10Response manage_auditor_list_v1_0(ManageAuditorListV10Request request)

查询短验复核人

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\ManageAuditorListV10Request();
$request->setAuditBiz("auditBiz_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->manage_auditor_list_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->manage_auditor_list_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auditBiz** | **string**| &lt;p&gt;REMIT: 付款&lt;/p&gt; &lt;p&gt;TRANSFER: 转账&lt;/p&gt; |
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;交易发起主体商编&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\QueryAuditorInfoListRespDTO**](../Model/QueryAuditorInfoListRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **manage_auditor_query_v1_0**
ManageAuditorQueryV10Response manage_auditor_query_v1_0(ManageAuditorQueryV10Request request)

查询短验复核人申请信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\ManageAuditorQueryV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setApplyOrderNo("applyOrderNo_example");
$request->setRequestNo("requestNo_example");

try {
    $response = $api_client->manage_auditor_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->manage_auditor_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;交易发起主体商编&lt;/p&gt; |
 **applyOrderNo** | **string**| &lt;p&gt;易宝申请复核订单号&lt;/p&gt; | [optional]
 **requestNo** | **string**| &lt;p&gt;商户请求号&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\QueryApplyAuditorRespDTO**](../Model/QueryApplyAuditorRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **manage_auditor_send_sms_v1_0**
ManageAuditorSendSmsV10Response manage_auditor_send_sms_v1_0(ManageAuditorSendSmsV10Request request)

添加短验复核人重发短验

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\ManageAuditorSendSmsV10Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\SendAddAuditorSmsReqDTO());

try {
    $response = $api_client->manage_auditor_send_sms_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->manage_auditor_send_sms_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\SendAddAuditorSmsReqDTO**](../Model/SendAddAuditorSmsReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\SendAddAuditorSmsRespDTO**](../Model/SendAddAuditorSmsRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **manage_bank_supplement**
ManageBankSupplementResponse manage_bank_supplement(ManageBankSupplementRequest request)

资质信息补录

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\ManageBankSupplementRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\OpenBankExtendSupplementReqDTO());

try {
    $response = $api_client->manage_bank_supplement($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->manage_bank_supplement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\OpenBankExtendSupplementReqDTO**](../Model/OpenBankExtendSupplementReqDTO.md)| 多渠道开户资质信息补录 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\OpenBankExtendSupplementRspDTO**](../Model/OpenBankExtendSupplementRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **manage_reviewer_add_phone_v1_0**
ManageReviewerAddPhoneV10Response manage_reviewer_add_phone_v1_0(ManageReviewerAddPhoneV10Request request)

添加商户审核人手机号

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\ManageReviewerAddPhoneV10Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AddReviewerPhoneReqDTO());

try {
    $response = $api_client->manage_reviewer_add_phone_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->manage_reviewer_add_phone_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\AddReviewerPhoneReqDTO**](../Model/AddReviewerPhoneReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\AddReviewerPhoneRespDTO**](../Model/AddReviewerPhoneRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **manage_reviewer_query_v1_0**
ManageReviewerQueryV10Response manage_reviewer_query_v1_0(ManageReviewerQueryV10Request request)

查询商户审核人

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\ManageReviewerQueryV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->manage_reviewer_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->manage_reviewer_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;交易发起主体商编&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\QueryReviewerRespDTO**](../Model/QueryReviewerRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **multimodal_account_trade**
MultimodalAccountTradeResponse multimodal_account_trade(MultimodalAccountTradeRequest request)

付款-下单（多场景）

如商户已成功对接过银联，选择采用银联接口获取总行编码及支行编码，可能存在使用过程中，易宝无法识别的总行编码或支行编码，如出现此情况，请联系易宝运营人员处理。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\MultimodalAccountTradeRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AccountTradeRequestDTO());

try {
    $response = $api_client->multimodal_account_trade($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->multimodal_account_trade: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\AccountTradeRequestDTO**](../Model/AccountTradeRequestDTO.md)| 付款下单请求参数 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RemitRespDTO**](../Model/RemitRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **open_bank_account**
OpenBankAccountResponse open_bank_account(OpenBankAccountRequest request)

开立银行清分账户

支持商户通过此接口开立银行账户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\OpenBankAccountRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BankClearOpenReqDTO());

try {
    $response = $api_client->open_bank_account($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->open_bank_account: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BankClearOpenReqDTO**](../Model/BankClearOpenReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BankClearOpenRespDTO**](../Model/BankClearOpenRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **openbankaccount**
OpenbankaccountResponse openbankaccount(OpenbankaccountRequest request)

开立银行清分账户

支持商户通过此接口开立银行账户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\OpenbankaccountRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BankClearOpenReqDTO());

try {
    $response = $api_client->openbankaccount($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->openbankaccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BankClearOpenReqDTO**](../Model/BankClearOpenReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BankClearOpenRespDTO**](../Model/BankClearOpenRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **payAccoutCard**
PayAccoutCardResponse payAccoutCard(PayAccoutCardRequest request)

代付到记账簿绑定卡

代付到记账簿绑定卡

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\PayAccoutCardRequest();
$request->setParentMerchantNo("100400612345");
$request->setMerchantNo("100400612345");
$request->setRequestNo("requestNo_example");
$request->setMerchantAccountBookNo("merchantAccountBookNo_example");
$request->setYpAccountBookNo("ypAccountBookNo_example");
$request->setReceiverAccountNo("receiverAccountNo_example");
$request->setOrderAmount(1.01);
$request->setFeeChargeSide("feeChargeSide_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setTerminalType("terminalType_example");
$request->setComments("comments_example");
$request->setRemark("remark_example");
$request->setReceiptComments("receiptComments_example");
$request->setRiskInfo("riskInfo_example");
$request->setReceiveType("receiveType_example");

try {
    $response = $api_client->payAccoutCard($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->payAccoutCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantAccountBookNo** | **string**|  | [optional]
 **ypAccountBookNo** | **string**|  | [optional]
 **receiverAccountNo** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **feeChargeSide** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **terminalType** | **string**|  | [optional]
 **comments** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **receiptComments** | **string**|  | [optional]
 **riskInfo** | **string**|  | [optional]
 **receiveType** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RemitAccountBookRespDTO**](../Model/RemitAccountBookRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **payBatchOrder**
PayBatchOrderResponse payBatchOrder(PayBatchOrderRequest request)

付款-批量下单

为了保证出款成功，各农信社卡或账号16位以下的农业银行卡，建议或尽可能填写支行编码； 有报错信息并不代表未受理，具体是否受理参看batchAcceptDetailList中受理明细

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\PayBatchOrderRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BatchRemitReqDTO());

try {
    $response = $api_client->payBatchOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->payBatchOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BatchRemitReqDTO**](../Model/BatchRemitReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BatchRemitRespDTO**](../Model/BatchRemitRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **payBatchQuery**
PayBatchQueryResponse payBatchQuery(PayBatchQueryRequest request)

付款-批次查询

付款-批次查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\PayBatchQueryRequest();
$request->setBatchNo("batchNo_example");

try {
    $response = $api_client->payBatchQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->payBatchQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batchNo** | **string**| 批次号,需要查询的批次号 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BatchRemitQueryRespDTO**](../Model/BatchRemitQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **payCancel**
PayCancelResponse payCancel(PayCancelRequest request)

付款-撤销

撤销预约付款请求

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\PayCancelRequest();
$request->setParentMerchantNo("100400612345");
$request->setOrderNo("20200720110033a171b64e");
$request->setCancelReason("业务需要撤销此次付款");

try {
    $response = $api_client->payCancel($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->payCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **orderNo** | **string**|  | [optional]
 **cancelReason** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RemitCancelRespDTO**](../Model/RemitCancelRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **payOrder**
PayOrderResponse payOrder(PayOrderRequest request)

付款-下单

为了保证出款成功，各农信社卡或账号16位以下的农业银行卡，建议或尽可能填写支行编码； 如商户已成功对接过银联，选择采用银联接口获取总行编码及支行编码，可能存在使用过程中，易宝无法识别的总行编码或支行编码，如出现此情况，请联系易宝运营人员处理

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\PayOrderRequest();
$request->setParentMerchantNo("100400612345");
$request->setMerchantNo("100400612345");
$request->setRequestNo("PAY2133213124");
$request->setOrderAmount(1.01);
$request->setFeeChargeSide("PAYER");
$request->setReceiveType("REAL_TIME");
$request->setReceiverAccountNo("6212260200062388891");
$request->setReceiverAccountName("receiverAccountName_example");
$request->setReceiverBankCode("receiverBankCode_example");
$request->setBankAccountType("DEBIT_CARD");
$request->setBranchBankCode("102100000021");
$request->setComments("xx平台付款");
$request->setTerminalType("PC");
$request->setNotifyUrl("http://www.baidu.com");
$request->setRemark("remark_example");
$request->setReceiptComments("receiptComments_example");
$request->setRiskInfo("riskInfo_example");
$request->setMacAddress("macAddress_example");

try {
    $response = $api_client->payOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->payOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **feeChargeSide** | **string**|  | [optional]
 **receiveType** | **string**|  | [optional]
 **receiverAccountNo** | **string**|  | [optional]
 **receiverAccountName** | **string**|  | [optional]
 **receiverBankCode** | **string**|  | [optional]
 **bankAccountType** | **string**|  | [optional]
 **branchBankCode** | **string**|  | [optional]
 **comments** | **string**|  | [optional]
 **terminalType** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **receiptComments** | **string**|  | [optional]
 **riskInfo** | **string**|  | [optional]
 **macAddress** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RemitRespDTO**](../Model/RemitRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **payOrderAuditQuery**
PayOrderAuditQueryResponse payOrderAuditQuery(PayOrderAuditQueryRequest request)

付款-复核订单查询

付款-复核订单查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\PayOrderAuditQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setAuditMethod("auditMethod_example");
$request->setRequestNo("requestNo_example");
$request->setOrderNo("orderNo_example");

try {
    $response = $api_client->payOrderAuditQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->payOrderAuditQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;/p&gt; |
 **auditMethod** | **string**| 可选项如下: SMS:短信验证码 |
 **requestNo** | **string**| &lt;p&gt;商户请求号和易宝付款订单号二选一必填&lt;/p&gt; | [optional]
 **orderNo** | **string**| &lt;p&gt;商户请求号和易宝付款订单号二选一必填&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RemitAuditQueryRespDTO**](../Model/RemitAuditQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **payOrderAuditSendSms**
PayOrderAuditSendSmsResponse payOrderAuditSendSms(PayOrderAuditSendSmsRequest request)

付款-短信重发

付款-短信重发

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\PayOrderAuditSendSmsRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RemitAuditSendSmsRequestDTO());

try {
    $response = $api_client->payOrderAuditSendSms($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->payOrderAuditSendSms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\RemitAuditSendSmsRequestDTO**](../Model/RemitAuditSendSmsRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RemitAuditSendSmsRespDTO**](../Model/RemitAuditSendSmsRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **payOrderAuditSms**
PayOrderAuditSmsResponse payOrderAuditSms(PayOrderAuditSmsRequest request)

付款-短信确认

付款-短信确认

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\PayOrderAuditSmsRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RemitAuditVerifySmsRequestDTO());

try {
    $response = $api_client->payOrderAuditSms($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->payOrderAuditSms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\RemitAuditVerifySmsRequestDTO**](../Model/RemitAuditVerifySmsRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RemitAuditVerifySmsRespDTO**](../Model/RemitAuditVerifySmsRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **payOrderV2**
PayOrderV2Response payOrderV2(PayOrderV2Request request)

付款-下单（多场景）

如商户已成功对接过银联，选择采用银联接口获取总行编码及支行编码，可能存在使用过程中，易宝无法识别的总行编码或支行编码，如出现此情况，请联系易宝运营人员处理。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\PayOrderV2Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\AccountTradeRequestDTO());

try {
    $response = $api_client->payOrderV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->payOrderV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\AccountTradeRequestDTO**](../Model/AccountTradeRequestDTO.md)| 付款下单请求参数 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RemitRespDTO**](../Model/RemitRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **payOrderV3**
PayOrderV3Response payOrderV3(PayOrderV3Request request)

付款-下单-支持短验复核

为了保证出款成功，各农信社卡或账号16位以下的农业银行卡，建议或尽可能填写支行编码；

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\PayOrderV3Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RemitRequestDTO());

try {
    $response = $api_client->payOrderV3($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->payOrderV3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\RemitRequestDTO**](../Model/RemitRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RemitRespDTO**](../Model/RemitRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **payQuery**
PayQueryResponse payQuery(PayQueryRequest request)

付款-查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\PayQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setOrderNo("orderNo_example");

try {
    $response = $api_client->payQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->payQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; &lt;!--5f39ae17-8c62-4a45-bc43-b32064c9388a:W3siYmxvY2tJZCI6IjM4NzAtMTU5ODQwOTgyNDQ4MCIsImJsb2NrVHlwZSI6InBhcmFncmFwaCIsInN0eWxlcyI6eyJhbGlnbiI6ImxlZnQiLCJpbmRlbnQiOjAsInRleHQtaW5kZW50IjowLCJsaW5lLWhlaWdodCI6MS43NSwiYmFjay1jb2xvciI6IiIsInBhZGRpbmciOiIifSwidHlwZSI6InBhcmFncmFwaCIsInJpY2hUZXh0Ijp7ImRhdGEiOlt7ImNoYXIiOiLmoIcifSx7ImNoYXIiOiLlh4YifSx7ImNoYXIiOiLllYYifSx7ImNoYXIiOiLmiLcifSx7ImNoYXIiOiLmlLYifSx7ImNoYXIiOiLku5gifSx7ImNoYXIiOiLmrL4ifSx7ImNoYXIiOiLmlrkifSx7ImNoYXIiOiLmoYgifSx7ImNoYXIiOiLkuK0ifSx7ImNoYXIiOiLmraQifSx7ImNoYXIiOiLlj4IifSx7ImNoYXIiOiLmlbAifSx7ImNoYXIiOiLkuI4ifSx7ImNoYXIiOiLllYYifSx7ImNoYXIiOiLnvJYifSx7ImNoYXIiOiLkuIAifSx7ImNoYXIiOiLoh7QifSx7ImNoYXIiOiLvvIwifSx7ImNoYXIiOiLlubMifSx7ImNoYXIiOiLlj7AifSx7ImNoYXIiOiLllYYifSx7ImNoYXIiOiLmiLcifSx7ImNoYXIiOiLmlLYifSx7ImNoYXIiOiLku5gifSx7ImNoYXIiOiLmrL4ifSx7ImNoYXIiOiLmlrkifSx7ImNoYXIiOiLmoYgifSx7ImNoYXIiOiLkuK0ifSx7ImNoYXIiOiLmraQifSx7ImNoYXIiOiLlj4IifSx7ImNoYXIiOiLmlbAifSx7ImNoYXIiOiLkuLoifSx7ImNoYXIiOiLlubMifSx7ImNoYXIiOiLlj7AifSx7ImNoYXIiOiLllYYifSx7ImNoYXIiOiLllYYifSx7ImNoYXIiOiLmiLcifSx7ImNoYXIiOiLnvJYifSx7ImNoYXIiOiLlj7cifV0sImlzUmljaFRleHQiOnRydWUsImtlZXBMaW5lQnJlYWsiOnRydWV9fV0&#x3D;--&gt;&lt;!--5f39ae17-8c62-4a45-bc43-b32064c9388a:W3siYmxvY2tJZCI6IjI3MTEtMTU5ODQwOTgyNDE3NSIsImJsb2NrVHlwZSI6InBhcmFncmFwaCIsInN0eWxlcyI6eyJhbGlnbiI6ImxlZnQiLCJpbmRlbnQiOjAsInRleHQtaW5kZW50IjowLCJsaW5lLWhlaWdodCI6MS43NSwiYmFjay1jb2xvciI6IiIsInBhZGRpbmciOiIifSwidHlwZSI6InBhcmFncmFwaCIsInJpY2hUZXh0Ijp7ImRhdGEiOlt7ImNoYXIiOiLlj5EifSx7ImNoYXIiOiLotbcifSx7ImNoYXIiOiLmlrkifSx7ImNoYXIiOiLllYYifSx7ImNoYXIiOiLmiLcifSx7ImNoYXIiOiLnvJYifSx7ImNoYXIiOiLlj7cifV0sImlzUmljaFRleHQiOnRydWUsImtlZXBMaW5lQnJlYWsiOnRydWV9fV0&#x3D;--&gt; | [optional]
 **requestNo** | **string**| &lt;p&gt;商户请求号&lt;br /&gt;商户请求号，由商户自定义生成（与易宝付款订单号两者填其一）&lt;/p&gt; | [optional]
 **orderNo** | **string**| &lt;p&gt;易宝订单号&lt;br /&gt;易宝支付系统生成的付款订单号（与商户请求号两者填其一）&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RemitOrderQueryRespDTO**](../Model/RemitOrderQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **payReverseQuery**
PayReverseQueryResponse payReverseQuery(PayReverseQueryRequest request)

付款冲退-查询

付款银行冲退订单查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\PayReverseQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RemitOrderReverseQueryReqDTO());

try {
    $response = $api_client->payReverseQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->payReverseQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\RemitOrderReverseQueryReqDTO**](../Model/RemitOrderReverseQueryReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RemitOrderReverseQueryRespDTO**](../Model/RemitOrderReverseQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **paySystemQuery**
PaySystemQueryResponse paySystemQuery(PaySystemQueryRequest request)

付款-查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\PaySystemQueryRequest();
$request->setMerchantNo("merchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setOrderNo("orderNo_example");

try {
    $response = $api_client->paySystemQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->paySystemQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;/p&gt; |
 **requestNo** | **string**| &lt;p&gt;商户请求号&lt;br /&gt;商户请求号，由商户自定义生成（与易宝付款订单号两者填其一）&lt;/p&gt; | [optional]
 **orderNo** | **string**| &lt;p&gt;易宝订单号&lt;br /&gt;易宝支付系统生成的付款订单号（与商户请求号两者填其一）&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RemitOrderQueryRespDTO**](../Model/RemitOrderQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **pay_batch_order_v1_0**
PayBatchOrderV10Response pay_batch_order_v1_0(PayBatchOrderV10Request request)

付款-批量下单

为了保证出款成功，各农信社卡或账号16位以下的农业银行卡，建议或尽可能填写支行编码； 有报错信息并不代表未受理，具体是否受理参看batchAcceptDetailList中受理明细

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\PayBatchOrderV10Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BatchRemitReqDTO());

try {
    $response = $api_client->pay_batch_order_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->pay_batch_order_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BatchRemitReqDTO**](../Model/BatchRemitReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BatchRemitRespDTO**](../Model/BatchRemitRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **pay_batch_query_v1_0**
PayBatchQueryV10Response pay_batch_query_v1_0(PayBatchQueryV10Request request)

付款-批次查询

付款-批次查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\PayBatchQueryV10Request();
$request->setBatchNo("batchNo_example");

try {
    $response = $api_client->pay_batch_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->pay_batch_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batchNo** | **string**| 批次号,需要查询的批次号 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BatchRemitQueryRespDTO**](../Model/BatchRemitQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **pay_cancel_v1_0**
PayCancelV10Response pay_cancel_v1_0(PayCancelV10Request request)

付款-撤销

撤销预约付款请求

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\PayCancelV10Request();
$request->setParentMerchantNo("100400612345");
$request->setOrderNo("20200720110033a171b64e");
$request->setCancelReason("业务需要撤销此次付款");

try {
    $response = $api_client->pay_cancel_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->pay_cancel_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **orderNo** | **string**|  | [optional]
 **cancelReason** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RemitCancelRespDTO**](../Model/RemitCancelRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **pay_order_audit_query**
PayOrderAuditQueryResponse pay_order_audit_query(PayOrderAuditQueryRequest request)

付款-复核订单查询

付款-复核订单查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\PayOrderAuditQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setAuditMethod("auditMethod_example");
$request->setRequestNo("requestNo_example");
$request->setOrderNo("orderNo_example");

try {
    $response = $api_client->pay_order_audit_query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->pay_order_audit_query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;/p&gt; |
 **auditMethod** | **string**| 可选项如下: SMS:短信验证码 |
 **requestNo** | **string**| &lt;p&gt;商户请求号和易宝付款订单号二选一必填&lt;/p&gt; | [optional]
 **orderNo** | **string**| &lt;p&gt;商户请求号和易宝付款订单号二选一必填&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RemitAuditQueryRespDTO**](../Model/RemitAuditQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **pay_order_audit_send_sms**
PayOrderAuditSendSmsResponse pay_order_audit_send_sms(PayOrderAuditSendSmsRequest request)

付款-短信重发

付款-短信重发

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\PayOrderAuditSendSmsRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RemitAuditSendSmsRequestDTO());

try {
    $response = $api_client->pay_order_audit_send_sms($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->pay_order_audit_send_sms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\RemitAuditSendSmsRequestDTO**](../Model/RemitAuditSendSmsRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RemitAuditSendSmsRespDTO**](../Model/RemitAuditSendSmsRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **pay_order_audit_sms**
PayOrderAuditSmsResponse pay_order_audit_sms(PayOrderAuditSmsRequest request)

付款-短信确认

付款-短信确认

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\PayOrderAuditSmsRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RemitAuditVerifySmsRequestDTO());

try {
    $response = $api_client->pay_order_audit_sms($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->pay_order_audit_sms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\RemitAuditVerifySmsRequestDTO**](../Model/RemitAuditVerifySmsRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RemitAuditVerifySmsRespDTO**](../Model/RemitAuditVerifySmsRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **pay_order_v1_0**
PayOrderV10Response pay_order_v1_0(PayOrderV10Request request)

付款-下单

为了保证出款成功，各农信社卡或账号16位以下的农业银行卡，建议或尽可能填写支行编码； 如商户已成功对接过银联，选择采用银联接口获取总行编码及支行编码，可能存在使用过程中，易宝无法识别的总行编码或支行编码，如出现此情况，请联系易宝运营人员处理

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\PayOrderV10Request();
$request->setParentMerchantNo("100400612345");
$request->setMerchantNo("100400612345");
$request->setRequestNo("PAY2133213124");
$request->setOrderAmount(1.01);
$request->setFeeChargeSide("PAYER");
$request->setReceiveType("REAL_TIME");
$request->setReceiverAccountNo("6212260200062388891");
$request->setReceiverAccountName("receiverAccountName_example");
$request->setReceiverBankCode("receiverBankCode_example");
$request->setBankAccountType("DEBIT_CARD");
$request->setBranchBankCode("102100000021");
$request->setComments("xx平台付款");
$request->setTerminalType("PC");
$request->setNotifyUrl("http://www.baidu.com");
$request->setRemark("remark_example");
$request->setReceiptComments("receiptComments_example");
$request->setRiskInfo("riskInfo_example");
$request->setMacAddress("macAddress_example");

try {
    $response = $api_client->pay_order_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->pay_order_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **feeChargeSide** | **string**|  | [optional]
 **receiveType** | **string**|  | [optional]
 **receiverAccountNo** | **string**|  | [optional]
 **receiverAccountName** | **string**|  | [optional]
 **receiverBankCode** | **string**|  | [optional]
 **bankAccountType** | **string**|  | [optional]
 **branchBankCode** | **string**|  | [optional]
 **comments** | **string**|  | [optional]
 **terminalType** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **receiptComments** | **string**|  | [optional]
 **riskInfo** | **string**|  | [optional]
 **macAddress** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RemitRespDTO**](../Model/RemitRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **pay_query_v1_0**
PayQueryV10Response pay_query_v1_0(PayQueryV10Request request)

付款-查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\PayQueryV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setOrderNo("orderNo_example");

try {
    $response = $api_client->pay_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->pay_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; &lt;!--5f39ae17-8c62-4a45-bc43-b32064c9388a:W3siYmxvY2tJZCI6IjM4NzAtMTU5ODQwOTgyNDQ4MCIsImJsb2NrVHlwZSI6InBhcmFncmFwaCIsInN0eWxlcyI6eyJhbGlnbiI6ImxlZnQiLCJpbmRlbnQiOjAsInRleHQtaW5kZW50IjowLCJsaW5lLWhlaWdodCI6MS43NSwiYmFjay1jb2xvciI6IiIsInBhZGRpbmciOiIifSwidHlwZSI6InBhcmFncmFwaCIsInJpY2hUZXh0Ijp7ImRhdGEiOlt7ImNoYXIiOiLmoIcifSx7ImNoYXIiOiLlh4YifSx7ImNoYXIiOiLllYYifSx7ImNoYXIiOiLmiLcifSx7ImNoYXIiOiLmlLYifSx7ImNoYXIiOiLku5gifSx7ImNoYXIiOiLmrL4ifSx7ImNoYXIiOiLmlrkifSx7ImNoYXIiOiLmoYgifSx7ImNoYXIiOiLkuK0ifSx7ImNoYXIiOiLmraQifSx7ImNoYXIiOiLlj4IifSx7ImNoYXIiOiLmlbAifSx7ImNoYXIiOiLkuI4ifSx7ImNoYXIiOiLllYYifSx7ImNoYXIiOiLnvJYifSx7ImNoYXIiOiLkuIAifSx7ImNoYXIiOiLoh7QifSx7ImNoYXIiOiLvvIwifSx7ImNoYXIiOiLlubMifSx7ImNoYXIiOiLlj7AifSx7ImNoYXIiOiLllYYifSx7ImNoYXIiOiLmiLcifSx7ImNoYXIiOiLmlLYifSx7ImNoYXIiOiLku5gifSx7ImNoYXIiOiLmrL4ifSx7ImNoYXIiOiLmlrkifSx7ImNoYXIiOiLmoYgifSx7ImNoYXIiOiLkuK0ifSx7ImNoYXIiOiLmraQifSx7ImNoYXIiOiLlj4IifSx7ImNoYXIiOiLmlbAifSx7ImNoYXIiOiLkuLoifSx7ImNoYXIiOiLlubMifSx7ImNoYXIiOiLlj7AifSx7ImNoYXIiOiLllYYifSx7ImNoYXIiOiLllYYifSx7ImNoYXIiOiLmiLcifSx7ImNoYXIiOiLnvJYifSx7ImNoYXIiOiLlj7cifV0sImlzUmljaFRleHQiOnRydWUsImtlZXBMaW5lQnJlYWsiOnRydWV9fV0&#x3D;--&gt;&lt;!--5f39ae17-8c62-4a45-bc43-b32064c9388a:W3siYmxvY2tJZCI6IjI3MTEtMTU5ODQwOTgyNDE3NSIsImJsb2NrVHlwZSI6InBhcmFncmFwaCIsInN0eWxlcyI6eyJhbGlnbiI6ImxlZnQiLCJpbmRlbnQiOjAsInRleHQtaW5kZW50IjowLCJsaW5lLWhlaWdodCI6MS43NSwiYmFjay1jb2xvciI6IiIsInBhZGRpbmciOiIifSwidHlwZSI6InBhcmFncmFwaCIsInJpY2hUZXh0Ijp7ImRhdGEiOlt7ImNoYXIiOiLlj5EifSx7ImNoYXIiOiLotbcifSx7ImNoYXIiOiLmlrkifSx7ImNoYXIiOiLllYYifSx7ImNoYXIiOiLmiLcifSx7ImNoYXIiOiLnvJYifSx7ImNoYXIiOiLlj7cifV0sImlzUmljaFRleHQiOnRydWUsImtlZXBMaW5lQnJlYWsiOnRydWV9fV0&#x3D;--&gt; | [optional]
 **requestNo** | **string**| &lt;p&gt;商户请求号&lt;br /&gt;商户请求号，由商户自定义生成（与易宝付款订单号两者填其一）&lt;/p&gt; | [optional]
 **orderNo** | **string**| &lt;p&gt;易宝订单号&lt;br /&gt;易宝支付系统生成的付款订单号（与商户请求号两者填其一）&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RemitOrderQueryRespDTO**](../Model/RemitOrderQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **pay_system_query_v1_0**
PaySystemQueryV10Response pay_system_query_v1_0(PaySystemQueryV10Request request)

付款-查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\PaySystemQueryV10Request();
$request->setMerchantNo("merchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setOrderNo("orderNo_example");

try {
    $response = $api_client->pay_system_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->pay_system_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;/p&gt; |
 **requestNo** | **string**| &lt;p&gt;商户请求号&lt;br /&gt;商户请求号，由商户自定义生成（与易宝付款订单号两者填其一）&lt;/p&gt; | [optional]
 **orderNo** | **string**| &lt;p&gt;易宝订单号&lt;br /&gt;易宝支付系统生成的付款订单号（与商户请求号两者填其一）&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RemitOrderQueryRespDTO**](../Model/RemitOrderQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **querySingleTransferDetail**
QuerySingleTransferDetailResponse querySingleTransferDetail(QuerySingleTransferDetailRequest request)

转账到支付宝记录查询（单笔）

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\QuerySingleTransferDetailRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\QuerySingleTransferDetailReqDTO());

try {
    $response = $api_client->querySingleTransferDetail($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->querySingleTransferDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\QuerySingleTransferDetailReqDTO**](../Model/QuerySingleTransferDetailReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\QuerySingleTransferDetailRspDTO**](../Model/QuerySingleTransferDetailRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **queryUserBookWithdrawOrderBySystem**
QueryUserBookWithdrawOrderBySystemResponse queryUserBookWithdrawOrderBySystem(QueryUserBookWithdrawOrderBySystemRequest request)

记账簿出款-查询

记账簿出款-查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\QueryUserBookWithdrawOrderBySystemRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\UserBookWithdrawOrderQueryReqDTO());

try {
    $response = $api_client->queryUserBookWithdrawOrderBySystem($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->queryUserBookWithdrawOrderBySystem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\UserBookWithdrawOrderQueryReqDTO**](../Model/UserBookWithdrawOrderQueryReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\UserBookWithdrawQueryRespDTO**](../Model/UserBookWithdrawQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **query_bind_card_apply_list**
QueryBindCardApplyListResponse query_bind_card_apply_list(QueryBindCardApplyListRequest request)

银行清分账户绑卡请求查询

支持商户通过此接口查询绑卡进度

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\QueryBindCardApplyListRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BindClearCardApplyQueryReqDTO());

try {
    $response = $api_client->query_bind_card_apply_list($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->query_bind_card_apply_list: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BindClearCardApplyQueryReqDTO**](../Model/BindClearCardApplyQueryReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BindCardApplyRspDTO**](../Model/BindCardApplyRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **query_bind_card_list**
QueryBindCardListResponse query_bind_card_list(QueryBindCardListRequest request)

银行清分账户绑卡信息查询

支持商户通过此接口查询绑定卡信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\QueryBindCardListRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BindClearCardInfoQueryReqDTO());

try {
    $response = $api_client->query_bind_card_list($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->query_bind_card_list: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BindClearCardInfoQueryReqDTO**](../Model/BindClearCardInfoQueryReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BindCardInfoRspDTO**](../Model/BindCardInfoRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **query_single_transfer_detail**
QuerySingleTransferDetailResponse query_single_transfer_detail(QuerySingleTransferDetailRequest request)

转账到支付宝记录查询（单笔）

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\QuerySingleTransferDetailRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\QuerySingleTransferDetailReqDTO());

try {
    $response = $api_client->query_single_transfer_detail($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->query_single_transfer_detail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\QuerySingleTransferDetailReqDTO**](../Model/QuerySingleTransferDetailReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\QuerySingleTransferDetailRspDTO**](../Model/QuerySingleTransferDetailRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **query_transit_account_balance**
QueryTransitAccountBalanceResponse query_transit_account_balance(QueryTransitAccountBalanceRequest request)

在途账户余额查询

在途账户余额查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\QueryTransitAccountBalanceRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\QueryTransitVirtualAccountBalanceReqDTO());

try {
    $response = $api_client->query_transit_account_balance($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->query_transit_account_balance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\QueryTransitVirtualAccountBalanceReqDTO**](../Model/QueryTransitVirtualAccountBalanceReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\QueryTransitVirtualAccountBalanceRespDTO**](../Model/QueryTransitVirtualAccountBalanceRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **querybindcardapplylist**
QuerybindcardapplylistResponse querybindcardapplylist(QuerybindcardapplylistRequest request)

银行清分账户绑卡请求查询

支持商户通过此接口查询绑卡进度

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\QuerybindcardapplylistRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BindClearCardApplyQueryReqDTO());

try {
    $response = $api_client->querybindcardapplylist($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->querybindcardapplylist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BindClearCardApplyQueryReqDTO**](../Model/BindClearCardApplyQueryReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BindCardApplyRspDTO**](../Model/BindCardApplyRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **querybindcardlist**
QuerybindcardlistResponse querybindcardlist(QuerybindcardlistRequest request)

银行清分账户绑卡信息查询

支持商户通过此接口查询绑定卡信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\QuerybindcardlistRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BindClearCardInfoQueryReqDTO());

try {
    $response = $api_client->querybindcardlist($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->querybindcardlist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BindClearCardInfoQueryReqDTO**](../Model/BindClearCardInfoQueryReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BindCardInfoRspDTO**](../Model/BindCardInfoRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **receiptGather**
ReceiptGatherResponse receiptGather(ReceiptGatherRequest request)

获取资金汇总凭证

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\ReceiptGatherRequest();
$request->setMerchantNo("merchantNo_example");
$request->setRemark("remark_example");
$request->setCounterpartyNo("counterpartyNo_example");
$request->setOrderNos("orderNos_example");
$request->setBizDate("bizDate_example");

try {
    $response = $api_client->receiptGather($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->receiptGather: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **counterpartyNo** | **string**|  | [optional]
 **orderNos** | **string**|  | [optional]
 **bizDate** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BatchReceiptRespDTO**](../Model/BatchReceiptRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **receiptGet**
ReceiptGetResponse receiptGet(ReceiptGetRequest request)

电子回单-下载

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\ReceiptGetRequest();
$request->setTradeType("tradeType_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setOrderNo("orderNo_example");
$request->setRequestNo("requestNo_example");
$request->setOrderDate("orderDate_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->receiptGet($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->receiptGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tradeType** | **string**| &lt;p&gt;可选项如下:&lt;br /&gt;TRANSFER:企业账户转账&lt;br /&gt;PAY:企业付款&lt;br /&gt;RECHARGE:企业账户充值&lt;br /&gt;WITHDRAW:企业账户提现&lt;br /&gt;ADVANCE:记账薄收款&lt;br /&gt;ORDER_REMIT:订单付款&lt;br /&gt;GROUP_ACCOUNT_TRANSFER:资金归集&lt;br /&gt;BANK_ACCOUNT_WITHDRAW:银行清分提现&lt;/p&gt; |
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; | [optional]
 **orderNo** | **string**| &lt;p&gt;易宝支付系统生成的付款订单号（与商户请求号两者填其一）&lt;/p&gt; | [optional]
 **requestNo** | **string**| &lt;p&gt;商户请求号&lt;br /&gt;商户请求号，由商户自定义生成（与易宝付款订单号两者填其一）&lt;/p&gt; | [optional]
 **orderDate** | **string**| &lt;p&gt;如果传了商户请求号requestNo，orderDate也是必填的，格式 yyyy-MM/yyyy-MM-dd&lt;/p&gt; | [optional]
 **merchantNo** | **string**| &lt;p&gt;商户编号，易宝支付分配的的商户唯一标识，如果传了商户请求号requestNo，那么merchantNo也是必填的。&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ReceiptRespDTO**](../Model/ReceiptRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **receiptReceiverGet**
ReceiptReceiverGetResponse receiptReceiverGet(ReceiptReceiverGetRequest request)

转入方回单下载

支持转入方通过该接口下载转账电子回单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\ReceiptReceiverGetRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\ReceiverReceiptReqDTO());

try {
    $response = $api_client->receiptReceiverGet($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->receiptReceiverGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\ReceiverReceiptReqDTO**](../Model/ReceiverReceiptReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ReceiverReceiptResponseDTO**](../Model/ReceiverReceiptResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **receipt_gather_v1_0**
ReceiptGatherV10Response receipt_gather_v1_0(ReceiptGatherV10Request request)

获取资金汇总凭证

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\ReceiptGatherV10Request();
$request->setMerchantNo("merchantNo_example");
$request->setRemark("remark_example");
$request->setCounterpartyNo("counterpartyNo_example");
$request->setOrderNos("orderNos_example");
$request->setBizDate("bizDate_example");

try {
    $response = $api_client->receipt_gather_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->receipt_gather_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **counterpartyNo** | **string**|  | [optional]
 **orderNos** | **string**|  | [optional]
 **bizDate** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BatchReceiptRespDTO**](../Model/BatchReceiptRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **receipt_get_v1_0**
ReceiptGetV10Response receipt_get_v1_0(ReceiptGetV10Request request)

电子回单-下载

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\ReceiptGetV10Request();
$request->setTradeType("tradeType_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setOrderNo("orderNo_example");
$request->setRequestNo("requestNo_example");
$request->setOrderDate("orderDate_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->receipt_get_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->receipt_get_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tradeType** | **string**| &lt;p&gt;可选项如下:&lt;br /&gt;TRANSFER:企业账户转账&lt;br /&gt;PAY:企业付款&lt;br /&gt;RECHARGE:企业账户充值&lt;br /&gt;WITHDRAW:企业账户提现&lt;br /&gt;ADVANCE:记账薄收款&lt;br /&gt;ORDER_REMIT:订单付款&lt;br /&gt;GROUP_ACCOUNT_TRANSFER:资金归集&lt;br /&gt;BANK_ACCOUNT_WITHDRAW:银行清分提现&lt;/p&gt; |
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; | [optional]
 **orderNo** | **string**| &lt;p&gt;易宝支付系统生成的付款订单号（与商户请求号两者填其一）&lt;/p&gt; | [optional]
 **requestNo** | **string**| &lt;p&gt;商户请求号&lt;br /&gt;商户请求号，由商户自定义生成（与易宝付款订单号两者填其一）&lt;/p&gt; | [optional]
 **orderDate** | **string**| &lt;p&gt;如果传了商户请求号requestNo，orderDate也是必填的，格式 yyyy-MM/yyyy-MM-dd&lt;/p&gt; | [optional]
 **merchantNo** | **string**| &lt;p&gt;商户编号，易宝支付分配的的商户唯一标识，如果传了商户请求号requestNo，那么merchantNo也是必填的。&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ReceiptRespDTO**](../Model/ReceiptRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **recharge**
RechargeResponse recharge(RechargeRequest request)

充值-下单（多种支付）

提供商户资金进入易宝商户账户的能力，充值方式支持企业网银和个人网银、银行汇款、银行扣款、对公快捷等

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\RechargeRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RechargeApiV2RequestDTO());

try {
    $response = $api_client->recharge($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->recharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\RechargeApiV2RequestDTO**](../Model/RechargeApiV2RequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RechargeApiV2ResponseDTO**](../Model/RechargeApiV2ResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **rechargeAccountBookQuery**
RechargeAccountBookQueryResponse rechargeAccountBookQuery(RechargeAccountBookQueryRequest request)

批量查询记账簿来账流水

通过此接口可批量查询记账簿来账流水

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\RechargeAccountBookQueryRequest();
$request->setYpAccountBookNo("ypAccountBookNo_example");
$request->setQueryStartDate("queryStartDate_example");
$request->setQueryEndDate("queryEndDate_example");
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setPageNo(56);
$request->setPageSize(56);

try {
    $response = $api_client->rechargeAccountBookQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->rechargeAccountBookQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ypAccountBookNo** | **string**| 易宝记账簿编号 |
 **queryStartDate** | **string**| 查询时间范围-开始日期 格式:yyyy-MM-dd HH:mm:ss&lt;br&gt;与结束时间间隔不能超过31天 |
 **queryEndDate** | **string**| 查询时间范围-结束时间 格式:yyyy-MM-dd HH:mm:ss&lt;br&gt;与开始时间间隔不能超过31天 |
 **merchantNo** | **string**| 收款商户编号 |
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **pageNo** | **int**| 页码,从1开始,默认为1 | [optional]
 **pageSize** | **int**| 页大小,默认30 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RechargePageQueryResponseDTO**](../Model/RechargePageQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rechargeBatchQuery**
RechargeBatchQueryResponse rechargeBatchQuery(RechargeBatchQueryRequest request)

充值订单批量查询



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\RechargeBatchQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setQueryStartDate("queryStartDate_example");
$request->setQueryEndDate("queryEndDate_example");

try {
    $response = $api_client->rechargeBatchQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->rechargeBatchQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;充值商户编号&lt;/p&gt; |
 **queryStartDate** | **string**| &lt;p&gt;查询开始时间&lt;br /&gt;（支持获取最长周期为30天的充值记录,&lt;br /&gt;支持yyyy-MM-dd格式，示例：2021-09-17 即2021-09-17 00:00:00开始）&lt;/p&gt; |
 **queryEndDate** | **string**| &lt;p&gt;查询结束时间&lt;br /&gt;（支持获取最长周期为30天的充值记录，&lt;br /&gt;支持yyyy-MM-dd格式，示例：2021-09-17 即2021-09-17 23:59:59结束)&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RechargeQueryMultiApiRespDTO**](../Model/RechargeQueryMultiApiRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rechargeDelConfig**
RechargeDelConfigResponse rechargeDelConfig(RechargeDelConfigRequest request)

充值银行汇款-删除绑卡信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\RechargeDelConfigRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RechargeWhiteListRequestDTO());

try {
    $response = $api_client->rechargeDelConfig($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->rechargeDelConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\RechargeWhiteListRequestDTO**](../Model/RechargeWhiteListRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RechargeWhiteListResponseDTO**](../Model/RechargeWhiteListResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **rechargeOnlinebankOrder**
RechargeOnlinebankOrderResponse rechargeOnlinebankOrder(RechargeOnlinebankOrderRequest request)

充值-网银下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\RechargeOnlinebankOrderRequest();
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setAmount(1.2);
$request->setPayType("payType_example");
$request->setBankCode("bankCode_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setRemark("remark_example");
$request->setReturnUrl("returnUrl_example");

try {
    $response = $api_client->rechargeOnlinebankOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->rechargeOnlinebankOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **amount** | **float**|  | [optional]
 **payType** | **string**|  | [optional]
 **bankCode** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\OnlineBankRechargeApiRespDTO**](../Model/OnlineBankRechargeApiRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rechargeOrder**
RechargeOrderResponse rechargeOrder(RechargeOrderRequest request)

充值-银行汇款下单

发起充值

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\RechargeOrderRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("100400612345");
$request->setRequestNo("requestNo_example");
$request->setAmount(1.2);
$request->setRemark("remark_example");
$request->setPayType("payType_example");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->rechargeOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->rechargeOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **amount** | **float**|  | [optional]
 **remark** | **string**|  | [optional]
 **payType** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RechargeApiRespDTO**](../Model/RechargeApiRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rechargePayerAdd**
RechargePayerAddResponse rechargePayerAdd(RechargePayerAddRequest request)

添加付款方

添加付款方

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\RechargePayerAddRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setIdentityType("identityType_example");
$request->setName("name_example");
$request->setCertificateType("certificateType_example");
$request->setCertificateNo("certificateNo_example");
$request->setApplyDataUrl("applyDataUrl_example");

try {
    $response = $api_client->rechargePayerAdd($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->rechargePayerAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **identityType** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **certificateType** | **string**|  | [optional]
 **certificateNo** | **string**|  | [optional]
 **applyDataUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\YopRechargeManageResponseDTO**](../Model/YopRechargeManageResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rechargePayerDelete**
RechargePayerDeleteResponse rechargePayerDelete(RechargePayerDeleteRequest request)

删除付款方

删除付款方

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\RechargePayerDeleteRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setIdentityType("identityType_example");
$request->setName("name_example");
$request->setCertificateType("certificateType_example");
$request->setCertificateNo("certificateNo_example");

try {
    $response = $api_client->rechargePayerDelete($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->rechargePayerDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **identityType** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **certificateType** | **string**|  | [optional]
 **certificateNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\YopRechargeManageResponseDTO**](../Model/YopRechargeManageResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rechargePayerQuery**
RechargePayerQueryResponse rechargePayerQuery(RechargePayerQueryRequest request)

查询付款方

查询付款方

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\RechargePayerQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setIdentityType("identityType_example");
$request->setName("name_example");
$request->setCertificateType("certificateType_example");
$request->setCertificateNo("certificateNo_example");

try {
    $response = $api_client->rechargePayerQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->rechargePayerQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;/p&gt; |
 **identityType** | **string**| 可选项如下: BUSINESS:企业账户 PERSON:个人账户 | [optional]
 **name** | **string**| &lt;p&gt;账户名称&lt;/p&gt; | [optional]
 **certificateType** | **string**| 可选项如下: ID_CARD:身份证 | [optional]
 **certificateNo** | **string**| &lt;p&gt;证件号&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\YopRechargeManageQueryResponseDTO**](../Model/YopRechargeManageQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rechargeQuery**
RechargeQueryResponse rechargeQuery(RechargeQueryRequest request)

充值-查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\RechargeQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderNo("orderNo_example");
$request->setRequestNo("requestNo_example");

try {
    $response = $api_client->rechargeQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->rechargeQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;充值商户编号&lt;/p&gt; |
 **orderNo** | **string**| &lt;p&gt;充值订单号&lt;br /&gt;充值订单号和商户请求号不能同时为空&lt;/p&gt; | [optional]
 **requestNo** | **string**| &lt;p&gt;商户请求号&lt;br /&gt;充值订单号和商户请求号不能同时为空&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RechargeQueryApiRespDTO**](../Model/RechargeQueryApiRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rechargeQueryConfig**
RechargeQueryConfigResponse rechargeQueryConfig(RechargeQueryConfigRequest request)

充值银行汇款-查询绑卡信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\RechargeQueryConfigRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RechargeWhiteListQueryRequestDTO());

try {
    $response = $api_client->rechargeQueryConfig($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->rechargeQueryConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\RechargeWhiteListQueryRequestDTO**](../Model/RechargeWhiteListQueryRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RechargeWhiteListQueryResponseDTO**](../Model/RechargeWhiteListQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **rechargeSaveConfig**
RechargeSaveConfigResponse rechargeSaveConfig(RechargeSaveConfigRequest request)

充值银行汇款-新增绑卡信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\RechargeSaveConfigRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RechargeWhiteListRequestDTO());

try {
    $response = $api_client->rechargeSaveConfig($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->rechargeSaveConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\RechargeWhiteListRequestDTO**](../Model/RechargeWhiteListRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RechargeWhiteListResponseDTO**](../Model/RechargeWhiteListResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **recharge_account_book_query_v1_0**
RechargeAccountBookQueryV10Response recharge_account_book_query_v1_0(RechargeAccountBookQueryV10Request request)

批量查询记账簿来账流水

通过此接口可批量查询记账簿来账流水

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\RechargeAccountBookQueryV10Request();
$request->setYpAccountBookNo("ypAccountBookNo_example");
$request->setQueryStartDate("queryStartDate_example");
$request->setQueryEndDate("queryEndDate_example");
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setPageNo(56);
$request->setPageSize(56);

try {
    $response = $api_client->recharge_account_book_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->recharge_account_book_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ypAccountBookNo** | **string**| 易宝记账簿编号 |
 **queryStartDate** | **string**| 查询时间范围-开始日期 格式:yyyy-MM-dd HH:mm:ss&lt;br&gt;与结束时间间隔不能超过31天 |
 **queryEndDate** | **string**| 查询时间范围-结束时间 格式:yyyy-MM-dd HH:mm:ss&lt;br&gt;与开始时间间隔不能超过31天 |
 **merchantNo** | **string**| 收款商户编号 |
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **pageNo** | **int**| 页码,从1开始,默认为1 | [optional]
 **pageSize** | **int**| 页大小,默认30 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RechargePageQueryResponseDTO**](../Model/RechargePageQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **recharge_batch_query_v1_0**
RechargeBatchQueryV10Response recharge_batch_query_v1_0(RechargeBatchQueryV10Request request)

充值订单批量查询



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\RechargeBatchQueryV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setQueryStartDate("queryStartDate_example");
$request->setQueryEndDate("queryEndDate_example");

try {
    $response = $api_client->recharge_batch_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->recharge_batch_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;充值商户编号&lt;/p&gt; |
 **queryStartDate** | **string**| &lt;p&gt;查询开始时间&lt;br /&gt;（支持获取最长周期为30天的充值记录,&lt;br /&gt;支持yyyy-MM-dd格式，示例：2021-09-17 即2021-09-17 00:00:00开始）&lt;/p&gt; |
 **queryEndDate** | **string**| &lt;p&gt;查询结束时间&lt;br /&gt;（支持获取最长周期为30天的充值记录，&lt;br /&gt;支持yyyy-MM-dd格式，示例：2021-09-17 即2021-09-17 23:59:59结束)&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RechargeQueryMultiApiRespDTO**](../Model/RechargeQueryMultiApiRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **recharge_onlinebank_order_v1_0**
RechargeOnlinebankOrderV10Response recharge_onlinebank_order_v1_0(RechargeOnlinebankOrderV10Request request)

充值-网银下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\RechargeOnlinebankOrderV10Request();
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setAmount(1.2);
$request->setPayType("payType_example");
$request->setBankCode("bankCode_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setRemark("remark_example");
$request->setReturnUrl("returnUrl_example");

try {
    $response = $api_client->recharge_onlinebank_order_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->recharge_onlinebank_order_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **amount** | **float**|  | [optional]
 **payType** | **string**|  | [optional]
 **bankCode** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\OnlineBankRechargeApiRespDTO**](../Model/OnlineBankRechargeApiRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **recharge_order_v1_0**
RechargeOrderV10Response recharge_order_v1_0(RechargeOrderV10Request request)

充值-银行汇款下单

发起充值

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\RechargeOrderV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("100400612345");
$request->setRequestNo("requestNo_example");
$request->setAmount(1.2);
$request->setRemark("remark_example");
$request->setPayType("payType_example");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->recharge_order_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->recharge_order_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **amount** | **float**|  | [optional]
 **remark** | **string**|  | [optional]
 **payType** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RechargeApiRespDTO**](../Model/RechargeApiRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **recharge_query_v1_0**
RechargeQueryV10Response recharge_query_v1_0(RechargeQueryV10Request request)

充值-查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\RechargeQueryV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderNo("orderNo_example");
$request->setRequestNo("requestNo_example");

try {
    $response = $api_client->recharge_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->recharge_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;充值商户编号&lt;/p&gt; |
 **orderNo** | **string**| &lt;p&gt;充值订单号&lt;br /&gt;充值订单号和商户请求号不能同时为空&lt;/p&gt; | [optional]
 **requestNo** | **string**| &lt;p&gt;商户请求号&lt;br /&gt;充值订单号和商户请求号不能同时为空&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RechargeQueryApiRespDTO**](../Model/RechargeQueryApiRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **recharge_v1_0**
RechargeV10Response recharge_v1_0(RechargeV10Request request)

充值-下单（多种支付）

提供商户资金进入易宝商户账户的能力，充值方式支持企业网银和个人网银、银行汇款、银行扣款、对公快捷等

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\RechargeV10Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RechargeApiV2RequestDTO());

try {
    $response = $api_client->recharge_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->recharge_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\RechargeApiV2RequestDTO**](../Model/RechargeApiV2RequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RechargeApiV2ResponseDTO**](../Model/RechargeApiV2ResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **singleProxyTransfer**
SingleProxyTransferResponse singleProxyTransfer(SingleProxyTransferRequest request)

转账到支付宝（单笔）

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\SingleProxyTransferRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\SingleProxyTransferChannelReqDTO());

try {
    $response = $api_client->singleProxyTransfer($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->singleProxyTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\SingleProxyTransferChannelReqDTO**](../Model/SingleProxyTransferChannelReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\SingleProxyTransferRspDTO**](../Model/SingleProxyTransferRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **supplierApply**
SupplierApplyResponse supplierApply(SupplierApplyRequest request)

付款到供应商--申请添加供应商

付款到供应商--申请添加供应商

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\SupplierApplyRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\ApplySupplierRequestDTO());

try {
    $response = $api_client->supplierApply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->supplierApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\ApplySupplierRequestDTO**](../Model/ApplySupplierRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ApplySupplierRespDTO**](../Model/ApplySupplierRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **supplierPayOrder**
SupplierPayOrderResponse supplierPayOrder(SupplierPayOrderRequest request)

付款到供应商/个人-下单

付款到供应商/个人-下单 如商户已成功对接过银联，选择采用银联接口获取总行编码及支行编码，可能存在使用过程中，易宝无法识别的总行编码或支行编码，如出现此情况，请联系易宝运营人员处理。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\SupplierPayOrderRequest();
$request->setParentMerchantNo("100400612345");
$request->setMerchantNo("100400612345");
$request->setRequestNo("requestNo111");
$request->setOrderAmount(1.01);
$request->setReceiverAccountNo("6212260200062388891");
$request->setSupplierId(17);
$request->setReceiverBankCode("ICBC");
$request->setBranchBankCode("branchBankCode_example");
$request->setBankAccountType("DEBIT_CARD");
$request->setComments("xx平台付款");
$request->setFeeChargeSide("PAYER");
$request->setTerminalType("PC");
$request->setReceiveType("REAL_TIME");
$request->setNotifyUrl("notifyUrl_example");
$request->setReceiptComments("receiptComments_example");

try {
    $response = $api_client->supplierPayOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->supplierPayOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **receiverAccountNo** | **string**|  | [optional]
 **supplierId** | **int**|  | [optional]
 **receiverBankCode** | **string**|  | [optional]
 **branchBankCode** | **string**|  | [optional]
 **bankAccountType** | **string**|  | [optional]
 **comments** | **string**|  | [optional]
 **feeChargeSide** | **string**|  | [optional]
 **terminalType** | **string**|  | [optional]
 **receiveType** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **receiptComments** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RemitRespDTO**](../Model/RemitRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **supplierQuery**
SupplierQueryResponse supplierQuery(SupplierQueryRequest request)

付款到供应商--查询已添加的供应商

付款到供应商--查询已添加的供应商

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\SupplierQueryRequest();
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->supplierQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->supplierQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\QuerySupplierRespDTO**](../Model/QuerySupplierRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **supplierQueryProgress**
SupplierQueryProgressResponse supplierQueryProgress(SupplierQueryProgressRequest request)

付款到供应商--查询申请进度

付款到供应商--查询申请进度

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\SupplierQueryProgressRequest();
$request->setRequestNo("requestNo_example");

try {
    $response = $api_client->supplierQueryProgress($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->supplierQueryProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**| &lt;p&gt;商户请求号&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ApplySupplierProgressRespDTO**](../Model/ApplySupplierProgressRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **supplier_apply_v1_0**
SupplierApplyV10Response supplier_apply_v1_0(SupplierApplyV10Request request)

付款到供应商--申请添加供应商

付款到供应商--申请添加供应商

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\SupplierApplyV10Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\ApplySupplierRequestDTO());

try {
    $response = $api_client->supplier_apply_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->supplier_apply_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\ApplySupplierRequestDTO**](../Model/ApplySupplierRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ApplySupplierRespDTO**](../Model/ApplySupplierRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **supplier_pay_order_v1_0**
SupplierPayOrderV10Response supplier_pay_order_v1_0(SupplierPayOrderV10Request request)

付款到供应商/个人-下单

付款到供应商/个人-下单 如商户已成功对接过银联，选择采用银联接口获取总行编码及支行编码，可能存在使用过程中，易宝无法识别的总行编码或支行编码，如出现此情况，请联系易宝运营人员处理。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\SupplierPayOrderV10Request();
$request->setParentMerchantNo("100400612345");
$request->setMerchantNo("100400612345");
$request->setRequestNo("requestNo111");
$request->setOrderAmount(1.01);
$request->setReceiverAccountNo("6212260200062388891");
$request->setSupplierId(17);
$request->setReceiverBankCode("ICBC");
$request->setBranchBankCode("branchBankCode_example");
$request->setBankAccountType("DEBIT_CARD");
$request->setComments("xx平台付款");
$request->setFeeChargeSide("PAYER");
$request->setTerminalType("PC");
$request->setReceiveType("REAL_TIME");
$request->setNotifyUrl("notifyUrl_example");
$request->setReceiptComments("receiptComments_example");

try {
    $response = $api_client->supplier_pay_order_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->supplier_pay_order_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **receiverAccountNo** | **string**|  | [optional]
 **supplierId** | **int**|  | [optional]
 **receiverBankCode** | **string**|  | [optional]
 **branchBankCode** | **string**|  | [optional]
 **bankAccountType** | **string**|  | [optional]
 **comments** | **string**|  | [optional]
 **feeChargeSide** | **string**|  | [optional]
 **terminalType** | **string**|  | [optional]
 **receiveType** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **receiptComments** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RemitRespDTO**](../Model/RemitRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **supplier_query_progress_v1_0**
SupplierQueryProgressV10Response supplier_query_progress_v1_0(SupplierQueryProgressV10Request request)

付款到供应商--查询申请进度

付款到供应商--查询申请进度

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\SupplierQueryProgressV10Request();
$request->setRequestNo("requestNo_example");

try {
    $response = $api_client->supplier_query_progress_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->supplier_query_progress_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**| &lt;p&gt;商户请求号&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ApplySupplierProgressRespDTO**](../Model/ApplySupplierProgressRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **supplier_query_v1_0**
SupplierQueryV10Response supplier_query_v1_0(SupplierQueryV10Request request)

付款到供应商--查询已添加的供应商

付款到供应商--查询已添加的供应商

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\SupplierQueryV10Request();
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->supplier_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->supplier_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\QuerySupplierRespDTO**](../Model/QuerySupplierRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **targetOrder**
TargetOrderResponse targetOrder(TargetOrderRequest request)

定向付款-下单

为了保证出款成功，各农信社卡或账号16位以下的农业银行卡，建议或尽可能填写支行编码； 如商户已成功对接过银联，选择采用银联接口获取总行编码及支行编码，可能存在使用过程中，易宝无法识别的总行编码或支行编码，如出现此情况，请联系易宝运营人员处理

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\TargetOrderRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\YopAppointTargetRemitRequestDTO());

try {
    $response = $api_client->targetOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->targetOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\YopAppointTargetRemitRequestDTO**](../Model/YopAppointTargetRemitRequestDTO.md)| 定向付款的下单的请求参数 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\YopAppointTargetRemitResponseDTO**](../Model/YopAppointTargetRemitResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **transferAppointMarketAccount**
TransferAppointMarketAccountResponse transferAppointMarketAccount(TransferAppointMarketAccountRequest request)

营销账户转账-下单

接口描述：支持商户通过该接口进行营销账户直接的转账，转出方和转入方签约名需要一致

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\TransferAppointMarketAccountRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\MgTransferMarketAccountDTO());

try {
    $response = $api_client->transferAppointMarketAccount($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->transferAppointMarketAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\MgTransferMarketAccountDTO**](../Model/MgTransferMarketAccountDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\MgTransferOrderRespDTO**](../Model/MgTransferOrderRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **transferB2bOrder**
TransferB2bOrderResponse transferB2bOrder(TransferB2bOrderRequest request)

转账-下单



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\TransferB2bOrderRequest();
$request->setParentMerchantNo("100400612345");
$request->setRequestNo("TRANS2133213124");
$request->setFromMerchantNo("100400612345");
$request->setToMerchantNo("100400612346");
$request->setToAccountType("默认FUND_ACCOUNT");
$request->setOrderAmount("0.01");
$request->setUsage("预付实扣");
$request->setFeeChargeSide("feeChargeSide_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setRiskInfo("riskInfo_example");
$request->setToAccountNo("toAccountNo_example");
$request->setVerifyType("verifyType_example");
$request->setVerifyValue("verifyValue_example");

try {
    $response = $api_client->transferB2bOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->transferB2bOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **fromMerchantNo** | **string**|  | [optional]
 **toMerchantNo** | **string**|  | [optional]
 **toAccountType** | **string**|  | [optional]
 **orderAmount** | **string**|  | [optional]
 **usage** | **string**|  | [optional]
 **feeChargeSide** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **riskInfo** | **string**|  | [optional]
 **toAccountNo** | **string**|  | [optional]
 **verifyType** | **string**|  | [optional]
 **verifyValue** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\MgTransferOrderRespDTO**](../Model/MgTransferOrderRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **transferB2bOrderAuditQuery**
TransferB2bOrderAuditQueryResponse transferB2bOrderAuditQuery(TransferB2bOrderAuditQueryRequest request)

转账-复核订单查询

转账-复核订单查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\TransferB2bOrderAuditQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setFromMerchantNo("fromMerchantNo_example");
$request->setAuditMethod("auditMethod_example");
$request->setRequestNo("requestNo_example");
$request->setOrderNo("orderNo_example");

try {
    $response = $api_client->transferB2bOrderAuditQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->transferB2bOrderAuditQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **fromMerchantNo** | **string**| &lt;p&gt;转出方商户编号&lt;/p&gt; |
 **auditMethod** | **string**| 可选项如下: SMS:短信验证码 |
 **requestNo** | **string**| &lt;p&gt;商户请求号和易宝转账订单号二选一必填&lt;/p&gt; | [optional]
 **orderNo** | **string**| &lt;p&gt;商户请求号和易宝转账订单号二选一必填&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\TransferAuditQueryRespDTO**](../Model/TransferAuditQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **transferB2bOrderAuditSendSms**
TransferB2bOrderAuditSendSmsResponse transferB2bOrderAuditSendSms(TransferB2bOrderAuditSendSmsRequest request)

转账-短信重发

转账-短信重发

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\TransferB2bOrderAuditSendSmsRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\TransferAuditSendSmsRequestDTO());

try {
    $response = $api_client->transferB2bOrderAuditSendSms($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->transferB2bOrderAuditSendSms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\TransferAuditSendSmsRequestDTO**](../Model/TransferAuditSendSmsRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\TransferAuditSendSmsRespDTO**](../Model/TransferAuditSendSmsRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **transferB2bOrderAuditSms**
TransferB2bOrderAuditSmsResponse transferB2bOrderAuditSms(TransferB2bOrderAuditSmsRequest request)

转账-短信确认

转账-短信确认

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\TransferB2bOrderAuditSmsRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\TransferAuditVerifySmsRequestDTO());

try {
    $response = $api_client->transferB2bOrderAuditSms($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->transferB2bOrderAuditSms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\TransferAuditVerifySmsRequestDTO**](../Model/TransferAuditVerifySmsRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\TransferAuditVerifySmsRespDTO**](../Model/TransferAuditVerifySmsRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **transferB2bOrderV3**
TransferB2bOrderV3Response transferB2bOrderV3(TransferB2bOrderV3Request request)

转账-下单-支持短验复核

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\TransferB2bOrderV3Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\MgTransferReqDTO());

try {
    $response = $api_client->transferB2bOrderV3($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->transferB2bOrderV3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\MgTransferReqDTO**](../Model/MgTransferReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\MgTransferOrderRespDTO**](../Model/MgTransferOrderRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **transferB2bQuery**
TransferB2bQueryResponse transferB2bQuery(TransferB2bQueryRequest request)

转账-查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\TransferB2bQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setOrderNo("orderNo_example");

try {
    $response = $api_client->transferB2bQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->transferB2bQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; | [optional]
 **requestNo** | **string**| 商户请求号&lt;br&gt;商户请求号，由商户自定义生成(与易宝转账订单号两者填其一) | [optional]
 **orderNo** | **string**| 易宝转账订单号&lt;br&gt;易宝支付系统生成的转账订单号(与商户请求号两者填其一) | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\MgTransferOrderQueryRespDTO**](../Model/MgTransferOrderQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **transferSystemQuery**
TransferSystemQueryResponse transferSystemQuery(TransferSystemQueryRequest request)

转账-查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\TransferSystemQueryRequest();
$request->setMerchantNo("merchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setOrderNo("orderNo_example");

try {
    $response = $api_client->transferSystemQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->transferSystemQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |
 **requestNo** | **string**| 商户请求号&lt;br&gt;商户请求号，由商户自定义生成(与易宝转账订单号两者填其一) | [optional]
 **orderNo** | **string**| 易宝转账订单号&lt;br&gt;易宝支付系统生成的转账订单号(与商户请求号两者填其一) | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\MgTransferOrderQueryRespDTO**](../Model/MgTransferOrderQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **transferWechatOrder**
TransferWechatOrderResponse transferWechatOrder(TransferWechatOrderRequest request)

转账到微信零钱-下单



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\TransferWechatOrderRequest();
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setAmount(1.2);
$request->setAppId("appId_example");
$request->setScene("scene_example");
$request->setOpenId("openId_example");
$request->setUserName("userName_example");
$request->setRemark("remark_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->transferWechatOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->transferWechatOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **amount** | **float**|  | [optional]
 **appId** | **string**|  | [optional]
 **scene** | **string**|  | [optional]
 **openId** | **string**|  | [optional]
 **userName** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\WechatTransferRespDTO**](../Model/WechatTransferRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **transferWechatQuery**
TransferWechatQueryResponse transferWechatQuery(TransferWechatQueryRequest request)

转账到微信零钱-查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\TransferWechatQueryRequest();
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setOrderNo("orderNo_example");

try {
    $response = $api_client->transferWechatQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->transferWechatQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| 商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 |
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **requestNo** | **string**| 商户请求号&lt;br&gt;由商户自定义生成 | [optional]
 **orderNo** | **string**| 易宝转账订单号&lt;br&gt;易宝支付系统生成的转账订单号（跟商户请求号二选一） | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\QueryWechatTransferRespDTO**](../Model/QueryWechatTransferRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **transfer_appoint_market_account**
TransferAppointMarketAccountResponse transfer_appoint_market_account(TransferAppointMarketAccountRequest request)

营销账户转账-下单

接口描述：支持商户通过该接口进行营销账户直接的转账，转出方和转入方签约名需要一致

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\TransferAppointMarketAccountRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\MgTransferMarketAccountDTO());

try {
    $response = $api_client->transfer_appoint_market_account($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->transfer_appoint_market_account: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\MgTransferMarketAccountDTO**](../Model/MgTransferMarketAccountDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\MgTransferOrderRespDTO**](../Model/MgTransferOrderRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **transfer_b2b_order_audit_query**
TransferB2bOrderAuditQueryResponse transfer_b2b_order_audit_query(TransferB2bOrderAuditQueryRequest request)

转账-复核订单查询

转账-复核订单查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\TransferB2bOrderAuditQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setFromMerchantNo("fromMerchantNo_example");
$request->setAuditMethod("auditMethod_example");
$request->setRequestNo("requestNo_example");
$request->setOrderNo("orderNo_example");

try {
    $response = $api_client->transfer_b2b_order_audit_query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->transfer_b2b_order_audit_query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **fromMerchantNo** | **string**| &lt;p&gt;转出方商户编号&lt;/p&gt; |
 **auditMethod** | **string**| 可选项如下: SMS:短信验证码 |
 **requestNo** | **string**| &lt;p&gt;商户请求号和易宝转账订单号二选一必填&lt;/p&gt; | [optional]
 **orderNo** | **string**| &lt;p&gt;商户请求号和易宝转账订单号二选一必填&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\TransferAuditQueryRespDTO**](../Model/TransferAuditQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **transfer_b2b_order_audit_send_sms**
TransferB2bOrderAuditSendSmsResponse transfer_b2b_order_audit_send_sms(TransferB2bOrderAuditSendSmsRequest request)

转账-短信重发

转账-短信重发

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\TransferB2bOrderAuditSendSmsRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\TransferAuditSendSmsRequestDTO());

try {
    $response = $api_client->transfer_b2b_order_audit_send_sms($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->transfer_b2b_order_audit_send_sms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\TransferAuditSendSmsRequestDTO**](../Model/TransferAuditSendSmsRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\TransferAuditSendSmsRespDTO**](../Model/TransferAuditSendSmsRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **transfer_b2b_order_audit_sms**
TransferB2bOrderAuditSmsResponse transfer_b2b_order_audit_sms(TransferB2bOrderAuditSmsRequest request)

转账-短信确认

转账-短信确认

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\TransferB2bOrderAuditSmsRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\TransferAuditVerifySmsRequestDTO());

try {
    $response = $api_client->transfer_b2b_order_audit_sms($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->transfer_b2b_order_audit_sms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\TransferAuditVerifySmsRequestDTO**](../Model/TransferAuditVerifySmsRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\TransferAuditVerifySmsRespDTO**](../Model/TransferAuditVerifySmsRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **transfer_b2b_order_v1_0**
TransferB2bOrderV10Response transfer_b2b_order_v1_0(TransferB2bOrderV10Request request)

转账-下单



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\TransferB2bOrderV10Request();
$request->setParentMerchantNo("100400612345");
$request->setRequestNo("TRANS2133213124");
$request->setFromMerchantNo("100400612345");
$request->setToMerchantNo("100400612346");
$request->setToAccountType("默认FUND_ACCOUNT");
$request->setOrderAmount("0.01");
$request->setUsage("预付实扣");
$request->setFeeChargeSide("feeChargeSide_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setRiskInfo("riskInfo_example");
$request->setToAccountNo("toAccountNo_example");
$request->setVerifyType("verifyType_example");
$request->setVerifyValue("verifyValue_example");

try {
    $response = $api_client->transfer_b2b_order_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->transfer_b2b_order_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **fromMerchantNo** | **string**|  | [optional]
 **toMerchantNo** | **string**|  | [optional]
 **toAccountType** | **string**|  | [optional]
 **orderAmount** | **string**|  | [optional]
 **usage** | **string**|  | [optional]
 **feeChargeSide** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **riskInfo** | **string**|  | [optional]
 **toAccountNo** | **string**|  | [optional]
 **verifyType** | **string**|  | [optional]
 **verifyValue** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\MgTransferOrderRespDTO**](../Model/MgTransferOrderRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **transfer_b2b_query_v1_0**
TransferB2bQueryV10Response transfer_b2b_query_v1_0(TransferB2bQueryV10Request request)

转账-查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\TransferB2bQueryV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setOrderNo("orderNo_example");

try {
    $response = $api_client->transfer_b2b_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->transfer_b2b_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; | [optional]
 **requestNo** | **string**| 商户请求号&lt;br&gt;商户请求号，由商户自定义生成(与易宝转账订单号两者填其一) | [optional]
 **orderNo** | **string**| 易宝转账订单号&lt;br&gt;易宝支付系统生成的转账订单号(与商户请求号两者填其一) | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\MgTransferOrderQueryRespDTO**](../Model/MgTransferOrderQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **transfer_group_account_query_v1**
TransferGroupAccountQueryV1Response transfer_group_account_query_v1(TransferGroupAccountQueryV1Request request)

集团账户资金划拨查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\TransferGroupAccountQueryV1Request();
$request->setParentMerchantNo("100400612345");
$request->setMerchantNo("merchantNo_example");
$request->setOrderNo("orderNo_example");
$request->setRequestNo("TRANS2133213124");

try {
    $response = $api_client->transfer_group_account_query_v1($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->transfer_group_account_query_v1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;div data-page-id&#x3D;\&quot;Tq8rdopvvoUCakxJJCjcmQBcnah\&quot; data-docx-has-block-data&#x3D;\&quot;false\&quot;&gt; &lt;div class&#x3D;\&quot;ace-line ace-line old-record-id-FMREd4hYFoBSkixZwqjcL6tFnpe\&quot;&gt;转入方商编&lt;/div&gt; &lt;/div&gt; |
 **orderNo** | **string**| &lt;p&gt;易宝支付系统生成的订单号(与商户请求号两者填其一)&lt;/p&gt; | [optional]
 **requestNo** | **string**| &lt;p&gt;由商户自定义生成(与易宝转账订单号两者填其一)&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\GroupAccountTransferQueryRespDTO**](../Model/GroupAccountTransferQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **transfer_group_account_v1**
TransferGroupAccountV1Response transfer_group_account_v1(TransferGroupAccountV1Request request)

集团账户资金划拨

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\TransferGroupAccountV1Request();
$request->setParentMerchantNo("100400612345");
$request->setRequestNo("商户请求号，由商户自定义生成;示例值：TRANS2133213124");
$request->setFromMerchantNo("易宝支付分配的的商户唯一标识;示例值:100400612345");
$request->setToMerchantNo("易宝支付分配的的商户唯一标识;示例值:100400612346");
$request->setOrderAmount("单位：元（RMB），精确到分;示例值：0.01 元");
$request->setUsage("usage_example");
$request->setFeeChargeSide("当商户承担且计费方式为预付实扣或后收时，不支持转入方承担；当平台商或服务商承担时无需指定此手续费承担方；");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->transfer_group_account_v1($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->transfer_group_account_v1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **fromMerchantNo** | **string**|  | [optional]
 **toMerchantNo** | **string**|  | [optional]
 **orderAmount** | **string**|  | [optional]
 **usage** | **string**|  | [optional]
 **feeChargeSide** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\GroupAccountTransferRespDTO**](../Model/GroupAccountTransferRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **transfer_system_query_v1_0**
TransferSystemQueryV10Response transfer_system_query_v1_0(TransferSystemQueryV10Request request)

转账-查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\TransferSystemQueryV10Request();
$request->setMerchantNo("merchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setOrderNo("orderNo_example");

try {
    $response = $api_client->transfer_system_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->transfer_system_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  |
 **requestNo** | **string**| 商户请求号&lt;br&gt;商户请求号，由商户自定义生成(与易宝转账订单号两者填其一) | [optional]
 **orderNo** | **string**| 易宝转账订单号&lt;br&gt;易宝支付系统生成的转账订单号(与商户请求号两者填其一) | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\MgTransferOrderQueryRespDTO**](../Model/MgTransferOrderQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **transfer_wechat_order_v1_0**
TransferWechatOrderV10Response transfer_wechat_order_v1_0(TransferWechatOrderV10Request request)

转账到微信零钱-下单



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\TransferWechatOrderV10Request();
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setAmount(1.2);
$request->setAppId("appId_example");
$request->setScene("scene_example");
$request->setOpenId("openId_example");
$request->setUserName("userName_example");
$request->setRemark("remark_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->transfer_wechat_order_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->transfer_wechat_order_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **amount** | **float**|  | [optional]
 **appId** | **string**|  | [optional]
 **scene** | **string**|  | [optional]
 **openId** | **string**|  | [optional]
 **userName** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\WechatTransferRespDTO**](../Model/WechatTransferRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **transfer_wechat_query_v1_0**
TransferWechatQueryV10Response transfer_wechat_query_v1_0(TransferWechatQueryV10Request request)

转账到微信零钱-查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\TransferWechatQueryV10Request();
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setOrderNo("orderNo_example");

try {
    $response = $api_client->transfer_wechat_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->transfer_wechat_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| 商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 |
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **requestNo** | **string**| 商户请求号&lt;br&gt;由商户自定义生成 | [optional]
 **orderNo** | **string**| 易宝转账订单号&lt;br&gt;易宝支付系统生成的转账订单号（跟商户请求号二选一） | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\QueryWechatTransferRespDTO**](../Model/QueryWechatTransferRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **union_account_ali_batch_proxy_transfer**
UnionAccountAliBatchProxyTransferResponse union_account_ali_batch_proxy_transfer(UnionAccountAliBatchProxyTransferRequest request)

转账到支付宝

支持商户通过该接口发起转账到支付宝

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\UnionAccountAliBatchProxyTransferRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BatchProxyTransferReqDTO());

try {
    $response = $api_client->union_account_ali_batch_proxy_transfer($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->union_account_ali_batch_proxy_transfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BatchProxyTransferReqDTO**](../Model/BatchProxyTransferReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BatchProxyTransferRspDTO**](../Model/BatchProxyTransferRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **union_account_ali_batch_transfer_detail**
UnionAccountAliBatchTransferDetailResponse union_account_ali_batch_transfer_detail(UnionAccountAliBatchTransferDetailRequest request)

转账到支付宝记录查询

支持商户通过该接口查询转账到支付宝记录

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\UnionAccountAliBatchTransferDetailRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BatchTransferDetailReqDTO());

try {
    $response = $api_client->union_account_ali_batch_transfer_detail($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->union_account_ali_batch_transfer_detail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BatchTransferDetailReqDTO**](../Model/BatchTransferDetailReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BatchTransferDetailRspDTO**](../Model/BatchTransferDetailRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **union_account_ali_cancel_contract**
UnionAccountAliCancelContractResponse union_account_ali_cancel_contract(UnionAccountAliCancelContractRequest request)

转账到支付宝-解约

支持商户通过该接口发起转账到支付宝解约

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\UnionAccountAliCancelContractRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\CancelChannelBookReqDTO());

try {
    $response = $api_client->union_account_ali_cancel_contract($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->union_account_ali_cancel_contract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\CancelChannelBookReqDTO**](../Model/CancelChannelBookReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\CancelChannelBookRspDTO**](../Model/CancelChannelBookRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **union_account_ali_capital_transfer_query**
UnionAccountAliCapitalTransferQueryResponse union_account_ali_capital_transfer_query(UnionAccountAliCapitalTransferQueryRequest request)

记账本资金拨入记录查询

支持商户通过该接口查询记账本资金拨入进度

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\UnionAccountAliCapitalTransferQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\CapitalTransferApplyReqDTO());

try {
    $response = $api_client->union_account_ali_capital_transfer_query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->union_account_ali_capital_transfer_query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\CapitalTransferApplyReqDTO**](../Model/CapitalTransferApplyReqDTO.md)| 支持商户通过该接口查询记账本资金拨入进度 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\CapitalTransferApplyRspDTO**](../Model/CapitalTransferApplyRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **union_account_ali_channl_book_detail**
UnionAccountAliChannlBookDetailResponse union_account_ali_channl_book_detail(UnionAccountAliChannlBookDetailRequest request)

转账到支付宝-记账本查询

支持商户通过该接口查询已开立的记账本

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\UnionAccountAliChannlBookDetailRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\ChannelBookDetailQueryReqDTO());

try {
    $response = $api_client->union_account_ali_channl_book_detail($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->union_account_ali_channl_book_detail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\ChannelBookDetailQueryReqDTO**](../Model/ChannelBookDetailQueryReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ChannelBookDetailQueryRspDTO**](../Model/ChannelBookDetailQueryRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **union_account_ali_open_channel_book**
UnionAccountAliOpenChannelBookResponse union_account_ali_open_channel_book(UnionAccountAliOpenChannelBookRequest request)

转账到支付宝-开立记账本

支持商户通过该接口开立记账本，用于转账到支付宝账户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\UnionAccountAliOpenChannelBookRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\OpenChannelBookReqDTO());

try {
    $response = $api_client->union_account_ali_open_channel_book($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->union_account_ali_open_channel_book: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\OpenChannelBookReqDTO**](../Model/OpenChannelBookReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\OpenChannelBookRsqDTO**](../Model/OpenChannelBookRsqDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **union_account_ali_sign_contract**
UnionAccountAliSignContractResponse union_account_ali_sign_contract(UnionAccountAliSignContractRequest request)

转账到支付宝-签约

支持商户通过该接口发起转账到支付宝签约

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\UnionAccountAliSignContractRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\SignContractReqDTO());

try {
    $response = $api_client->union_account_ali_sign_contract($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->union_account_ali_sign_contract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\SignContractReqDTO**](../Model/SignContractReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\SignContractRspDTO**](../Model/SignContractRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **union_account_capital_transfer**
UnionAccountCapitalTransferResponse union_account_capital_transfer(UnionAccountCapitalTransferRequest request)

转账到支付宝-记账本资金拨入

支持商户通过该接口向已开立记账本发起资金拨入

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\UnionAccountCapitalTransferRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\ChannelBookCapitalTransferReqDTO());

try {
    $response = $api_client->union_account_capital_transfer($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->union_account_capital_transfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\ChannelBookCapitalTransferReqDTO**](../Model/ChannelBookCapitalTransferReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ChannelBookCapitalTransferRspDTO**](../Model/ChannelBookCapitalTransferRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **union_account_recharge_del_config**
UnionAccountRechargeDelConfigResponse union_account_recharge_del_config(UnionAccountRechargeDelConfigRequest request)

充值银行汇款-删除绑卡信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\UnionAccountRechargeDelConfigRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RechargeWhiteListRequestDTO());

try {
    $response = $api_client->union_account_recharge_del_config($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->union_account_recharge_del_config: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\RechargeWhiteListRequestDTO**](../Model/RechargeWhiteListRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RechargeWhiteListResponseDTO**](../Model/RechargeWhiteListResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **union_account_recharge_payer_add**
UnionAccountRechargePayerAddResponse union_account_recharge_payer_add(UnionAccountRechargePayerAddRequest request)

添加付款方

添加付款方

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\UnionAccountRechargePayerAddRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setIdentityType("identityType_example");
$request->setName("name_example");
$request->setCertificateType("certificateType_example");
$request->setCertificateNo("certificateNo_example");
$request->setApplyDataUrl("applyDataUrl_example");

try {
    $response = $api_client->union_account_recharge_payer_add($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->union_account_recharge_payer_add: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **identityType** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **certificateType** | **string**|  | [optional]
 **certificateNo** | **string**|  | [optional]
 **applyDataUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\YopRechargeManageResponseDTO**](../Model/YopRechargeManageResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **union_account_recharge_payer_delete**
UnionAccountRechargePayerDeleteResponse union_account_recharge_payer_delete(UnionAccountRechargePayerDeleteRequest request)

删除付款方

删除付款方

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\UnionAccountRechargePayerDeleteRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setIdentityType("identityType_example");
$request->setName("name_example");
$request->setCertificateType("certificateType_example");
$request->setCertificateNo("certificateNo_example");

try {
    $response = $api_client->union_account_recharge_payer_delete($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->union_account_recharge_payer_delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **identityType** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **certificateType** | **string**|  | [optional]
 **certificateNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\YopRechargeManageResponseDTO**](../Model/YopRechargeManageResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **union_account_recharge_payer_query**
UnionAccountRechargePayerQueryResponse union_account_recharge_payer_query(UnionAccountRechargePayerQueryRequest request)

查询付款方

查询付款方

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\UnionAccountRechargePayerQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setIdentityType("identityType_example");
$request->setName("name_example");
$request->setCertificateType("certificateType_example");
$request->setCertificateNo("certificateNo_example");

try {
    $response = $api_client->union_account_recharge_payer_query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->union_account_recharge_payer_query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;/p&gt; |
 **identityType** | **string**| 可选项如下: BUSINESS:企业账户 PERSON:个人账户 | [optional]
 **name** | **string**| &lt;p&gt;账户名称&lt;/p&gt; | [optional]
 **certificateType** | **string**| 可选项如下: ID_CARD:身份证 | [optional]
 **certificateNo** | **string**| &lt;p&gt;证件号&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\YopRechargeManageQueryResponseDTO**](../Model/YopRechargeManageQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **union_account_recharge_query_config**
UnionAccountRechargeQueryConfigResponse union_account_recharge_query_config(UnionAccountRechargeQueryConfigRequest request)

充值银行汇款-查询绑卡信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\UnionAccountRechargeQueryConfigRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RechargeWhiteListQueryRequestDTO());

try {
    $response = $api_client->union_account_recharge_query_config($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->union_account_recharge_query_config: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\RechargeWhiteListQueryRequestDTO**](../Model/RechargeWhiteListQueryRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RechargeWhiteListQueryResponseDTO**](../Model/RechargeWhiteListQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **union_account_recharge_save_config**
UnionAccountRechargeSaveConfigResponse union_account_recharge_save_config(UnionAccountRechargeSaveConfigRequest request)

充值银行汇款-新增绑卡信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\UnionAccountRechargeSaveConfigRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RechargeWhiteListRequestDTO());

try {
    $response = $api_client->union_account_recharge_save_config($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->union_account_recharge_save_config: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\RechargeWhiteListRequestDTO**](../Model/RechargeWhiteListRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RechargeWhiteListResponseDTO**](../Model/RechargeWhiteListResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **union_account_sign_contract_query**
UnionAccountSignContractQueryResponse union_account_sign_contract_query(UnionAccountSignContractQueryRequest request)

转账到支付宝-签约查询

支持商户通过该接口发起转账到支付宝签约进度

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\UnionAccountSignContractQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\SignContractApplyQueryReqDTO());

try {
    $response = $api_client->union_account_sign_contract_query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->union_account_sign_contract_query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\SignContractApplyQueryReqDTO**](../Model/SignContractApplyQueryReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\SignContractApplyQueryRspDTO**](../Model/SignContractApplyQueryRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **union_account_trade_account_book_remit**
UnionAccountTradeAccountBookRemitResponse union_account_trade_account_book_remit(UnionAccountTradeAccountBookRemitRequest request)

代付到记账簿绑定卡

代付到记账簿绑定卡

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\UnionAccountTradeAccountBookRemitRequest();
$request->setParentMerchantNo("100400612345");
$request->setMerchantNo("100400612345");
$request->setRequestNo("requestNo_example");
$request->setMerchantAccountBookNo("merchantAccountBookNo_example");
$request->setYpAccountBookNo("ypAccountBookNo_example");
$request->setReceiverAccountNo("receiverAccountNo_example");
$request->setOrderAmount(1.01);
$request->setFeeChargeSide("feeChargeSide_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setTerminalType("terminalType_example");
$request->setComments("comments_example");
$request->setRemark("remark_example");
$request->setReceiptComments("receiptComments_example");
$request->setRiskInfo("riskInfo_example");
$request->setReceiveType("receiveType_example");

try {
    $response = $api_client->union_account_trade_account_book_remit($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->union_account_trade_account_book_remit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantAccountBookNo** | **string**|  | [optional]
 **ypAccountBookNo** | **string**|  | [optional]
 **receiverAccountNo** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **feeChargeSide** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **terminalType** | **string**|  | [optional]
 **comments** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **receiptComments** | **string**|  | [optional]
 **riskInfo** | **string**|  | [optional]
 **receiveType** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\RemitAccountBookRespDTO**](../Model/RemitAccountBookRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **userBookWithdrawOrder**
UserBookWithdrawOrderResponse userBookWithdrawOrder(UserBookWithdrawOrderRequest request)

记账簿出款-下单

记账簿出款-下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\UserBookWithdrawOrderRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\InitUserBookWithdrawReqDTO());

try {
    $response = $api_client->userBookWithdrawOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->userBookWithdrawOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\InitUserBookWithdrawReqDTO**](../Model/InitUserBookWithdrawReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\InitUserBookWithdrawRespDTO**](../Model/InitUserBookWithdrawRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **userBookWithdrawQuery**
UserBookWithdrawQueryResponse userBookWithdrawQuery(UserBookWithdrawQueryRequest request)

记账簿出款-查询

记账簿出款-查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\UserBookWithdrawQueryRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\UserBookWithdrawOrderQueryReqDTO());

try {
    $response = $api_client->userBookWithdrawQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->userBookWithdrawQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\UserBookWithdrawOrderQueryReqDTO**](../Model/UserBookWithdrawOrderQueryReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\UserBookWithdrawQueryRespDTO**](../Model/UserBookWithdrawQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **withdrawCardBind**
WithdrawCardBindResponse withdrawCardBind(WithdrawCardBindRequest request)

提现卡-添加

为了保证出款成功，各农信社卡或账号16位以下的农业银行卡，建议或尽可能填写支行编码；

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\WithdrawCardBindRequest();
$request->setMerchantNo("100400612345");
$request->setBankCardType("bankCardType_example");
$request->setAccountNo("accountNo_example");
$request->setBankCode("总行编码示例值：当bankCardType为ENTERPRISE_ACCOUNT或时UNIT_SETTLEMENT_CARD时，开户行编码和支行编码不能同时为空； 示例值：ICBC");
$request->setBranchCode("支行编码示例值：当bankCardType为ENTERPRISE_ACCOUNT或时UNIT_SETTLEMENT_CARD时，开户行编码和支行编码不能同时为空； 示例值：102100000048");

try {
    $response = $api_client->withdrawCardBind($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->withdrawCardBind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **bankCardType** | **string**|  | [optional]
 **accountNo** | **string**|  | [optional]
 **bankCode** | **string**|  | [optional]
 **branchCode** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BindCardRespDTO**](../Model/BindCardRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **withdrawCardModify**
WithdrawCardModifyResponse withdrawCardModify(WithdrawCardModifyRequest request)

提现卡-修改/注销



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\WithdrawCardModifyRequest();
$request->setMerchantNo("merchantNo_example");
$request->setAccountNo("accountNo_example");
$request->setBindId(789);
$request->setBankCardOperateType("bankCardOperateType_example");
$request->setBankCode("ICBC");
$request->setBranchCode("102100000048");

try {
    $response = $api_client->withdrawCardModify($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->withdrawCardModify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **accountNo** | **string**|  | [optional]
 **bindId** | **int**|  | [optional]
 **bankCardOperateType** | **string**|  | [optional]
 **bankCode** | **string**|  | [optional]
 **branchCode** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ModifyBindCardRespDTO**](../Model/ModifyBindCardRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **withdrawCardQuery**
WithdrawCardQueryResponse withdrawCardQuery(WithdrawCardQueryRequest request)

提现卡查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\WithdrawCardQueryRequest();
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->withdrawCardQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->withdrawCardQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BindCardQueryRespDTO**](../Model/BindCardQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **withdrawH5Order**
WithdrawH5OrderResponse withdrawH5Order(WithdrawH5OrderRequest request)

提现-下单（H5版）

提现-下单（H5版）

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\WithdrawH5OrderRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\YopWithdrawH5RequestDTO());

try {
    $response = $api_client->withdrawH5Order($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->withdrawH5Order: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\YopWithdrawH5RequestDTO**](../Model/YopWithdrawH5RequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\YopWithdrawH5ResponseDTO**](../Model/YopWithdrawH5ResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **withdrawOrder**
WithdrawOrderResponse withdrawOrder(WithdrawOrderRequest request)

提现-下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\WithdrawOrderRequest();
$request->setParentMerchantNo("100400612345");
$request->setRequestNo("WITHDRAW20200327103027");
$request->setMerchantNo("100400612345");
$request->setCardSelectModel("cardSelectModel_example");
$request->setCardRouteModel("cardRouteModel_example");
$request->setBankCardId("11103");
$request->setBankAccountNo("6212260200019388841");
$request->setReceiveType("receiveType_example");
$request->setOrderAmount(1);
$request->setNotifyUrl("www.baidu.com");
$request->setRemark("XXX平台提现");
$request->setTerminalType("PC");
$request->setFeeDeductType("OUTSIDE");
$request->setAccountType("accountType_example");
$request->setMacAddress("macAddress_example");
$request->setWithdrawModel("INNER_ACCOUNT_WITHDRAW");
$request->setDebitBankAccountBookNo("debitBankAccountBookNo_example");
$request->setVerifyType("PWD");
$request->setVerifyValue("verifyValue_example");

try {
    $response = $api_client->withdrawOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->withdrawOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **cardSelectModel** | **string**|  | [optional]
 **cardRouteModel** | **string**|  | [optional]
 **bankCardId** | **string**|  | [optional]
 **bankAccountNo** | **string**|  | [optional]
 **receiveType** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **terminalType** | **string**|  | [optional]
 **feeDeductType** | **string**|  | [optional]
 **accountType** | **string**|  | [optional]
 **macAddress** | **string**|  | [optional]
 **withdrawModel** | **string**|  | [optional]
 **debitBankAccountBookNo** | **string**|  | [optional]
 **verifyType** | **string**|  | [optional]
 **verifyValue** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\WithdrawOrderRespDTO**](../Model/WithdrawOrderRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **withdrawQuery**
WithdrawQueryResponse withdrawQuery(WithdrawQueryRequest request)

提现-查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\WithdrawQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setOrderNo("orderNo_example");

try {
    $response = $api_client->withdrawQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->withdrawQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; | [optional]
 **requestNo** | **string**| &lt;p&gt;商户请求号&lt;br /&gt;商户请求号，由商户自定义生成(与易宝提现订单号两者填其一)&lt;/p&gt; | [optional]
 **orderNo** | **string**| &lt;p&gt;易宝提现订单号&lt;br /&gt;易宝支付系统生成的提现订单号(与商户请求号两者填其一)&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\MGWithdrawOrderQueryRespDTO**](../Model/MGWithdrawOrderQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **withdrawSystemQuery**
WithdrawSystemQueryResponse withdrawSystemQuery(WithdrawSystemQueryRequest request)

提现-查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\WithdrawSystemQueryRequest();
$request->setMerchantNo("merchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setOrderNo("orderNo_example");

try {
    $response = $api_client->withdrawSystemQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->withdrawSystemQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;/p&gt; |
 **requestNo** | **string**| &lt;p&gt;商户请求号&lt;br /&gt;商户请求号，由商户自定义生成(与易宝提现订单号两者填其一)&lt;/p&gt; | [optional]
 **orderNo** | **string**| &lt;p&gt;易宝提现订单号&lt;br /&gt;易宝支付系统生成的提现订单号(与商户请求号两者填其一)&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\MGWithdrawOrderQueryRespDTO**](../Model/MGWithdrawOrderQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **withdraw_card_bind_v1_0**
WithdrawCardBindV10Response withdraw_card_bind_v1_0(WithdrawCardBindV10Request request)

提现卡-添加

为了保证出款成功，各农信社卡或账号16位以下的农业银行卡，建议或尽可能填写支行编码；

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\WithdrawCardBindV10Request();
$request->setMerchantNo("100400612345");
$request->setBankCardType("bankCardType_example");
$request->setAccountNo("accountNo_example");
$request->setBankCode("总行编码示例值：当bankCardType为ENTERPRISE_ACCOUNT或时UNIT_SETTLEMENT_CARD时，开户行编码和支行编码不能同时为空； 示例值：ICBC");
$request->setBranchCode("支行编码示例值：当bankCardType为ENTERPRISE_ACCOUNT或时UNIT_SETTLEMENT_CARD时，开户行编码和支行编码不能同时为空； 示例值：102100000048");

try {
    $response = $api_client->withdraw_card_bind_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->withdraw_card_bind_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **bankCardType** | **string**|  | [optional]
 **accountNo** | **string**|  | [optional]
 **bankCode** | **string**|  | [optional]
 **branchCode** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BindCardRespDTO**](../Model/BindCardRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **withdraw_card_modify_v1_0**
WithdrawCardModifyV10Response withdraw_card_modify_v1_0(WithdrawCardModifyV10Request request)

提现卡-修改/注销



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\WithdrawCardModifyV10Request();
$request->setMerchantNo("merchantNo_example");
$request->setAccountNo("accountNo_example");
$request->setBindId(789);
$request->setBankCardOperateType("bankCardOperateType_example");
$request->setBankCode("ICBC");
$request->setBranchCode("102100000048");

try {
    $response = $api_client->withdraw_card_modify_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->withdraw_card_modify_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **accountNo** | **string**|  | [optional]
 **bindId** | **int**|  | [optional]
 **bankCardOperateType** | **string**|  | [optional]
 **bankCode** | **string**|  | [optional]
 **branchCode** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\ModifyBindCardRespDTO**](../Model/ModifyBindCardRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **withdraw_card_query_v1_0**
WithdrawCardQueryV10Response withdraw_card_query_v1_0(WithdrawCardQueryV10Request request)

提现卡查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\WithdrawCardQueryV10Request();
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->withdraw_card_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->withdraw_card_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\BindCardQueryRespDTO**](../Model/BindCardQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **withdraw_h5_order_v1_0**
WithdrawH5OrderV10Response withdraw_h5_order_v1_0(WithdrawH5OrderV10Request request)

提现-下单（H5版）

提现-下单（H5版）

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\WithdrawH5OrderV10Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\YopWithdrawH5RequestDTO());

try {
    $response = $api_client->withdraw_h5_order_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->withdraw_h5_order_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\YopWithdrawH5RequestDTO**](../Model/YopWithdrawH5RequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\YopWithdrawH5ResponseDTO**](../Model/YopWithdrawH5ResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **withdraw_order_v1_0**
WithdrawOrderV10Response withdraw_order_v1_0(WithdrawOrderV10Request request)

提现-下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\WithdrawOrderV10Request();
$request->setParentMerchantNo("100400612345");
$request->setRequestNo("WITHDRAW20200327103027");
$request->setMerchantNo("100400612345");
$request->setCardSelectModel("cardSelectModel_example");
$request->setCardRouteModel("cardRouteModel_example");
$request->setBankCardId("11103");
$request->setBankAccountNo("6212260200019388841");
$request->setReceiveType("receiveType_example");
$request->setOrderAmount(1);
$request->setNotifyUrl("www.baidu.com");
$request->setRemark("XXX平台提现");
$request->setTerminalType("PC");
$request->setFeeDeductType("OUTSIDE");
$request->setAccountType("accountType_example");
$request->setMacAddress("macAddress_example");
$request->setWithdrawModel("INNER_ACCOUNT_WITHDRAW");
$request->setDebitBankAccountBookNo("debitBankAccountBookNo_example");
$request->setVerifyType("PWD");
$request->setVerifyValue("verifyValue_example");

try {
    $response = $api_client->withdraw_order_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->withdraw_order_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **cardSelectModel** | **string**|  | [optional]
 **cardRouteModel** | **string**|  | [optional]
 **bankCardId** | **string**|  | [optional]
 **bankAccountNo** | **string**|  | [optional]
 **receiveType** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **terminalType** | **string**|  | [optional]
 **feeDeductType** | **string**|  | [optional]
 **accountType** | **string**|  | [optional]
 **macAddress** | **string**|  | [optional]
 **withdrawModel** | **string**|  | [optional]
 **debitBankAccountBookNo** | **string**|  | [optional]
 **verifyType** | **string**|  | [optional]
 **verifyValue** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\WithdrawOrderRespDTO**](../Model/WithdrawOrderRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **withdraw_query_v1_0**
WithdrawQueryV10Response withdraw_query_v1_0(WithdrawQueryV10Request request)

提现-查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\WithdrawQueryV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setOrderNo("orderNo_example");

try {
    $response = $api_client->withdraw_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->withdraw_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;*标准商户收付款方案中此参数与商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①商户编号属于标准商户时，该参数为服务商商编 ②商户编号属于平台商时，此参数填写服务商商户编号 ③商户编号属于平台商入驻商户时，该参数填写平台商商编&lt;/p&gt; | [optional]
 **requestNo** | **string**| &lt;p&gt;商户请求号&lt;br /&gt;商户请求号，由商户自定义生成(与易宝提现订单号两者填其一)&lt;/p&gt; | [optional]
 **orderNo** | **string**| &lt;p&gt;易宝提现订单号&lt;br /&gt;易宝支付系统生成的提现订单号(与商户请求号两者填其一)&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\MGWithdrawOrderQueryRespDTO**](../Model/MGWithdrawOrderQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **withdraw_system_query_v1_0**
WithdrawSystemQueryV10Response withdraw_system_query_v1_0(WithdrawSystemQueryV10Request request)

提现-查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\WithdrawSystemQueryV10Request();
$request->setMerchantNo("merchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setOrderNo("orderNo_example");

try {
    $response = $api_client->withdraw_system_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->withdraw_system_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| &lt;p&gt;商户编号&lt;/p&gt; |
 **requestNo** | **string**| &lt;p&gt;商户请求号&lt;br /&gt;商户请求号，由商户自定义生成(与易宝提现订单号两者填其一)&lt;/p&gt; | [optional]
 **orderNo** | **string**| &lt;p&gt;易宝提现订单号&lt;br /&gt;易宝支付系统生成的提现订单号(与商户请求号两者填其一)&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\MGWithdrawOrderQueryRespDTO**](../Model/MGWithdrawOrderQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **xibMultiBindCard**
XibMultiBindCardResponse xibMultiBindCard(XibMultiBindCardRequest request)

厦门多渠道开户激活



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Account\AccountClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Account\Model\XibMultiBindCardRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\XibBindClearCardReqDTO());

try {
    $response = $api_client->xibMultiBindCard($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AccountClient->xibMultiBindCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Account\Model\XibBindClearCardReqDTO**](../Model/XibBindClearCardReqDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Account\Model\XibMultiBindCardRspDTO**](../Model/XibMultiBindCardRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

