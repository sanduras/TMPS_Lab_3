<?php
declare (strict_types=1);

namespace BehavioralPatterns\ChainOfResponsibility;

class RoleHandler extends Handler
{
    public function verify(string $email, string $password): bool
    {
        if ($email === "admin@gmail.com") {
            echo "RoleHandler: You are Admin!\n";

            return true;
        }

        if ($email === "userregistred@gmail.com") {
            echo "RoleHandler: You are authorized user!\n";

            return true;
        }
        echo "RoleHandler: You are simple user!\n";

        return parent::verify($email, $password);
    }
}
?>