<?php

namespace Spinen\Nable\Ncentral\Type;

use Phpro\SoapClient\Type\ResultInterface;

class VersionInfoGetResponse implements ResultInterface
{

    /**
     * @var \Spinen\Nable\Ncentral\Type\ConfigValue
     */
    private $return;

    /**
     * @return \Spinen\Nable\Ncentral\Type\ConfigValue
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Spinen\Nable\Ncentral\Type\ConfigValue $return
     * @return VersionInfoGetResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}

