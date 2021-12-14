<?php

namespace Spinen\Nable\Ncentral\Type;

class EiKeyValueList
{

    /**
     * @var \Spinen\Nable\Ncentral\Type\EiKeyValue
     */
    private $items;

    /**
     * @return \Spinen\Nable\Ncentral\Type\EiKeyValue
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param \Spinen\Nable\Ncentral\Type\EiKeyValue $items
     * @return EiKeyValueList
     */
    public function withItems($items)
    {
        $new = clone $this;
        $new->items = $items;

        return $new;
    }


}

