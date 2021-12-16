<?php

namespace Spinen\Nable\Ncentral\Type;


use Phpro\SoapClient\Type\RequestInterface;

class TaskResumeMonitoring implements RequestInterface
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
    private $taskIDList;

    /**
     * Constructor
     *
     * @var string $username
     * @var string $password
     * @var int $taskIDList
     */
    public function __construct($username, $password, $taskIDList)
    {
        $this->username = $username;
        $this->password = $password;
        $this->taskIDList = $taskIDList;
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
     * @return TaskResumeMonitoring
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
     * @return TaskResumeMonitoring
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
    public function getTaskIDList()
    {
        return $this->taskIDList;
    }

    /**
     * @param int $taskIDList
     * @return TaskResumeMonitoring
     */
    public function withTaskIDList($taskIDList)
    {
        $new = clone $this;
        $new->taskIDList = $taskIDList;

        return $new;
    }


}

