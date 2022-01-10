<?php

namespace Spinen\Ncentral\Type;


use Phpro\SoapClient\Type\ResultInterface;

class VersionInfoGetResponse implements ResultInterface
{

    /**
     * @var \Spinen\Ncentral\Type\ConfigValue
     */
    private $return;

    /**
     * @return \Spinen\Ncentral\Type\ConfigValue
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Spinen\Ncentral\Type\ConfigValue $return
     * @return VersionInfoGetResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}

