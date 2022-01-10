<?php

namespace Spinen\Ncentral\Type;


use Phpro\SoapClient\Type\RequestInterface;

class DeviceAssetInfoExportDeviceWithSettings implements RequestInterface
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
     * @var \Spinen\Ncentral\Type\EiKeyValues
     */
    private $settings;

    /**
     * Constructor
     *
     * @var string $version
     * @var string $username
     * @var string $password
     * @var \Spinen\Ncentral\Type\EiKeyValues $settings
     */
    public function __construct($version, $username, $password, $settings)
    {
        $this->version = $version;
        $this->username = $username;
        $this->password = $password;
        $this->settings = $settings;
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
     * @return DeviceAssetInfoExportDeviceWithSettings
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
     * @return DeviceAssetInfoExportDeviceWithSettings
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
     * @return DeviceAssetInfoExportDeviceWithSettings
     */
    public function withPassword($password)
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    /**
     * @return \Spinen\Ncentral\Type\EiKeyValues
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * @param \Spinen\Ncentral\Type\EiKeyValues $settings
     * @return DeviceAssetInfoExportDeviceWithSettings
     */
    public function withSettings($settings)
    {
        $new = clone $this;
        $new->settings = $settings;

        return $new;
    }


}

