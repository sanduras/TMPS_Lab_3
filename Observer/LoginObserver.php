<?php
declare (strict_types=1);

namespace BehavioralPatterns\Observer;

class LoginObserver implements Observer {

    public function handle() {
        var_dump('You are log-in!!');
    }

}

?>