<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/enums/criterion_system_serving_status.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Enums;

class CriterionSystemServingStatus
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
�
Dgoogle/ads/googleads/v10/enums/criterion_system_serving_status.protogoogle.ads.googleads.v10.enums"�
 CriterionSystemServingStatusEnum"]
CriterionSystemServingStatus
UNSPECIFIED 
UNKNOWN
ELIGIBLE
RARELY_SERVEDB�
"com.google.ads.googleads.v10.enumsB!CriterionSystemServingStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

