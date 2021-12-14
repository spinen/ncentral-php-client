<?php

namespace Spinen\Nable\Ncentral\Type;

class ConfigValue
{

    /**
     * @var string
     */
    private $dataType;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $value;

    /**
     * @return string
     */
    public function getDataType()
    {
        return $this->dataType;
    }

    /**
     * @param string $dataType
     * @return ConfigValue
     */
    public function withDataType($dataType)
    {
        $new = clone $this;
        $new->dataType = $dataType;

        return $new;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return ConfigValue
     */
    public function withDescription($description)
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $key
     * @return ConfigValue
     */
    public function withKey($key)
    {
        $new = clone $this;
        $new->key = $key;

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
     * @return ConfigValue
     */
    public function withValue($value)
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }


}

