<?php
declare (strict_types=1);

namespace BehavioralPatterns\Command;

class OfflineCommand implements Command
{
    protected $user;

    public function __construct(Receiver $user)
    {
        $this->user = $user;
    }

    public function execute()
    {
        $this->user->isOffline();
    }

    public function undo()
    {
        $this->user->isOnline();
    }

    public function redo()
    {
        $this->execute();
    }
}
?>