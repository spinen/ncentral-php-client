<?php

namespace Spinen\Ncentral\Type;


use Phpro\SoapClient\Type\ResultInterface;

class TaskResumeMonitoringResponse implements ResultInterface
{

    /**
     * @var \Spinen\Ncentral\Type\WrapperTaskMonitoring
     */
    private $return;

    /**
     * @return \Spinen\Ncentral\Type\WrapperTaskMonitoring
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Spinen\Ncentral\Type\WrapperTaskMonitoring $return
     * @return TaskResumeMonitoringResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}

