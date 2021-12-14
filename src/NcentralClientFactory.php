<?php

namespace Spinen\Nable\Ncentral;

use Spinen\Nable\Ncentral\NcentralClient;
use Spinen\Nable\Ncentral\NcentralClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class NcentralClientFactory
{

    public static function factory(string $wsdl) : \Spinen\Nable\Ncentral\NcentralClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(NcentralClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new NcentralClient($engine, $eventDispatcher);
    }


}

