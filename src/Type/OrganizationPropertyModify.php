<?php

namespace Spinen\Nable\Ncentral\Type;

use Phpro\SoapClient\Type\RequestInterface;

class OrganizationPropertyModify implements RequestInterface
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
     * @var \Spinen\Nable\Ncentral\Type\OrganizationProperties
     */
    private $organizationProperties;

    /**
     * Constructor
     *
     * @var string $username
     * @var string $password
     * @var \Spinen\Nable\Ncentral\Type\OrganizationProperties $organizationProperties
     */
    public function __construct($username, $password, $organizationProperties)
    {
        $this->username = $username;
        $this->password = $password;
        $this->organizationProperties = $organizationProperties;
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
     * @return OrganizationPropertyModify
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
     * @return OrganizationPropertyModify
     */
    public function withPassword($password)
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    /**
     * @return \Spinen\Nable\Ncentral\Type\OrganizationProperties
     */
    public function getOrganizationProperties()
    {
        return $this->organizationProperties;
    }

    /**
     * @param \Spinen\Nable\Ncentral\Type\OrganizationProperties $organizationProperties
     * @return OrganizationPropertyModify
     */
    public function withOrganizationProperties($organizationProperties)
    {
        $new = clone $this;
        $new->organizationProperties = $organizationProperties;

        return $new;
    }


}

