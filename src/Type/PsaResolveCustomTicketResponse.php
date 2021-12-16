<?php

namespace Spinen\Nable\Ncentral\Type;


use Phpro\SoapClient\Type\ResultInterface;

class PsaResolveCustomTicketResponse implements ResultInterface
{

    /**
     * @var \Spinen\Nable\Ncentral\Type\EiCustomPsaTicketResponse
     */
    private $return;

    /**
     * @return \Spinen\Nable\Ncentral\Type\EiCustomPsaTicketResponse
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Spinen\Nable\Ncentral\Type\EiCustomPsaTicketResponse $return
     * @return PsaResolveCustomTicketResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}

