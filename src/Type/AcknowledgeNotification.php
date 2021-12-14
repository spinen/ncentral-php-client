<?php

namespace Spinen\Nable\Ncentral\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AcknowledgeNotification implements RequestInterface
{

    /**
     * @var int
     */
    private $activeNotificationTriggerIDArray;

    /**
     * @var int
     */
    private $correlatedProfileIDArray;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $note;

    /**
     * @var bool
     */
    private $addToDeviceNotes;

    /**
     * @var bool
     */
    private $suppressOnEscalation;

    /**
     * Constructor
     *
     * @var int $activeNotificationTriggerIDArray
     * @var int $correlatedProfileIDArray
     * @var string $username
     * @var string $password
     * @var string $note
     * @var bool $addToDeviceNotes
     * @var bool $suppressOnEscalation
     */
    public function __construct($activeNotificationTriggerIDArray, $correlatedProfileIDArray, $username, $password, $note, $addToDeviceNotes, $suppressOnEscalation)
    {
        $this->activeNotificationTriggerIDArray = $activeNotificationTriggerIDArray;
        $this->correlatedProfileIDArray = $correlatedProfileIDArray;
        $this->username = $username;
        $this->password = $password;
        $this->note = $note;
        $this->addToDeviceNotes = $addToDeviceNotes;
        $this->suppressOnEscalation = $suppressOnEscalation;
    }

    /**
     * @return int
     */
    public function getActiveNotificationTriggerIDArray()
    {
        return $this->activeNotificationTriggerIDArray;
    }

    /**
     * @param int $activeNotificationTriggerIDArray
     * @return AcknowledgeNotification
     */
    public function withActiveNotificationTriggerIDArray($activeNotificationTriggerIDArray)
    {
        $new = clone $this;
        $new->activeNotificationTriggerIDArray = $activeNotificationTriggerIDArray;

        return $new;
    }

    /**
     * @return int
     */
    public function getCorrelatedProfileIDArray()
    {
        return $this->correlatedProfileIDArray;
    }

    /**
     * @param int $correlatedProfileIDArray
     * @return AcknowledgeNotification
     */
    public function withCorrelatedProfileIDArray($correlatedProfileIDArray)
    {
        $new = clone $this;
        $new->correlatedProfileIDArray = $correlatedProfileIDArray;

        return $new;
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
     * @return AcknowledgeNotification
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
     * @return AcknowledgeNotification
     */
    public function withPassword($password)
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param string $note
     * @return AcknowledgeNotification
     */
    public function withNote($note)
    {
        $new = clone $this;
        $new->note = $note;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAddToDeviceNotes()
    {
        return $this->addToDeviceNotes;
    }

    /**
     * @param bool $addToDeviceNotes
     * @return AcknowledgeNotification
     */
    public function withAddToDeviceNotes($addToDeviceNotes)
    {
        $new = clone $this;
        $new->addToDeviceNotes = $addToDeviceNotes;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSuppressOnEscalation()
    {
        return $this->suppressOnEscalation;
    }

    /**
     * @param bool $suppressOnEscalation
     * @return AcknowledgeNotification
     */
    public function withSuppressOnEscalation($suppressOnEscalation)
    {
        $new = clone $this;
        $new->suppressOnEscalation = $suppressOnEscalation;

        return $new;
    }


}

