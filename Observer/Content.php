<?php
declare (strict_types=1);

namespace BehavioralPatterns\Observer;

interface Content {
    public function attach($observable);
    public function detach($index);
    public function notify();
    // public function red();
}
?>