<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/services/audience_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V16\Services;

class AudienceService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
3google/ads/googleads/v16/enums/audience_scope.protogoogle.ads.googleads.v16.enums"a
AudienceScopeEnum"L
AudienceScope
UNSPECIFIED 
UNKNOWN
CUSTOMER
ASSET_GROUPB�
"com.google.ads.googleads.v16.enumsBAudienceScopeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
:google/ads/googleads/v16/enums/response_content_type.protogoogle.ads.googleads.v16.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
"com.google.ads.googleads.v16.enumsBResponseContentTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
0google/ads/googleads/v16/enums/gender_type.protogoogle.ads.googleads.v16.enums"d
GenderTypeEnum"R

GenderType
UNSPECIFIED 
UNKNOWN
MALE


FEMALE
UNDETERMINEDB�
"com.google.ads.googleads.v16.enumsBGenderTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
4google/ads/googleads/v16/enums/audience_status.protogoogle.ads.googleads.v16.enums"^
AudienceStatusEnum"H
AudienceStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
"com.google.ads.googleads.v16.enumsBAudienceStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
6google/ads/googleads/v16/enums/income_range_type.protogoogle.ads.googleads.v16.enums"�
IncomeRangeTypeEnum"�
IncomeRangeType
UNSPECIFIED 
UNKNOWN
INCOME_RANGE_0_50��
INCOME_RANGE_50_60��
INCOME_RANGE_60_70��
INCOME_RANGE_70_80��
INCOME_RANGE_80_90��
INCOME_RANGE_90_UP��
INCOME_RANGE_UNDETERMINED��B�
"com.google.ads.googleads.v16.enumsBIncomeRangeTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
9google/ads/googleads/v16/enums/parental_status_type.protogoogle.ads.googleads.v16.enums"
ParentalStatusTypeEnum"e
ParentalStatusType
UNSPECIFIED 
UNKNOWN
PARENT�
NOT_A_PARENT�
UNDETERMINED�B�
"com.google.ads.googleads.v16.enumsBParentalStatusTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
/google/ads/googleads/v16/common/audiences.protogoogle.ads.googleads.v16.common6google/ads/googleads/v16/enums/income_range_type.proto9google/ads/googleads/v16/enums/parental_status_type.protogoogle/api/resource.proto"�
AudienceDimension<
age (2-.google.ads.googleads.v16.common.AgeDimensionH B
gender (20.google.ads.googleads.v16.common.GenderDimensionH U
household_income (29.google.ads.googleads.v16.common.HouseholdIncomeDimensionH S
parental_status (28.google.ads.googleads.v16.common.ParentalStatusDimensionH V
audience_segments (29.google.ads.googleads.v16.common.AudienceSegmentDimensionH B
	dimension"c
AudienceExclusionDimensionE

exclusions (21.google.ads.googleads.v16.common.ExclusionSegment"d
ExclusionSegmentE
	user_list (20.google.ads.googleads.v16.common.UserListSegmentH B	
segment"�
AgeDimension?

age_ranges (2+.google.ads.googleads.v16.common.AgeSegment!
include_undetermined (H �B
_include_undetermined"P

AgeSegment
min_age (H �
max_age (H�B

_min_ageB

_max_age"�
GenderDimensionJ
genders (29.google.ads.googleads.v16.enums.GenderTypeEnum.GenderType!
include_undetermined (H �B
_include_undetermined"�
HouseholdIncomeDimensionZ
income_ranges (2C.google.ads.googleads.v16.enums.IncomeRangeTypeEnum.IncomeRangeType!
include_undetermined (H �B
_include_undetermined"�
ParentalStatusDimensiond
parental_statuses (2I.google.ads.googleads.v16.enums.ParentalStatusTypeEnum.ParentalStatusType!
include_undetermined (H �B
_include_undetermined"^
AudienceSegmentDimensionB
segments (20.google.ads.googleads.v16.common.AudienceSegment"�
AudienceSegmentE
	user_list (20.google.ads.googleads.v16.common.UserListSegmentH M
user_interest (24.google.ads.googleads.v16.common.UserInterestSegmentH G

life_event (21.google.ads.googleads.v16.common.LifeEventSegmentH [
detailed_demographic (2;.google.ads.googleads.v16.common.DetailedDemographicSegmentH Q
custom_audience (26.google.ads.googleads.v16.common.CustomAudienceSegmentH B	
segment"7
UserListSegment
	user_list (	H �B

_user_list"U
UserInterestSegment#
user_interest_category (	H �B
_user_interest_category"c
LifeEventSegment@

life_event (	B\'�A$
"googleads.googleapis.com/LifeEventH �B
_life_event"�
DetailedDemographicSegmentT
detailed_demographic (	B1�A.
,googleads.googleapis.com/DetailedDemographicH �B
_detailed_demographic"I
CustomAudienceSegment
custom_audience (	H �B
_custom_audienceB�
#com.google.ads.googleads.v16.commonBAudiencesProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v16/common;common�GAA�Google.Ads.GoogleAds.V16.Common�Google\\Ads\\GoogleAds\\V16\\Common�#Google::Ads::GoogleAds::V16::Commonbproto3
�
1google/ads/googleads/v16/resources/audience.proto"google.ads.googleads.v16.resources3google/ads/googleads/v16/enums/audience_scope.proto4google/ads/googleads/v16/enums/audience_status.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
Audience@
resource_name (	B)�A�A#
!googleads.googleapis.com/Audience
id (B�AV
status (2A.google.ads.googleads.v16.enums.AudienceStatusEnum.AudienceStatusB�A
name
 (	H �
description (	F

dimensions (22.google.ads.googleads.v16.common.AudienceDimensionX
exclusion_dimension (2;.google.ads.googleads.v16.common.AudienceExclusionDimensionN
scope (2?.google.ads.googleads.v16.enums.AudienceScopeEnum.AudienceScope@
asset_group	 (	B+�A�A%
#googleads.googleapis.com/AssetGroup:W�AT
!googleads.googleapis.com/Audience/customers/{customer_id}/audiences/{audience_id}B
_nameB�
&com.google.ads.googleads.v16.resourcesBAudienceProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v16/resources;resources�GAA�"Google.Ads.GoogleAds.V16.Resources�"Google\\Ads\\GoogleAds\\V16\\Resources�&Google::Ads::GoogleAds::V16::Resourcesbproto3
�
8google/ads/googleads/v16/services/audience_service.proto!google.ads.googleads.v16.services1google/ads/googleads/v16/resources/audience.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"�
MutateAudiencesRequest
customer_id (	B�AM

operations (24.google.ads.googleads.v16.services.AudienceOperationB�A
partial_failure (
validate_only (j
response_content_type (2K.google.ads.googleads.v16.enums.ResponseContentTypeEnum.ResponseContentType"�
MutateAudiencesResponseH
results (27.google.ads.googleads.v16.services.MutateAudienceResult1
partial_failure_error (2.google.rpc.Status"�
AudienceOperation/
update_mask (2.google.protobuf.FieldMask>
create (2,.google.ads.googleads.v16.resources.AudienceH >
update (2,.google.ads.googleads.v16.resources.AudienceH B
	operation"�
MutateAudienceResult=
resource_name (	B&�A#
!googleads.googleapis.com/Audience>
audience (2,.google.ads.googleads.v16.resources.Audience2�
AudienceService�
MutateAudiences9.google.ads.googleads.v16.services.MutateAudiencesRequest:.google.ads.googleads.v16.services.MutateAudiencesResponse"S�Acustomer_id,operations���4"//v16/customers/{customer_id=*}/audiences:mutate:*E�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v16.servicesBAudienceServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v16/services;services�GAA�!Google.Ads.GoogleAds.V16.Services�!Google\\Ads\\GoogleAds\\V16\\Services�%Google::Ads::GoogleAds::V16::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

