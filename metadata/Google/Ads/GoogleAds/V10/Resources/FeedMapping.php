<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/resources/feed_mapping.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Resources;

class FeedMapping
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
�
5google/ads/googleads/v10/enums/placeholder_type.protogoogle.ads.googleads.v10.enums"�
PlaceholderTypeEnum"�
PlaceholderType
UNSPECIFIED 
UNKNOWN
SITELINK
CALL
APP
LOCATION
AFFILIATE_LOCATION
CALLOUT
STRUCTURED_SNIPPET
MESSAGE		
PRICE

	PROMOTION
AD_CUSTOMIZER
DYNAMIC_EDUCATION
DYNAMIC_FLIGHT
DYNAMIC_CUSTOM
DYNAMIC_HOTEL
DYNAMIC_REAL_ESTATE
DYNAMIC_TRAVEL
DYNAMIC_LOCAL
DYNAMIC_JOB	
IMAGEB�
"com.google.ads.googleads.v10.enumsBPlaceholderTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
Dgoogle/ads/googleads/v10/enums/ad_customizer_placeholder_field.protogoogle.ads.googleads.v10.enums"�
 AdCustomizerPlaceholderFieldEnum"j
AdCustomizerPlaceholderField
UNSPECIFIED 
UNKNOWN
INTEGER	
PRICE
DATE

STRINGB�
"com.google.ads.googleads.v10.enumsB!AdCustomizerPlaceholderFieldProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
Igoogle/ads/googleads/v10/enums/affiliate_location_placeholder_field.protogoogle.ads.googleads.v10.enums"�
%AffiliateLocationPlaceholderFieldEnum"�
!AffiliateLocationPlaceholderField
UNSPECIFIED 
UNKNOWN
BUSINESS_NAME
ADDRESS_LINE_1
ADDRESS_LINE_2
CITY
PROVINCE
POSTAL_CODE
COUNTRY_CODE
PHONE_NUMBER	
LANGUAGE_CODE

CHAIN_ID

CHAIN_NAMEB�
"com.google.ads.googleads.v10.enumsB&AffiliateLocationPlaceholderFieldProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
:google/ads/googleads/v10/enums/app_placeholder_field.protogoogle.ads.googleads.v10.enums"�
AppPlaceholderFieldEnum"�
AppPlaceholderField
UNSPECIFIED 
UNKNOWN	
STORE
ID
	LINK_TEXT
URL

FINAL_URLS
FINAL_MOBILE_URLS
TRACKING_URL
FINAL_URL_SUFFIX	B�
"com.google.ads.googleads.v10.enumsBAppPlaceholderFieldProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
;google/ads/googleads/v10/enums/call_placeholder_field.protogoogle.ads.googleads.v10.enums"�
CallPlaceholderFieldEnum"�
CallPlaceholderField
UNSPECIFIED 
UNKNOWN
PHONE_NUMBER
COUNTRY_CODE
TRACKED
CONVERSION_TYPE_ID
CONVERSION_REPORTING_STATEB�
"com.google.ads.googleads.v10.enumsBCallPlaceholderFieldProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
>google/ads/googleads/v10/enums/callout_placeholder_field.protogoogle.ads.googleads.v10.enums"h
CalloutPlaceholderFieldEnum"I
CalloutPlaceholderField
UNSPECIFIED 
UNKNOWN
CALLOUT_TEXTB�
"com.google.ads.googleads.v10.enumsBCalloutPlaceholderFieldProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
=google/ads/googleads/v10/enums/custom_placeholder_field.protogoogle.ads.googleads.v10.enums"�
CustomPlaceholderFieldEnum"�
CustomPlaceholderField
UNSPECIFIED 
UNKNOWN
ID
ID2

ITEM_TITLE
ITEM_SUBTITLE
ITEM_DESCRIPTION
ITEM_ADDRESS	
PRICE
FORMATTED_PRICE	

SALE_PRICE

FORMATTED_SALE_PRICE
	IMAGE_URL
ITEM_CATEGORY

