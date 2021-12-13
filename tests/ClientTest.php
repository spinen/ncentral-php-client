<?php

namespace Spinen\Nable\Ncentral;

use Spinen\Nable\Ncentral\Client;

/**
 * Class Test
 *
 * @package Spinen\Nable\Ncentral
 */
class ClientTest extends TestCase
{
    /**
     * @var Client
     */
    protected $client;

    protected function setUp(): void
    {
        $this->client = new Client();
    }

    /**
     * @test
     */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf(Client::class, $this->client);
    }
}
