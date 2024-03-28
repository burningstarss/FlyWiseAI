<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/volume_snapshot.proto

namespace Google\Cloud\BareMetalSolution\V2\VolumeSnapshot;

use UnexpectedValueException;

/**
 * Represents the type of a snapshot.
 *
 * Protobuf type <code>google.cloud.baremetalsolution.v2.VolumeSnapshot.SnapshotType</code>
 */
class SnapshotType
{
    /**
     * Type is not specified.
     *
     * Generated from protobuf enum <code>SNAPSHOT_TYPE_UNSPECIFIED = 0;</code>
     */
    const SNAPSHOT_TYPE_UNSPECIFIED = 0;
    /**
     * Snapshot was taken manually by user.
     *
     * Generated from protobuf enum <code>AD_HOC = 1;</code>
     */
    const AD_HOC = 1;
    /**
     * Snapshot was taken automatically as a part of a snapshot schedule.
     *
     * Generated from protobuf enum <code>SCHEDULED = 2;</code>
     */
    const SCHEDULED = 2;

    private static $valueToName = [
        self::SNAPSHOT_TYPE_UNSPECIFIED => 'SNAPSHOT_TYPE_UNSPECIFIED',
        self::AD_HOC => 'AD_HOC',
        self::SCHEDULED => 'SCHEDULED',
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
class_alias(SnapshotType::class, \Google\Cloud\BareMetalSolution\V2\VolumeSnapshot_SnapshotType::class);

