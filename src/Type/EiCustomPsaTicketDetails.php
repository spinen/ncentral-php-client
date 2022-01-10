<?php

namespace Spinen\Ncentral\Type;

class EiCustomPsaTicketDetails
{

    /**
     * @var string
     */
    private $creationDate;

    /**
     * @var string
     */
    private $lastStatusChangeTimestamp;

    /**
     * @var int
     */
    private $psaCustomTicketId;

    /**
     * @var string
     */
    private $ticketDetails;

    /**
     * @var string
     */
    private $ticketStatus;

    /**
     * @var string
     */
    private $ticketTitle;

    /**
     * @return string
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @param string $creationDate
     * @return EiCustomPsaTicketDetails
     */
    public function withCreationDate($creationDate)
    {
        $new = clone $this;
        $new->creationDate = $creationDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getLastStatusChangeTimestamp()
    {
        return $this->lastStatusChangeTimestamp;
    }

    /**
     * @param string $lastStatusChangeTimestamp
     * @return EiCustomPsaTicketDetails
     */
    public function withLastStatusChangeTimestamp($lastStatusChangeTimestamp)
    {
        $new = clone $this;
        $new->lastStatusChangeTimestamp = $lastStatusChangeTimestamp;

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
     * @return EiCustomPsaTicketDetails
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
    public function getTicketDetails()
    {
        return $this->ticketDetails;
    }

    /**
     * @param string $ticketDetails
     * @return EiCustomPsaTicketDetails
     */
    public function withTicketDetails($ticketDetails)
    {
        $new = clone $this;
        $new->ticketDetails = $ticketDetails;

        return $new;
    }

    /**
     * @return string
     */
    public function getTicketStatus()
    {
        return $this->ticketStatus;
    }

    /**
     * @param string $ticketStatus
     * @return EiCustomPsaTicketDetails
     */
    public function withTicketStatus($ticketStatus)
    {
        $new = clone $this;
        $new->ticketStatus = $ticketStatus;

        return $new;
    }

    /**
     * @return string
     */
    public function getTicketTitle()
    {
        return $this->ticketTitle;
    }

    /**
     * @param string $ticketTitle
     * @return EiCustomPsaTicketDetails
     */
    public function withTicketTitle($ticketTitle)
    {
        $new = clone $this;
        $new->ticketTitle = $ticketTitle;

        return $new;
    }


}

