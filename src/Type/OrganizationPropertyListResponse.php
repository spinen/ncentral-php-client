<?php

namespace Spinen\Nable\Ncentral\Type;


use Phpro\SoapClient\Type\ResultInterface;

class OrganizationPropertyListResponse implements ResultInterface
{

    /**
     * @var \Spinen\Nable\Ncentral\Type\OrganizationProperties
     */
    private $return;

    /**
     * @return \Spinen\Nable\Ncentral\Type\OrganizationProperties
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Spinen\Nable\Ncentral\Type\OrganizationProperties $return
     * @return OrganizationPropertyListResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}

