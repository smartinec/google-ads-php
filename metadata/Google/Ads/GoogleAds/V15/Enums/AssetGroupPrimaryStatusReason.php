<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/enums/asset_group_primary_status_reason.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V15\Enums;

class AssetGroupPrimaryStatusReason
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
Fgoogle/ads/googleads/v15/enums/asset_group_primary_status_reason.protogoogle.ads.googleads.v15.enums"�
!AssetGroupPrimaryStatusReasonEnum"�
AssetGroupPrimaryStatusReason
UNSPECIFIED 
UNKNOWN
ASSET_GROUP_PAUSED
ASSET_GROUP_REMOVED
CAMPAIGN_REMOVED
CAMPAIGN_PAUSED
CAMPAIGN_PENDING
CAMPAIGN_ENDED
ASSET_GROUP_LIMITED
ASSET_GROUP_DISAPPROVED	
ASSET_GROUP_UNDER_REVIEW
B�
"com.google.ads.googleads.v15.enumsB"AssetGroupPrimaryStatusReasonProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

