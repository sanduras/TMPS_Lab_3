<?php
declare (strict_types=1);

namespace BehavioralPatterns\Strategy;

class Application {

    public function log($data, Strategy $logger) {         
        $logger = $logger ?: new LogFile;
        $logger->log($data);
    }

}