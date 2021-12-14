<?php

namespace Spinen\Nable\Ncentral\Type;

use Phpro\SoapClient\Type\RequestInterface;

class PsaCreateCustomTicket implements RequestInterface
{

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var int
     */
    private $psaCustomTicketId;

    /**
     * @var string
     */
    private $ticketNumber;

    /**
     * @var string
     */
    private $ticketUrl;

    /**
     * Constructor
     *
     * @var string $username
     * @var string $password
     * @var int $psaCustomTicketId
     * @var string $ticketNumber
     * @var string $ticketUrl
     */
    public function __construct($username, $password, $psaCustomTicketId, $ticketNumber, $ticketUrl)
    {
        $this->username = $username;
        $this->password = $password;
        $this->psaCustomTicketId = $psaCustomTicketId;
        $this->ticketNumber = $ticketNumber;
        $this->ticketUrl = $ticketUrl;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return PsaCreateCustomTicket
     */
    public function withUsername($username)
    {
        $new = clone $this;
        $new->username = $username;

        return $new;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return PsaCreateCustomTicket
     */
    public function withPassword($password)
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    /**
     * @return int
     */
    public function getPsaCustomTicketId()
    {
        return $this->psaCustomTicketId;
    }

    /**
     * @param int $psaCustomTicketId
     * @return PsaCreateCustomTicket
     */
    public function withPsaCustomTicketId($psaCustomTicketId)
    {
        $new = clone $this;
        $new->psaCustomTicketId = $psaCustomTicketId;

        return $new;
    }

    /**
     * @return string
     */
    public function getTicketNumber()
    {
        return $this->ticketNumber;
    }

    /**
     * @param string $ticketNumber
     * @return PsaCreateCustomTicket
     */
    public function withTicketNumber($ticketNumber)
    {
        $new = clone $this;
        $new->ticketNumber = $ticketNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getTicketUrl()
    {
        return $this->ticketUrl;
    }

    /**
     * @param string $ticketUrl
     * @return PsaCreateCustomTicket
     */
    public function withTicketUrl($ticketUrl)
    {
        $new = clone $this;
        $new->ticketUrl = $ticketUrl;

        return $new;
    }


}

