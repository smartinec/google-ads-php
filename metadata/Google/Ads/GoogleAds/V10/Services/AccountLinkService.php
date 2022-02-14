<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/services/account_link_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Services;

class AccountLinkService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
6google/ads/googleads/v10/enums/mobile_app_vendor.protogoogle.ads.googleads.v10.enums"q
MobileAppVendorEnum"Z
MobileAppVendor
UNSPECIFIED 
UNKNOWN
APPLE_APP_STORE
GOOGLE_APP_STOREB�
"com.google.ads.googleads.v10.enumsBMobileAppVendorProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
8google/ads/googleads/v10/enums/account_link_status.protogoogle.ads.googleads.v10.enums"�
AccountLinkStatusEnum"�
AccountLinkStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVED
	REQUESTED
PENDING_APPROVAL
REJECTED
REVOKEDB�
"com.google.ads.googleads.v10.enumsBAccountLinkStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
8google/ads/googleads/v10/enums/linked_account_type.protogoogle.ads.googleads.v10.enums"�
LinkedAccountTypeEnum"r
LinkedAccountType
UNSPECIFIED 
UNKNOWN
THIRD_PARTY_APP_ANALYTICS
DATA_PARTNER

GOOGLE_ADSB�
"com.google.ads.googleads.v10.enumsBLinkedAccountTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
5google/ads/googleads/v10/resources/account_link.proto"google.ads.googleads.v10.resources8google/ads/googleads/v10/enums/linked_account_type.proto6google/ads/googleads/v10/enums/mobile_app_vendor.protogoogle/api/annotations.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
AccountLinkC
resource_name (	B,�A�A&
$googleads.googleapis.com/AccountLink!
account_link_id (B�AH�W
status (2G.google.ads.googleads.v10.enums.AccountLinkStatusEnum.AccountLinkStatusZ
type (2G.google.ads.googleads.v10.enums.LinkedAccountTypeEnum.LinkedAccountTypeB�Ar
third_party_app_analytics (2H.google.ads.googleads.v10.resources.ThirdPartyAppAnalyticsLinkIdentifierB�AH Z
data_partner (2=.google.ads.googleads.v10.resources.DataPartnerLinkIdentifierB�AH V

google_ads (2;.google.ads.googleads.v10.resources.GoogleAdsLinkIdentifierB�AH :a�A^
$googleads.googleapis.com/AccountLink6customers/{customer_id}/accountLinks/{account_link_id}B
linked_accountB
_account_link_id"�
$ThirdPartyAppAnalyticsLinkIdentifier+
app_analytics_provider_id (B�AH �
app_id (	B�AH�\\

app_vendor (2C.google.ads.googleads.v10.enums.MobileAppVendorEnum.MobileAppVendorB�AB
_app_analytics_provider_idB	
_app_id"R
DataPartnerLinkIdentifier!
data_partner_id (B�AH �B
_data_partner_id"h
GoogleAdsLinkIdentifier@
customer (	B)�A�A#
!googleads.googleapis.com/CustomerH �B
	_customerB�
&com.google.ads.googleads.v10.resourcesBAccountLinkProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v10/resources;resources�GAA�"Google.Ads.GoogleAds.V10.Resources�"Google\\Ads\\GoogleAds\\V10\\Resources�&Google::Ads::GoogleAds::V10::Resourcesbproto3
�
<google/ads/googleads/v10/services/account_link_service.proto!google.ads.googleads.v10.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"�
CreateAccountLinkRequest
customer_id (	B�AJ
account_link (2/.google.ads.googleads.v10.resources.AccountLinkB�A"]
CreateAccountLinkResponse@
resource_name (	B)�A&
$googleads.googleapis.com/AccountLink"�
MutateAccountLinkRequest
customer_id (	B�AO
	operation (27.google.ads.googleads.v10.services.AccountLinkOperationB�A
partial_failure (
validate_only ("�
AccountLinkOperation/
update_mask (2.google.protobuf.FieldMaskA
update (2/.google.ads.googleads.v10.resources.AccountLinkH ;
remove (	B)�A&
$googleads.googleapis.com/AccountLinkH B
	operation"�
MutateAccountLinkResponseJ
result (2:.google.ads.googleads.v10.services.MutateAccountLinkResult1
partial_failure_error (2.google.rpc.Status"[
MutateAccountLinkResult@
resource_name (	B)�A&
$googleads.googleapis.com/AccountLink2�
AccountLinkService�
CreateAccountLink;.google.ads.googleads.v10.services.CreateAccountLinkRequest<.google.ads.googleads.v10.services.CreateAccountLinkResponse"X���7"2/v10/customers/{customer_id=*}/accountLinks:create:*�Acustomer_id,account_link�
MutateAccountLink;.google.ads.googleads.v10.services.MutateAccountLinkRequest<.google.ads.googleads.v10.services.MutateAccountLinkResponse"U���7"2/v10/customers/{customer_id=*}/accountLinks:mutate:*�Acustomer_id,operationE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v10.servicesBAccountLinkServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v10/services;services�GAA�!Google.Ads.GoogleAds.V10.Services�!Google\\Ads\\GoogleAds\\V10\\Services�%Google::Ads::GoogleAds::V10::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

