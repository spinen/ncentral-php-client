<?php

namespace Spinen\Nable\Ncentral\Type;

class OrganizationProperty
{

    /**
     * @var int
     */
    private $boundCustomerIds;

    /**
     * @var string
     */
    private $defaultValue;

    /**
     * @var string
     */
    private $dropdownValues;

    /**
     * @var string
     */
    private $label;

    /**
     * @var int
     */
    private $propertyId;

    /**
     * @var int
     */
    private $type;

    /**
     * @var string
     */
    private $value;

    /**
     * @return int
     */
    public function getBoundCustomerIds()
    {
        return $this->boundCustomerIds;
    }

    /**
     * @param int $boundCustomerIds
     * @return OrganizationProperty
     */
    public function withBoundCustomerIds($boundCustomerIds)
    {
        $new = clone $this;
        $new->boundCustomerIds = $boundCustomerIds;

        return $new;
    }

    /**
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * @param string $defaultValue
     * @return OrganizationProperty
     */
    public function withDefaultValue($defaultValue)
    {
        $new = clone $this;
        $new->defaultValue = $defaultValue;

        return $new;
    }

    /**
     * @return string
     */
    public function getDropdownValues()
    {
        return $this->dropdownValues;
    }

    /**
     * @param string $dropdownValues
     * @return OrganizationProperty
     */
    public function withDropdownValues($dropdownValues)
    {
        $new = clone $this;
        $new->dropdownValues = $dropdownValues;

        return $new;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return OrganizationProperty
     */
    public function withLabel($label)
    {
        $new = clone $this;
        $new->label = $label;

        return $new;
    }

    /**
     * @return int
     */
    public function getPropertyId()
    {
        return $this->propertyId;
    }

    /**
     * @param int $propertyId
     * @return OrganizationProperty
     */
    public function withPropertyId($propertyId)
    {
        $new = clone $this;
        $new->propertyId = $propertyId;

        return $new;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return OrganizationProperty
     */
    public function withType($type)
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return OrganizationProperty
     */
    public function withValue($value)
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }


}

