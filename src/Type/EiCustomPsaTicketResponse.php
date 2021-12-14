<?php

namespace Spinen\Nable\Ncentral\Type;

class EiCustomPsaTicketResponse
{

    /**
     * @var bool
     */
    private $inconsistencyDetected;

    /**
     * @var string
     */
    private $lastStatus;

    /**
     * @var string
     */
    private $lastStatusTimestamp;

    /**
     * @var string
     */
    private $newConfirmedStatus;

    /**
     * @var int
     */
    private $psaCustomTicketId;

    /**
     * @var string
     */
    private $psaTicketNumber;

    /**
     * @var string
     */
    private $ticketCreationDate;

    /**
     * @var string
     */
    private $url;

    /**
     * @return bool
     */
    public function getInconsistencyDetected()
    {
        return $this->inconsistencyDetected;
    }

    /**
     * @param bool $inconsistencyDetected
     * @return EiCustomPsaTicketResponse
     */
    public function withInconsistencyDetected($inconsistencyDetected)
    {
        $new = clone $this;
        $new->inconsistencyDetected = $inconsistencyDetected;

        return $new;
    }

    /**
     * @return string
     */
    public function getLastStatus()
    {
        return $this->lastStatus;
    }

    /**
     * @param string $lastStatus
     * @return EiCustomPsaTicketResponse
     */
    public function withLastStatus($lastStatus)
    {
        $new = clone $this;
        $new->lastStatus = $lastStatus;

        return $new;
    }

    /**
     * @return string
     */
    public function getLastStatusTimestamp()
    {
        return $this->lastStatusTimestamp;
    }

    /**
     * @param string $lastStatusTimestamp
     * @return EiCustomPsaTicketResponse
     */
    public function withLastStatusTimestamp($lastStatusTimestamp)
    {
        $new = clone $this;
        $new->lastStatusTimestamp = $lastStatusTimestamp;

        return $new;
    }

    /**
     * @return string
     */
    public function getNewConfirmedStatus()
    {
        return $this->newConfirmedStatus;
    }

    /**
     * @param string $newConfirmedStatus
     * @return EiCustomPsaTicketResponse
     */
    public function withNewConfirmedStatus($newConfirmedStatus)
    {
        $new = clone $this;
        $new->newConfirmedStatus = $newConfirmedStatus;

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
     * @return EiCustomPsaTicketResponse
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
    public function getPsaTicketNumber()
    {
        return $this->psaTicketNumber;
    }

    /**
     * @param string $psaTicketNumber
     * @return EiCustomPsaTicketResponse
     */
    public function withPsaTicketNumber($psaTicketNumber)
    {
        $new = clone $this;
        $new->psaTicketNumber = $psaTicketNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getTicketCreationDate()
    {
        return $this->ticketCreationDate;
    }

    /**
     * @param string $ticketCreationDate
     * @return EiCustomPsaTicketResponse
     */
    public function withTicketCreationDate($ticketCreationDate)
    {
        $new = clone $this;
        $new->ticketCreationDate = $ticketCreationDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return EiCustomPsaTicketResponse
     */
    public function withUrl($url)
    {
        $new = clone $this;
        $new->url = $url;

        return $new;
    }


}

