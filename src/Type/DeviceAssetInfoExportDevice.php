<?php

namespace Spinen\Nable\Ncentral\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeviceAssetInfoExportDevice implements RequestInterface
{

    /**
     * @var string
     */
    private $version;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * Constructor
     *
     * @var string $version
     * @var string $username
     * @var string $password
     */
    public function __construct($version, $username, $password)
    {
        $this->version = $version;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return DeviceAssetInfoExportDevice
     */
    public function withVersion($version)
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
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
     * @return DeviceAssetInfoExportDevice
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
     * @return DeviceAssetInfoExportDevice
     */
    public function withPassword($password)
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }


}

