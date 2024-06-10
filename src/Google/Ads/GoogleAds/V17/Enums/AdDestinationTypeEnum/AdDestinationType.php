<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/enums/ad_destination_type.proto

namespace Google\Ads\GoogleAds\V17\Enums\AdDestinationTypeEnum;

use UnexpectedValueException;

/**
 * Enumerates Google Ads destination types
 *
 * Protobuf type <code>google.ads.googleads.v17.enums.AdDestinationTypeEnum.AdDestinationType</code>
 */
class AdDestinationType
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
     * Ads that don't intend to drive users off from ads to other destinations
     *
     * Generated from protobuf enum <code>NOT_APPLICABLE = 2;</code>
     */
    const NOT_APPLICABLE = 2;
    /**
     * Website
     *
     * Generated from protobuf enum <code>WEBSITE = 3;</code>
     */
    const WEBSITE = 3;
    /**
     * App Deep Link
     *
     * Generated from protobuf enum <code>APP_DEEP_LINK = 4;</code>
     */
    const APP_DEEP_LINK = 4;
    /**
     * iOS App Store or Play Store
     *
     * Generated from protobuf enum <code>APP_STORE = 5;</code>
     */
    const APP_STORE = 5;
    /**
     * Call Dialer
     *
     * Generated from protobuf enum <code>PHONE_CALL = 6;</code>
     */
    const PHONE_CALL = 6;
    /**
     * Map App
     *
     * Generated from protobuf enum <code>MAP_DIRECTIONS = 7;</code>
     */
    const MAP_DIRECTIONS = 7;
    /**
     * Location Dedicated Page
     *
     * Generated from protobuf enum <code>LOCATION_LISTING = 8;</code>
     */
    const LOCATION_LISTING = 8;
    /**
     * Text Message
     *
     * Generated from protobuf enum <code>MESSAGE = 9;</code>
     */
    const MESSAGE = 9;
    /**
     * Lead Generation Form
     *
     * Generated from protobuf enum <code>LEAD_FORM = 10;</code>
     */
    const LEAD_FORM = 10;
    /**
     * YouTube
     *
     * Generated from protobuf enum <code>YOUTUBE = 11;</code>
     */
    const YOUTUBE = 11;
    /**
     * Ad Destination for Conversions with keys unknown
     *
     * Generated from protobuf enum <code>UNMODELED_FOR_CONVERSIONS = 12;</code>
     */
    const UNMODELED_FOR_CONVERSIONS = 12;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::NOT_APPLICABLE => 'NOT_APPLICABLE',
        self::WEBSITE => 'WEBSITE',
        self::APP_DEEP_LINK => 'APP_DEEP_LINK',
        self::APP_STORE => 'APP_STORE',
        self::PHONE_CALL => 'PHONE_CALL',
        self::MAP_DIRECTIONS => 'MAP_DIRECTIONS',
        self::LOCATION_LISTING => 'LOCATION_LISTING',
        self::MESSAGE => 'MESSAGE',
        self::LEAD_FORM => 'LEAD_FORM',
        self::YOUTUBE => 'YOUTUBE',
        self::UNMODELED_FOR_CONVERSIONS => 'UNMODELED_FOR_CONVERSIONS',
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
class_alias(AdDestinationType::class, \Google\Ads\GoogleAds\V17\Enums\AdDestinationTypeEnum_AdDestinationType::class);

