<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/enums/experiment_type.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V15\Enums;

class ExperimentType
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
4google/ads/googleads/v15/enums/experiment_type.protogoogle.ads.googleads.v15.enums"�
ExperimentTypeEnum"�
ExperimentType
UNSPECIFIED 
UNKNOWN
DISPLAY_AND_VIDEO_360
AD_VARIATION
YOUTUBE_CUSTOM
DISPLAY_CUSTOM
SEARCH_CUSTOM&
"DISPLAY_AUTOMATED_BIDDING_STRATEGY%
!SEARCH_AUTOMATED_BIDDING_STRATEGY	\'
#SHOPPING_AUTOMATED_BIDDING_STRATEGY

SMART_MATCHING
HOTEL_CUSTOMB�
"com.google.ads.googleads.v15.enumsBExperimentTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