FINAL_URLS
FINAL_MOBILE_URLS
TRACKING_URL
CONTEXTUAL_KEYWORDS
ANDROID_APP_LINK
SIMILAR_IDS
IOS_APP_LINK
IOS_APP_STORE_IDB�
"com.google.ads.googleads.v10.enumsBCustomPlaceholderFieldProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
Bgoogle/ads/googleads/v10/enums/dsa_page_feed_criterion_field.protogoogle.ads.googleads.v10.enums"s
DsaPageFeedCriterionFieldEnum"R
DsaPageFeedCriterionField
UNSPECIFIED 
UNKNOWN
PAGE_URL	
LABELB�
"com.google.ads.googleads.v10.enumsBDsaPageFeedCriterionFieldProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
@google/ads/googleads/v10/enums/education_placeholder_field.protogoogle.ads.googleads.v10.enums"�
EducationPlaceholderFieldEnum"�
EducationPlaceholderField
UNSPECIFIED 
UNKNOWN

PROGRAM_ID
LOCATION_ID
PROGRAM_NAME
AREA_OF_STUDY
PROGRAM_DESCRIPTION
SCHOOL_NAME
ADDRESS
THUMBNAIL_IMAGE_URL	#
ALTERNATIVE_THUMBNAIL_IMAGE_URL


FINAL_URLS
FINAL_MOBILE_URLS
TRACKING_URL
CONTEXTUAL_KEYWORDS
ANDROID_APP_LINK
SIMILAR_PROGRAM_IDS
IOS_APP_LINK
IOS_APP_STORE_IDB�
"com.google.ads.googleads.v10.enumsBEducationPlaceholderFieldProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
@google/ads/googleads/v10/enums/feed_mapping_criterion_type.protogoogle.ads.googleads.v10.enums"�
FeedMappingCriterionTypeEnum"m
FeedMappingCriterionType
UNSPECIFIED 
UNKNOWN 
LOCATION_EXTENSION_TARGETING
DSA_PAGE_FEEDB�
"com.google.ads.googleads.v10.enumsBFeedMappingCriterionTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
8google/ads/googleads/v10/enums/feed_mapping_status.protogoogle.ads.googleads.v10.enums"d
FeedMappingStatusEnum"K
FeedMappingStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
"com.google.ads.googleads.v10.enumsBFeedMappingStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
=google/ads/googleads/v10/enums/flight_placeholder_field.protogoogle.ads.googleads.v10.enums"�
FlightPlaceholderFieldEnum"�
FlightPlaceholderField
UNSPECIFIED 
UNKNOWN
DESTINATION_ID
	ORIGIN_ID
FLIGHT_DESCRIPTION
ORIGIN_NAME
DESTINATION_NAME
FLIGHT_PRICE
FORMATTED_PRICE
FLIGHT_SALE_PRICE	
FORMATTED_SALE_PRICE

	IMAGE_URL

FINAL_URLS
FINAL_MOBILE_URLS
TRACKING_URL
ANDROID_APP_LINK
SIMILAR_DESTINATION_IDS
IOS_APP_LINK
IOS_APP_STORE_IDB�
"com.google.ads.googleads.v10.enumsBFlightsPlaceholderFieldProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
<google/ads/googleads/v10/enums/hotel_placeholder_field.protogoogle.ads.googleads.v10.enums"�
HotelPlaceholderFieldEnum"�
HotelPlaceholderField
UNSPECIFIED 
UNKNOWN
PROPERTY_ID
PROPERTY_NAME
DESTINATION_NAME
DESCRIPTION
ADDRESS	
PRICE
FORMATTED_PRICE

SALE_PRICE	
FORMATTED_SALE_PRICE

	IMAGE_URL
CATEGORY
STAR_RATING
CONTEXTUAL_KEYWORDS

