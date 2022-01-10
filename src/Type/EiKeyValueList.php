<?php

namespace Spinen\Ncentral\Type;

class EiKeyValueList
{

    /**
     * @var \Spinen\Ncentral\Type\EiKeyValue
     */
    private $items;

    /**
     * @return \Spinen\Ncentral\Type\EiKeyValue
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param \Spinen\Ncentral\Type\EiKeyValue $items
     * @return EiKeyValueList
     */
    public function withItems($items)
    {
        $new = clone $this;
        $new->items = $items;

        return $new;
    }


}

