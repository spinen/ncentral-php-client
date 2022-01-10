<?php

namespace Spinen\Ncentral\Type;


use Phpro\SoapClient\Type\ResultInterface;

class PsaCreateCustomTicketResponse implements ResultInterface
{

    /**
     * @var \Spinen\Ncentral\Type\EiCustomPsaTicketResponse
     */
    private $return;

    /**
     * @return \Spinen\Ncentral\Type\EiCustomPsaTicketResponse
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Spinen\Ncentral\Type\EiCustomPsaTicketResponse $return
     * @return PsaCreateCustomTicketResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}

