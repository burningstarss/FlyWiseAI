<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/network.proto

namespace Google\Cloud\BareMetalSolution\V2\VRF;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * VLAN attachment details.
 *
 * Generated from protobuf message <code>google.cloud.baremetalsolution.v2.VRF.VlanAttachment</code>
 */
class VlanAttachment extends \Google\Protobuf\Internal\Message
{
    /**
     * The peer vlan ID of the attachment.
     *
     * Generated from protobuf field <code>int64 peer_vlan_id = 1;</code>
     */
    private $peer_vlan_id = 0;
    /**
     * The peer IP of the attachment.
     *
     * Generated from protobuf field <code>string peer_ip = 2;</code>
     */
    private $peer_ip = '';
    /**
     * The router IP of the attachment.
     *
     * Generated from protobuf field <code>string router_ip = 3;</code>
     */
    private $router_ip = '';
    /**
     * Input only. Pairing key.
     *
     * Generated from protobuf field <code>string pairing_key = 4 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     */
    private $pairing_key = '';
    /**
     * The QOS policy applied to this VLAN attachment.
     * This value should be preferred to using qos at vrf level.
     *
     * Generated from protobuf field <code>.google.cloud.baremetalsolution.v2.VRF.QosPolicy qos_policy = 5;</code>
     */
    private $qos_policy = null;
    /**
     * Immutable. The identifier of the attachment within vrf.
     *
     * Generated from protobuf field <code>string id = 6 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $id = '';
    /**
     * Optional. The name of the vlan attachment within vrf. This is of the form
     * projects/{project_number}/regions/{region}/interconnectAttachments/{interconnect_attachment}
     *
     * Generated from protobuf field <code>string interconnect_attachment = 7 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    private $interconnect_attachment = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $peer_vlan_id
     *           The peer vlan ID of the attachment.
     *     @type string $peer_ip
     *           The peer IP of the attachment.
     *     @type string $router_ip
     *           The router IP of the attachment.
     *     @type string $pairing_key
     *           Input only. Pairing key.
     *     @type \Google\Cloud\BareMetalSolution\V2\VRF\QosPolicy $qos_policy
     *           The QOS policy applied to this VLAN attachment.
     *           This value should be preferred to using qos at vrf level.
     *     @type string $id
     *           Immutable. The identifier of the attachment within vrf.
     *     @type string $interconnect_attachment
     *           Optional. The name of the vlan attachment within vrf. This is of the form
     *           projects/{project_number}/regions/{region}/interconnectAttachments/{interconnect_attachment}
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Baremetalsolution\V2\Network::initOnce();
        parent::__construct($data);
    }

    /**
     * The peer vlan ID of the attachment.
     *
     * Generated from protobuf field <code>int64 peer_vlan_id = 1;</code>
     * @return int|string
     */
    public function getPeerVlanId()
    {
        return $this->peer_vlan_id;
    }

    /**
     * The peer vlan ID of the attachment.
     *
     * Generated from protobuf field <code>int64 peer_vlan_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPeerVlanId($var)
    {
        GPBUtil::checkInt64($var);
        $this->peer_vlan_id = $var;

        return $this;
    }

    /**
     * The peer IP of the attachment.
     *
     * Generated from protobuf field <code>string peer_ip = 2;</code>
     * @return string
     */
    public function getPeerIp()
    {
        return $this->peer_ip;
    }

    /**
     * The peer IP of the attachment.
     *
     * Generated from protobuf field <code>string peer_ip = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPeerIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->peer_ip = $var;

        return $this;
    }

    /**
     * The router IP of the attachment.
     *
     * Generated from protobuf field <code>string router_ip = 3;</code>
     * @return string
     */
    public function getRouterIp()
    {
        return $this->router_ip;
    }

    /**
     * The router IP of the attachment.
     *
     * Generated from protobuf field <code>string router_ip = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRouterIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->router_ip = $var;

        return $this;
    }

    /**
     * Input only. Pairing key.
     *
     * Generated from protobuf field <code>string pairing_key = 4 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return string
     */
    public function getPairingKey()
    {
        return $this->pairing_key;
    }

    /**
     * Input only. Pairing key.
     *
     * Generated from protobuf field <code>string pairing_key = 4 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setPairingKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->pairing_key = $var;

        return $this;
    }

    /**
     * The QOS policy applied to this VLAN attachment.
     * This value should be preferred to using qos at vrf level.
     *
     * Generated from protobuf field <code>.google.cloud.baremetalsolution.v2.VRF.QosPolicy qos_policy = 5;</code>
     * @return \Google\Cloud\BareMetalSolution\V2\VRF\QosPolicy|null
     */
    public function getQosPolicy()
    {
        return $this->qos_policy;
    }

    public function hasQosPolicy()
    {
        return isset($this->qos_policy);
    }

    public function clearQosPolicy()
    {
        unset($this->qos_policy);
    }

    /**
     * The QOS policy applied to this VLAN attachment.
     * This value should be preferred to using qos at vrf level.
     *
     * Generated from protobuf field <code>.google.cloud.baremetalsolution.v2.VRF.QosPolicy qos_policy = 5;</code>
     * @param \Google\Cloud\BareMetalSolution\V2\VRF\QosPolicy $var
     * @return $this
     */
    public function setQosPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BareMetalSolution\V2\VRF\QosPolicy::class);
        $this->qos_policy = $var;

        return $this;
    }

    /**
     * Immutable. The identifier of the attachment within vrf.
     *
     * Generated from protobuf field <code>string id = 6 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Immutable. The identifier of the attachment within vrf.
     *
     * Generated from protobuf field <code>string id = 6 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Optional. The name of the vlan attachment within vrf. This is of the form
     * projects/{project_number}/regions/{region}/interconnectAttachments/{interconnect_attachment}
     *
     * Generated from protobuf field <code>string interconnect_attachment = 7 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getInterconnectAttachment()
    {
        return $this->interconnect_attachment;
    }

    /**
     * Optional. The name of the vlan attachment within vrf. This is of the form
     * projects/{project_number}/regions/{region}/interconnectAttachments/{interconnect_attachment}
     *
     * Generated from protobuf field <code>string interconnect_attachment = 7 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setInterconnectAttachment($var)
    {
        GPBUtil::checkString($var, True);
        $this->interconnect_attachment = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VlanAttachment::class, \Google\Cloud\BareMetalSolution\V2\VRF_VlanAttachment::class);

