<?php

namespace Spinen\Nable\Ncentral\Type;

class EiKeyValuesList
{

    /**
     * @var \Spinen\Nable\Ncentral\Type\EiKeyValues
     */
    private $info;

    /**
     * @return \Spinen\Nable\Ncentral\Type\EiKeyValues
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @param \Spinen\Nable\Ncentral\Type\EiKeyValues $info
     * @return EiKeyValuesList
     */
    public function withInfo($info)
    {
        $new = clone $this;
        $new->info = $info;

        return $new;
    }


}

