<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/enums/display_upload_product_type.proto

namespace Google\Ads\GoogleAds\V17\Enums\DisplayUploadProductTypeEnum;

use UnexpectedValueException;

/**
 * Enumerates display upload product types.
 *
 * Protobuf type <code>google.ads.googleads.v17.enums.DisplayUploadProductTypeEnum.DisplayUploadProductType</code>
 */
class DisplayUploadProductType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The value is unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * HTML5 upload ad. This product type requires the upload_media_bundle
     * field in DisplayUploadAdInfo to be set.
     *
     * Generated from protobuf enum <code>HTML5_UPLOAD_AD = 2;</code>
     */
    const HTML5_UPLOAD_AD = 2;
    /**
     * Dynamic HTML5 education ad. This product type requires the
     * upload_media_bundle field in DisplayUploadAdInfo to be set. Can only be
     * used in an education campaign.
     *
     * Generated from protobuf enum <code>DYNAMIC_HTML5_EDUCATION_AD = 3;</code>
     */
    const DYNAMIC_HTML5_EDUCATION_AD = 3;
    /**
     * Dynamic HTML5 flight ad. This product type requires the
     * upload_media_bundle field in DisplayUploadAdInfo to be set. Can only be
     * used in a flight campaign.
     *
     * Generated from protobuf enum <code>DYNAMIC_HTML5_FLIGHT_AD = 4;</code>
     */
    const DYNAMIC_HTML5_FLIGHT_AD = 4;
    /**
     * Dynamic HTML5 hotel and rental ad. This product type requires the
     * upload_media_bundle field in DisplayUploadAdInfo to be set. Can only be
     * used in a hotel campaign.
     *
     * Generated from protobuf enum <code>DYNAMIC_HTML5_HOTEL_RENTAL_AD = 5;</code>
     */
    const DYNAMIC_HTML5_HOTEL_RENTAL_AD = 5;
    /**
     * Dynamic HTML5 job ad. This product type requires the
     * upload_media_bundle field in DisplayUploadAdInfo to be set. Can only be
     * used in a job campaign.
     *
     * Generated from protobuf enum <code>DYNAMIC_HTML5_JOB_AD = 6;</code>
     */
    const DYNAMIC_HTML5_JOB_AD = 6;
    /**
     * Dynamic HTML5 local ad. This product type requires the
     * upload_media_bundle field in DisplayUploadAdInfo to be set. Can only be
     * used in a local campaign.
     *
     * Generated from protobuf enum <code>DYNAMIC_HTML5_LOCAL_AD = 7;</code>
     */
    const DYNAMIC_HTML5_LOCAL_AD = 7;
    /**
     * Dynamic HTML5 real estate ad. This product type requires the
     * upload_media_bundle field in DisplayUploadAdInfo to be set. Can only be
     * used in a real estate campaign.
     *
     * Generated from protobuf enum <code>DYNAMIC_HTML5_REAL_ESTATE_AD = 8;</code>
     */
    const DYNAMIC_HTML5_REAL_ESTATE_AD = 8;
    /**
     * Dynamic HTML5 custom ad. This product type requires the
     * upload_media_bundle field in DisplayUploadAdInfo to be set. Can only be
     * used in a custom campaign.
     *
     * Generated from protobuf enum <code>DYNAMIC_HTML5_CUSTOM_AD = 9;</code>
     */
    const DYNAMIC_HTML5_CUSTOM_AD = 9;
    /**
     * Dynamic HTML5 travel ad. This product type requires the
     * upload_media_bundle field in DisplayUploadAdInfo to be set. Can only be
     * used in a travel campaign.
     *
     * Generated from protobuf enum <code>DYNAMIC_HTML5_TRAVEL_AD = 10;</code>
     */
    const DYNAMIC_HTML5_TRAVEL_AD = 10;
    /**
     * Dynamic HTML5 hotel ad. This product type requires the
     * upload_media_bundle field in DisplayUploadAdInfo to be set. Can only be
     * used in a hotel campaign.
     *
     * Generated from protobuf enum <code>DYNAMIC_HTML5_HOTEL_AD = 11;</code>
     */
    const DYNAMIC_HTML5_HOTEL_AD = 11;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::HTML5_UPLOAD_AD => 'HTML5_UPLOAD_AD',
        self::DYNAMIC_HTML5_EDUCATION_AD => 'DYNAMIC_HTML5_EDUCATION_AD',
        self::DYNAMIC_HTML5_FLIGHT_AD => 'DYNAMIC_HTML5_FLIGHT_AD',
        self::DYNAMIC_HTML5_HOTEL_RENTAL_AD => 'DYNAMIC_HTML5_HOTEL_RENTAL_AD',
        self::DYNAMIC_HTML5_JOB_AD => 'DYNAMIC_HTML5_JOB_AD',
        self::DYNAMIC_HTML5_LOCAL_AD => 'DYNAMIC_HTML5_LOCAL_AD',
        self::DYNAMIC_HTML5_REAL_ESTATE_AD => 'DYNAMIC_HTML5_REAL_ESTATE_AD',
        self::DYNAMIC_HTML5_CUSTOM_AD => 'DYNAMIC_HTML5_CUSTOM_AD',
        self::DYNAMIC_HTML5_TRAVEL_AD => 'DYNAMIC_HTML5_TRAVEL_AD',
        self::DYNAMIC_HTML5_HOTEL_AD => 'DYNAMIC_HTML5_HOTEL_AD',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DisplayUploadProductType::class, \Google\Ads\GoogleAds\V17\Enums\DisplayUploadProductTypeEnum_DisplayUploadProductType::class);

