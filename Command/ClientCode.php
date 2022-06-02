<?php
declare (strict_types=1);

namespace BehavioralPatterns\Command;

require_once '../vendor/autoload.php';

function clientCode() {

    $user = new Receiver();

    $online = new OnlineCommand($user);
    $offline = new OfflineCommand($user);

    $remote = new Invoker();
    $remote->submit($online); 
    $remote->submit($offline); 
}

clientCode();
?>
