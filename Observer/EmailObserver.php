<?php
declare (strict_types=1);

namespace BehavioralPatterns\Observer;

class EmailObserver implements Observer {

    public function handle() {
        var_dump('Email sent!!');
    }
    
}

?>