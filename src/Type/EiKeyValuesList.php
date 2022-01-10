<?php

namespace Spinen\Ncentral\Type;

class EiKeyValuesList
{

    /**
     * @var \Spinen\Ncentral\Type\EiKeyValues
     */
    private $info;

    /**
     * @return \Spinen\Ncentral\Type\EiKeyValues
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @param \Spinen\Ncentral\Type\EiKeyValues $info
     * @return EiKeyValuesList
     */
    public function withInfo($info)
    {
        $new = clone $this;
        $new->info = $info;

        return $new;
    }


}

