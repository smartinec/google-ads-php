<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/resources/custom_interest.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Resources;

class CustomInterest
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
        $pool->internalAddGeneratedFile(
            '
�
@google/ads/googleads/v10/enums/custom_interest_member_type.protogoogle.ads.googleads.v10.enums"n
CustomInterestMemberTypeEnum"N
CustomInterestMemberType
UNSPECIFIED 
UNKNOWN
KEYWORD
URLB�
"com.google.ads.googleads.v10.enumsBCustomInterestMemberTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
;google/ads/googleads/v10/enums/custom_interest_status.protogoogle.ads.googleads.v10.enums"j
CustomInterestStatusEnum"N
CustomInterestStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
"com.google.ads.googleads.v10.enumsBCustomInterestStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
9google/ads/googleads/v10/enums/custom_interest_type.protogoogle.ads.googleads.v10.enums"t
CustomInterestTypeEnum"Z
CustomInterestType
UNSPECIFIED 
UNKNOWN
CUSTOM_AFFINITY
CUSTOM_INTENTB�
"com.google.ads.googleads.v10.enumsBCustomInterestTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�

8google/ads/googleads/v10/resources/custom_interest.proto"google.ads.googleads.v10.resources;google/ads/googleads/v10/enums/custom_interest_status.proto9google/ads/googleads/v10/enums/custom_interest_type.protogoogle/api/annotations.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
CustomInterestF
resource_name (	B/�A�A)
\'googleads.googleapis.com/CustomInterest
id (B�AH �]
status (2M.google.ads.googleads.v10.enums.CustomInterestStatusEnum.CustomInterestStatus
name	 (	H�W
type (2I.google.ads.googleads.v10.enums.CustomInterestTypeEnum.CustomInterestType
description
 (	H�I
members (28.google.ads.googleads.v10.resources.CustomInterestMember:j�Ag
\'googleads.googleapis.com/CustomInterest<customers/{customer_id}/customInterests/{custom_interest_id}B
_idB
_nameB
_description"�
CustomInterestMemberj
member_type (2U.google.ads.googleads.v10.enums.CustomInterestMemberTypeEnum.CustomInterestMemberType
	parameter (	H �B

_parameterB�
&com.google.ads.googleads.v10.resourcesBCustomInterestProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v10/resources;resources�GAA�"Google.Ads.GoogleAds.V10.Resources�"Google\\Ads\\GoogleAds\\V10\\Resources�&Google::Ads::GoogleAds::V10::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

