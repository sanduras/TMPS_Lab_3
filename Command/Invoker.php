<?php
declare (strict_types=1);

namespace BehavioralPatterns\Command;

class Invoker
{
    public function submit(Command $command)
    {
        $command->execute();
    }
}
?>