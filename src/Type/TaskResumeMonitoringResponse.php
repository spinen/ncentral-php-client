<?php

namespace Spinen\Nable\Ncentral\Type;


use Phpro\SoapClient\Type\ResultInterface;

class TaskResumeMonitoringResponse implements ResultInterface
{

    /**
     * @var \Spinen\Nable\Ncentral\Type\WrapperTaskMonitoring
     */
    private $return;

    /**
     * @return \Spinen\Nable\Ncentral\Type\WrapperTaskMonitoring
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Spinen\Nable\Ncentral\Type\WrapperTaskMonitoring $return
     * @return TaskResumeMonitoringResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}

