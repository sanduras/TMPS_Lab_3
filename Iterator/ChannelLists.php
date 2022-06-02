<?php
declare (strict_types=1);

namespace BehavioralPatterns\Iterator;

// use Countable;
// use Iterator;

class ChannelLists implements \Countable, \Iterator
{

    protected $channels = [];

    protected $counter = 0;

    public function addchannel(RadioChannel $chanel)
    {
        $this->channels[] = $chanel;
    }

    public function removechannel(RadioChannel $toRemove)
    {
        $toRemoveChannel = $toRemove->getChannel();
        $this->channels = array_filter($this->channels, function (RadioChannel $channel) use ($toRemoveChannel) {
            return $channel->getChannel() !== $toRemoveChannel;
        });
    }

    public function count(): int
    {
        return count($this->channels);
    }

    public function current(): RadioChannel
    {
        return $this->channels[$this->counter];
    }

    public function key()
    {
        return $this->counter;
    }

    public function next()
    {
        $this->counter++;
    }

    public function rewind()
    {
        $this->counter = 0;
    }

    public function valid(): bool
    {
        return isset($this->channels[$this->counter]);
    }
}
?>