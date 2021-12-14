<?php

namespace Spinen\Nable\Ncentral\Type;

use Phpro\SoapClient\Type\ResultInterface;

class PsaGetCustomTicketResponse implements ResultInterface
{

    /**
     * @var \Spinen\Nable\Ncentral\Type\EiCustomPsaTicketDetails
     */
    private $return;

    /**
     * @return \Spinen\Nable\Ncentral\Type\EiCustomPsaTicketDetails
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Spinen\Nable\Ncentral\Type\EiCustomPsaTicketDetails $return
     * @return PsaGetCustomTicketResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}

