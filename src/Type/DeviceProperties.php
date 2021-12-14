<?php

namespace Spinen\Nable\Ncentral\Type;

class DeviceProperties
{

    /**
     * @var int
     */
    private $deviceID;

    /**
     * @var string
     */
    private $deviceName;

    /**
     * @var \Spinen\Nable\Ncentral\Type\DeviceProperty
     */
    private $properties;

    /**
     * @var string
     */
    private $url;

    /**
     * @return int
     */
    public function getDeviceID()
    {
        return $this->deviceID;
    }

    /**
     * @param int $deviceID
     * @return DeviceProperties
     */
    public function withDeviceID($deviceID)
    {
        $new = clone $this;
        $new->deviceID = $deviceID;

        return $new;
    }

    /**
     * @return string
     */
    public function getDeviceName()
    {
        return $this->deviceName;
    }

    /**
     * @param string $deviceName
     * @return DeviceProperties
     */
    public function withDeviceName($deviceName)
    {
        $new = clone $this;
        $new->deviceName = $deviceName;

        return $new;
    }

    /**
     * @return \Spinen\Nable\Ncentral\Type\DeviceProperty
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * @param \Spinen\Nable\Ncentral\Type\DeviceProperty $properties
     * @return DeviceProperties
     */
    public function withProperties($properties)
    {
        $new = clone $this;
        $new->properties = $properties;

        return $new;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return DeviceProperties
     */
    public function withUrl($url)
    {
        $new = clone $this;
        $new->url = $url;

        return $new;
    }


}

