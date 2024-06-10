<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/errors/identity_verification_error.proto

namespace Google\Ads\GoogleAds\V17\Errors\IdentityVerificationErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible identity verification errors.
 *
 * Protobuf type <code>google.ads.googleads.v17.errors.IdentityVerificationErrorEnum.IdentityVerificationError</code>
 */
class IdentityVerificationError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * No effective billing linked to this customer.
     *
     * Generated from protobuf enum <code>NO_EFFECTIVE_BILLING = 2;</code>
     */
    const NO_EFFECTIVE_BILLING = 2;
    /**
     * Customer is not on monthly invoicing.
     *
     * Generated from protobuf enum <code>BILLING_NOT_ON_MONTHLY_INVOICING = 3;</code>
     */
    const BILLING_NOT_ON_MONTHLY_INVOICING = 3;
    /**
     * Verification for this program type was already started.
     *
     * Generated from protobuf enum <code>VERIFICATION_ALREADY_STARTED = 4;</code>
     */
    const VERIFICATION_ALREADY_STARTED = 4;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::NO_EFFECTIVE_BILLING => 'NO_EFFECTIVE_BILLING',
        self::BILLING_NOT_ON_MONTHLY_INVOICING => 'BILLING_NOT_ON_MONTHLY_INVOICING',
        self::VERIFICATION_ALREADY_STARTED => 'VERIFICATION_ALREADY_STARTED',
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
class_alias(IdentityVerificationError::class, \Google\Ads\GoogleAds\V17\Errors\IdentityVerificationErrorEnum_IdentityVerificationError::class);

