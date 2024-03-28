<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_deployment_monitoring_job.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class ModelDeploymentMonitoringJob
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\EncryptionSpec::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeatureMonitoringStats::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Io::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\JobState::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ModelMonitoring::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�!
@google/cloud/aiplatform/v1/model_deployment_monitoring_job.protogoogle.cloud.aiplatform.v1google/api/resource.proto0google/cloud/aiplatform/v1/encryption_spec.proto9google/cloud/aiplatform/v1/feature_monitoring_stats.proto#google/cloud/aiplatform/v1/io.proto*google/cloud/aiplatform/v1/job_state.proto1google/cloud/aiplatform/v1/model_monitoring.protogoogle/protobuf/duration.protogoogle/protobuf/struct.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto"�
ModelDeploymentMonitoringJob
name (	B�A
display_name (	B�A<
endpoint (	B*�A�A$
"aiplatform.googleapis.com/Endpoint8
state (2$.google.cloud.aiplatform.v1.JobStateB�Am
schedule_state (2P.google.cloud.aiplatform.v1.ModelDeploymentMonitoringJob.MonitoringScheduleStateB�A�
#latest_monitoring_pipeline_metadata (2Y.google.cloud.aiplatform.v1.ModelDeploymentMonitoringJob.LatestMonitoringPipelineMetadataB�A�
-model_deployment_monitoring_objective_configs (2D.google.cloud.aiplatform.v1.ModelDeploymentMonitoringObjectiveConfigB�A}
+model_deployment_monitoring_schedule_config (2C.google.cloud.aiplatform.v1.ModelDeploymentMonitoringScheduleConfigB�AT
logging_sampling_strategy (2,.google.cloud.aiplatform.v1.SamplingStrategyB�A]
model_monitoring_alert_config (26.google.cloud.aiplatform.v1.ModelMonitoringAlertConfig#
predict_instance_schema_uri	 (	7
sample_predict_instance (2.google.protobuf.Value$
analysis_instance_schema_uri (	`
bigquery_tables
 (2B.google.cloud.aiplatform.v1.ModelDeploymentMonitoringBigQueryTableB�A*
log_ttl (2.google.protobuf.DurationT
labels (2D.google.cloud.aiplatform.v1.ModelDeploymentMonitoringJob.LabelsEntry4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A;
next_schedule_time (2.google.protobuf.TimestampB�AR
stats_anomalies_base_directory (2*.google.cloud.aiplatform.v1.GcsDestinationC
encryption_spec (2*.google.cloud.aiplatform.v1.EncryptionSpec\'
enable_monitoring_pipeline_logs (&
error (2.google.rpc.StatusB�At
 LatestMonitoringPipelineMetadata,
run_time (2.google.protobuf.Timestamp"
status (2.google.rpc.Status-
LabelsEntry
key (	
value (	:8"k
MonitoringScheduleState)
%MONITORING_SCHEDULE_STATE_UNSPECIFIED 
PENDING
OFFLINE
RUNNING:��A�
6aiplatform.googleapis.com/ModelDeploymentMonitoringJobgprojects/{project}/locations/{location}/modelDeploymentMonitoringJobs/{model_deployment_monitoring_job}"�
&ModelDeploymentMonitoringBigQueryTable`

log_source (2L.google.cloud.aiplatform.v1.ModelDeploymentMonitoringBigQueryTable.LogSource\\
log_type (2J.google.cloud.aiplatform.v1.ModelDeploymentMonitoringBigQueryTable.LogType
bigquery_table_path (	4
\'request_response_logging_schema_version (	B�A"B
	LogSource
LOG_SOURCE_UNSPECIFIED 
TRAINING
SERVING"=
LogType
LOG_TYPE_UNSPECIFIED 
PREDICT
EXPLAIN"�
(ModelDeploymentMonitoringObjectiveConfig
deployed_model_id (	T
objective_config (2:.google.cloud.aiplatform.v1.ModelMonitoringObjectiveConfig"�
\'ModelDeploymentMonitoringScheduleConfig8
monitor_interval (2.google.protobuf.DurationB�A1
monitor_window (2.google.protobuf.Duration"�
ModelMonitoringStatsAnomaliesU
	objective (2B.google.cloud.aiplatform.v1.ModelDeploymentMonitoringObjectiveType
deployed_model_id (	
anomaly_count (n
feature_stats (2W.google.cloud.aiplatform.v1.ModelMonitoringStatsAnomalies.FeatureHistoricStatsAnomalies�
FeatureHistoricStatsAnomalies
feature_display_name (	>
	threshold (2+.google.cloud.aiplatform.v1.ThresholdConfigG
training_stats (2/.google.cloud.aiplatform.v1.FeatureStatsAnomalyI
prediction_stats (2/.google.cloud.aiplatform.v1.FeatureStatsAnomaly*�
&ModelDeploymentMonitoringObjectiveType:
6MODEL_DEPLOYMENT_MONITORING_OBJECTIVE_TYPE_UNSPECIFIED 
RAW_FEATURE_SKEW
RAW_FEATURE_DRIFT
FEATURE_ATTRIBUTION_SKEW
FEATURE_ATTRIBUTION_DRIFTB�
com.google.cloud.aiplatform.v1B!ModelDeploymentMonitoringJobProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

