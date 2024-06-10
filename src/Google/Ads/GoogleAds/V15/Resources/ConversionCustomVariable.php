<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/resources/conversion_custom_variable.proto

namespace Google\Ads\GoogleAds\V15\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A conversion custom variable
 * See "About custom variables for conversions" at
 * https://support.google.com/google-ads/answer/9964350
 *
 * Generated from protobuf message <code>google.ads.googleads.v15.resources.ConversionCustomVariable</code>
 */
class ConversionCustomVariable extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the conversion custom variable.
     * Conversion custom variable resource names have the form:
     * `customers/{customer_id}/conversionCustomVariables/{conversion_custom_variable_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The ID of the conversion custom variable.
     *
     * Generated from protobuf field <code>int64 id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = 0;
    /**
     * Required. The name of the conversion custom variable.
     * Name should be unique. The maximum length of name is 100 characters.
     * There should not be any extra spaces before and after.
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Required. Immutable. The tag of the conversion custom variable. It is used
     * in the event snippet and sent to Google Ads along with conversion pings.
     * For conversion uploads in Google Ads API, the resource name of the
     * conversion custom variable is used. Tag should be unique. The maximum size
     * of tag is 100 bytes. There should not be any extra spaces before and after.
     * Currently only lowercase letters, numbers and underscores are allowed in
     * the tag.
     *
     * Generated from protobuf field <code>string tag = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $tag = '';
    /**
     * The status of the conversion custom variable for conversion event accrual.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.ConversionCustomVariableStatusEnum.ConversionCustomVariableStatus status = 5;</code>
     */
    protected $status = 0;
    /**
     * Output only. The resource name of the customer that owns the conversion
     * custom variable.
     *
     * Generated from protobuf field <code>string owner_customer = 6 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $owner_customer = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the conversion custom variable.
     *           Conversion custom variable resource names have the form:
     *           `customers/{customer_id}/conversionCustomVariables/{conversion_custom_variable_id}`
     *     @type int|string $id
     *           Output only. The ID of the conversion custom variable.
     *     @type string $name
     *           Required. The name of the conversion custom variable.
     *           Name should be unique. The maximum length of name is 100 characters.
     *           There should not be any extra spaces before and after.
     *     @type string $tag
     *           Required. Immutable. The tag of the conversion custom variable. It is used
     *           in the event snippet and sent to Google Ads along with conversion pings.
     *           For conversion uploads in Google Ads API, the resource name of the
     *           conversion custom variable is used. Tag should be unique. The maximum size
     *           of tag is 100 bytes. There should not be any extra spaces before and after.
     *           Currently only lowercase letters, numbers and underscores are allowed in
     *           the tag.
     *     @type int $status
     *           The status of the conversion custom variable for conversion event accrual.
     *     @type string $owner_customer
     *           Output only. The resource name of the customer that owns the conversion
     *           custom variable.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V15\Resources\ConversionCustomVariable::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the conversion custom variable.
     * Conversion custom variable resource names have the form:
     * `customers/{customer_id}/conversionCustomVariables/{conversion_custom_variable_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the conversion custom variable.
     * Conversion custom variable resource names have the form:
     * `customers/{customer_id}/conversionCustomVariables/{conversion_custom_variable_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. The ID of the conversion custom variable.
     *
     * Generated from protobuf field <code>int64 id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Output only. The ID of the conversion custom variable.
     *
     * Generated from protobuf field <code>int64 id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Required. The name of the conversion custom variable.
     * Name should be unique. The maximum length of name is 100 characters.
     * There should not be any extra spaces before and after.
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the conversion custom variable.
     * Name should be unique. The maximum length of name is 100 characters.
     * There should not be any extra spaces before and after.
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. Immutable. The tag of the conversion custom variable. It is used
     * in the event snippet and sent to Google Ads along with conversion pings.
     * For conversion uploads in Google Ads API, the resource name of the
     * conversion custom variable is used. Tag should be unique. The maximum size
     * of tag is 100 bytes. There should not be any extra spaces before and after.
     * Currently only lowercase letters, numbers and underscores are allowed in
     * the tag.
     *
     * Generated from protobuf field <code>string tag = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Required. Immutable. The tag of the conversion custom variable. It is used
     * in the event snippet and sent to Google Ads along with conversion pings.
     * For conversion uploads in Google Ads API, the resource name of the
     * conversion custom variable is used. Tag should be unique. The maximum size
     * of tag is 100 bytes. There should not be any extra spaces before and after.
     * Currently only lowercase letters, numbers and underscores are allowed in
     * the tag.
     *
     * Generated from protobuf field <code>string tag = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setTag($var)
    {
        GPBUtil::checkString($var, True);
        $this->tag = $var;

        return $this;
    }

    /**
     * The status of the conversion custom variable for conversion event accrual.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.ConversionCustomVariableStatusEnum.ConversionCustomVariableStatus status = 5;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the conversion custom variable for conversion event accrual.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.ConversionCustomVariableStatusEnum.ConversionCustomVariableStatus status = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\ConversionCustomVariableStatusEnum\ConversionCustomVariableStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Output only. The resource name of the customer that owns the conversion
     * custom variable.
     *
     * Generated from protobuf field <code>string owner_customer = 6 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getOwnerCustomer()
    {
        return $this->owner_customer;
    }

    /**
     * Output only. The resource name of the customer that owns the conversion
     * custom variable.
     *
     * Generated from protobuf field <code>string owner_customer = 6 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setOwnerCustomer($var)
    {
        GPBUtil::checkString($var, True);
        $this->owner_customer = $var;

        return $this;
    }

}

