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
class OkonomiSammendragForetak implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var integer|null $regnskapsAvArField public property
     */
    public $regnskapsAvArField;

    /**
     * @todo Write general description for this property
     * @var integer|null $regnskapsAvMndField public property
     */
    public $regnskapsAvMndField;

    /**
     * @todo Write general description for this property
     * @var integer|null $totalinntektField public property
     */
    public $totalinntektField;

    /**
     * @todo Write general description for this property
     * @var integer|null $resultatForSkattField public property
     */
    public $resultatForSkattField;

    /**
     * @todo Write general description for this property
     * @var integer|null $arsResultatField public property
     */
    public $arsResultatField;

    /**
     * @todo Write general description for this property
     * @var integer|null $sumEiendelerField public property
     */
    public $sumEiendelerField;

    /**
     * @todo Write general description for this property
     * @var double|null $overskuddsprosentField public property
     */
    public $overskuddsprosentField;

    /**
     * @todo Write general description for this property
     * @var double|null $totalrentabilitetField public property
     */
    public $totalrentabilitetField;

    /**
     * @todo Write general description for this property
     * @var double|null $egenkapitalandelField public property
     */
    public $egenkapitalandelField;

    /**
     * @todo Write general description for this property
     * @var double|null $likviditetsgrad1Field public property
     */
    public $likviditetsgrad1Field;

    /**
     * @todo Write general description for this property
     * @var double|null $likviditetsgrad2Field public property
     */
    public $likviditetsgrad2Field;

    /**
     * @todo Write general description for this property
     * @var double|null $overskuddsprosentBransjeField public property
     */
    public $overskuddsprosentBransjeField;

    /**
     * @todo Write general description for this property
     * @var double|null $totalrentabilitetBransjeField public property
     */
    public $totalrentabilitetBransjeField;

    /**
     * @todo Write general description for this property
     * @var double|null $egenkapitalandelBransjeField public property
     */
    public $egenkapitalandelBransjeField;

    /**
     * @todo Write general description for this property
     * @var double|null $likviditetsgrad1BransjeField public property
     */
    public $likviditetsgrad1BransjeField;

    /**
     * @todo Write general description for this property
     * @var double|null $likviditetsgrad2BransjeField public property
     */
    public $likviditetsgrad2BransjeField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $regnskapsAvArField            Initialization value for $this->regnskapsAvArField
     * @param integer $regnskapsAvMndField           Initialization value for $this->regnskapsAvMndField
     * @param integer $totalinntektField             Initialization value for $this->totalinntektField
     * @param integer $resultatForSkattField         Initialization value for $this->resultatForSkattField
     * @param integer $arsResultatField              Initialization value for $this->arsResultatField
     * @param integer $sumEiendelerField             Initialization value for $this->sumEiendelerField
     * @param double  $overskuddsprosentField        Initialization value for $this->overskuddsprosentField
     * @param double  $totalrentabilitetField        Initialization value for $this->totalrentabilitetField
     * @param double  $egenkapitalandelField         Initialization value for $this->egenkapitalandelField
     * @param double  $likviditetsgrad1Field         Initialization value for $this->likviditetsgrad1Field
     * @param double  $likviditetsgrad2Field         Initialization value for $this->likviditetsgrad2Field
     * @param double  $overskuddsprosentBransjeField Initialization value for $this->overskuddsprosentBransjeField
     * @param double  $totalrentabilitetBransjeField Initialization value for $this->totalrentabilitetBransjeField
     * @param double  $egenkapitalandelBransjeField  Initialization value for $this->egenkapitalandelBransjeField
     * @param double  $likviditetsgrad1BransjeField  Initialization value for $this->likviditetsgrad1BransjeField
     * @param double  $likviditetsgrad2BransjeField  Initialization value for $this->likviditetsgrad2BransjeField
     */
    public function __construct()
    {
        if (16 == func_num_args()) {
            $this->regnskapsAvArField            = func_get_arg(0);
            $this->regnskapsAvMndField           = func_get_arg(1);
            $this->totalinntektField             = func_get_arg(2);
            $this->resultatForSkattField         = func_get_arg(3);
            $this->arsResultatField              = func_get_arg(4);
            $this->sumEiendelerField             = func_get_arg(5);
            $this->overskuddsprosentField        = func_get_arg(6);
            $this->totalrentabilitetField        = func_get_arg(7);
            $this->egenkapitalandelField         = func_get_arg(8);
            $this->likviditetsgrad1Field         = func_get_arg(9);
            $this->likviditetsgrad2Field         = func_get_arg(10);
            $this->overskuddsprosentBransjeField = func_get_arg(11);
            $this->totalrentabilitetBransjeField = func_get_arg(12);
            $this->egenkapitalandelBransjeField  = func_get_arg(13);
            $this->likviditetsgrad1BransjeField  = func_get_arg(14);
            $this->likviditetsgrad2BransjeField  = func_get_arg(15);
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
        $json['regnskapsAvArField']            = $this->regnskapsAvArField;
        $json['regnskapsAvMndField']           = $this->regnskapsAvMndField;
        $json['totalinntektField']             = $this->totalinntektField;
        $json['resultatForSkattField']         = $this->resultatForSkattField;
        $json['arsResultatField']              = $this->arsResultatField;
        $json['sumEiendelerField']             = $this->sumEiendelerField;
        $json['overskuddsprosentField']        = $this->overskuddsprosentField;
        $json['totalrentabilitetField']        = $this->totalrentabilitetField;
        $json['egenkapitalandelField']         = $this->egenkapitalandelField;
        $json['likviditetsgrad1Field']         = $this->likviditetsgrad1Field;
        $json['likviditetsgrad2Field']         = $this->likviditetsgrad2Field;
        $json['overskuddsprosentBransjeField'] = $this->overskuddsprosentBransjeField;
        $json['totalrentabilitetBransjeField'] = $this->totalrentabilitetBransjeField;
        $json['egenkapitalandelBransjeField']  = $this->egenkapitalandelBransjeField;
        $json['likviditetsgrad1BransjeField']  = $this->likviditetsgrad1BransjeField;
        $json['likviditetsgrad2BransjeField']  = $this->likviditetsgrad2BransjeField;

        return array_merge($json, $this->additionalProperties);
    }
}
