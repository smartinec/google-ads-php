<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/errors/ad_sharing_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V15\Errors;

class AdSharingError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
6google/ads/googleads/v15/errors/ad_sharing_error.protogoogle.ads.googleads.v15.errors"�
AdSharingErrorEnum"�
AdSharingError
UNSPECIFIED 
UNKNOWN 
AD_GROUP_ALREADY_CONTAINS_AD"
INCOMPATIBLE_AD_UNDER_AD_GROUP
CANNOT_SHARE_INACTIVE_ADB�
#com.google.ads.googleads.v15.errorsBAdSharingErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v15/errors;errors�GAA�Google.Ads.GoogleAds.V15.Errors�Google\\Ads\\GoogleAds\\V15\\Errors�#Google::Ads::GoogleAds::V15::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

