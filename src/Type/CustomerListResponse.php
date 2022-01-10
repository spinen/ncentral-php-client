<?php

namespace Spinen\Ncentral\Type;


use Phpro\SoapClient\Type\ResultInterface;

class CustomerListResponse implements ResultInterface
{

    /**
     * @var \Spinen\Ncentral\Type\EiKeyValueList
     */
    private $return;

    /**
     * @return \Spinen\Ncentral\Type\EiKeyValueList
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Spinen\Ncentral\Type\EiKeyValueList $return
     * @return CustomerListResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}

