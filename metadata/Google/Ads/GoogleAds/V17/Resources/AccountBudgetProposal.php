<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/resources/account_budget_proposal.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Resources;

class AccountBudgetProposal
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
8google/ads/googleads/v17/enums/spending_limit_type.protogoogle.ads.googleads.v17.enums"X
SpendingLimitTypeEnum"?
SpendingLimitType
UNSPECIFIED 
UNKNOWN
INFINITEB�
"com.google.ads.googleads.v17.enumsBSpendingLimitTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
.google/ads/googleads/v17/enums/time_type.protogoogle.ads.googleads.v17.enums"N
TimeTypeEnum">
TimeType
UNSPECIFIED 
UNKNOWN
NOW
FOREVERB�
"com.google.ads.googleads.v17.enumsBTimeTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
Cgoogle/ads/googleads/v17/enums/account_budget_proposal_status.protogoogle.ads.googleads.v17.enums"�
AccountBudgetProposalStatusEnum"�
AccountBudgetProposalStatus
UNSPECIFIED 
UNKNOWN
PENDING
APPROVED_HELD
APPROVED
	CANCELLED
REJECTEDB�
"com.google.ads.googleads.v17.enumsB AccountBudgetProposalStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
Agoogle/ads/googleads/v17/enums/account_budget_proposal_type.protogoogle.ads.googleads.v17.enums"�
AccountBudgetProposalTypeEnum"f
AccountBudgetProposalType
UNSPECIFIED 
UNKNOWN

CREATE

UPDATE
END

REMOVEB�
"com.google.ads.googleads.v17.enumsBAccountBudgetProposalTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
@google/ads/googleads/v17/resources/account_budget_proposal.proto"google.ads.googleads.v17.resourcesAgoogle/ads/googleads/v17/enums/account_budget_proposal_type.proto8google/ads/googleads/v17/enums/spending_limit_type.proto.google/ads/googleads/v17/enums/time_type.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
AccountBudgetProposalM
resource_name (	B6�A�A0
.googleads.googleapis.com/AccountBudgetProposal
id (B�AH�I
billing_setup (	B-�A�A\'
%googleads.googleapis.com/BillingSetupH�K
account_budget (	B.�A�A(
&googleads.googleapis.com/AccountBudgetH�s
proposal_type (2W.google.ads.googleads.v17.enums.AccountBudgetProposalTypeEnum.AccountBudgetProposalTypeB�Ap
status (2[.google.ads.googleads.v17.enums.AccountBudgetProposalStatusEnum.AccountBudgetProposalStatusB�A
proposed_name (	B�AH�*
approved_start_date_time (	B�AH	�0
proposed_purchase_order_number# (	B�AH
� 
proposed_notes$ (	B�AH�$
creation_date_time% (	B�AH�$
approval_date_time& (	B�AH�\'
proposed_start_date_time (	B�AH ^
proposed_start_time_type (25.google.ads.googleads.v17.enums.TimeTypeEnum.TimeTypeB�AH %
proposed_end_date_time (	B�AH\\
proposed_end_time_type	 (25.google.ads.googleads.v17.enums.TimeTypeEnum.TimeTypeB�AH%
approved_end_date_time  (	B�AH\\
approved_end_time_type (25.google.ads.googleads.v17.enums.TimeTypeEnum.TimeTypeB�AH-
proposed_spending_limit_micros! (B�AHt
proposed_spending_limit_type (2G.google.ads.googleads.v17.enums.SpendingLimitTypeEnum.SpendingLimitTypeB�AH-
approved_spending_limit_micros" (B�AHt
approved_spending_limit_type (2G.google.ads.googleads.v17.enums.SpendingLimitTypeEnum.SpendingLimitTypeB�AH:��A}
.googleads.googleapis.com/AccountBudgetProposalKcustomers/{customer_id}/accountBudgetProposals/{account_budget_proposal_id}B
proposed_start_timeB
proposed_end_timeB
approved_end_timeB
proposed_spending_limitB
approved_spending_limitB
_idB
_billing_setupB
_account_budgetB
_proposed_nameB
_approved_start_date_timeB!
_proposed_purchase_order_numberB
_proposed_notesB
_creation_date_timeB
_approval_date_timeB�
&com.google.ads.googleads.v17.resourcesBAccountBudgetProposalProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v17/resources;resources�GAA�"Google.Ads.GoogleAds.V17.Resources�"Google\\Ads\\GoogleAds\\V17\\Resources�&Google::Ads::GoogleAds::V17::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

