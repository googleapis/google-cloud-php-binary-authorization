<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/binaryauthorization/v1/service.proto

namespace Google\Cloud\BinaryAuthorization\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [ValidationHelperV1.ValidateAttestationOccurrence][google.cloud.binaryauthorization.v1.ValidationHelperV1.ValidateAttestationOccurrence].
 *
 * Generated from protobuf message <code>google.cloud.binaryauthorization.v1.ValidateAttestationOccurrenceRequest</code>
 */
class ValidateAttestationOccurrenceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the [Attestor][google.cloud.binaryauthorization.v1.Attestor] of the
     * [occurrence][grafeas.v1.Occurrence], in the format
     * `projects/&#42;&#47;attestors/&#42;`.
     *
     * Generated from protobuf field <code>string attestor = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $attestor = '';
    /**
     * Required. An [AttestationOccurrence][grafeas.v1.AttestationOccurrence] to
     * be checked that it can be verified by the Attestor. It does not have to be
     * an existing entity in Container Analysis. It must otherwise be a valid
     * AttestationOccurrence.
     *
     * Generated from protobuf field <code>.grafeas.v1.AttestationOccurrence attestation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $attestation = null;
    /**
     * Required. The resource name of the [Note][grafeas.v1.Note] to which the
     * containing [Occurrence][grafeas.v1.Occurrence] is associated.
     *
     * Generated from protobuf field <code>string occurrence_note = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $occurrence_note = '';
    /**
     * Required. The URI of the artifact (e.g. container image) that is the
     * subject of the containing [Occurrence][grafeas.v1.Occurrence].
     *
     * Generated from protobuf field <code>string occurrence_resource_uri = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $occurrence_resource_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $attestor
     *           Required. The resource name of the [Attestor][google.cloud.binaryauthorization.v1.Attestor] of the
     *           [occurrence][grafeas.v1.Occurrence], in the format
     *           `projects/&#42;&#47;attestors/&#42;`.
     *     @type \Grafeas\V1\AttestationOccurrence $attestation
     *           Required. An [AttestationOccurrence][grafeas.v1.AttestationOccurrence] to
     *           be checked that it can be verified by the Attestor. It does not have to be
     *           an existing entity in Container Analysis. It must otherwise be a valid
     *           AttestationOccurrence.
     *     @type string $occurrence_note
     *           Required. The resource name of the [Note][grafeas.v1.Note] to which the
     *           containing [Occurrence][grafeas.v1.Occurrence] is associated.
     *     @type string $occurrence_resource_uri
     *           Required. The URI of the artifact (e.g. container image) that is the
     *           subject of the containing [Occurrence][grafeas.v1.Occurrence].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Binaryauthorization\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the [Attestor][google.cloud.binaryauthorization.v1.Attestor] of the
     * [occurrence][grafeas.v1.Occurrence], in the format
     * `projects/&#42;&#47;attestors/&#42;`.
     *
     * Generated from protobuf field <code>string attestor = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAttestor()
    {
        return $this->attestor;
    }

    /**
     * Required. The resource name of the [Attestor][google.cloud.binaryauthorization.v1.Attestor] of the
     * [occurrence][grafeas.v1.Occurrence], in the format
     * `projects/&#42;&#47;attestors/&#42;`.
     *
     * Generated from protobuf field <code>string attestor = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAttestor($var)
    {
        GPBUtil::checkString($var, True);
        $this->attestor = $var;

        return $this;
    }

    /**
     * Required. An [AttestationOccurrence][grafeas.v1.AttestationOccurrence] to
     * be checked that it can be verified by the Attestor. It does not have to be
     * an existing entity in Container Analysis. It must otherwise be a valid
     * AttestationOccurrence.
     *
     * Generated from protobuf field <code>.grafeas.v1.AttestationOccurrence attestation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Grafeas\V1\AttestationOccurrence|null
     */
    public function getAttestation()
    {
        return $this->attestation;
    }

    public function hasAttestation()
    {
        return isset($this->attestation);
    }

    public function clearAttestation()
    {
        unset($this->attestation);
    }

    /**
     * Required. An [AttestationOccurrence][grafeas.v1.AttestationOccurrence] to
     * be checked that it can be verified by the Attestor. It does not have to be
     * an existing entity in Container Analysis. It must otherwise be a valid
     * AttestationOccurrence.
     *
     * Generated from protobuf field <code>.grafeas.v1.AttestationOccurrence attestation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Grafeas\V1\AttestationOccurrence $var
     * @return $this
     */
    public function setAttestation($var)
    {
        GPBUtil::checkMessage($var, \Grafeas\V1\AttestationOccurrence::class);
        $this->attestation = $var;

        return $this;
    }

    /**
     * Required. The resource name of the [Note][grafeas.v1.Note] to which the
     * containing [Occurrence][grafeas.v1.Occurrence] is associated.
     *
     * Generated from protobuf field <code>string occurrence_note = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getOccurrenceNote()
    {
        return $this->occurrence_note;
    }

    /**
     * Required. The resource name of the [Note][grafeas.v1.Note] to which the
     * containing [Occurrence][grafeas.v1.Occurrence] is associated.
     *
     * Generated from protobuf field <code>string occurrence_note = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setOccurrenceNote($var)
    {
        GPBUtil::checkString($var, True);
        $this->occurrence_note = $var;

        return $this;
    }

    /**
     * Required. The URI of the artifact (e.g. container image) that is the
     * subject of the containing [Occurrence][grafeas.v1.Occurrence].
     *
     * Generated from protobuf field <code>string occurrence_resource_uri = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getOccurrenceResourceUri()
    {
        return $this->occurrence_resource_uri;
    }

    /**
     * Required. The URI of the artifact (e.g. container image) that is the
     * subject of the containing [Occurrence][grafeas.v1.Occurrence].
     *
     * Generated from protobuf field <code>string occurrence_resource_uri = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setOccurrenceResourceUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->occurrence_resource_uri = $var;

        return $this;
    }

}

