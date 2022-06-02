<?php
declare (strict_types=1);

namespace BehavioralPatterns\Command;

interface Command
{
    public function execute();
    public function undo();
    public function redo();
}