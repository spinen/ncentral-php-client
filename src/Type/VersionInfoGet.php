<?php

namespace Spinen\Nable\Ncentral\Type;

use Phpro\SoapClient\Type\RequestInterface;

class VersionInfoGet implements RequestInterface
{

    /**
     * @var \Spinen\Nable\Ncentral\Type\EiCredentials
     */
    private $credentials;

    /**
     * Constructor
     *
     * @var \Spinen\Nable\Ncentral\Type\EiCredentials $credentials
     */
    public function __construct($credentials)
    {
        $this->credentials = $credentials;
    }

    /**
     * @return \Spinen\Nable\Ncentral\Type\EiCredentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param \Spinen\Nable\Ncentral\Type\EiCredentials $credentials
     * @return VersionInfoGet
     */
    public function withCredentials($credentials)
    {
        $new = clone $this;
        $new->credentials = $credentials;

        return $new;
    }


}

