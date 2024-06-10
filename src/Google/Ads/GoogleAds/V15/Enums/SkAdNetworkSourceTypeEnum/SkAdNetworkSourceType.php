<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/enums/sk_ad_network_source_type.proto

namespace Google\Ads\GoogleAds\V15\Enums\SkAdNetworkSourceTypeEnum;

use UnexpectedValueException;

/**
 * Enumerates SkAdNetwork source types
 *
 * Protobuf type <code>google.ads.googleads.v15.enums.SkAdNetworkSourceTypeEnum.SkAdNetworkSourceType</code>
 */
class SkAdNetworkSourceType
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
     * The source app ID or source domain was not present in the postback or we
     * do not have this data for other reasons.
     *
     * Generated from protobuf enum <code>UNAVAILABLE = 2;</code>
     */
    const UNAVAILABLE = 2;
    /**
     * The ad was shown on a webpage.
     *
     * Generated from protobuf enum <code>WEBSITE = 3;</code>
     */
    const WEBSITE = 3;
    /**
     * The ad was shown on an app.
     *
     * Generated from protobuf enum <code>MOBILE_APPLICATION = 4;</code>
     */
    const MOBILE_APPLICATION = 4;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::UNAVAILABLE => 'UNAVAILABLE',
        self::WEBSITE => 'WEBSITE',
        self::MOBILE_APPLICATION => 'MOBILE_APPLICATION',
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
class_alias(SkAdNetworkSourceType::class, \Google\Ads\GoogleAds\V15\Enums\SkAdNetworkSourceTypeEnum_SkAdNetworkSourceType::class);

