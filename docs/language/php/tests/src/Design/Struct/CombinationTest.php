<?php

declare(strict_types=1);

use App\Design\Struct\Combination\Form;
use App\Design\Struct\Combination\TextElement;
use App\Design\Struct\Combination\InputElement;

class CombinationTest extends \PHPUnit\Framework\TestCase
{
    public function testCombinationRender()
    {
        $form = new Form();
        $form->addElement(new TextElement('Email:'));
        $form->addElement(new InputElement());
        $embed = new Form();
        $embed->addElement(new TextElement('Password:'));
        $embed->addElement(new InputElement());
        $form->addElement($embed);

        $this->assertSame(
            '<form>Email:<input type="text" /><form>Password:<input type="text" /></form></form>',
            $form->render()
        );

    }

}