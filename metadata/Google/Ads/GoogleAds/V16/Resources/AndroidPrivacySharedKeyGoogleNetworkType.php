<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/resources/android_privacy_shared_key_google_network_type.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V16\Resources;

class AndroidPrivacySharedKeyGoogleNetworkType
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Egoogle/ads/googleads/v16/enums/android_privacy_interaction_type.protogoogle.ads.googleads.v16.enums"�
!AndroidPrivacyInteractionTypeEnum"d
AndroidPrivacyInteractionType
UNSPECIFIED 
UNKNOWN	
CLICK
ENGAGED_VIEW
VIEWB�
"com.google.ads.googleads.v16.enumsB"AndroidPrivacyInteractionTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
Agoogle/ads/googleads/v16/enums/android_privacy_network_type.protogoogle.ads.googleads.v16.enums"�
AndroidPrivacyNetworkTypeEnum"_
AndroidPrivacyNetworkType
UNSPECIFIED 
UNKNOWN

SEARCH
DISPLAY
YOUTUBEB�
"com.google.ads.googleads.v16.enumsBAndroidPrivacyNetworkTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�

Wgoogle/ads/googleads/v16/resources/android_privacy_shared_key_google_network_type.proto"google.ads.googleads.v16.resourcesAgoogle/ads/googleads/v16/enums/android_privacy_network_type.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
(AndroidPrivacySharedKeyGoogleNetworkType`
resource_name (	BI�A�AC
Agoogleads.googleapis.com/AndroidPrivacySharedKeyGoogleNetworkType
campaign_id (B�A�
 android_privacy_interaction_type (2_.google.ads.googleads.v16.enums.AndroidPrivacyInteractionTypeEnum.AndroidPrivacyInteractionTypeB�A-
 android_privacy_interaction_date (	B�A�
android_privacy_network_type (2W.google.ads.googleads.v16.enums.AndroidPrivacyNetworkTypeEnum.AndroidPrivacyNetworkTypeB�A$
shared_network_type_key (	B�A:��A�
Agoogleads.googleapis.com/AndroidPrivacySharedKeyGoogleNetworkType�customers/{customer_id}/androidPrivacySharedKeyGoogleNetworkTypes/{campaign_id}~{android_privacy_interaction_type}~{android_privacy_network_type}~{android_privacy_interaction_date}B�
&com.google.ads.googleads.v16.resourcesB-AndroidPrivacySharedKeyGoogleNetworkTypeProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v16/resources;resources�GAA�"Google.Ads.GoogleAds.V16.Resources�"Google\\Ads\\GoogleAds\\V16\\Resources�&Google::Ads::GoogleAds::V16::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

