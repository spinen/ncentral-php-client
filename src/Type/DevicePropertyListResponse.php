<?php

namespace Spinen\Ncentral\Type;


use Phpro\SoapClient\Type\ResultInterface;

class DevicePropertyListResponse implements ResultInterface
{

    /**
     * @var \Spinen\Ncentral\Type\DeviceProperties
     */
    private $return;

    /**
     * @return \Spinen\Ncentral\Type\DeviceProperties
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Spinen\Ncentral\Type\DeviceProperties $return
     * @return DevicePropertyListResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}

