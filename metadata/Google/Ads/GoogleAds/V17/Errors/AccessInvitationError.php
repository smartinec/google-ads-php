<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/errors/access_invitation_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Errors;

class AccessInvitationError
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
=google/ads/googleads/v17/errors/access_invitation_error.protogoogle.ads.googleads.v17.errors"�
AccessInvitationErrorEnum"�
AccessInvitationError
UNSPECIFIED 
UNKNOWN
INVALID_EMAIL_ADDRESS$
 EMAIL_ADDRESS_ALREADY_HAS_ACCESS
INVALID_INVITATION_STATUS\'
#GOOGLE_CONSUMER_ACCOUNT_NOT_ALLOWED
INVALID_INVITATION_ID0
,EMAIL_ADDRESS_ALREADY_HAS_PENDING_INVITATION&
"PENDING_INVITATIONS_LIMIT_EXCEEDED 
EMAIL_DOMAIN_POLICY_VIOLATED	B�
#com.google.ads.googleads.v17.errorsBAccessInvitationErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/errors;errors�GAA�Google.Ads.GoogleAds.V17.Errors�Google\\Ads\\GoogleAds\\V17\\Errors�#Google::Ads::GoogleAds::V17::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

