<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/beyondcorp/appconnections/v1/app_connections_service.proto

namespace Google\Cloud\BeyondCorp\AppConnections\V1\AppConnection;

use UnexpectedValueException;

/**
 * Represents the different states of a AppConnection.
 *
 * Protobuf type <code>google.cloud.beyondcorp.appconnections.v1.AppConnection.State</code>
 */
class State
{
    /**
     * Default value. This value is unused.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * AppConnection is being created.
     *
     * Generated from protobuf enum <code>CREATING = 1;</code>
     */
    const CREATING = 1;
    /**
     * AppConnection has been created.
     *
     * Generated from protobuf enum <code>CREATED = 2;</code>
     */
    const CREATED = 2;
    /**
     * AppConnection's configuration is being updated.
     *
     * Generated from protobuf enum <code>UPDATING = 3;</code>
     */
    const UPDATING = 3;
    /**
     * AppConnection is being deleted.
     *
     * Generated from protobuf enum <code>DELETING = 4;</code>
     */
    const DELETING = 4;
    /**
     * AppConnection is down and may be restored in the future.
     * This happens when CCFE sends ProjectState = OFF.
     *
     * Generated from protobuf enum <code>DOWN = 5;</code>
     */
    const DOWN = 5;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::CREATING => 'CREATING',
        self::CREATED => 'CREATED',
        self::UPDATING => 'UPDATING',
        self::DELETING => 'DELETING',
        self::DOWN => 'DOWN',
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


