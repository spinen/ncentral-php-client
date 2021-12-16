<?php

namespace Spinen\Nable\Ncentral\Type;


use Phpro\SoapClient\Type\RequestInterface;

class AccessGroupAdd implements RequestInterface
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
     * @var \Spinen\Nable\Ncentral\Type\EiKeyValue
     */
    private $settings;

    /**
     * Constructor
     *
     * @var string $username
     * @var string $password
     * @var \Spinen\Nable\Ncentral\Type\EiKeyValue $settings
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
     * @return AccessGroupAdd
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
     * @return AccessGroupAdd
     */
    public function withPassword($password)
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    /**
     * @return \Spinen\Nable\Ncentral\Type\EiKeyValue
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * @param \Spinen\Nable\Ncentral\Type\EiKeyValue $settings
     * @return AccessGroupAdd
     */
    public function withSettings($settings)
    {
        $new = clone $this;
        $new->settings = $settings;

        return $new;
    }


}

