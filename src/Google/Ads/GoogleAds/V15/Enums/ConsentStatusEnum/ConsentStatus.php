<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/enums/consent_status.proto

namespace Google\Ads\GoogleAds\V15\Enums\ConsentStatusEnum;

use UnexpectedValueException;

/**
 * Consent status
 *
 * Protobuf type <code>google.ads.googleads.v15.enums.ConsentStatusEnum.ConsentStatus</code>
 */
class ConsentStatus
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Output-only. Represents a format not yet defined in this enum.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Granted.
     *
     * Generated from protobuf enum <code>GRANTED = 2;</code>
     */
    const GRANTED = 2;
    /**
     * Denied.
     *
     * Generated from protobuf enum <code>DENIED = 3;</code>
     */
    const DENIED = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::GRANTED => 'GRANTED',
        self::DENIED => 'DENIED',
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
class_alias(ConsentStatus::class, \Google\Ads\GoogleAds\V15\Enums\ConsentStatusEnum_ConsentStatus::class);

