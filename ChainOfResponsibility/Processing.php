<?php
declare (strict_types=1);

namespace BehavioralPatterns\ChainOfResponsibility;

class Processing
{
    private $users = [];
    private $handler;
    public function sethandler(Handler $handler): void
    {
        $this->handler = $handler;
    }

    public function logIn(string $email, string $password): bool
    {
        if ($this->handler->verify($email, $password)) {
            echo "Processing: Authorization has been successful!\n";

            return true;
        }

        return false;
    }

    public function register(string $email, string $password): void
    {
        $this->users[$email] = $password;
    }

    public function hasEmail(string $email): bool
    {
        return isset($this->users[$email]);
    }

    public function isValidPassword(string $email, string $password): bool
    {
        return $this->users[$email] === $password;
    }
}

?>