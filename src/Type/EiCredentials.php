<?php

namespace Spinen\Nable\Ncentral\Type;

class EiCredentials
{

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $username;

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return EiCredentials
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
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return EiCredentials
     */
    public function withUsername($username)
    {
        $new = clone $this;
        $new->username = $username;

        return $new;
    }


}

