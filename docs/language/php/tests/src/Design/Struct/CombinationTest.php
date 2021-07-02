<?php

declare(strict_types=1);

namespace App\tests\src\Design\Struct;

use App\Design\Struct\Combination\Form;
use App\Design\Struct\Combination\TextElement;
use App\Design\Struct\Combination\InputElement;

class CombinationTest extends \PHPUnit\Framework\TestCase
{
    public function testCombinationRender()
    {
        $form = new Form();
        $form->addElement(new TextElement('Email:'));
        $form->addElement(new InputElement("111"));
        $embed = new Form();
        $embed->addElement(new TextElement('Password:'));
        $embed->addElement(new InputElement("222"));
        $form->addElement($embed);

        $this->assertSame(
            '<form>Email:<input type="text" value="111" /><form>Password:<input type="text" value="222" /></form></form>',
            $form->render()
        );

    }

}