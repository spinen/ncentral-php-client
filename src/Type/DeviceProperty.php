<?php

namespace Spinen\Nable\Ncentral\Type;

class DeviceProperty
{

    /**
     * @var string
     */
    private $defaultValue;

    /**
     * @var int
     */
    private $devicePropertyID;

    /**
     * @var string
     */
    private $dropdownValues;

    /**
     * @var string
     */
    private $label;

    /**
     * @var int
     */
    private $type;

    /**
     * @var string
     */
    private $value;

    /**
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * @param string $defaultValue
     * @return DeviceProperty
     */
    public function withDefaultValue($defaultValue)
    {
        $new = clone $this;
        $new->defaultValue = $defaultValue;

        return $new;
    }

    /**
     * @return int
     */
    public function getDevicePropertyID()
    {
        return $this->devicePropertyID;
    }

    /**
     * @param int $devicePropertyID
     * @return DeviceProperty
     */
    public function withDevicePropertyID($devicePropertyID)
    {
        $new = clone $this;
        $new->devicePropertyID = $devicePropertyID;

        return $new;
    }

    /**
     * @return string
     */
    public function getDropdownValues()
    {
        return $this->dropdownValues;
    }

    /**
     * @param string $dropdownValues
     * @return DeviceProperty
     */
    public function withDropdownValues($dropdownValues)
    {
        $new = clone $this;
        $new->dropdownValues = $dropdownValues;

        return $new;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return DeviceProperty
     */
    public function withLabel($label)
    {
        $new = clone $this;
        $new->label = $label;

        return $new;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return DeviceProperty
     */
    public function withType($type)
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return DeviceProperty
     */
    public function withValue($value)
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }


}

