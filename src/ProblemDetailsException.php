<?php

namespace ProblemDetails;

use JsonSerializable;

/**
 * Define an exception type for generating Problem Details.
 */
interface ProblemDetailsException extends JsonSerializable
{
    public function getStatus() : int;

    public function getType() : string;

    public function getTitle() : string;

    public function getDetail() : string;

    public function getAdditionalData() : array;

    /**
     * Serialize the exception to an array of problem details.
     *
     * Likely useful for the JsonSerializable implementation, but also
     * for cases where the XML variant is desired.
     */
    public function toArray() : array;
}
