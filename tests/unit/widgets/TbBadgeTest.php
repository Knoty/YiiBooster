<?php

/**
 * Created by PhpStorm.
 * User: Мы
 * Date: 25.06.2016
 * Time: 22:35
 */
class TbBadgeTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        Yii::import('booster.widgets.TbBadge');
    }

    /** @test */
    public function Create()
    {
        new TbBadge();
    }
}
