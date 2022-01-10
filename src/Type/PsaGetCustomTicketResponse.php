<?php

namespace Spinen\Ncentral\Type;


use Phpro\SoapClient\Type\ResultInterface;

class PsaGetCustomTicketResponse implements ResultInterface
{

    /**
     * @var \Spinen\Ncentral\Type\EiCustomPsaTicketDetails
     */
    private $return;

    /**
     * @return \Spinen\Ncentral\Type\EiCustomPsaTicketDetails
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Spinen\Ncentral\Type\EiCustomPsaTicketDetails $return
     * @return PsaGetCustomTicketResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}

