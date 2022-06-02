<?php
declare (strict_types=1);

namespace BehavioralPatterns\Observer;

use FFI\Exception;

class LogUser implements Content {

    protected $observers = [];

    public function attach($observable) {
        if(is_array($observable)) {
            return $this->attachObservers($observable);
        }
        $this->observers[] = $observable;
        return $this;
    }

    public function detach($index) {
        unset($this->observer[$index]);
    }

    public function notify() {
        foreach($this->observers as $observer) {
            $observer->handle();
        }
    }

    private function attachObservers($observable) {
        foreach($observable as $observer) {
            if(!$observer instanceof Observer) {
                throw new Exception;
            }
            $this->attach($observer);
        }    
    }
    
    public function fire() {
        $this->notify();
    }
}

?>