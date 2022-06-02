<?php
declare (strict_types=1);

namespace BehavioralPatterns\Command;

class Receiver
{
    public function isOnline()
    {
        echo "User is online \n";
    }

    public function isOffline()
    {
        echo "User is offline \n!";
    }
}


?>