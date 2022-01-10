<?php

namespace Spinen\Ncentral\Type;


use Phpro\SoapClient\Type\RequestInterface;

class CustomerAdd implements RequestInterface
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
     * @var \Spinen\Ncentral\Type\EiKeyValue
     */
    private $settings;

    /**
     * Constructor
     *
     * @var string $username
     * @var string $password
     * @var \Spinen\Ncentral\Type\EiKeyValue $settings
     */
    public function __construct($username, $password, $settings)
    {
        $this->username = $username;
        $this->password = $password;
        $this->settings = $settings;
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
     * @return CustomerAdd
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
     * @return CustomerAdd
     */
    public function withPassword($password)
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    /**
     * @return \Spinen\Ncentral\Type\EiKeyValue
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * @param \Spinen\Ncentral\Type\EiKeyValue $settings
     * @return CustomerAdd
     */
    public function withSettings($settings)
    {
        $new = clone $this;
        $new->settings = $settings;

        return $new;
    }


}

