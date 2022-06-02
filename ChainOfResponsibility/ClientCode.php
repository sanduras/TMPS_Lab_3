<?php
declare (strict_types=1);

namespace BehavioralPatterns\ChainOfResponsibility;

require_once '../vendor/autoload.php';

function clientCode() {

    $processing = new Processing();
    $processing->register("admin@gmail.com", "admin_password");
    $processing->register("userregistred@gmail.com", "user_password");
    $handler = new UserHandler($processing);
    $handler->sendTo(new RoleHandler());
    $processing->sethandler($handler);
    
    do {
        echo "\nEnter your email:\n";
        $email = readline();
        echo "Enter your password:\n";
        $password = readline();
        $success = $processing->logIn($email, $password);
    } while (!$success);
}

clientCode();
?>
