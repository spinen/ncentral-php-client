<?php

namespace Spinen\Nable\Ncentral\Type;

class TEITaskFailed
{

    /**
     * @var string
     */
    private $serviceDescription;

    /**
     * @var string
     */
    private $serviceState;

    /**
     * @var string
     */
    private $serviceStatus;

    /**
     * @var int
     */
    private $taskID;

    /**
     * @return string
     */
    public function getServiceDescription()
    {
        return $this->serviceDescription;
    }

    /**
     * @param string $serviceDescription
     * @return TEITaskFailed
     */
    public function withServiceDescription($serviceDescription)
    {
        $new = clone $this;
        $new->serviceDescription = $serviceDescription;

        return $new;
    }

    /**
     * @return string
     */
    public function getServiceState()
    {
        return $this->serviceState;
    }

    /**
     * @param string $serviceState
     * @return TEITaskFailed
     */
    public function withServiceState($serviceState)
    {
        $new = clone $this;
        $new->serviceState = $serviceState;

        return $new;
    }

    /**
     * @return string
     */
    public function getServiceStatus()
    {
        return $this->serviceStatus;
    }

    /**
     * @param string $serviceStatus
     * @return TEITaskFailed
     */
    public function withServiceStatus($serviceStatus)
    {
        $new = clone $this;
        $new->serviceStatus = $serviceStatus;

        return $new;
    }

    /**
     * @return int
     */
    public function getTaskID()
    {
        return $this->taskID;
    }

    /**
     * @param int $taskID
     * @return TEITaskFailed
     */
    public function withTaskID($taskID)
    {
        $new = clone $this;
        $new->taskID = $taskID;

        return $new;
    }


}

