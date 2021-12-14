<?php

namespace Spinen\Nable\Ncentral\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CustomerDeleteResponse implements ResultInterface
{

    /**
     * @var string
     */
    private $return;

    /**
     * @return string
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param string $return
     * @return CustomerDeleteResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}

