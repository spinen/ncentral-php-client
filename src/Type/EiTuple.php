<?php

namespace Spinen\Ncentral\Type;

class EiTuple
{

    /**
     * @var mixed
     */
    private $first;

    /**
     * @var mixed
     */
    private $second;

    /**
     * @return mixed
     */
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * @param mixed $first
     * @return EiTuple
     */
    public function withFirst($first)
    {
        $new = clone $this;
        $new->first = $first;

        return $new;
    }

    /**
     * @return mixed
     */
    public function getSecond()
    {
        return $this->second;
    }

    /**
     * @param mixed $second
     * @return EiTuple
     */
    public function withSecond($second)
    {
        $new = clone $this;
        $new->second = $second;

        return $new;
    }


}

