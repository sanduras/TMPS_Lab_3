<?php
declare (strict_types=1);

namespace BehavioralPatterns\ChainOfResponsibility;

abstract class Handler
{
   
    private $next;

    public function sendTo(Handler $next): Handler
    {
        $this->next = $next;

        return $next;
    }

    public function verify(string $email, string $password): bool
    {
        if (!$this->next) {
            return true;
        }

        return $this->next->verify($email, $password);
    }
}
?>