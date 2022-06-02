<?php
declare (strict_types=1);

namespace BehavioralPatterns\Iterator;

class RadioChannel
{
    protected $channel;

    public function __construct(float $channel)
    {
        $this->channel = $channel;
    }

    public function getChannel(): float
    {
        return $this->channel;
    }
}

?>