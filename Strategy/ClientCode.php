<?php
declare (strict_types=1);

namespace BehavioralPatterns\Strategy;


require_once '../vendor/autoload.php';

function clientCode() {

    $app = new Application();
    $app->log("Log", new LogFile);
    $app->log("Log", new LogDatabase);
    $app->log("Log", new LogWebsite);
}

clientCode();
?>