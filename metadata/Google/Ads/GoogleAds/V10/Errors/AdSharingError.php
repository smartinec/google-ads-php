<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/errors/ad_sharing_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Errors;

class AdSharingError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
6google/ads/googleads/v10/errors/ad_sharing_error.protogoogle.ads.googleads.v10.errors"�
AdSharingErrorEnum"�
AdSharingError
UNSPECIFIED 
UNKNOWN 
AD_GROUP_ALREADY_CONTAINS_AD"
INCOMPATIBLE_AD_UNDER_AD_GROUP
CANNOT_SHARE_INACTIVE_ADB�
#com.google.ads.googleads.v10.errorsBAdSharingErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v10/errors;errors�GAA�Google.Ads.GoogleAds.V10.Errors�Google\\Ads\\GoogleAds\\V10\\Errors�#Google::Ads::GoogleAds::V10::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

