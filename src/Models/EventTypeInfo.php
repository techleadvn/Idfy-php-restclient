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
class EventTypeInfo implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @var string|null $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @var string|null $description public property
     */
    public $description;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $id          Initialization value for $this->id
     * @param string $name        Initialization value for $this->name
     * @param string $description Initialization value for $this->description
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->id          = func_get_arg(0);
            $this->name        = func_get_arg(1);
            $this->description = func_get_arg(2);
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
        $json['id']          = $this->id;
        $json['name']        = $this->name;
        $json['description'] = $this->description;

        return array_merge($json, $this->additionalProperties);
    }
}
