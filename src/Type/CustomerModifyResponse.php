<?php

namespace Spinen\Nable\Ncentral\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CustomerModifyResponse implements ResultInterface
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
     * @return CustomerModifyResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}

