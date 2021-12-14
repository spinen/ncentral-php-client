<?php

namespace Spinen\Nable\Ncentral\Type;

use Phpro\SoapClient\Type\RequestInterface;

class OrganizationPropertyList implements RequestInterface
{

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var int
     */
    private $customerIds;

    /**
     * @var bool
     */
    private $reverseOrder;

    /**
     * Constructor
     *
     * @var string $username
     * @var string $password
     * @var int $customerIds
     * @var bool $reverseOrder
     */
    public function __construct($username, $password, $customerIds, $reverseOrder)
    {
        $this->username = $username;
        $this->password = $password;
        $this->customerIds = $customerIds;
        $this->reverseOrder = $reverseOrder;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return OrganizationPropertyList
     */
    public function withUsername($username)
    {
        $new = clone $this;
        $new->username = $username;

        return $new;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return OrganizationPropertyList
     */
    public function withPassword($password)
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    /**
     * @return int
     */
    public function getCustomerIds()
    {
        return $this->customerIds;
    }

    /**
     * @param int $customerIds
     * @return OrganizationPropertyList
     */
    public function withCustomerIds($customerIds)
    {
        $new = clone $this;
        $new->customerIds = $customerIds;

        return $new;
    }

    /**
     * @return bool
     */
    public function getReverseOrder()
    {
        return $this->reverseOrder;
    }

    /**
     * @param bool $reverseOrder
     * @return OrganizationPropertyList
     */
    public function withReverseOrder($reverseOrder)
    {
        $new = clone $this;
        $new->reverseOrder = $reverseOrder;

        return $new;
    }


}

