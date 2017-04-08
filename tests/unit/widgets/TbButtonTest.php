<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 24.03.2017
 * Time: 21:10
 */
class TbButtonTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        require_once ROOT_DIR . '/src/widgets/TbButton.php';
    }

    /** @test */
    public function CanCreateButton() {
        new TbButton();
    }

    /** @test */
    public function CreateButtonHtmlOptionsExist() {
        $button = new TbButton();
        $button->init();
        $this->assertNotEmpty($button->htmlOptions);
    }

    /** @test */
    public function ButtonNotVisibleHtmlOptionsEmpty() {
        $button = new TbButton();
        $button->visible = false;
        $button->init();
        $this->assertEmpty($button->htmlOptions);
    }

    /** @test */
    public function PassLinkButtonToHtmlOptionClass() {
        $button = new TbButton();
        $button->buttonType = 'link';
        $button->init();
        $this->assertContains('btn-link', $button->htmlOptions['class']);
    }

    /** @test */
    public function PassButtonDisabledToHtmlOptionClass() {
        $button = new TbButton();
        $button->disabled = true;
        $button->init();
        $this->assertContains('disabled', $button->htmlOptions);
    }

    /** @test */
    public function PassChangeSizeOfButtonToLargeForHtmlOptionClass() {
        $button = new TbButton();
        $button->size = 'large';
        $button->init();
        $this->assertContains('btn-lg', $button->htmlOptions['class']);
    }

    /** @test */
    public function PassBlockButtonPropertyToHtmlOptionClass() {
        $button = new TbButton();
        $button->block = true;
        $button->init();
        $this->assertContains('btn-block', $button->htmlOptions['class']);
    }

    /** @test */
    public function PassActiveStatusOfButtonToHtmlOptionClass() {
        $button = new TbButton();
        $button->active = true;
        $button->init();
        $this->assertContains('active', $button->htmlOptions['class']);
    }

    /** @test */
    public function PassHtmlHrefOptionsOfButtonToUrlOption() {
        $button = new TbButton();
        $button->url = null;
        $button->htmlOptions['href'] = 'test tag';
        $button->init();
        $this->assertEquals('test tag', $button->url);
        $this->assertArrayNotHasKey('href', $button->htmlOptions, 'href in options not found');
    }

    /** @test */
    public function ActivateDropdownPossibilityForButton() {
        $button = new TbButton();
        $button->items = array('dropdown btn 1', 'dropdown btn 2');
        $button->url = null;
        $button->init();
        $this->assertEquals('#', $button->url);
    }

    /** @test */
    public function AddingCssClassesFromHtmlOptionClass() {
        $button = new TbButton();
        $button->htmlOptions['class'] = 'btn-test';
        $button->init();
        $this->assertEquals('btn-test btn btn-default', $button->htmlOptions['class']);
    }

}
