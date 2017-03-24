<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 24.03.2017
 * Time: 21:10
 */
class TbButtonTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function CanCreateButton() {
        new TbButton();
    }

    /** @test */
    public function HtmlOptionsClassContainsSomething() {
        $button = new TbButton();
        $button->init();
        $this->assertNotEmpty($button->htmlOptions);
    }
}
