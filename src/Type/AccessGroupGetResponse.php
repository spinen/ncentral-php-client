<?php

namespace Spinen\Ncentral\Type;


use Phpro\SoapClient\Type\ResultInterface;

class AccessGroupGetResponse implements ResultInterface
{

    /**
     * @var \Spinen\Ncentral\Type\EiKeyValuesList
     */
    private $return;

    /**
     * @return \Spinen\Ncentral\Type\EiKeyValuesList
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Spinen\Ncentral\Type\EiKeyValuesList $return
     * @return AccessGroupGetResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}

