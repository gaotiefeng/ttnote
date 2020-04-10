<?php


namespace App\Design\Behavioral\Command;


interface UndoableCommand extends Command
{
    public function undo();
}