<?php

namespace Spinen\Ncentral;

use Spinen\Ncentral\NcentralClient;
use Spinen\Ncentral\NcentralClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class NcentralClientFactory
{

    public static function factory(string $wsdl) : \Spinen\Ncentral\NcentralClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(NcentralClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new NcentralClient($engine, $eventDispatcher);
    }


}

