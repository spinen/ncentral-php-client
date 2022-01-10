<?php

namespace Spinen\Ncentral\Type;

class WrapperTaskMonitoring
{

    /**
     * @var string
     */
    private $message;

    /**
     * @var \Spinen\Ncentral\Type\TEITaskFailed
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
     * @return \Spinen\Ncentral\Type\TEITaskFailed
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param \Spinen\Ncentral\Type\TEITaskFailed $values
     * @return WrapperTaskMonitoring
     */
    public function withValues($values)
    {
        $new = clone $this;
        $new->values = $values;

        return $new;
    }


}

