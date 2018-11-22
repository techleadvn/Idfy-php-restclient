<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class MerchantError implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var integer|null $errorCode public property
     */
    public $errorCode;

    /**
     * @todo Write general description for this property
     * @var string|null $errorDescription public property
     */
    public $errorDescription;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $errorCode        Initialization value for $this->errorCode
     * @param string  $errorDescription Initialization value for $this->errorDescription
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->errorCode        = func_get_arg(0);
            $this->errorDescription = func_get_arg(1);
        }
    }

    
    /**
     * Add an additional property to this model.
     * @param string $name  Name of property
     * @param mixed  $value Value of property
     */
    public function addAdditionalProperty($name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['errorCode']        = $this->errorCode;
        $json['errorDescription'] = $this->errorDescription;

        return array_merge($json, $this->additionalProperties);
    }
}
