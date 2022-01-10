<?php

namespace Spinen\Ncentral;

use GuzzleHttp\Client;
use Phpro\SoapClient\Soap\Engine\Engine;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;
use Spinen\Ncentral\NcentralClient;
use Symfony\Component\EventDispatcher\EventDispatcher;

/**
 * Class ClientTest
 *
 * @package Spinen\Ncentral
 */
class ClientTest extends TestCase
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var string
     */
    protected $wsdl_path = 'config/ncentral-wsdl.xml';

    protected function setUp(): void
    {
        $engine = $this->newEngine();
        $event_dispatcher = new EventDispatcher();
        $this->client = new NcentralClient($engine, $event_dispatcher);
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf(NcentralClient::class, $this->client);
    }

    /**
     * @test
     */
    public function it_can_be_constructed_from_its_factory()
    {
        $client = NcentralClientFactory::factory($this->wsdl_path);
        $this->assertInstanceOf(NcentralClient::class, $client);
    }

    /**
     * Create new engine based on configs and return it
     *
     * @return Engine
     */
    protected function newEngine()
    {
        return ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($this->wsdl_path, [])
                          ->disableWsdlCache()
        );
    }
}
