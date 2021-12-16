<?php

namespace Spinen\Nable\Ncentral\Type;


use Phpro\SoapClient\Type\ResultInterface;

class CustomerAddResponse implements ResultInterface
{

    /**
     * @var int
     */
    private $return;

    /**
     * @return int
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param int $return
     * @return CustomerAddResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}

