<?php
declare (strict_types=1);

namespace BehavioralPatterns\Command;

class OnlineCommand implements Command
{
    protected $status;

    public function __construct(Receiver $status)
    {
        $this->status = $status;
    }

    public function execute()
    {
        $this->status->isOnline();
    }

    public function undo()
    {
        $this->status->isOffline();
    }

    public function redo()
    {
        $this->execute();
    }
}

?>