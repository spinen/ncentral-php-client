<?php

namespace Spinen\Nable\Ncentral\Type;


use Phpro\SoapClient\Type\RequestInterface;

class DevicePropertyModify implements RequestInterface
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
     * @var \Spinen\Nable\Ncentral\Type\DeviceProperties
     */
    private $deviceProperties;

    /**
     * Constructor
     *
     * @var string $username
     * @var string $password
     * @var \Spinen\Nable\Ncentral\Type\DeviceProperties $deviceProperties
     */
    public function __construct($username, $password, $deviceProperties)
    {
        $this->username = $username;
        $this->password = $password;
        $this->deviceProperties = $deviceProperties;
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
     * @return DevicePropertyModify
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
     * @return DevicePropertyModify
     */
    public function withPassword($password)
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    /**
     * @return \Spinen\Nable\Ncentral\Type\DeviceProperties
     */
    public function getDeviceProperties()
    {
        return $this->deviceProperties;
    }

    /**
     * @param \Spinen\Nable\Ncentral\Type\DeviceProperties $deviceProperties
     * @return DevicePropertyModify
     */
    public function withDeviceProperties($deviceProperties)
    {
        $new = clone $this;
        $new->deviceProperties = $deviceProperties;

        return $new;
    }


}

