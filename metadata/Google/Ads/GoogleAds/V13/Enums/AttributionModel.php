<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/enums/attribution_model.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V13\Enums;

class AttributionModel
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
6google/ads/googleads/v13/enums/attribution_model.protogoogle.ads.googleads.v13.enums"�
AttributionModelEnum"�
AttributionModel
UNSPECIFIED 
UNKNOWN
EXTERNALd
GOOGLE_ADS_LAST_CLICKe)
%GOOGLE_SEARCH_ATTRIBUTION_FIRST_CLICKf$
 GOOGLE_SEARCH_ATTRIBUTION_LINEARg(
$GOOGLE_SEARCH_ATTRIBUTION_TIME_DECAYh,
(GOOGLE_SEARCH_ATTRIBUTION_POSITION_BASEDi)
%GOOGLE_SEARCH_ATTRIBUTION_DATA_DRIVENjB�
"com.google.ads.googleads.v13.enumsBAttributionModelProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

