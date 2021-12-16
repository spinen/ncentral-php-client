<?php

namespace Spinen\Nable\Ncentral\Type;


use Phpro\SoapClient\Type\ResultInterface;

class PsaCredentialsValidateResponse implements ResultInterface
{

    /**
     * @var bool
     */
    private $return;

    /**
     * @return bool
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param bool $return
     * @return PsaCredentialsValidateResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}

