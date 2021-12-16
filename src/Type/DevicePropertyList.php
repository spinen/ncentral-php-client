<?php

namespace Spinen\Nable\Ncentral\Type;


use Phpro\SoapClient\Type\RequestInterface;

class DevicePropertyList implements RequestInterface
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
    private $deviceIDs;

    /**
     * @var string
     */
    private $deviceNames;

    /**
     * @var int
     */
    private $filterIDs;

    /**
     * @var string
     */
    private $filterNames;

    /**
     * @var bool
     */
    private $reverseOrder;

    /**
     * Constructor
     *
     * @var string $username
     * @var string $password
     * @var int $deviceIDs
     * @var string $deviceNames
     * @var int $filterIDs
     * @var string $filterNames
     * @var bool $reverseOrder
     */
    public function __construct($username, $password, $deviceIDs, $deviceNames, $filterIDs, $filterNames, $reverseOrder)
    {
        $this->username = $username;
        $this->password = $password;
        $this->deviceIDs = $deviceIDs;
        $this->deviceNames = $deviceNames;
        $this->filterIDs = $filterIDs;
        $this->filterNames = $filterNames;
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
     * @return DevicePropertyList
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
     * @return DevicePropertyList
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
    public function getDeviceIDs()
    {
        return $this->deviceIDs;
    }

    /**
     * @param int $deviceIDs
     * @return DevicePropertyList
     */
    public function withDeviceIDs($deviceIDs)
    {
        $new = clone $this;
        $new->deviceIDs = $deviceIDs;

        return $new;
    }

    /**
     * @return string
     */
    public function getDeviceNames()
    {
        return $this->deviceNames;
    }

    /**
     * @param string $deviceNames
     * @return DevicePropertyList
     */
    public function withDeviceNames($deviceNames)
    {
        $new = clone $this;
        $new->deviceNames = $deviceNames;

        return $new;
    }

    /**
     * @return int
     */
    public function getFilterIDs()
    {
        return $this->filterIDs;
    }

    /**
     * @param int $filterIDs
     * @return DevicePropertyList
     */
    public function withFilterIDs($filterIDs)
    {
        $new = clone $this;
        $new->filterIDs = $filterIDs;

        return $new;
    }

    /**
     * @return string
     */
    public function getFilterNames()
    {
        return $this->filterNames;
    }

    /**
     * @param string $filterNames
     * @return DevicePropertyList
     */
    public function withFilterNames($filterNames)
    {
        $new = clone $this;
        $new->filterNames = $filterNames;

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
     * @return DevicePropertyList
     */
    public function withReverseOrder($reverseOrder)
    {
        $new = clone $this;
        $new->reverseOrder = $reverseOrder;

        return $new;
    }


}

