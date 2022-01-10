<?php

namespace Spinen\Ncentral\Type;


use Phpro\SoapClient\Type\ResultInterface;

class OrganizationPropertyListResponse implements ResultInterface
{

    /**
     * @var \Spinen\Ncentral\Type\OrganizationProperties
     */
    private $return;

    /**
     * @return \Spinen\Ncentral\Type\OrganizationProperties
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Spinen\Ncentral\Type\OrganizationProperties $return
     * @return OrganizationPropertyListResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}