FINAL_URLS
FINAL_MOBILE_URLS
TRACKING_URL
ANDROID_APP_LINK
SIMILAR_PROPERTY_IDS
IOS_APP_LINK
IOS_APP_STORE_IDB�
"com.google.ads.googleads.v10.enumsBHotelsPlaceholderFieldProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
<google/ads/googleads/v10/enums/image_placeholder_field.protogoogle.ads.googleads.v10.enums"`
ImagePlaceholderFieldEnum"C
ImagePlaceholderField
UNSPECIFIED 
UNKNOWN
ASSET_IDB�
"com.google.ads.googleads.v10.enumsBImagePlaceholderFieldProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
:google/ads/googleads/v10/enums/job_placeholder_field.protogoogle.ads.googleads.v10.enums"�
JobPlaceholderFieldEnum"�
JobPlaceholderField
UNSPECIFIED 
UNKNOWN

JOB_ID
LOCATION_ID	
TITLE
SUBTITLE
DESCRIPTION
	IMAGE_URL
CATEGORY
CONTEXTUAL_KEYWORDS	
ADDRESS


SALARY

FINAL_URLS
FINAL_MOBILE_URLS
TRACKING_URL
ANDROID_APP_LINK
SIMILAR_JOB_IDS
IOS_APP_LINK
IOS_APP_STORE_IDB�
"com.google.ads.googleads.v10.enumsBJobsPlaceholderFieldProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
<google/ads/googleads/v10/enums/local_placeholder_field.protogoogle.ads.googleads.v10.enums"�
LocalPlaceholderFieldEnum"�
LocalPlaceholderField
UNSPECIFIED 
UNKNOWN
DEAL_ID
	DEAL_NAME
SUBTITLE
DESCRIPTION	
PRICE
FORMATTED_PRICE

SALE_PRICE
FORMATTED_SALE_PRICE	
	IMAGE_URL

ADDRESS
CATEGORY
CONTEXTUAL_KEYWORDS

