<?php
declare (strict_types=1);

namespace BehavioralPatterns\Observer;



require_once '../vendor/autoload.php';

function clientCode() {

    $login = new LogUser;
    $login->attach([
    new LoginObserver,
    new EmailObserver,
    new ReportObserver
]);

$login->fire();
}

clientCode();
?>
