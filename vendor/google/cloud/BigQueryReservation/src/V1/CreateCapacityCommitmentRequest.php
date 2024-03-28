<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/reservation/v1/reservation.proto

namespace Google\Cloud\BigQuery\Reservation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for
 * [ReservationService.CreateCapacityCommitment][google.cloud.bigquery.reservation.v1.ReservationService.CreateCapacityCommitment].
 *
 * Generated from protobuf message <code>google.cloud.bigquery.reservation.v1.CreateCapacityCommitmentRequest</code>
 */
class CreateCapacityCommitmentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the parent reservation. E.g.,
     *    `projects/myproject/locations/US`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Content of the capacity commitment to create.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.CapacityCommitment capacity_commitment = 2;</code>
     */
    private $capacity_commitment = null;
    /**
     * If true, fail the request if another project in the organization has a
     * capacity commitment.
     *
     * Generated from protobuf field <code>bool enforce_single_admin_project_per_org = 4;</code>
     */
    private $enforce_single_admin_project_per_org = false;
    /**
     * The optional capacity commitment ID. Capacity commitment name will be
     * generated automatically if this field is empty.
     * This field must only contain lower case alphanumeric characters or dashes.
     * The first and last character cannot be a dash. Max length is 64 characters.
     * NOTE: this ID won't be kept if the capacity commitment is split or merged.
     *
     * Generated from protobuf field <code>string capacity_commitment_id = 5;</code>
     */
    private $capacity_commitment_id = '';

    /**
     * @param string                                                   $parent             Required. Resource name of the parent reservation. E.g.,
     *                                                                                     `projects/myproject/locations/US`
     *                                                                                     Please see {@see ReservationServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\BigQuery\Reservation\V1\CapacityCommitment $capacityCommitment Content of the capacity commitment to create.
     *
     * @return \Google\Cloud\BigQuery\Reservation\V1\CreateCapacityCommitmentRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\BigQuery\Reservation\V1\CapacityCommitment $capacityCommitment): self
    {
        return (new self())
            ->setParent($parent)
            ->setCapacityCommitment($capacityCommitment);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Resource name of the parent reservation. E.g.,
     *              `projects/myproject/locations/US`
     *     @type \Google\Cloud\BigQuery\Reservation\V1\CapacityCommitment $capacity_commitment
     *           Content of the capacity commitment to create.
     *     @type bool $enforce_single_admin_project_per_org
     *           If true, fail the request if another project in the organization has a
     *           capacity commitment.
     *     @type string $capacity_commitment_id
     *           The optional capacity commitment ID. Capacity commitment name will be
     *           generated automatically if this field is empty.
     *           This field must only contain lower case alphanumeric characters or dashes.
     *           The first and last character cannot be a dash. Max length is 64 characters.
     *           NOTE: this ID won't be kept if the capacity commitment is split or merged.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Reservation\V1\Reservation::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the parent reservation. E.g.,
     *    `projects/myproject/locations/US`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Resource name of the parent reservation. E.g.,
     *    `projects/myproject/locations/US`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Content of the capacity commitment to create.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.CapacityCommitment capacity_commitment = 2;</code>
     * @return \Google\Cloud\BigQuery\Reservation\V1\CapacityCommitment|null
     */
    public function getCapacityCommitment()
    {
        return $this->capacity_commitment;
    }

    public function hasCapacityCommitment()
    {
        return isset($this->capacity_commitment);
    }

    public function clearCapacityCommitment()
    {
        unset($this->capacity_commitment);
    }

    /**
     * Content of the capacity commitment to create.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.CapacityCommitment capacity_commitment = 2;</code>
     * @param \Google\Cloud\BigQuery\Reservation\V1\CapacityCommitment $var
     * @return $this
     */
    public function setCapacityCommitment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Reservation\V1\CapacityCommitment::class);
        $this->capacity_commitment = $var;

        return $this;
    }

    /**
     * If true, fail the request if another project in the organization has a
     * capacity commitment.
     *
     * Generated from protobuf field <code>bool enforce_single_admin_project_per_org = 4;</code>
     * @return bool
     */
    public function getEnforceSingleAdminProjectPerOrg()
    {
        return $this->enforce_single_admin_project_per_org;
    }

    /**
     * If true, fail the request if another project in the organization has a
     * capacity commitment.
     *
     * Generated from protobuf field <code>bool enforce_single_admin_project_per_org = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnforceSingleAdminProjectPerOrg($var)
    {
        GPBUtil::checkBool($var);
        $this->enforce_single_admin_project_per_org = $var;

        return $this;
    }

    /**
     * The optional capacity commitment ID. Capacity commitment name will be
     * generated automatically if this field is empty.
     * This field must only contain lower case alphanumeric characters or dashes.
     * The first and last character cannot be a dash. Max length is 64 characters.
     * NOTE: this ID won't be kept if the capacity commitment is split or merged.
     *
     * Generated from protobuf field <code>string capacity_commitment_id = 5;</code>
     * @return string
     */
    public function getCapacityCommitmentId()
    {
        return $this->capacity_commitment_id;
    }

    /**
     * The optional capacity commitment ID. Capacity commitment name will be
     * generated automatically if this field is empty.
     * This field must only contain lower case alphanumeric characters or dashes.
     * The first and last character cannot be a dash. Max length is 64 characters.
     * NOTE: this ID won't be kept if the capacity commitment is split or merged.
     *
     * Generated from protobuf field <code>string capacity_commitment_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCapacityCommitmentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->capacity_commitment_id = $var;

        return $this;
    }

}