FINAL_URLS
FINAL_MOBILE_URLS
TRACKING_URL
ANDROID_APP_LINK
SIMILAR_DEAL_IDS
IOS_APP_LINK
IOS_APP_STORE_IDB�
"com.google.ads.googleads.v10.enumsBLocalPlaceholderFieldProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
Qgoogle/ads/googleads/v10/enums/location_extension_targeting_criterion_field.protogoogle.ads.googleads.v10.enums"�
,LocationExtensionTargetingCriterionFieldEnum"�
(LocationExtensionTargetingCriterionField
UNSPECIFIED 
UNKNOWN
ADDRESS_LINE_1
ADDRESS_LINE_2
CITY
PROVINCE
POSTAL_CODE
COUNTRY_CODEB�
"com.google.ads.googleads.v10.enumsB-LocationExtensionTargetingCriterionFieldProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
?google/ads/googleads/v10/enums/location_placeholder_field.protogoogle.ads.googleads.v10.enums"�
LocationPlaceholderFieldEnum"�
LocationPlaceholderField
UNSPECIFIED 
UNKNOWN
BUSINESS_NAME
ADDRESS_LINE_1
ADDRESS_LINE_2
CITY
PROVINCE
POSTAL_CODE
COUNTRY_CODE
PHONE_NUMBER	B�
"com.google.ads.googleads.v10.enumsBLocationPlaceholderFieldProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
>google/ads/googleads/v10/enums/message_placeholder_field.protogoogle.ads.googleads.v10.enums"�
MessagePlaceholderFieldEnum"�
MessagePlaceholderField
UNSPECIFIED 
UNKNOWN
BUSINESS_NAME
COUNTRY_CODE
PHONE_NUMBER
MESSAGE_EXTENSION_TEXT
MESSAGE_TEXTB�
"com.google.ads.googleads.v10.enumsBMessagePlaceholderFieldProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
<google/ads/googleads/v10/enums/price_placeholder_field.protogoogle.ads.googleads.v10.enums"�	
PricePlaceholderFieldEnum"�	
PricePlaceholderField
UNSPECIFIED 
UNKNOWN
TYPE
PRICE_QUALIFIER
TRACKING_TEMPLATE
LANGUAGE
FINAL_URL_SUFFIX
ITEM_1_HEADERd
ITEM_1_DESCRIPTIONe
ITEM_1_PRICEf
ITEM_1_UNITg
ITEM_1_FINAL_URLSh
ITEM_1_FINAL_MOBILE_URLSi
ITEM_2_HEADER�
ITEM_2_DESCRIPTION�
ITEM_2_PRICE�
ITEM_2_UNIT�
ITEM_2_FINAL_URLS�
ITEM_2_FINAL_MOBILE_URLS�
ITEM_3_HEADER�
ITEM_3_DESCRIPTION�
ITEM_3_PRICE�
ITEM_3_UNIT�
ITEM_3_FINAL_URLS�
ITEM_3_FINAL_MOBILE_URLS�
ITEM_4_HEADER�
ITEM_4_DESCRIPTION�
ITEM_4_PRICE�
ITEM_4_UNIT�
ITEM_4_FINAL_URLS�
ITEM_4_FINAL_MOBILE_URLS�
ITEM_5_HEADER�
ITEM_5_DESCRIPTION�
ITEM_5_PRICE�
ITEM_5_UNIT�
ITEM_5_FINAL_URLS�
ITEM_5_FINAL_MOBILE_URLS�
ITEM_6_HEADER�
ITEM_6_DESCRIPTION�
ITEM_6_PRICE�
ITEM_6_UNIT�
ITEM_6_FINAL_URLS�
ITEM_6_FINAL_MOBILE_URLS�
ITEM_7_HEADER�
ITEM_7_DESCRIPTION�
ITEM_7_PRICE�
ITEM_7_UNIT�
ITEM_7_FINAL_URLS�
ITEM_7_FINAL_MOBILE_URLS�
ITEM_8_HEADER�
ITEM_8_DESCRIPTION�
ITEM_8_PRICE�
ITEM_8_UNIT�
ITEM_8_FINAL_URLS�
ITEM_8_FINAL_MOBILE_URLS�B�
"com.google.ads.googleads.v10.enumsBPricePlaceholderFieldProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
@google/ads/googleads/v10/enums/promotion_placeholder_field.protogoogle.ads.googleads.v10.enums"�
PromotionPlaceholderFieldEnum"�
PromotionPlaceholderField
UNSPECIFIED 
UNKNOWN
PROMOTION_TARGET
DISCOUNT_MODIFIER
PERCENT_OFF
MONEY_AMOUNT_OFF
PROMOTION_CODE
ORDERS_OVER_AMOUNT
PROMOTION_START
PROMOTION_END	
OCCASION


FINAL_URLS
FINAL_MOBILE_URLS
TRACKING_URL
LANGUAGE
FINAL_URL_SUFFIXB�
"com.google.ads.googleads.v10.enumsBPromotionPlaceholderFieldProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
Bgoogle/ads/googleads/v10/enums/real_estate_placeholder_field.protogoogle.ads.googleads.v10.enums"�
RealEstatePlaceholderFieldEnum"�
RealEstatePlaceholderField
UNSPECIFIED 
UNKNOWN

LISTING_ID
LISTING_NAME
	CITY_NAME
DESCRIPTION
ADDRESS	
PRICE
FORMATTED_PRICE
	IMAGE_URL	
PROPERTY_TYPE

LISTING_TYPE
CONTEXTUAL_KEYWORDS

FINAL_URLS
FINAL_MOBILE_URLS
TRACKING_URL
ANDROID_APP_LINK
SIMILAR_LISTING_IDS
IOS_APP_LINK
IOS_APP_STORE_IDB�
"com.google.ads.googleads.v10.enumsBRealEstatePlaceholderFieldProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
?google/ads/googleads/v10/enums/sitelink_placeholder_field.protogoogle.ads.googleads.v10.enums"�
SitelinkPlaceholderFieldEnum"�
SitelinkPlaceholderField
UNSPECIFIED 
UNKNOWN
TEXT

LINE_1

LINE_2

FINAL_URLS
FINAL_MOBILE_URLS
TRACKING_URL
FINAL_URL_SUFFIXB�
"com.google.ads.googleads.v10.enumsBSitelinkPlaceholderFieldProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
Igoogle/ads/googleads/v10/enums/structured_snippet_placeholder_field.protogoogle.ads.googleads.v10.enums"�
%StructuredSnippetPlaceholderFieldEnum"[
!StructuredSnippetPlaceholderField
UNSPECIFIED 
UNKNOWN

HEADER
SNIPPETSB�
"com.google.ads.googleads.v10.enumsB&StructuredSnippetPlaceholderFieldProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�
=google/ads/googleads/v10/enums/travel_placeholder_field.protogoogle.ads.googleads.v10.enums"�
TravelPlaceholderFieldEnum"�
TravelPlaceholderField
UNSPECIFIED 
UNKNOWN
DESTINATION_ID
	ORIGIN_ID	
TITLE
DESTINATION_NAME
ORIGIN_NAME	
PRICE
FORMATTED_PRICE

SALE_PRICE	
FORMATTED_SALE_PRICE

	IMAGE_URL
CATEGORY
CONTEXTUAL_KEYWORDS
DESTINATION_ADDRESS
	FINAL_URL
FINAL_MOBILE_URLS
TRACKING_URL
ANDROID_APP_LINK
SIMILAR_DESTINATION_IDS
IOS_APP_LINK
IOS_APP_STORE_IDB�
"com.google.ads.googleads.v10.enumsBTravelPlaceholderFieldProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v10/enums;enums�GAA�Google.Ads.GoogleAds.V10.Enums�Google\\Ads\\GoogleAds\\V10\\Enums�"Google::Ads::GoogleAds::V10::Enumsbproto3
�*
5google/ads/googleads/v10/resources/feed_mapping.proto"google.ads.googleads.v10.resourcesIgoogle/ads/googleads/v10/enums/affiliate_location_placeholder_field.proto:google/ads/googleads/v10/enums/app_placeholder_field.proto;google/ads/googleads/v10/enums/call_placeholder_field.proto>google/ads/googleads/v10/enums/callout_placeholder_field.proto=google/ads/googleads/v10/enums/custom_placeholder_field.protoBgoogle/ads/googleads/v10/enums/dsa_page_feed_criterion_field.proto@google/ads/googleads/v10/enums/education_placeholder_field.proto@google/ads/googleads/v10/enums/feed_mapping_criterion_type.proto8google/ads/googleads/v10/enums/feed_mapping_status.proto=google/ads/googleads/v10/enums/flight_placeholder_field.proto<google/ads/googleads/v10/enums/hotel_placeholder_field.proto<google/ads/googleads/v10/enums/image_placeholder_field.proto:google/ads/googleads/v10/enums/job_placeholder_field.proto<google/ads/googleads/v10/enums/local_placeholder_field.protoQgoogle/ads/googleads/v10/enums/location_extension_targeting_criterion_field.proto?google/ads/googleads/v10/enums/location_placeholder_field.proto>google/ads/googleads/v10/enums/message_placeholder_field.proto5google/ads/googleads/v10/enums/placeholder_type.proto<google/ads/googleads/v10/enums/price_placeholder_field.proto@google/ads/googleads/v10/enums/promotion_placeholder_field.protoBgoogle/ads/googleads/v10/enums/real_estate_placeholder_field.proto?google/ads/googleads/v10/enums/sitelink_placeholder_field.protoIgoogle/ads/googleads/v10/enums/structured_snippet_placeholder_field.proto=google/ads/googleads/v10/enums/travel_placeholder_field.protogoogle/api/annotations.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
FeedMappingC
resource_name (	B,�A�A&
$googleads.googleapis.com/FeedMapping8
feed (	B%�A�A
googleads.googleapis.com/FeedH�`
attribute_field_mappings (29.google.ads.googleads.v10.resources.AttributeFieldMappingB�A\\
status (2G.google.ads.googleads.v10.enums.FeedMappingStatusEnum.FeedMappingStatusB�Ad
placeholder_type (2C.google.ads.googleads.v10.enums.PlaceholderTypeEnum.PlaceholderTypeB�AH t
criterion_type (2U.google.ads.googleads.v10.enums.FeedMappingCriterionTypeEnum.FeedMappingCriterionTypeB�AH :k�Ah
$googleads.googleapis.com/FeedMapping@customers/{customer_id}/feedMappings/{feed_id}~{feed_mapping_id}B
targetB
_feed"�
AttributeFieldMapping#
feed_attribute_id (B�AH�
field_id (B�AH�t
sitelink_field (2U.google.ads.googleads.v10.enums.SitelinkPlaceholderFieldEnum.SitelinkPlaceholderFieldB�AH h

call_field (2M.google.ads.googleads.v10.enums.CallPlaceholderFieldEnum.CallPlaceholderFieldB�AH e
	app_field (2K.google.ads.googleads.v10.enums.AppPlaceholderFieldEnum.AppPlaceholderFieldB�AH t
location_field (2U.google.ads.googleads.v10.enums.LocationPlaceholderFieldEnum.LocationPlaceholderFieldB�AH �
affiliate_location_field (2g.google.ads.googleads.v10.enums.AffiliateLocationPlaceholderFieldEnum.AffiliateLocationPlaceholderFieldB�AH q
callout_field (2S.google.ads.googleads.v10.enums.CalloutPlaceholderFieldEnum.CalloutPlaceholderFieldB�AH �
structured_snippet_field	 (2g.google.ads.googleads.v10.enums.StructuredSnippetPlaceholderFieldEnum.StructuredSnippetPlaceholderFieldB�AH q
message_field
 (2S.google.ads.googleads.v10.enums.MessagePlaceholderFieldEnum.MessagePlaceholderFieldB�AH k
price_field (2O.google.ads.googleads.v10.enums.PricePlaceholderFieldEnum.PricePlaceholderFieldB�AH w
promotion_field (2W.google.ads.googleads.v10.enums.PromotionPlaceholderFieldEnum.PromotionPlaceholderFieldB�AH �
ad_customizer_field (2].google.ads.googleads.v10.enums.AdCustomizerPlaceholderFieldEnum.AdCustomizerPlaceholderFieldB�AH {
dsa_page_feed_field (2W.google.ads.googleads.v10.enums.DsaPageFeedCriterionFieldEnum.DsaPageFeedCriterionFieldB�AH �
"location_extension_targeting_field (2u.google.ads.googleads.v10.enums.LocationExtensionTargetingCriterionFieldEnum.LocationExtensionTargetingCriterionFieldB�AH w
education_field (2W.google.ads.googleads.v10.enums.EducationPlaceholderFieldEnum.EducationPlaceholderFieldB�AH n
flight_field (2Q.google.ads.googleads.v10.enums.FlightPlaceholderFieldEnum.FlightPlaceholderFieldB�AH n
custom_field (2Q.google.ads.googleads.v10.enums.CustomPlaceholderFieldEnum.CustomPlaceholderFieldB�AH k
hotel_field (2O.google.ads.googleads.v10.enums.HotelPlaceholderFieldEnum.HotelPlaceholderFieldB�AH {
real_estate_field (2Y.google.ads.googleads.v10.enums.RealEstatePlaceholderFieldEnum.RealEstatePlaceholderFieldB�AH n
travel_field (2Q.google.ads.googleads.v10.enums.TravelPlaceholderFieldEnum.TravelPlaceholderFieldB�AH k
local_field (2O.google.ads.googleads.v10.enums.LocalPlaceholderFieldEnum.LocalPlaceholderFieldB�AH e
	job_field (2K.google.ads.googleads.v10.enums.JobPlaceholderFieldEnum.JobPlaceholderFieldB�AH k
image_field (2O.google.ads.googleads.v10.enums.ImagePlaceholderFieldEnum.ImagePlaceholderFieldB�AH B
fieldB
_feed_attribute_idB
	_field_idB�
&com.google.ads.googleads.v10.resourcesBFeedMappingProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v10/resources;resources�GAA�"Google.Ads.GoogleAds.V10.Resources�"Google\\Ads\\GoogleAds\\V10\\Resources�&Google::Ads::GoogleAds::V10::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

