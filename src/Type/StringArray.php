<?php

namespace Spinen\Nable\Ncentral\Type;

class StringArray
{

    /**
     * @var string
     */
    private $item;

    /**
     * @return string
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param string $item
     * @return StringArray
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}

