<?php
declare (strict_types=1);

namespace BehavioralPatterns\ChainOfResponsibility;

class UserHandler extends Handler {

    private $processing;

    public function __construct(Processing $processing)
    {
        $this->processing = $processing;
    }

    public function verify(string $email, string $password): bool
    {
        if (!$this->processing->hasEmail($email)) {
            echo "User Error: This email is not registered!\n";

            return false;
        }

        if (!$this->processing->isValidPassword($email, $password)) {
            echo "User Error: Inccorect password please try again!\n";

            return false;
        }

        return parent::verify($email, $password);
    }
}
?>