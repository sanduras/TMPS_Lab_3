<?php
declare (strict_types=1);

namespace BehavioralPatterns\Observer;

class ReportObserver implements Observer {

    public function handle() {
        var_dump('Report was generated!!');
    }
    
}

?>