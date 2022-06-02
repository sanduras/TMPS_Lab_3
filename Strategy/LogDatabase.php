<?php
declare (strict_types=1);

namespace BehavioralPatterns\Strategy;

class LogDatabase implements Strategy {
    
    public function log($data) {
         var_dump("Log to database");
     }
     
 }
?>