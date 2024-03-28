<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_garden_service.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class ModelGardenService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PublisherModel::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
5google/cloud/aiplatform/v1/model_garden_service.protogoogle.cloud.aiplatform.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto0google/cloud/aiplatform/v1/publisher_model.proto"�
GetPublisherModelRequest>
name (	B0�A�A*
(aiplatform.googleapis.com/PublisherModel
language_code (	B�AA
view (2..google.cloud.aiplatform.v1.PublisherModelViewB�A*�
PublisherModelView$
 PUBLISHER_MODEL_VIEW_UNSPECIFIED 
PUBLISHER_MODEL_VIEW_BASIC
PUBLISHER_MODEL_VIEW_FULL&
"PUBLISHER_MODEL_VERSION_VIEW_BASIC2�
ModelGardenService�
GetPublisherModel4.google.cloud.aiplatform.v1.GetPublisherModelRequest*.google.cloud.aiplatform.v1.PublisherModel"/�Aname���" /v1/{name=publishers/*/models/*}M�Aaiplatform.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.aiplatform.v1BModelGardenServiceProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

