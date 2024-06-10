<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/errors/extension_feed_item_error.proto

namespace Google\Ads\GoogleAds\V15\Errors\ExtensionFeedItemErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible extension feed item errors.
 *
 * Protobuf type <code>google.ads.googleads.v15.errors.ExtensionFeedItemErrorEnum.ExtensionFeedItemError</code>
 */
class ExtensionFeedItemError
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
     * Value is not within the accepted range.
     *
     * Generated from protobuf enum <code>VALUE_OUT_OF_RANGE = 2;</code>
     */
    const VALUE_OUT_OF_RANGE = 2;
    /**
     * Url list is too long.
     *
     * Generated from protobuf enum <code>URL_LIST_TOO_LONG = 3;</code>
     */
    const URL_LIST_TOO_LONG = 3;
    /**
     * Cannot have a geo targeting restriction without having geo targeting.
     *
     * Generated from protobuf enum <code>CANNOT_HAVE_RESTRICTION_ON_EMPTY_GEO_TARGETING = 4;</code>
     */
    const CANNOT_HAVE_RESTRICTION_ON_EMPTY_GEO_TARGETING = 4;
    /**
     * Cannot simultaneously set sitelink field with final urls.
     *
     * Generated from protobuf enum <code>CANNOT_SET_WITH_FINAL_URLS = 5;</code>
     */
    const CANNOT_SET_WITH_FINAL_URLS = 5;
    /**
     * Must set field with final urls.
     *
     * Generated from protobuf enum <code>CANNOT_SET_WITHOUT_FINAL_URLS = 6;</code>
     */
    const CANNOT_SET_WITHOUT_FINAL_URLS = 6;
    /**
     * Phone number for a call extension is invalid.
     *
     * Generated from protobuf enum <code>INVALID_PHONE_NUMBER = 7;</code>
     */
    const INVALID_PHONE_NUMBER = 7;
    /**
     * Phone number for a call extension is not supported for the given country
     * code.
     *
     * Generated from protobuf enum <code>PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY = 8;</code>
     */
    const PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY = 8;
    /**
     * A carrier specific number in short format is not allowed for call
     * extensions.
     *
     * Generated from protobuf enum <code>CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED = 9;</code>
     */
    const CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED = 9;
    /**
     * Premium rate numbers are not allowed for call extensions.
     *
     * Generated from protobuf enum <code>PREMIUM_RATE_NUMBER_NOT_ALLOWED = 10;</code>
     */
    const PREMIUM_RATE_NUMBER_NOT_ALLOWED = 10;
    /**
     * Phone number type for a call extension is not allowed.
     * For example, personal number is not allowed for a call extension in
     * most regions.
     *
     * Generated from protobuf enum <code>DISALLOWED_NUMBER_TYPE = 11;</code>
     */
    const DISALLOWED_NUMBER_TYPE = 11;
    /**
     * Phone number for a call extension does not meet domestic format
     * requirements.
     *
     * Generated from protobuf enum <code>INVALID_DOMESTIC_PHONE_NUMBER_FORMAT = 12;</code>
     */
    const INVALID_DOMESTIC_PHONE_NUMBER_FORMAT = 12;
    /**
     * Vanity phone numbers (for example, those including letters) are not
     * allowed for call extensions.
     *
     * Generated from protobuf enum <code>VANITY_PHONE_NUMBER_NOT_ALLOWED = 13;</code>
     */
    const VANITY_PHONE_NUMBER_NOT_ALLOWED = 13;
    /**
     * Call conversion action provided for a call extension is invalid.
     *
     * Generated from protobuf enum <code>INVALID_CALL_CONVERSION_ACTION = 14;</code>
     */
    const INVALID_CALL_CONVERSION_ACTION = 14;
    /**
     * For a call extension, the customer is not on the allow-list for call
     * tracking.
     *
     * Generated from protobuf enum <code>CUSTOMER_NOT_ON_ALLOWLIST_FOR_CALLTRACKING = 47;</code>
     */
    const CUSTOMER_NOT_ON_ALLOWLIST_FOR_CALLTRACKING = 47;
    /**
     * Call tracking is not supported for the given country for a call
     * extension.
     *
     * Generated from protobuf enum <code>CALLTRACKING_NOT_SUPPORTED_FOR_COUNTRY = 16;</code>
     */
    const CALLTRACKING_NOT_SUPPORTED_FOR_COUNTRY = 16;
    /**
     * Customer hasn't consented for call recording, which is required for
     * creating/updating call feed items. See
     * https://support.google.com/google-ads/answer/7412639.
     *
     * Generated from protobuf enum <code>CUSTOMER_CONSENT_FOR_CALL_RECORDING_REQUIRED = 17;</code>
     */
    const CUSTOMER_CONSENT_FOR_CALL_RECORDING_REQUIRED = 17;
    /**
     * App id provided for an app extension is invalid.
     *
     * Generated from protobuf enum <code>INVALID_APP_ID = 18;</code>
     */
    const INVALID_APP_ID = 18;
    /**
     * Quotation marks present in the review text for a review extension.
     *
     * Generated from protobuf enum <code>QUOTES_IN_REVIEW_EXTENSION_SNIPPET = 19;</code>
     */
    const QUOTES_IN_REVIEW_EXTENSION_SNIPPET = 19;
    /**
     * Hyphen character present in the review text for a review extension.
     *
     * Generated from protobuf enum <code>HYPHENS_IN_REVIEW_EXTENSION_SNIPPET = 20;</code>
     */
    const HYPHENS_IN_REVIEW_EXTENSION_SNIPPET = 20;
    /**
     * A denylisted review source name or url was provided for a review
     * extension.
     *
     * Generated from protobuf enum <code>REVIEW_EXTENSION_SOURCE_INELIGIBLE = 21;</code>
     */
    const REVIEW_EXTENSION_SOURCE_INELIGIBLE = 21;
    /**
     * Review source name should not be found in the review text.
     *
     * Generated from protobuf enum <code>SOURCE_NAME_IN_REVIEW_EXTENSION_TEXT = 22;</code>
     */
    const SOURCE_NAME_IN_REVIEW_EXTENSION_TEXT = 22;
    /**
     * Inconsistent currency codes.
     *
     * Generated from protobuf enum <code>INCONSISTENT_CURRENCY_CODES = 23;</code>
     */
    const INCONSISTENT_CURRENCY_CODES = 23;
    /**
     * Price extension cannot have duplicated headers.
     *
     * Generated from protobuf enum <code>PRICE_EXTENSION_HAS_DUPLICATED_HEADERS = 24;</code>
     */
    const PRICE_EXTENSION_HAS_DUPLICATED_HEADERS = 24;
    /**
     * Price item cannot have duplicated header and description.
     *
     * Generated from protobuf enum <code>PRICE_ITEM_HAS_DUPLICATED_HEADER_AND_DESCRIPTION = 25;</code>
     */
    const PRICE_ITEM_HAS_DUPLICATED_HEADER_AND_DESCRIPTION = 25;
    /**
     * Price extension has too few items.
     *
     * Generated from protobuf enum <code>PRICE_EXTENSION_HAS_TOO_FEW_ITEMS = 26;</code>
     */
    const PRICE_EXTENSION_HAS_TOO_FEW_ITEMS = 26;
    /**
     * Price extension has too many items.
     *
     * Generated from protobuf enum <code>PRICE_EXTENSION_HAS_TOO_MANY_ITEMS = 27;</code>
     */
    const PRICE_EXTENSION_HAS_TOO_MANY_ITEMS = 27;
    /**
     * The input value is not currently supported.
     *
     * Generated from protobuf enum <code>UNSUPPORTED_VALUE = 28;</code>
     */
    const UNSUPPORTED_VALUE = 28;
    /**
     * The input value is not currently supported in the selected language of an
     * extension.
     *
     * Generated from protobuf enum <code>UNSUPPORTED_VALUE_IN_SELECTED_LANGUAGE = 29;</code>
     */
    const UNSUPPORTED_VALUE_IN_SELECTED_LANGUAGE = 29;
    /**
     * Unknown or unsupported device preference.
     *
     * Generated from protobuf enum <code>INVALID_DEVICE_PREFERENCE = 30;</code>
     */
    const INVALID_DEVICE_PREFERENCE = 30;
    /**
     * Invalid feed item schedule end time (for example, endHour = 24 and
     * endMinute != 0).
     *
     * Generated from protobuf enum <code>INVALID_SCHEDULE_END = 31;</code>
     */
    const INVALID_SCHEDULE_END = 31;
    /**
     * Date time zone does not match the account's time zone.
     *
     * Generated from protobuf enum <code>DATE_TIME_MUST_BE_IN_ACCOUNT_TIME_ZONE = 32;</code>
     */
    const DATE_TIME_MUST_BE_IN_ACCOUNT_TIME_ZONE = 32;
    /**
     * Invalid structured snippet header.
     *
     * Generated from protobuf enum <code>INVALID_SNIPPETS_HEADER = 33;</code>
     */
    const INVALID_SNIPPETS_HEADER = 33;
    /**
     * Cannot operate on removed feed item.
     *
     * Generated from protobuf enum <code>CANNOT_OPERATE_ON_REMOVED_FEED_ITEM = 34;</code>
     */
    const CANNOT_OPERATE_ON_REMOVED_FEED_ITEM = 34;
    /**
     * Phone number not supported when call tracking enabled for country.
     *
     * Generated from protobuf enum <code>PHONE_NUMBER_NOT_SUPPORTED_WITH_CALLTRACKING_FOR_COUNTRY = 35;</code>
     */
    const PHONE_NUMBER_NOT_SUPPORTED_WITH_CALLTRACKING_FOR_COUNTRY = 35;
    /**
     * Cannot set call_conversion_action while call_conversion_tracking_enabled
     * is set to true.
     *
     * Generated from protobuf enum <code>CONFLICTING_CALL_CONVERSION_SETTINGS = 36;</code>
     */
    const CONFLICTING_CALL_CONVERSION_SETTINGS = 36;
    /**
     * The type of the input extension feed item doesn't match the existing
     * extension feed item.
     *
     * Generated from protobuf enum <code>EXTENSION_TYPE_MISMATCH = 37;</code>
     */
    const EXTENSION_TYPE_MISMATCH = 37;
    /**
     * The oneof field extension for example, subtype of extension feed item is
     * required.
     *
     * Generated from protobuf enum <code>EXTENSION_SUBTYPE_REQUIRED = 38;</code>
     */
    const EXTENSION_SUBTYPE_REQUIRED = 38;
    /**
     * The referenced feed item is not mapped to a supported extension type.
     *
     * Generated from protobuf enum <code>EXTENSION_TYPE_UNSUPPORTED = 39;</code>
     */
    const EXTENSION_TYPE_UNSUPPORTED = 39;
    /**
     * Cannot operate on a Feed with more than one active FeedMapping.
     *
     * Generated from protobuf enum <code>CANNOT_OPERATE_ON_FEED_WITH_MULTIPLE_MAPPINGS = 40;</code>
     */
    const CANNOT_OPERATE_ON_FEED_WITH_MULTIPLE_MAPPINGS = 40;
    /**
     * Cannot operate on a Feed that has key attributes.
     *
     * Generated from protobuf enum <code>CANNOT_OPERATE_ON_FEED_WITH_KEY_ATTRIBUTES = 41;</code>
     */
    const CANNOT_OPERATE_ON_FEED_WITH_KEY_ATTRIBUTES = 41;
    /**
     * Input price is not in a valid format.
     *
     * Generated from protobuf enum <code>INVALID_PRICE_FORMAT = 42;</code>
     */
    const INVALID_PRICE_FORMAT = 42;
    /**
     * The promotion time is invalid.
     *
     * Generated from protobuf enum <code>PROMOTION_INVALID_TIME = 43;</code>
     */
    const PROMOTION_INVALID_TIME = 43;
    /**
     * This field has too many decimal places specified.
     *
     * Generated from protobuf enum <code>TOO_MANY_DECIMAL_PLACES_SPECIFIED = 44;</code>
     */
    const TOO_MANY_DECIMAL_PLACES_SPECIFIED = 44;
    /**
     * Concrete sub type of ExtensionFeedItem is required for this operation.
     *
     * Generated from protobuf enum <code>CONCRETE_EXTENSION_TYPE_REQUIRED = 45;</code>
     */
    const CONCRETE_EXTENSION_TYPE_REQUIRED = 45;
    /**
     * Feed item schedule end time must be after start time.
     *
     * Generated from protobuf enum <code>SCHEDULE_END_NOT_AFTER_START = 46;</code>
     */
    const SCHEDULE_END_NOT_AFTER_START = 46;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::VALUE_OUT_OF_RANGE => 'VALUE_OUT_OF_RANGE',
        self::URL_LIST_TOO_LONG => 'URL_LIST_TOO_LONG',
        self::CANNOT_HAVE_RESTRICTION_ON_EMPTY_GEO_TARGETING => 'CANNOT_HAVE_RESTRICTION_ON_EMPTY_GEO_TARGETING',
        self::CANNOT_SET_WITH_FINAL_URLS => 'CANNOT_SET_WITH_FINAL_URLS',
        self::CANNOT_SET_WITHOUT_FINAL_URLS => 'CANNOT_SET_WITHOUT_FINAL_URLS',
        self::INVALID_PHONE_NUMBER => 'INVALID_PHONE_NUMBER',
        self::PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY => 'PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY',
        self::CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED => 'CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED',
        self::PREMIUM_RATE_NUMBER_NOT_ALLOWED => 'PREMIUM_RATE_NUMBER_NOT_ALLOWED',
        self::DISALLOWED_NUMBER_TYPE => 'DISALLOWED_NUMBER_TYPE',
        self::INVALID_DOMESTIC_PHONE_NUMBER_FORMAT => 'INVALID_DOMESTIC_PHONE_NUMBER_FORMAT',
        self::VANITY_PHONE_NUMBER_NOT_ALLOWED => 'VANITY_PHONE_NUMBER_NOT_ALLOWED',
        self::INVALID_CALL_CONVERSION_ACTION => 'INVALID_CALL_CONVERSION_ACTION',
        self::CUSTOMER_NOT_ON_ALLOWLIST_FOR_CALLTRACKING => 'CUSTOMER_NOT_ON_ALLOWLIST_FOR_CALLTRACKING',
        self::CALLTRACKING_NOT_SUPPORTED_FOR_COUNTRY => 'CALLTRACKING_NOT_SUPPORTED_FOR_COUNTRY',
        self::CUSTOMER_CONSENT_FOR_CALL_RECORDING_REQUIRED => 'CUSTOMER_CONSENT_FOR_CALL_RECORDING_REQUIRED',
        self::INVALID_APP_ID => 'INVALID_APP_ID',
        self::QUOTES_IN_REVIEW_EXTENSION_SNIPPET => 'QUOTES_IN_REVIEW_EXTENSION_SNIPPET',
        self::HYPHENS_IN_REVIEW_EXTENSION_SNIPPET => 'HYPHENS_IN_REVIEW_EXTENSION_SNIPPET',
        self::REVIEW_EXTENSION_SOURCE_INELIGIBLE => 'REVIEW_EXTENSION_SOURCE_INELIGIBLE',
        self::SOURCE_NAME_IN_REVIEW_EXTENSION_TEXT => 'SOURCE_NAME_IN_REVIEW_EXTENSION_TEXT',
        self::INCONSISTENT_CURRENCY_CODES => 'INCONSISTENT_CURRENCY_CODES',
        self::PRICE_EXTENSION_HAS_DUPLICATED_HEADERS => 'PRICE_EXTENSION_HAS_DUPLICATED_HEADERS',
        self::PRICE_ITEM_HAS_DUPLICATED_HEADER_AND_DESCRIPTION => 'PRICE_ITEM_HAS_DUPLICATED_HEADER_AND_DESCRIPTION',
        self::PRICE_EXTENSION_HAS_TOO_FEW_ITEMS => 'PRICE_EXTENSION_HAS_TOO_FEW_ITEMS',
        self::PRICE_EXTENSION_HAS_TOO_MANY_ITEMS => 'PRICE_EXTENSION_HAS_TOO_MANY_ITEMS',
        self::UNSUPPORTED_VALUE => 'UNSUPPORTED_VALUE',
        self::UNSUPPORTED_VALUE_IN_SELECTED_LANGUAGE => 'UNSUPPORTED_VALUE_IN_SELECTED_LANGUAGE',
        self::INVALID_DEVICE_PREFERENCE => 'INVALID_DEVICE_PREFERENCE',
        self::INVALID_SCHEDULE_END => 'INVALID_SCHEDULE_END',
        self::DATE_TIME_MUST_BE_IN_ACCOUNT_TIME_ZONE => 'DATE_TIME_MUST_BE_IN_ACCOUNT_TIME_ZONE',
        self::INVALID_SNIPPETS_HEADER => 'INVALID_SNIPPETS_HEADER',
        self::CANNOT_OPERATE_ON_REMOVED_FEED_ITEM => 'CANNOT_OPERATE_ON_REMOVED_FEED_ITEM',
        self::PHONE_NUMBER_NOT_SUPPORTED_WITH_CALLTRACKING_FOR_COUNTRY => 'PHONE_NUMBER_NOT_SUPPORTED_WITH_CALLTRACKING_FOR_COUNTRY',
        self::CONFLICTING_CALL_CONVERSION_SETTINGS => 'CONFLICTING_CALL_CONVERSION_SETTINGS',
        self::EXTENSION_TYPE_MISMATCH => 'EXTENSION_TYPE_MISMATCH',
        self::EXTENSION_SUBTYPE_REQUIRED => 'EXTENSION_SUBTYPE_REQUIRED',
        self::EXTENSION_TYPE_UNSUPPORTED => 'EXTENSION_TYPE_UNSUPPORTED',
        self::CANNOT_OPERATE_ON_FEED_WITH_MULTIPLE_MAPPINGS => 'CANNOT_OPERATE_ON_FEED_WITH_MULTIPLE_MAPPINGS',
        self::CANNOT_OPERATE_ON_FEED_WITH_KEY_ATTRIBUTES => 'CANNOT_OPERATE_ON_FEED_WITH_KEY_ATTRIBUTES',
        self::INVALID_PRICE_FORMAT => 'INVALID_PRICE_FORMAT',
        self::PROMOTION_INVALID_TIME => 'PROMOTION_INVALID_TIME',
        self::TOO_MANY_DECIMAL_PLACES_SPECIFIED => 'TOO_MANY_DECIMAL_PLACES_SPECIFIED',
        self::CONCRETE_EXTENSION_TYPE_REQUIRED => 'CONCRETE_EXTENSION_TYPE_REQUIRED',
        self::SCHEDULE_END_NOT_AFTER_START => 'SCHEDULE_END_NOT_AFTER_START',
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
class_alias(ExtensionFeedItemError::class, \Google\Ads\GoogleAds\V15\Errors\ExtensionFeedItemErrorEnum_ExtensionFeedItemError::class);

