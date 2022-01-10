<?php

namespace Spinen\Ncentral\Type;

class OrganizationProperties
{

    /**
     * @var int
     */
    private $customerId;

    /**
     * @var \Spinen\Ncentral\Type\OrganizationProperty
     */
    private $properties;

    /**
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param int $customerId
     * @return OrganizationProperties
     */
    public function withCustomerId($customerId)
    {
        $new = clone $this;
        $new->customerId = $customerId;

        return $new;
    }

    /**
     * @return \Spinen\Ncentral\Type\OrganizationProperty
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * @param \Spinen\Ncentral\Type\OrganizationProperty $properties
     * @return OrganizationProperties
     */
    public function withProperties($properties)
    {
        $new = clone $this;
        $new->properties = $properties;

        return $new;
    }


}

