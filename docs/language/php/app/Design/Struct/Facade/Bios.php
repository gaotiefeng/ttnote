<?php


namespace App\Design\Struct\Facade;


interface Bios
{
    public function execute();//执行

    public function waitForKeyPress();//等待

    public function launch(OperatingSystem $os);

    public function powerDown();//断开
}