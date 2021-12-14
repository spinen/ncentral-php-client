<?php

namespace Spinen\Nable\Ncentral\Type;

use Phpro\SoapClient\Type\RequestInterface;

class PsaReopenCustomTicket implements RequestInterface
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
     * Constructor
     *
     * @var string $username
     * @var string $password
     * @var int $psaCustomTicketId
     */
    public function __construct($username, $password, $psaCustomTicketId)
    {
        $this->username = $username;
        $this->password = $password;
        $this->psaCustomTicketId = $psaCustomTicketId;
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
     * @return PsaReopenCustomTicket
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
     * @return PsaReopenCustomTicket
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
     * @return PsaReopenCustomTicket
     */
    public function withPsaCustomTicketId($psaCustomTicketId)
    {
        $new = clone $this;
        $new->psaCustomTicketId = $psaCustomTicketId;

        return $new;
    }


}

