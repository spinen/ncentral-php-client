<?php

namespace Spinen\Nable\Ncentral\Type;

class WrapperTaskMonitoring
{

    /**
     * @var string
     */
    private $message;

    /**
     * @var \Spinen\Nable\Ncentral\Type\TEITaskFailed
     */
    private $values;

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return WrapperTaskMonitoring
     */
    public function withMessage($message)
    {
        $new = clone $this;
        $new->message = $message;

        return $new;
    }

    /**
     * @return \Spinen\Nable\Ncentral\Type\TEITaskFailed
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param \Spinen\Nable\Ncentral\Type\TEITaskFailed $values
     * @return WrapperTaskMonitoring
     */
    public function withValues($values)
    {
        $new = clone $this;
        $new->values = $values;

        return $new;
    }


}

