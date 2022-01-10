<?php

namespace Spinen\Ncentral\Type;


use Phpro\SoapClient\Type\RequestInterface;

class VersionInfoGet implements RequestInterface
{

    /**
     * @var \Spinen\Ncentral\Type\EiCredentials
     */
    private $credentials;

    /**
     * Constructor
     *
     * @var \Spinen\Ncentral\Type\EiCredentials $credentials
     */
    public function __construct($credentials)
    {
        $this->credentials = $credentials;
    }

    /**
     * @return \Spinen\Ncentral\Type\EiCredentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param \Spinen\Ncentral\Type\EiCredentials $credentials
     * @return VersionInfoGet
     */
    public function withCredentials($credentials)
    {
        $new = clone $this;
        $new->credentials = $credentials;

        return $new;
    }


}

